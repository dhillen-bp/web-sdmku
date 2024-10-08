<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\Admin\EventLatestController;
use App\Http\Controllers\EventLatestController as ControllersEventLatestController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KBMController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\SchoolProfileController;
use App\Http\Controllers\StaffTeacherController;
use App\Models\Extracurricular;
use App\Models\SchoolProfile;
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
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index']);

Route::prefix('profil')->group(function () {
    Route::get('/visi-misi', [MissionController::class, 'index']);

    Route::get('/sekolah', [SchoolProfileController::class, 'index']);

    Route::get('/guru-staf', [StaffTeacherController::class, 'index']);
});

Route::prefix('kegiatan')->group(function () {
    Route::get('/ekstrakurikuler', [ExtracurricularController::class, 'index']);

    Route::get('/event', [ControllersEventLatestController::class, 'index']);
    Route::get('/event/{id}', [ControllersEventLatestController::class, 'show']);

    Route::get('/kbm', [KBMController::class, 'index']);
});

Route::prefix('prestasi')->group(function () {
    Route::get('/', [AchievementController::class, 'index']);
    Route::get('/kategori/{slug}', [AchievementController::class, 'showBasedCategory']);
});

Route::prefix('berita')->group(function () {
    Route::get('/', [NewsController::class, 'index']);

    Route::get('/{slug}', [NewsController::class, 'show']);
});

Route::get('/ppdb', [PPDBController::class, 'index']);

Route::get('/galeri', function () {
    return view('pages.gallery');
});
