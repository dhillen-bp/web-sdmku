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
        $data = [
            [
                "nama" => "John Doe",
                "jabatan" => "Guru Kelas",
                "gambar" => "https://drive.google.com/thumbnail?id=18hnYcm_GAkkU7qUoiTcqy6MXKsLIgYcP&sz=w1000",
                "instagram" => "john.doe"
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1a_wNim77_v8-v5uxiiuwGjV-l3-n4J7a&sz=w1000",
                "instagram" => "jane.smith"
            ]
        ];

        return view('pages.guru-staf', compact('data'));
    });
});

Route::prefix('kegiatan')->group(function () {
    Route::get('/ekstrakurikuler', function () {
        return view('pages.ekstrakurikuler');
    });

    Route::get('/pendukung', function () {
        return view('pages.pendukung');
    });
});

Route::get('/prestasi', function () {
    return view('pages.prestasi');
});

Route::prefix('berita')->group(function () {
    Route::get('/', function () {
        return view('pages.berita');
    });

    Route::get('/slug', function () {
        return view('pages.berita-detail');
    });
});

Route::get('/ppdb', function () {
    return view('pages.ppdb');
});

Route::get('/galeri', function () {
    return view('pages.gallery');
});
