<?php

use App\Http\Controllers\Admin\AchievementCategoryController;
use App\Http\Controllers\Admin\AchievementController;
use App\Http\Controllers\Admin\ExtracurricularController as AdminExtracurricularController;
use App\Http\Controllers\Admin\ExtracurricullarController;
use App\Http\Controllers\Admin\GuruStafController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomeFeaturedController;
use App\Http\Controllers\Admin\HomeHeroController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\VisionController;
use App\Http\Controllers\ExtracurricularController;
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
        Route::get('/ekstrakurikuler', [AdminExtracurricularController::class, 'index'])->name('admin.extra.index');
        Route::get('/ekstrakurikuler/create', [AdminExtracurricularController::class, 'create'])->name('admin.extra.create');
        Route::post('/ekstrakurikuler/store', [AdminExtracurricularController::class, 'store'])->name('admin.extra.store');
        Route::get('/ekstrakurikuler/edit/{id}', [AdminExtracurricularController::class, 'edit'])->name('admin.extra.edit');
        Route::put('/ekstrakurikuler/update/{id}', [AdminExtracurricularController::class, 'update'])->name('admin.extra.update');
        Route::delete('/ekstrakurikuler/destroy/{id}', [AdminExtracurricularController::class, 'destroy'])->name('admin.extra.destroy');
    });

    Route::prefix('prestasi')->group(function () {
        Route::get('/', [AchievementController::class, 'index'])->name('admin.achievement.index');
        Route::get('/create', [AchievementController::class, 'create'])->name('admin.achievement.create');
        Route::post('/store', [AchievementController::class, 'store'])->name('admin.achievement.store');
        Route::get('/edit/{id}', [AchievementController::class, 'edit'])->name('admin.achievement.edit');
        Route::put('/update/{id}', [AchievementController::class, 'update'])->name('admin.achievement.update');
        Route::delete('/destroy/{id}', [AchievementController::class, 'destroy'])->name('admin.achievement.destroy');
        Route::get('/category/{slug}', [AchievementController::class, 'showBasedCategory'])->name('admin.achievement.slug');

        Route::get('/kategori', [AchievementCategoryController::class, 'index'])->name('admin.achievement_category.index');
        Route::get('/kategori/create', [AchievementCategoryController::class, 'create'])->name('admin.achievement_category.create');
        Route::post('/kategori/store', [AchievementCategoryController::class, 'store'])->name('admin.achievement_category.store');
        Route::get('/kategori/edit/{id}', [AchievementCategoryController::class, 'edit'])->name('admin.achievement_category.edit');
        Route::put('/kategori/update/{id}', [AchievementCategoryController::class, 'update'])->name('admin.achievement_category.update');
        Route::delete('/kategori/destroy/{id}', [AchievementCategoryController::class, 'destroy'])->name('admin.achievement_category.destroy');
    });

    Route::prefix('berita')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('admin.news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/store', [NewsController::class, 'store'])->name('admin.news.store');
        Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
        Route::put('/update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
        Route::delete('/destroy/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');


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
