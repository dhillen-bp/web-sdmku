<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.home.home');
    });

    Route::get('/signin', function () {
        return view('admin.pages.signin');
    });

    Route::get('/home', function () {
        return view('admin.pages.home.home');
    });
    Route::get('/hero-banner', function () {
        return view('admin.pages.home.hero-banner');
    });

    Route::prefix('profil')->group(function () {
        Route::get('/', function () {
            return view('admin.pages.profile.index');
        });

        Route::get('/visi-misi', function () {
            return view('admin.pages.profile.visi-misi');
        });

        Route::get('/sekolah', function () {
            return view('admin.pages.profile.tentang-kami');
        });

        Route::get('/guru-staf', function () {
            return view('admin.pages.profil.guru-staf');
        });

        Route::get('/guru-staf/create', function () {
            return view('admin.pages.profil.guru-staf-create');
        });
    });

    Route::prefix('kegiatan')->group(function () {
        Route::get('/ekstrakurikuler', function () {
            return view('admin.pages.kegiatan.ekstrakurikuler');
        });
    });

    Route::prefix('prestasi')->group(function () {
        Route::get('/', function () {
            return view('admin.pages.prestasi.index');
        });

        Route::get('/create', function () {
            return view('admin.pages.prestasi.prestasi-create');
        });
    });

    Route::prefix('berita')->group(function () {
        Route::get('/', function () {
            return view('admin.pages.berita.index');
        });
        Route::get('/create', function () {
            return view('admin.pages.berita.berita-create');
        });

        Route::get('/fasilitas', function () {
            return view('admin.pages.non-akademis.fasilitas');
        });
    });

    Route::prefix('galeri')->group(function () {
        Route::get('/', function () {
            return view('admin.pages.galeri.index');
        });
    });
});
