<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\HomeFeatured;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            // HOME
            HomeSeeder::class,
            HomeHeroSeeder::class,
            HomeFeaturedSeeder::class,

            // PROFILE
            VisionSeeder::class,
            MissionSeeder::class,

            // PPDB
            PPDBSeeder::class,

            // ACTIVITY
            ExtracurricularSeeder::class,
            TeacherStaffSeeder::class,
            AchievementCategoriesSeeder::class,
            UserSeeder::class,
            NavbarSeeder::class,
        ]);
    }
}
