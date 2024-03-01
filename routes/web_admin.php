<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/signin', function () {
        return view('admin.pages.signin');
    });

    Route::get('/home', function () {
        return view('admin.pages.home.home');
    });
    Route::get('/hero-banner', function () {
        return view('admin.pages.home.hero-banner');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/', function () {
            return view('admin.pages.profile.index');
        });

        Route::get('/visi-misi', function () {
            return view('admin.pages.profile.visi-misi');
        });

        Route::get('/tentang-kami', function () {
            return view('admin.pages.profile.tentang-kami');
        });
    });

    Route::prefix('akademis')->group(function () {
        Route::get('/guru-staf', function () {
            return view('admin.pages.akademis.guru-staf');
        });

        Route::get('/guru-staf/create', function () {
            return view('admin.pages.akademis.guru-staf-create');
        });

        Route::get('/prestasi', function () {
            return view('admin.pages.akademis.prestasi');
        });

        Route::get('/prestasi/create', function () {
            return view('admin.pages.akademis.prestasi-create');
        });
    });

    Route::prefix('non-akademis')->group(function () {
        Route::get('/berita', function () {
            return view('admin.pages.non-akademis.berita');
        });
        Route::get('/berita/create', function () {
            return view('admin.pages.non-akademis.berita-create');
        });

        Route::get('/fasilitas', function () {
            return view('admin.pages.non-akademis.fasilitas');
        });

        Route::get('/ekstrakurikuler', function () {
            return view('admin.pages.non-akademis.ekstrakurikuler');
        });
    });
});
