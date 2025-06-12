<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


// Halaman welcome di /
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Halaman home di /home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Halaman beranda di /beranda
Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

// Halaman login di /login
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/pesan', function () {
    return view('pesan');
});

Route::get('/upload-produk', [ProductController::class, 'create'])->name('produk.create');
Route::post('/upload-produk', [ProductController::class, 'store'])->name('produk.store');

Route::get('/upload-produk', [ProductController::class, 'create']);