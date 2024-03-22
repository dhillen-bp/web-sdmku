<?php

use App\Http\Controllers\Admin\GuruStafController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomeFeaturedController;
use App\Http\Controllers\Admin\HomeHeroController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\VisionController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect('/admin/home');
    });

    Route::get('/signin', function () {
        return view('admin.pages.signin');
    });

    Route::prefix('home')->group(function () {
        Route::get('/', [HomeController::class, 'index']);
        Route::put('/update', [HomeController::class, 'update'])->name('home.update');

        Route::get('/hero-banner', [HomeHeroController::class, 'index'])->name('home.hero.index');
        Route::post('/hero-banner', [HomeHeroController::class, 'store'])->name('home.hero.store');
        Route::delete('/hero-banner/{id}', [HomeHeroController::class, 'destroy'])->name('home.hero.destroy');

        Route::get('/program-unggulan', [HomeFeaturedController::class, 'index'])->name('home.featured.index');
        Route::get('/program-unggulan/create', [HomeFeaturedController::class, 'create'])->name('home.featured.create');
        Route::post('/program-unggulan/store', [HomeFeaturedController::class, 'store'])->name('home.featured.store');
        Route::get('/program-unggulan/edit/{id}', [HomeFeaturedController::class, 'edit'])->name('home.featured.edit');
        Route::put('/program-unggulan/update/{id}', [HomeFeaturedController::class, 'update'])->name('home.featured.update');
        Route::delete('/program-unggulan/destroy/{id}', [HomeFeaturedController::class, 'destroy'])->name('home.featured.destroy');
    });

    Route::prefix('profil')->group(function () {
        // Route::get('/', [VisionController::class, 'index']);

        Route::get('/visi-misi', [VisionController::class, 'index']);
        Route::put('/visi-update', [VisionController::class, 'update'])->name('admin.visi.update');

        Route::put('/misi-update', [MissionController::class, 'update'])->name('admin.misi.update');

        Route::get('/sekolah', function () {
            return view('admin.pages.profile.tentang-kami');
        });

        Route::get('/guru-staf', [GuruStafController::class, 'index'])->name('admin.guru.index');
        Route::get('/guru-staf/create', [GuruStafController::class, 'create']);
        Route::post('/guru-staf/store', [GuruStafController::class, 'store'])->name('admin.guru.store');
        Route::get('/guru-staf/edit/{id}', [GuruStafController::class, 'edit'])->name('admin.guru.edit');
        Route::put('/guru-staf/update/{id}', [GuruStafController::class, 'update'])->name('admin.guru.update');
        Route::delete('/guru-staf/destroy/{id}', [GuruStafController::class, 'destroy'])->name('admin.guru.destroy');
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
