<?php

namespace Database\Seeders;

use App\Models\Peserta;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('password')
        ]);

        $no1 = str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT);
        
        Peserta::create([
            'sertif_id' => 1,
            'no_sertif' => $no1,
            'nama' => 'Athar',
            'tema_pelatihan' => 'Laravel',
        ]);

        $no2 = str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT);
        Peserta::create([
            'sertif_id' => 1,
            'no_sertif' => $no2,
            'nama' => 'Dipta',
            'tema_pelatihan' => 'JS',
        ]);

        $no3 = str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT);
        Peserta::create([
            'sertif_id' => 1,
            'no_sertif' => $no3,
            'nama' => 'Bayu',
            'tema_pelatihan' => 'Tailwind',
        ]);

        $no4 = str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT);
        Peserta::create([
            'sertif_id' => 1,
            'no_sertif' => $no4,
            'nama' => 'Naufal',
            'tema_pelatihan' => 'Codeigniter',
        ]);

        $no5 = str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT);
        Peserta::create([
            'sertif_id' => 1,
            'no_sertif' => $no5,
            'nama' => 'Aziz',
            'tema_pelatihan' => 'PHP',
        ]);
    }
}
