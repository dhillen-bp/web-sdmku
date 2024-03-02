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

Route::prefix('profile')->group(function () {
    Route::get('/visi-misi', function () {
        return view('pages.visi-misi');
    });

    Route::get('/tentang-kami', function () {
        return view('pages.tentang-kami');
    });
});

Route::prefix('akademis')->group(function () {
    Route::get('/guru-staf', function () {
        return view('pages.guru-staf');
    });
    Route::get('/prestasi', function () {
        return view('pages.prestasi');
    });
});

Route::prefix('non-akademis')->group(function () {
    Route::get('/berita', function () {
        return view('pages.berita');
    });
    Route::get('/fasilitas', function () {
        return view('pages.fasilitas');
    });
    Route::get('/ekstrakurikuler', function () {
        return view('pages.ekstrakurikuler');
    });
});
