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
    return redirect('/home');
});

Route::get('/home', function () {
    $slides = [
        'https://drive.google.com/thumbnail?id=1UFjHU3EtdJswPzfnXY5n7xGc7ULmmkJv&sz=w1000',
        'https://drive.google.com/thumbnail?id=1KN7X1s114AEcnjbGqnxWPm-vcght0IJm&sz=w1000',
        'https://drive.google.com/thumbnail?id=1FTLdbJMFcL5cSUg4khYapvOTtSV3yQq6&sz=w1000',
    ];

    $services = [

        [
            'title' => 'Akreditasi dan Kurikulum',
            'subtitle' => 'Sekolah Dasar dengan Akreditasi A dan mengimplementasi Kurikulum Merdeka',
            'image' => 'https://drive.google.com/thumbnail?id=18X9ltCxgbcPZMRe0NsnVqTmQQrIztVCX&sz=w1000'
        ],
        [
            'title' => 'Tahfidz',
            'subtitle' => 'Program Hafalan Juz 30 Al-Quran dengan Bimbingan Terpadu, Dibimbing oleh Ustadz/Ustadzah Terbaik Kami',
            'image' => 'https://drive.google.com/thumbnail?id=1_P8KrzbD7rvh2h9Fo5i4TvBCH3HN_V9h&sz=w1000'
        ],
        [
            'title' => 'Ekstrakurikuler',
            'subtitle' => '32 Ekstrakurikuler sesuai minat dan bakat siswa',
            'image' => 'https://drive.google.com/thumbnail?id=1e0gUfEuglkFQn0FDdkcXPy8TidwelTl8&sz=w1000'
        ],
    ];

    return view('pages.home', compact('slides', 'services'));
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
                "gambar" => "https://drive.google.com/thumbnail?id=1aoNweL2la4kcFZMGdo-zKyqOaTLyH7su&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1a_wNim77_v8-v5uxiiuwGjV-l3-n4J7a&sz=w1000",
            ],
            [
                "nama" => "John Doe",
                "jabatan" => "Guru Kelas",
                "gambar" => "https://drive.google.com/thumbnail?id=18hnYcm_GAkkU7qUoiTcqy6MXKsLIgYcP&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1DKIEgH8WFFIappvOymULaRq40r6Y_LwK&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1fGHw2QHrmQCYQrOVZ3gBAz4f5OUgRHdw&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1T294Uaj-UiJMhtTRhfQgcHujCRgYXS0e&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1iCR36_iSm4RurkLR8NhcqcmwF8mxOTN-&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1FVpmMrItOH89mV8OwofLAYJBjh5d_NLN&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1ImjSm3sejyUviNik3091CR3QoMuBjqnL&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1KpyJhYQ4J79WpWUxChhOE4zDxlyQ6LAY&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1UZOAghlWznIhpusyV9MoET2cTskaZ9p7&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1ohIvCr0fa007wFL-d6OcUfCq6ZFiwIqJ&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1kV-eDhGX2zNbNi1pByQXXvK57nZKNSUv&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1aCZhoxFuRr9wrH_fLuV4Sj4RC1OlKWf4&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1gMcNdeX6eslW87cvNVeGweI5hap8yoIV&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=13YUonV6KVUM1qFakzNQlkTiGwcgmTe4s&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1Y2mblg14AFcby3phZMfr8gq3OHEWHl1P&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1vF9rfo3z3--Sj_E4WBo1_0k0GB3ypVmn&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1gqFSZHA0OlnE_Gj5qLCEkP5BL4Tor2-E&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1GyIDGh8Rg74eH0YVSMF9V0CmxN52kKYX&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1WlXN4eh4oCqEXN-3zRW961GnuPdcvwip&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1bgXE-nqk9kl0z8Gn_8gT8kbqziJhbbVF&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1pWEEbNyMoEgqFlxKKk7IG_yn5Go-MCkM&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=13uC9D7piCbeIhCYk7Q7QHxomd7dJMfhy&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=16ALd8leUAv4P3z18bLhgFePoOIBCI_Z6&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1KJvFX-YkpiRYsZGZhA2oy1h1dFdqCGX4&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1jIwBD8Our6s6zgwgK2aChvi3R-1iSDGy&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=114fYXr3OX5pchQeRchzSEQzzwsk616MH&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1sjKn6yC-mQZfPLRdi_XDhLED5dfV6APZ&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1qmxJJx7t0o_rh4PBzQNnirwWI-hbG-DG&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1WFuDHy1iDJMgtHZT_Efl86cS1_uxK715&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1a4bkdpXUMPLktyyxifaGU-QCsWAnXdMx&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1WpP_Bnrf-EVDXBilcjpZ0qnns7Xj07hM&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1CDTprbYsV5XKbi80KkF-O_GWMmunw7eb&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1kFeLYV5y6wpedLzow8ZoL8oZQdX_hsFh&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1lcW9lTjl1Bq5ILe0PeGaGxZ6fA8MfLLC&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1fHyU0HQlRp14l6GSH45MFBbpHeoI_t1g&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1Cp71s27YIruQtzCRlQEYBSOz1vC2t3Hf&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1xpFVx7LxOLxW_S8g0UWsAf5_7ouRKhUm&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1GPiV2IkHxIyQyYlJy-dpJl_sDM0cd1ls&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1GGK4gyt21Qaibvob4YpR-UoDh4FCgvon&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=1zWSmanCX8_IyZUiEnJ8IaJsK1mSQdmaf&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "https://drive.google.com/thumbnail?id=13QH73_NxiQxITjiRnKQ9EdoMoAxehlnn&sz=w1000",
            ],
            [
                "nama" => "Jane Smith",
                "jabatan" => "Guru Bahasa",
                "gambar" => "",
            ],
        ];

        return view('pages.guru-staf', compact('data'));
    });
});

Route::prefix('kegiatan')->group(function () {
    Route::get('/ekstrakurikuler', function () {
        $extracurriculars = [
            [
                'title' => 'Tari',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=15AhvNj9RS-agN--5Y5x_Rbn7a6eJVvme&sz=w1000',
            ],
            [
                'title' => 'Robotik',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=1XTmBU1nWkAfXpAY0GySL0n8NUlAxZuBW&sz=w1000',
            ],
            [
                'title' => 'Panahan',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=10VSNAuA5Cd8lIhmOz3cVV0el58TOyyz7&sz=w1000',
            ],
            [
                'title' => 'Paduan Suara',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=&sz=w1000',
            ],
            [
                'title' => 'Mewarnai',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=1YSeWv8DTq9fECCA0wLs5FaSS7ZNGNIAD&sz=w1000',
            ],
            [
                'title' => 'HW',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=1zpSUHgdN4Vy_XHcDRwt5JO3DO2TfZlhp&sz=w1000',
            ],
            [
                'title' => 'English Club',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=1Zp7hAniAkyP2wGRYdFiKtI5qgss60g0V&sz=w1000',
            ],
            [
                'title' => 'Badminton',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=14qHCqkI79u0dGs92MWuYzZdeCVPvt4id&sz=w1000',
            ],
        ];
        return view('pages.ekstrakurikuler', compact('extracurriculars'));
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
