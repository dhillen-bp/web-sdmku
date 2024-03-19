<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtracurricularSeeder extends Seeder
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
                'name' => 'Tari',
                'desc' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=15AhvNj9RS-agN--5Y5x_Rbn7a6eJVvme&sz=w1000',
            ],
            [
                'name' => 'Robotik',
                'desc' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=1XTmBU1nWkAfXpAY0GySL0n8NUlAxZuBW&sz=w1000',
            ],
            [
                'name' => 'Panahan',
                'desc' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=10VSNAuA5Cd8lIhmOz3cVV0el58TOyyz7&sz=w1000',
            ],
            [
                'name' => 'Paduan Suara',
                'desc' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=&sz=w1000',
            ],
            [
                'name' => 'Mewarnai',
                'desc' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=1YSeWv8DTq9fECCA0wLs5FaSS7ZNGNIAD&sz=w1000',
            ],
            [
                'name' => 'HW',
                'desc' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=1zpSUHgdN4Vy_XHcDRwt5JO3DO2TfZlhp&sz=w1000',
            ],
            [
                'name' => 'English Club',
                'desc' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=1Zp7hAniAkyP2wGRYdFiKtI5qgss60g0V&sz=w1000',
            ],
            [
                'name' => 'Badminton',
                'desc' => 'lorem ipsum dolor sit amet',
                'image' => 'https://drive.google.com/thumbnail?id=14qHCqkI79u0dGs92MWuYzZdeCVPvt4id&sz=w1000',
            ],
        ];

        foreach ($data as $item) {
            Extracurricular::create($item);
        }
    }
}
