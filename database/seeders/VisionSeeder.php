<?php

namespace Database\Seeders;

use App\Models\Vision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisionSeeder extends Seeder
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
                'content' => '<p>Mewujudkan siswa-siswi yang Berakhlak Mulia, Kreatif, Cerdas, Cinta terhadap Lingkungan dan Berwawasan Global</p>',
            ]
        ];

        foreach ($data as $item) {
            Vision::create($item);
        }
    }
}
