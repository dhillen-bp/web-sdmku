<?php

namespace Database\Seeders;

use App\Models\StaffTeacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherStaffSeeder extends Seeder
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
                "name" => "Yuni Wijayanti, S. Pd.,M.Pd",
                "position" => "Kepala Sekolah",
                "image" => "https://drive.google.com/thumbnail?id=1aoNweL2la4kcFZMGdo-zKyqOaTLyH7su&sz=w1000",
            ],
            [
                "name" => "Heni Setiyawati, S. Pd",
                "position" => "Team Pengembang",
                "image" => "https://drive.google.com/thumbnail?id=1a_wNim77_v8-v5uxiiuwGjV-l3-n4J7a&sz=w1000",
            ],
            [
                "name" => "Ahman Zaini, S.Pd",
                "position" => "Team Pengembang",
                "image" => "https://drive.google.com/thumbnail?id=1zWSmanCX8_IyZUiEnJ8IaJsK1mSQdmaf&sz=w1000",
            ],
            [
                "name" => "Putri Kasiana Dewi, S. I. Pust",
                "position" => "K.A TU",
                "image" => "https://drive.google.com/thumbnail?id=1fGHw2QHrmQCYQrOVZ3gBAz4f5OUgRHdw&sz=w1000",
            ],
            [
                "name" => "Enis Kusumaningsih, S. Pd",
                "position" => "Bendahara I",
                "image" => "https://drive.google.com/thumbnail?id=13QH73_NxiQxITjiRnKQ9EdoMoAxehlnn&sz=w1000",
            ],
            [
                "name" => "Niken Warsito",
                "position" => "Bendahara II",
                "image" => "https://drive.google.com/thumbnail?id=1vF9rfo3z3--Sj_E4WBo1_0k0GB3ypVmn&sz=w1000",
            ],
            [
                "name" => "Nisa Nur Afifah, S. Pd",
                "position" => "Bendahara III",
                "image" => "https://drive.google.com/thumbnail?id=1Y2mblg14AFcby3phZMfr8gq3OHEWHl1P&sz=w1000",
            ],
            [
                "name" => "Muhammad Luthfia Rafiudin, S. T",
                "position" => "Sekertaris I",
                "image" => "https://drive.google.com/thumbnail?id=1GPiV2IkHxIyQyYlJy-dpJl_sDM0cd1ls&sz=w1000",
            ],
            [
                "name" => "Sekar Bellani Syahida, S.Pd",
                "position" => "Sekretaris II",
                "image" => "https://drive.google.com/thumbnail?id=1T294Uaj-UiJMhtTRhfQgcHujCRgYXS0e&sz=w1000",
            ],
            [
                "name" => "Nur Yasir",
                "position" => "Keamanan I",
                "image" => "https://drive.google.com/thumbnail?id=1WFuDHy1iDJMgtHZT_Efl86cS1_uxK715&sz=w1000",
            ],
            [
                "name" => "Mulyono",
                "position" => "Keamanan II",
                "image" => "https://drive.google.com/thumbnail?id=1qmxJJx7t0o_rh4PBzQNnirwWI-hbG-DG&sz=w1000",
            ],
            [
                "name" => "Slamet",
                "position" => "Cleaning Service",
                "image" => "https://drive.google.com/thumbnail?id=1kFeLYV5y6wpedLzow8ZoL8oZQdX_hsFh&sz=w1000",
            ],
            [
                "name" => "Jumair",
                "position" => "Cleaning Service",
                "image" => "https://drive.google.com/thumbnail?id=1ImjSm3sejyUviNik3091CR3QoMuBjqnL&sz=w1000",
            ],
            [
                "name" => "Sri Utomo",
                "position" => "Cleaning Service",
                "image" => "https://drive.google.com/thumbnail?id=1sjKn6yC-mQZfPLRdi_XDhLED5dfV6APZ&sz=w1000",
            ],
            [
                "name" => "Eko Sugeng Riyadi",
                "position" => "Cleaning Service",
                "image" => "https://drive.google.com/thumbnail?id=1jIwBD8Our6s6zgwgK2aChvi3R-1iSDGy&sz=w1000",
            ],
            [
                "name" => "Darsono Agus",
                "position" => "Cleaning Service",
                "image" => "https://drive.google.com/thumbnail?id=1lcW9lTjl1Bq5ILe0PeGaGxZ6fA8MfLLC&sz=w1000",
            ],
            [
                "name" => "Leni Duwi Asih, S. Pd",
                "position" => "Wali Kelas 1 Abu",
                "image" => "https://drive.google.com/thumbnail?id=1CDTprbYsV5XKbi80KkF-O_GWMmunw7eb&sz=w1000",
            ],
            [
                "name" => "Andini Rizki Karunia Pertiwi, S. Pd",
                "position" => "Wali Kelas 1 Abu",
                "image" => "https://drive.google.com/thumbnail?id=1KpyJhYQ4J79WpWUxChhOE4zDxlyQ6LAY&sz=w1000",
            ],
            [
                "name" => "Kholisatul Fikroh, S.Pd",
                "position" => "Wali Kelas 1 Ali",
                "image" => "https://drive.google.com/thumbnail?id=16ALd8leUAv4P3z18bLhgFePoOIBCI_Z6&sz=w1000",
            ],
            [
                "name" => "Indah Nurcahyani, S. Pd",
                "position" => "Wali Kelas 1 Ali",
                "image" => "https://drive.google.com/thumbnail?id=1a4bkdpXUMPLktyyxifaGU-QCsWAnXdMx&sz=w1000",
            ],
            [
                "name" => "Nur Setyaningsih, S. Pd",
                "position" => "Wali Kelas 1 Annas",
                "image" => "https://drive.google.com/thumbnail?id=1UZOAghlWznIhpusyV9MoET2cTskaZ9p7&sz=w1000",
            ],
            [
                "name" => "Diah Nugraheni, S. Pd",
                "position" => "Wali Kelas 1 Annas",
                "image" => "https://drive.google.com/thumbnail?id=1GyIDGh8Rg74eH0YVSMF9V0CmxN52kKYX&sz=w1000",
            ],
            [
                "name" => "Retno Dwi Wulandari, S. Pd",
                "position" => "Wali Kelas 2 Ustman",
                "image" => "https://drive.google.com/thumbnail?id=1pWEEbNyMoEgqFlxKKk7IG_yn5Go-MCkM&sz=w1000",
            ],
            [
                "name" => "Alifia Maskhanah, S. Pd",
                "position" => "Wali Kelas 2 Umar",
                "image" => "https://drive.google.com/thumbnail?id=114fYXr3OX5pchQeRchzSEQzzwsk616MH&sz=w1000",
            ],
            [
                "name" => "Anis Nur Choiriyah, S. Pd",
                "position" => "Wali Kelas 2 Annas",
                "image" => "https://drive.google.com/thumbnail?id=1WpP_Bnrf-EVDXBilcjpZ0qnns7Xj07hM&sz=w1000",
            ],
            [
                "name" => "Erlita Mulia Dewi, S. Pd",
                "position" => "Wali Kelas 3 Amr",
                "image" => "https://drive.google.com/thumbnail?id=1WlXN4eh4oCqEXN-3zRW961GnuPdcvwip&sz=w1000",
            ],
            [
                "name" => "Idhun Wirawati, S. Pd",
                "position" => "Wali Kelas 3 Ammar",
                "image" => "https://drive.google.com/thumbnail?id=1bgXE-nqk9kl0z8Gn_8gT8kbqziJhbbVF&sz=w1000",
            ],
            [
                "name" => "Nikmah Aladin, S. Pd",
                "position" => "Wali Kelas 3 Abbas",
                "image" => "https://drive.google.com/thumbnail?id=13YUonV6KVUM1qFakzNQlkTiGwcgmTe4s&sz=w1000",
            ],
            [
                "name" => "Shalsabella Firdausia Amalia Shaliha, S. Pd",
                "position" => "Wali Kelas 4 Zaid",
                "image" => "https://drive.google.com/thumbnail?id=1kV-eDhGX2zNbNi1pByQXXvK57nZKNSUv&sz=w1000",
            ],
            [
                "name" => "Indah Kurniawati, S. Pd",
                "position" => "Wali Kelas 4 Zubair",
                "image" => "https://drive.google.com/thumbnail?id=1ohIvCr0fa007wFL-d6OcUfCq6ZFiwIqJ&sz=w1000",
            ],
            [
                "name" => "Anggelia Pradhipta Putri, S. Si",
                "position" => "Wali Kelas 4 Zuhair",
                "image" => "https://drive.google.com/thumbnail?id=13uC9D7piCbeIhCYk7Q7QHxomd7dJMfhy&sz=w1000",
            ],
            [
                "name" => "Indah Shafira, S.Pd",
                "position" => "Wali Kelas 5 Salman",
                "image" => "https://drive.google.com/thumbnail?id=1gqFSZHA0OlnE_Gj5qLCEkP5BL4Tor2-E&sz=w1000",
            ],
            [
                "name" => "Elyas Aprilianingsih, S.Pd",
                "position" => "Wali kelas 5 Saad",
                "image" => "https://drive.google.com/thumbnail?id=1FVpmMrItOH89mV8OwofLAYJBjh5d_NLN&sz=w1000",
            ],
            [
                "name" => "Putri Widowati, S. Pd",
                "position" => "Wali Kelas 5 Said",
                "image" => "https://drive.google.com/thumbnail?id=1aCZhoxFuRr9wrH_fLuV4Sj4RC1OlKWf4&sz=w1000",
            ],
            [
                "name" => "Nur Fauzah Halimah, S. Pd",
                "position" => "Wali Kelas 6 Hasan",
                "image" => "https://drive.google.com/thumbnail?id=1iCR36_iSm4RurkLR8NhcqcmwF8mxOTN-&sz=w1000",
            ],
            [
                "name" => "Silfia Herni Rahmawati, S.Pd",
                "position" => "Wali Kelas 6 Husain",
                "image" => "https://drive.google.com/thumbnail?id=1gMcNdeX6eslW87cvNVeGweI5hap8yoIV&sz=w1000",
            ],
            [
                "name" => "Putut Wedyoko, S. Pd. I",
                "position" => "Guru PAI",
                "image" => "https://drive.google.com/thumbnail?id=1fHyU0HQlRp14l6GSH45MFBbpHeoI_t1g&sz=w1000",
            ],
            [
                "name" => "Fajar Fauzi, S. Pd",
                "position" => "Guru Olahraga",
                "image" => "https://drive.google.com/thumbnail?id=1KJvFX-YkpiRYsZGZhA2oy1h1dFdqCGX4&sz=w1000",
            ],
            [
                "name" => "Wahyu Setia Galuh, S. Pd",
                "position" => "Guru B.Jawa",
                "image" => "https://drive.google.com/thumbnail?id=1DKIEgH8WFFIappvOymULaRq40r6Y_LwK&sz=w1000",
            ],
            [
                "name" => "Andri Susanto, S. Hum",
                "position" => "Guru TIK",
                "image" => "https://drive.google.com/thumbnail?id=18hnYcm_GAkkU7qUoiTcqy6MXKsLIgYcP&sz=w1000",
            ],
        ];

        foreach ($data as $item) {
            StaffTeacher::create($item);
        }
    }
}
