<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::prefix('profil')->group(function () {
    Route::get('/visi-misi', function () {
        return view('pages.visi-misi');
    });

    Route::get('/sekolah', function () {
        return view('pages.tentang-kami');
    });

    Route::get('/guru-staf', function () {
        return view('pages.guru-staf');
    });
});

Route::prefix('kegiatan')->group(function () {
});

Route::get('/prestasi', function () {
    return view('pages.prestasi');
});

Route::get('/berita', function () {
    return view('pages.berita');
});

Route::get('/galeri', function () {
    return view('pages.gallery');
});
