<?php

namespace Database\Seeders;

use App\Models\PPDB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PPDBSeeder extends Seeder
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
                'image' => 'PPDB.jpg',
                'url_ppdb' => 'https://docs.google.com/forms/u/0/d/e/1FAIpQLScrmuZ1evVNWZfyjFzaGJkCmFy8yUPBLBBtxRBPLRg214uoEA/closedform'
            ]
        ];

        foreach ($data as $item) {
            PPDB::create($item);
        }
    }
}
