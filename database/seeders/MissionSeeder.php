<?php

namespace Database\Seeders;

use App\Models\Mission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MissionSeeder extends Seeder
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
                'content' => '
                <ol class="list-decimal py-1">
                    <li>Mewujudkan/menciptakan siswa yang taat beribadah.</li>
                    <li>Membentuk sikap dan perilaku yang baik.</li>
                    <li>Mewujudkan siswa/i yang disiplin.</li>
                    <li>Menciptakan suasana Pembelajaran yang aktif, inovatif, kreatif, efektif, menyenangkan,
                        gembira dan berbobot</li>
                    <li>Mewujudkan siswa yang berprestasi.</li>
                    <li>Mewujudkan suasana kekeluargaan antar warga sekolah</li>
                    <li>Mewujudkan sekolah yang bersih</li>
                    <li>Mengembangkan bidang Ilmu Pengetahuan dan Teknologi berdasarkan minat, bakat dan potensi
                        peserta didik</li>
            </ol>',
            ]
        ];

        foreach ($data as $item) {
            Mission::create($item);
        }
    }
}
