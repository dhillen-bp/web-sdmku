<?php

namespace Database\Seeders;

use App\Models\AchievementCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementCategoriesSeeder extends Seeder
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
                'name' => 'Akademik',
            ],
            [
                'name' => 'Non Akademik',
            ],
        ];

        foreach ($data as $item) {
            AchievementCategories::create($item);
        }
    }
}
