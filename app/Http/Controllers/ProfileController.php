<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product; // Pastikan nama modelnya sesuai, Product atau Produk

class ProfileController extends Controller
{
    public function index()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Ambil produk milik user tersebut
        $product = Product::where('user_id', $user->id);

        // Kirim ke view
        return view('profile', compact('user', 'product'));
    }
}
