<?php

namespace Database\Seeders;

use App\Models\SchoolProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolProfileSeeder extends Seeder
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
                'logo_label' => 'Logo SD Muhammadiyah Klaten Utara',
                'logo' => 'logo_sdmku_compress.png',
                'principal_foto' => 'sambutan_kepsek.JPG',
                'principal_name' => 'Yuni Wijayanti, S. Pd.,M.Pd',
                'principal_text' => 'Anak adalah amanah dan anugrah Allah SWT yang paling berharga, mereka adalah anugrah yang berharga yang harus kita jaga dengan sempurna, memberikan pendidikan yang terbaik serta lingkungan yang nyaman untuk perkembangannya, SD Muhammadiyah Klaten Utara sekolah yang menjadikan mitra untuk memupuk, mengembangkan, menumbuhkan dan membina potensi sejak dini.',
                'campus1' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.961832654562!2d110.6088308747677!3d-7.687297754128017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a43e163796c1b%3A0xe5ed8a2be85155dc!2s1st%20Muhammadiyah%20High%20School%2C%20Klaten!5e0!3m2!1sen!2sid!4v1709127665034!5m2!1sen!2sid',
                'campus2' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.0096806842917!2d110.61081587347012!3d-7.6821066760504335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a43406c674f2d%3A0x2e4d975cd004ce9d!2s2nd%20Private%20Muhammadiyah%20Islamic%20Elementary%20School%2C%20Gergunung!5e0!3m2!1sen!2sid!4v1709128980415!5m2!1sen!2sid',
            ],
        ];

        foreach ($data as $item) {
            SchoolProfile::create($item);
        }
    }
}
