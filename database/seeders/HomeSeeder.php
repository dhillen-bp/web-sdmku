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
                'motto' => 'Cerdas, Kreatif, dan Berakhlak Mulia !',
                'description' => 'SD Muhammadiyah Klaten Utara adalah tempat di mana cerdasitas, kreativitas, dan akhlak mulia menjadi pilar utama dalam setiap proses pembelajaran. Dengan fokus pada pengembangan kecerdasan akademik yang handal, kreativitas yang inovatif, dan nilai-nilai luhur yang terpatri dalam jiwa siswa, kami menghadirkan lingkungan pendidikan yang menginspirasi untuk membentuk generasi masa depan yang berintegritas dan mampu memberikan kontribusi positif bagi masyarakat.',
                'ppdb_banner' => 'https://drive.google.com/thumbnail?id=1f4jRKj0NaD9pm1eLA2OPQuNG3cA-vZUr&sz=w1000',
                'ppdb_desc' => 'Penerimaan Peserta Didik Baru telah resmi dibuka. Lihat detail informasi dan langkah-langkah pendaftarannya dengan klik tombol di bawah.',
            ]
        ];

        foreach ($data as $item) {
            Home::create($item);
        }
    }
}
