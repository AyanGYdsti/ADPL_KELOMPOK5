<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama', 'deskripsi', 'kategori', 'jenis', 'harga', 'lokasi', 'gambar'
    ];

    protected $casts = [
        'gambar' => 'array'
    ];
}
