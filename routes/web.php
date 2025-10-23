<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rute untuk Halaman Utama (welcome.blade.php)
Route::get('/', function () {
    return view('home');
});

// Rute untuk Halaman Tentang Kami (tentang.blade.php)
Route::get('/tentang-kami', function () {
    return view('tentang');
});

// Rute BARU untuk Halaman Layanan Kami (layanan.blade.php)
Route::get('/layanan-kami', function () {
    return view('layanan');
});