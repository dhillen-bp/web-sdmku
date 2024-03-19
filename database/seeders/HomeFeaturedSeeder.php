<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\HomeFeatured;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeFeaturedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homeId = Home::first()->id;
        $data = [
            [
                'featured_title' => 'Akreditasi dan Kurikulum',
                'featured_subtitle' => 'Sekolah Dasar dengan Akreditasi A dan mengimplementasi Kurikulum Merdeka',
                'featured_image' => 'https://drive.google.com/thumbnail?id=18X9ltCxgbcPZMRe0NsnVqTmQQrIztVCX&sz=w1000',
                'home_id' => $homeId
            ],
            [
                'featured_title' => 'Tahfidz',
                'featured_subtitle' => 'Program Hafalan Juz 30 Al-Quran dengan Bimbingan Terpadu, Dibimbing oleh Ustadz/Ustadzah Terbaik Kami',
                'featured_image' => 'https://drive.google.com/thumbnail?id=1_P8KrzbD7rvh2h9Fo5i4TvBCH3HN_V9h&sz=w1000',
                'home_id' => $homeId
            ],
            [
                'featured_title' => 'Ekstrakurikuler',
                'featured_subtitle' => '32 Ekstrakurikuler sesuai minat dan bakat siswa',
                'featured_image' => 'https://drive.google.com/thumbnail?id=1e0gUfEuglkFQn0FDdkcXPy8TidwelTl8&sz=w1000',
                'home_id' => $homeId
            ],
        ];

        foreach ($data as $item) {
            HomeFeatured::create($item);
        }
    }
}
