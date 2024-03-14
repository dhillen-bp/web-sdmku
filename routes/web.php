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
    ];

    $services = [
        [
            'title' => 'Tahfiz',
            'subtitle' => 'Hafalan 30 Juz',
            'image' => 'https://drive.google.com/thumbnail?id=1_P8KrzbD7rvh2h9Fo5i4TvBCH3HN_V9h&sz=w1000'
        ],
        [
            'title' => 'Ekstrakurikuler',
            'subtitle' => '32 Ekstrakurikuler sesuai minat dan bakat siswa',
            'image' => 'https://drive.google.com/thumbnail?id=1e0gUfEuglkFQn0FDdkcXPy8TidwelTl8&sz=w1000'
        ],
        [
            'title' => 'Outing Class',
            'subtitle' => 'lorem ipsum dolor sit amet',
            'image' => 'https://drive.google.com/thumbnail?id=1zpSUHgdN4Vy_XHcDRwt5JO3DO2TfZlhp&sz=w1000'
        ]
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
        $extracurriculars = [
            [
                'title' => 'Tari',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => '',
            ],
            [
                'title' => 'Robotik',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => '',
            ],
            [
                'title' => 'Panahan',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => '',
            ],
            [
                'title' => 'Paduan Suara',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => '',
            ],
            [
                'title' => 'Mewarnai',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => '',
            ],
            [
                'title' => 'HW',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => '',
            ],
            [
                'title' => 'English Club',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => '',
            ],
            [
                'title' => 'Badminton',
                'subtitle' => 'lorem ipsum dolor sit amet',
                'image' => '',
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
