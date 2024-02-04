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

        $no = str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT);

        Peserta::create([
            'no_sertif' => $no,
            'nama' => 'Athar',
            'tema_pelatihan' => 'Laravel',
        ]);
        Peserta::create([
            'no_sertif' => $no,
            'nama' => 'Dipta',
            'tema_pelatihan' => 'JS',
        ]);
        Peserta::create([
            'no_sertif' => $no,
            'nama' => 'Bayu',
            'tema_pelatihan' => 'Tailwind',
        ]);
        Peserta::create([
            'no_sertif' => $no,
            'nama' => 'Naufal',
            'tema_pelatihan' => 'Codeigniter',
        ]);
        Peserta::create([
            'no_sertif' => $no,
            'nama' => 'Aziz',
            'tema_pelatihan' => 'PHP',
        ]);
    }
}
