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
                'image' => 'https://drive.google.com/thumbnail?id=1UFjHU3EtdJswPzfnXY5n7xGc7ULmmkJv&sz=w1000',
                'home_id' => $homeId
            ],
            [
                'image' => 'https://drive.google.com/thumbnail?id=1KN7X1s114AEcnjbGqnxWPm-vcght0IJm&sz=w1000',
                'home_id' => $homeId
            ],
            [
                'image' => 'https://drive.google.com/thumbnail?id=1FTLdbJMFcL5cSUg4khYapvOTtSV3yQq6&sz=w1000',
                'home_id' => $homeId
            ],
        ];

        foreach ($data as $item) {
            HomeHero::create($item);
        }
    }
}
