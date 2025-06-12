<?php

use Illuminate\Support\Facades\Route;

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
