<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


// Halaman beranda di /beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Halaman home di /home
Route::get('/home', function () {
    return view('home');
})->name('home');


// Halaman login di /login
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/pesan', function () {
    return view('pesan');
});

Route::get('/upload-produk', [ProductController::class, 'create'])->name('produk.create');
Route::post('/upload-produk', [ProductController::class, 'store'])->name('produk.store');

Route::get('/products', [ProductController::class, 'getProducts']);

Route::get('/upload-produk', [ProductController::class, 'create']);

Route::get('/pesananku', function () {
    return view('pesananku');
});
