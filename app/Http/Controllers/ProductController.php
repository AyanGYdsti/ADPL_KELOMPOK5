<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create()
    {
        return view('upload-produk');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'jenis' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'lokasi' => 'required|string',
            'gambar.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $gambarPaths = [];
        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $path = $file->store('produk', 'public');
                $gambarPaths[] = $path;
            }
        }

        // Simpan ke DB jika model tersedia (contoh)
        // Product::create([...]);

        return redirect()->route('produk.create')->with('success', 'Produk berhasil diunggah!');
    }
}
