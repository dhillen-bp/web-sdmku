<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\HomeHero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeHeroSeeder extends Seeder
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
                'image' => 'hero_default.JPG',
                'home_id' => $homeId
            ],
        ];

        foreach ($data as $item) {
            HomeHero::create($item);
        }
    }
}
