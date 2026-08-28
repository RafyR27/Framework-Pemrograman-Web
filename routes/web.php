<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Toko Makmur JAYA JAYA JAYA";
});

Route::get('/products', function () {
    return "Daftar produk";
});

Route::post('/products', function () {
    return 'Produk berhasil ditambahkan';
});
