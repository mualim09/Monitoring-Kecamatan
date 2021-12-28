<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::paginate(2);
        return view('pages.user.home', compact('berita'));
    }

    public function berita()
    {
        $berita = Berita::paginate(9);
        return view('pages.user.berita', compact('berita'));
    }

    public function single_berita($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        $berita_all = Berita::latest()->paginate(6);
        $komentar = Komentar::where('berita_id', $berita->id)->get();

        return view('pages.user.berita-single', compact('berita', 'berita_all', 'komentar'));
    }

    public function add_comment(Request $request, $berita_id)
    {
        $rules = [
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ];
        $messages = [];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back();
        } else {
            Komentar::create([
                'berita_id' => $berita_id,
                'nama' => $request->nama,
                'email' => $request->email,
                'pesan' => $request->pesan,
            ]);

            return redirect()->back();
        }
    }
}
