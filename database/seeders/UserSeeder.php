<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                "name" => "SuperAdmin",
                "email" => "superadmin@mail.com",
                "password" => Hash::make('Sup3r4dm1n')
            ],
            [
                "name" => "Admin",
                "email" => "admin@mail.com",
                "password" => Hash::make('admin')
            ],
        ];

        foreach ($data as $item) {
            User::create($item);
        }
    }
}
