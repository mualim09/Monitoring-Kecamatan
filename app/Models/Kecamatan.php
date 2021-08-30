<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';

    protected $fillable = ['nama_kecamatan', 'nama_camat', 'luas_wilayah', 'jumlah_penduduk', 'deskripsi', 'lat', 'longi', 'gambar'];
}
