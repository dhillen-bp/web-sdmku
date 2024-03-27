<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
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
                'no_telp' => "0272326984",
                'no_wa' => "+6281326915512",
                'wa_jam_kerja' => "(Jam Kerja Senin-Jum'at Pukul 07.00 - 14.00)",
                'alamat_kampus_1' => "JL. Kopral Sudibyo, RT. 1 RW. XI, Perak Gunungan Barenglor, Gunungan, BarengLor, Kec. Klaten Utara, Kabupaten Klaten, Jawa Tengah 57438",
                'alamat_kampus_2' => "Jl. Sersan Sadikin No.4, RW.09, Tirtomulyo, Gergunung, Kec.Klaten Utara, Kabupaten Klaten, Jawa Tengah 57434",
                'social_facebook' => "https://www.facebook.com/pages/SD-Muhammadiyah-Klaten-Utara/145005322367547?mibextid=rS40aB7S9Ucbxw6v",
                'social_instagram' => "https://www.instagram.com/sdmuhklatenutara/",
                'social_tiktok' => "https://www.tiktok.com/@sdmuhklatenutara?_t=8kfWcypYH6f&_r=1",
                'social_youtube' => "https://youtube.com/@sdmuhammadiyahklatenutara7131?si=24ktqPuVwajWWfBI",
            ],
        ];

        foreach ($data as $item) {
            Footer::create($item);
        }
    }
}
