<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentar';
    protected $fillable = ['berita_id', 'nama', 'email', 'pesan'];

    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }
}
