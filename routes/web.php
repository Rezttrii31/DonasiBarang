<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DonasiController;

Route::post('/kontak/kirim', [KontakController::class, 'kirimPesan'])->name('kontak.kirim');
Route::post('/submit-donasi', [DonasiController::class, 'simpan'])->name('donasi.simpan');
Route::get('/', function () {
    return view('pages.beranda');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/layanan', function () {
    return view('pages.layanan');
});
Route::get('/FormDonasi', function () {
    return view('pages.FormDonasi');
});
Route::get('/kontak', function () {
    return view('pages.kontak');
});
Route::get('/galeri', function () {
    return view('pages.galeri');
});

