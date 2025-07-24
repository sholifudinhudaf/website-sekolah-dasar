<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    // Nama tabel (jika nama model tidak sesuai konvensi plural Laravel)
    protected $table = 'pengumumen';

    // Kolom yang bisa diisi
    protected $fillable = [
        'judul',
        'isi',
    ];
}
