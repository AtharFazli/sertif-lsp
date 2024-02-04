<?php

namespace Database\Seeders;

use App\Models\Sertif;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SertifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sertif::create([
            'ceo'               => 'John Doe',
            'nama_pengajar'     => 'Akmal',
            'instansi_pengajar' => 'SMKN 46 Jakarta',
            'tempat'            => 'Jakarta',
            'tanggal'           => '2024-02-04',
            'ttd_pimpinan'      => null,
            'ttd_pengajar'      => null,

        ]);
    }
}
