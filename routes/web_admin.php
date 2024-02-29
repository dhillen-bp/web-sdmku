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
});
