<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;



Route::get('/', function () {
    return view('beranda');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/galeri', function () {
    // Mengambil semua data produk
    $produks = Produk::all();
    return view('galeri', compact('produks'));
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::resource('produk', ProdukController::class);
