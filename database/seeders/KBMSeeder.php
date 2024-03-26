<?php

namespace Database\Seeders;

use App\Models\KBM;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KBMSeeder extends Seeder
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
                'kbm_url' => 'https://drive.google.com/file/d/1A8ghSxH-M-YJOKxZ0z64dCW_2rOsyXSQ/preview',
            ],
        ];

        foreach ($data as $item) {
            KBM::create($item);
        }
    }
}
