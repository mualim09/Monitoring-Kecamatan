<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan = Kecamatan::all();
        return view('pages.admin.kecamatan.index', compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.kecamatan.create');
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
            'nama_kecamatan' => 'required',
            'nama_camat' => 'required',
            'lat' => 'required',
            'longi' => 'required',
            'luas_wilayah' => 'required|integer',
            'jumlah_penduduk' => 'required|integer',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ], [
            'nama_kecamatan.required' => 'Nama kecamatan tidak boleh kosong!',
            'nama_camat.required' => 'Nama camat tidak boleh kosong!',
            'lat.required' => 'Latitude tidak boleh kosong!',
            'longi.required' => 'Longitude tidak boleh kosong!',
            'luas_wilayah.required' => 'Luas wilayah tidak boleh kosong!',
            'gambar' => 'Gambar tidak boleh kosong!',
            'jumlah_penduduk.required' => 'Jumlah penduduk tidak boleh kosong!',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong!',
            'luas_wilayah.integer' => 'Harus berupa angka!',
            'jumlah_penduduk.integer' => 'Harus berupa angka!'

        ]);

        if ($validator->fails()) {
            return redirect()->route('kecamatan.create')
                ->withErrors($validator)
                ->withInput();
        } else {
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar')->store('public/kecamatan');
                $kecamatan = Kecamatan::create([
                    'nama_kecamatan' => $request->nama_kecamatan,
                    'nama_camat' => $request->nama_camat,
                    'gambar' => $gambar,
                    'lat' => $request->lat,
                    'longi' => $request->longi,
                    'luas_wilayah' => $request->luas_wilayah,
                    'jumlah_penduduk' => $request->jumlah_penduduk,
                    'deskripsi' => $request->deskripsi,
                ]);

                if ($kecamatan) {
                    return redirect()->route('admin.kecamatan.index')->with('success', 'Berhasil menambahkan data kecamatan!');
                } else {
                    return redirect()->route('admin.kecamatan.index')->with('errors', 'Gagal menambahkan data kecamatan!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kecamatan = Kecamatan::find($id);
        return view('pages.admin.kecamatan.edit', compact('kecamatan'));
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
        $kecamatan = Kecamatan::find($id);
        if ($request->hasFile('gambar')) {
            //hapus gambar lama
            Storage::delete($kecamatan->gambar);

            //simpan gambar baru
            $gambar = $request->file('gambar')->store('public/kecamatan', 'public');
            $update = $kecamatan->update([
                'nama_kecamatan' => $request->nama_kecamatan,
                'nama_camat' => $request->nama_camat,
                'gambar' => $gambar,
                'lat' => $request->lat,
                'longi' => $request->longi,
                'luas_wilayah' => $request->luas_wilayah,
                'jumlah_penduduk' => $request->jumlah_penduduk,
                'deskripsi' => $request->deskripsi,
            ]);

            if ($update) {
                return redirect()->route('kecamatan.index')->with('success', 'Berhasil mengubah data kecamatan!');
            } else {
                return redirect()->route('kecamatan.index')->with('errors', 'Gagal mengubah data kecamatan!');
            }
        } else {
            $update = $kecamatan->update([
                'nama_kecamatan' => $request->nama_kecamatan,
                'nama_camat' => $request->nama_camat,
                'lat' => $request->lat,
                'longi' => $request->longi,
                'luas_wilayah' => $request->luas_wilayah,
                'jumlah_penduduk' => $request->jumlah_penduduk,
                'deskripsi' => $request->deskripsi,
            ]);

            if ($update) {
                return redirect()->route('admin.kecamatan.index')->with('success', 'Berhasil mengubah data kecamatan!');
            } else {
                return redirect()->route('admin.kecamatan.index')->with('errors', 'Gagal mengubah data kecamatan!');
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
        $kecamatan = Kecamatan::find($id);
        //delete gambar 
        Storage::delete($kecamatan->gambar);

        //delete data dari database
        $deleted = $kecamatan->delete();

        if ($deleted) {
            return redirect()->route('admin.kecamatan.index')->with('success', 'Berhasil menghapus data kecamatan!');
        } else {
            return redirect()->route('admin.kecamatan.index')->with('errors', 'Gagal menghapus data kecamatan!');
        }
    }
}
