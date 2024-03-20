<?php

use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\PPDBController;
use App\Models\Extracurricular;
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

    Route::get('/sekolah', function () {
        return view('pages.tentang-kami');
    });

    Route::get('/guru-staf', function () {
        $data = [
            [
                "nama" => "Yuni Wijayanti, S. Pd.,M.Pd",
                "jabatan" => "Kepala Sekolah",
                "gambar" => "https://drive.google.com/thumbnail?id=1aoNweL2la4kcFZMGdo-zKyqOaTLyH7su&sz=w1000",
            ],
            [
                "nama" => "Heni Setiyawati, S. Pd",
                "jabatan" => "Team Pengembang",
                "gambar" => "https://drive.google.com/thumbnail?id=1a_wNim77_v8-v5uxiiuwGjV-l3-n4J7a&sz=w1000",
            ],
            [
                "nama" => "Ahman Zaini, S.Pd",
                "jabatan" => "Team Pengembang",
                "gambar" => "https://drive.google.com/thumbnail?id=1zWSmanCX8_IyZUiEnJ8IaJsK1mSQdmaf&sz=w1000",
            ],
            [
                "nama" => "Putri Kasiana Dewi, S. I. Pust",
                "jabatan" => "K.A TU",
                "gambar" => "https://drive.google.com/thumbnail?id=1fGHw2QHrmQCYQrOVZ3gBAz4f5OUgRHdw&sz=w1000",
            ],
            [
                "nama" => "Enis Kusumaningsih, S. Pd",
                "jabatan" => "Bendahara I",
                "gambar" => "https://drive.google.com/thumbnail?id=13QH73_NxiQxITjiRnKQ9EdoMoAxehlnn&sz=w1000",
            ],
            [
                "nama" => "Niken Warsito",
                "jabatan" => "Bendahara II",
                "gambar" => "https://drive.google.com/thumbnail?id=1vF9rfo3z3--Sj_E4WBo1_0k0GB3ypVmn&sz=w1000",
            ],
            [
                "nama" => "Nisa Nur Afifah, S. Pd",
                "jabatan" => "Bendahara III",
                "gambar" => "https://drive.google.com/thumbnail?id=1Y2mblg14AFcby3phZMfr8gq3OHEWHl1P&sz=w1000",
            ],
            [
                "nama" => "Muhammad Luthfia Rafiudin, S. T",
                "jabatan" => "Sekertaris I",
                "gambar" => "https://drive.google.com/thumbnail?id=1GPiV2IkHxIyQyYlJy-dpJl_sDM0cd1ls&sz=w1000",
            ],
            [
                "nama" => "Sekar Bellani Syahida, S.Pd",
                "jabatan" => "Sekretaris II",
                "gambar" => "https://drive.google.com/thumbnail?id=1T294Uaj-UiJMhtTRhfQgcHujCRgYXS0e&sz=w1000",
            ],
            [
                "nama" => "Nur Yasir",
                "jabatan" => "Keamanan I",
                "gambar" => "https://drive.google.com/thumbnail?id=1WFuDHy1iDJMgtHZT_Efl86cS1_uxK715&sz=w1000",
            ],
            [
                "nama" => "Mulyono",
                "jabatan" => "Keamanan II",
                "gambar" => "https://drive.google.com/thumbnail?id=1qmxJJx7t0o_rh4PBzQNnirwWI-hbG-DG&sz=w1000",
            ],
            [
                "nama" => "Slamet",
                "jabatan" => "Cleaning Service",
                "gambar" => "https://drive.google.com/thumbnail?id=1kFeLYV5y6wpedLzow8ZoL8oZQdX_hsFh&sz=w1000",
            ],
            [
                "nama" => "Jumair",
                "jabatan" => "Cleaning Service",
                "gambar" => "https://drive.google.com/thumbnail?id=1ImjSm3sejyUviNik3091CR3QoMuBjqnL&sz=w1000",
            ],
            [
                "nama" => "Sri Utomo",
                "jabatan" => "Cleaning Service",
                "gambar" => "https://drive.google.com/thumbnail?id=1sjKn6yC-mQZfPLRdi_XDhLED5dfV6APZ&sz=w1000",
            ],
            [
                "nama" => "Eko Sugeng Riyadi",
                "jabatan" => "Cleaning Service",
                "gambar" => "https://drive.google.com/thumbnail?id=1jIwBD8Our6s6zgwgK2aChvi3R-1iSDGy&sz=w1000",
            ],
            [
                "nama" => "Darsono Agus",
                "jabatan" => "Cleaning Service",
                "gambar" => "https://drive.google.com/thumbnail?id=1lcW9lTjl1Bq5ILe0PeGaGxZ6fA8MfLLC&sz=w1000",
            ],
            [
                "nama" => "Leni Duwi Asih, S. Pd",
                "jabatan" => "Wali Kelas 1 Abu",
                "gambar" => "https://drive.google.com/thumbnail?id=1CDTprbYsV5XKbi80KkF-O_GWMmunw7eb&sz=w1000",
            ],
            [
                "nama" => "Andini Rizki Karunia Pertiwi, S. Pd",
                "jabatan" => "Wali Kelas 1 Abu",
                "gambar" => "https://drive.google.com/thumbnail?id=1KpyJhYQ4J79WpWUxChhOE4zDxlyQ6LAY&sz=w1000",
            ],
            [
                "nama" => "Kholisatul Fikroh, S.Pd",
                "jabatan" => "Wali Kelas 1 Ali",
                "gambar" => "https://drive.google.com/thumbnail?id=16ALd8leUAv4P3z18bLhgFePoOIBCI_Z6&sz=w1000",
            ],
            [
                "nama" => "Indah Nurcahyani, S. Pd",
                "jabatan" => "Wali Kelas 1 Ali",
                "gambar" => "https://drive.google.com/thumbnail?id=1a4bkdpXUMPLktyyxifaGU-QCsWAnXdMx&sz=w1000",
            ],
            [
                "nama" => "Nur Setyaningsih, S. Pd",
                "jabatan" => "Wali Kelas 1 Annas",
                "gambar" => "https://drive.google.com/thumbnail?id=1UZOAghlWznIhpusyV9MoET2cTskaZ9p7&sz=w1000",
            ],
            [
                "nama" => "Diah Nugraheni, S. Pd",
                "jabatan" => "Wali Kelas 1 Annas",
                "gambar" => "https://drive.google.com/thumbnail?id=1GyIDGh8Rg74eH0YVSMF9V0CmxN52kKYX&sz=w1000",
            ],
            [
                "nama" => "Retno Dwi Wulandari, S. Pd",
                "jabatan" => "Wali Kelas 2 Ustman",
                "gambar" => "https://drive.google.com/thumbnail?id=1pWEEbNyMoEgqFlxKKk7IG_yn5Go-MCkM&sz=w1000",
            ],
            [
                "nama" => "Alifia Maskhanah, S. Pd",
                "jabatan" => "Wali Kelas 2 Umar",
                "gambar" => "https://drive.google.com/thumbnail?id=114fYXr3OX5pchQeRchzSEQzzwsk616MH&sz=w1000",
            ],
            [
                "nama" => "Anis Nur Choiriyah, S. Pd",
                "jabatan" => "Wali Kelas 2 Annas",
                "gambar" => "https://drive.google.com/thumbnail?id=1WpP_Bnrf-EVDXBilcjpZ0qnns7Xj07hM&sz=w1000",
            ],
            [
                "nama" => "Erlita Mulia Dewi, S. Pd",
                "jabatan" => "Wali Kelas 3 Amr",
                "gambar" => "https://drive.google.com/thumbnail?id=1WlXN4eh4oCqEXN-3zRW961GnuPdcvwip&sz=w1000",
            ],
            [
                "nama" => "Idhun Wirawati, S. Pd",
                "jabatan" => "Wali Kelas 3 Ammar",
                "gambar" => "https://drive.google.com/thumbnail?id=1bgXE-nqk9kl0z8Gn_8gT8kbqziJhbbVF&sz=w1000",
            ],
            [
                "nama" => "Nikmah Aladin, S. Pd",
                "jabatan" => "Wali Kelas 3 Abbas",
                "gambar" => "https://drive.google.com/thumbnail?id=13YUonV6KVUM1qFakzNQlkTiGwcgmTe4s&sz=w1000",
            ],
            [
                "nama" => "Shalsabella Firdausia Amalia Shaliha, S. Pd",
                "jabatan" => "Wali Kelas 4 Zaid",
                "gambar" => "https://drive.google.com/thumbnail?id=1kV-eDhGX2zNbNi1pByQXXvK57nZKNSUv&sz=w1000",
            ],
            [
                "nama" => "Indah Kurniawati, S. Pd",
                "jabatan" => "Wali Kelas 4 Zubair",
                "gambar" => "https://drive.google.com/thumbnail?id=1ohIvCr0fa007wFL-d6OcUfCq6ZFiwIqJ&sz=w1000",
            ],
            [
                "nama" => "Anggelia Pradhipta Putri, S. Si",
                "jabatan" => "Wali Kelas 4 Zuhair",
                "gambar" => "https://drive.google.com/thumbnail?id=13uC9D7piCbeIhCYk7Q7QHxomd7dJMfhy&sz=w1000",
            ],
            [
                "nama" => "Indah Shafira, S.Pd",
                "jabatan" => "Wali Kelas 5 Salman",
                "gambar" => "https://drive.google.com/thumbnail?id=1gqFSZHA0OlnE_Gj5qLCEkP5BL4Tor2-E&sz=w1000",
            ],
            [
                "nama" => "Elyas Aprilianingsih, S.Pd",
                "jabatan" => "Wali kelas 5 Saad",
                "gambar" => "https://drive.google.com/thumbnail?id=1FVpmMrItOH89mV8OwofLAYJBjh5d_NLN&sz=w1000",
            ],
            [
                "nama" => "Putri Widowati, S. Pd",
                "jabatan" => "Wali Kelas 5 Said",
                "gambar" => "https://drive.google.com/thumbnail?id=1aCZhoxFuRr9wrH_fLuV4Sj4RC1OlKWf4&sz=w1000",
            ],
            [
                "nama" => "Nur Fauzah Halimah, S. Pd",
                "jabatan" => "Wali Kelas 6 Hasan",
                "gambar" => "https://drive.google.com/thumbnail?id=1iCR36_iSm4RurkLR8NhcqcmwF8mxOTN-&sz=w1000",
            ],
            [
                "nama" => "Silfia Herni Rahmawati, S.Pd",
                "jabatan" => "Wali Kelas 6 Husain",
                "gambar" => "https://drive.google.com/thumbnail?id=1gMcNdeX6eslW87cvNVeGweI5hap8yoIV&sz=w1000",
            ],
            [
                "nama" => "Putut Wedyoko, S. Pd. I",
                "jabatan" => "Guru PAI",
                "gambar" => "https://drive.google.com/thumbnail?id=1fHyU0HQlRp14l6GSH45MFBbpHeoI_t1g&sz=w1000",
            ],
            [
                "nama" => "Fajar Fauzi, S. Pd",
                "jabatan" => "Guru Olahraga",
                "gambar" => "https://drive.google.com/thumbnail?id=1KJvFX-YkpiRYsZGZhA2oy1h1dFdqCGX4&sz=w1000",
            ],
            [
                "nama" => "Wahyu Setia Galuh, S. Pd",
                "jabatan" => "Guru B.Jawa",
                "gambar" => "https://drive.google.com/thumbnail?id=1DKIEgH8WFFIappvOymULaRq40r6Y_LwK&sz=w1000",
            ],
            [
                "nama" => "Andri Susanto, S. Hum",
                "jabatan" => "Guru TIK",
                "gambar" => "https://drive.google.com/thumbnail?id=18hnYcm_GAkkU7qUoiTcqy6MXKsLIgYcP&sz=w1000",
            ],
        ];

        return view('pages.guru-staf', compact('data'));
    });
});

Route::prefix('kegiatan')->group(function () {
    Route::get('/ekstrakurikuler', [ExtracurricularController::class, 'index']);

    Route::get('/event', function () {
        return view('pages.pendukung');
    });

    Route::get('/kbm', function () {
        return view('pages.kbm');
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

Route::get('/ppdb', [PPDBController::class, 'index']);

Route::get('/galeri', function () {
    return view('pages.gallery');
});
