<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('pages.admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'slug' => 'required|unique:berita',
            'picture' => 'required',
            'content' => 'required',
        ], [
            'judul.required' => 'Judul tidak boleh kosong!',
            'slug.required' => 'slug tidak boleh kosong!',
            'picture.required' => 'picture tidak boleh kosong!',
            'content.required' => 'content tidak boleh kosong!',
            'slug.unique' => 'slug sudah di gunakan!'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.berita.create')
                ->withErrors($validator)
                ->withInput();
        } else {
            if ($request->hasFile('picture')) {
                $picture = $request->file('picture')->store('public/berita');
                $berita = Berita::create([
                    'judul' => $request->judul,
                    'slug' => $request->slug,
                    'picture' => $picture,
                    'content' => $request->content,
                ]);

                if ($berita) {
                    return redirect()->route('admin.berita.index')->with('success', 'Berhasil menambahkan data berita!');
                } else {
                    return redirect()->route('admin.berita.index')->with('errors', 'Gagal menambahkan data berita!');
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('pages.admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        if ($request->hasFile('picture')) {
            //hapus gambar lama
            Storage::delete($berita->picture);

            //simpan gambar baru
            $picture = $request->file('picture')->store('public/berita');
            $update = $berita->update([
                'judul' => $request->judul,
                'slug' => $request->slug,
                'picture' => $picture,
                'content' => $request->content,
            ]);

            if ($update) {
                return redirect()->route('admin.berita.index')->with('success', 'Berhasil mengubah data berita!');
            } else {
                return redirect()->route('admin.berita.index')->with('errors', 'Gagal mengubah data berita!');
            }
        } else {
            $update = $berita->update([
                'judul' => $request->judul,
                'slug' => $request->slug,
                'content' => $request->content,
            ]);

            if ($update) {
                return redirect()->route('admin.berita.index')->with('success', 'Berhasil mengubah data berita!');
            } else {
                return redirect()->route('admin.berita.index')->with('errors', 'Gagal mengubah data berita!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        //delete gambar 
        Storage::delete($berita->picture);

        //delete data dari database
        $deleted = $berita->delete();

        if ($deleted) {
            return redirect()->route('admin.berita.index')->with('success', 'Berhasil menghapus data berita!');
        } else {
            return redirect()->route('admin.berita.index')->with('errors', 'Gagal menghapus data berita!');
        }
    }
}
