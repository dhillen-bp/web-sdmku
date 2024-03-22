<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'school_name' => 'SD Muhammadiyah Klaten Utara',
                'school_affiliate' => 'Binaan SD Muhammadiyah Sapen Yogyakarta',
                'motto' => '<span class="text-yellow-500">Cerdas</span>, <span class="text-blue-500">Kreatif</span>, dan <span class="text-green-500">Berakhlak Mulia</span> !',
                'description' => 'SD Muhammadiyah Klaten Utara adalah tempat di mana cerdasitas, kreativitas, dan akhlak mulia menjadi pilar utama dalam setiap proses pembelajaran. Dengan fokus pada pengembangan kecerdasan akademik yang handal, kreativitas yang inovatif, dan nilai-nilai luhur yang terpatri dalam jiwa siswa, kami menghadirkan lingkungan pendidikan yang menginspirasi untuk membentuk generasi masa depan yang berintegritas dan mampu memberikan kontribusi positif bagi masyarakat.',
                'ppdb_banner' => 'ppdb_banner_default.png',
                'ppdb_desc' => 'Penerimaan Peserta Didik Baru telah resmi dibuka. Lihat detail informasi dan langkah-langkah pendaftarannya dengan klik tombol di bawah.',
            ]
        ];

        foreach ($data as $item) {
            Home::create($item);
        }
    }
}
