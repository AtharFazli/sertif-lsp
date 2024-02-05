<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertif extends Model
{
    use HasFactory;

    protected $fillable = [
        'ceo',
        'nama_pengajar',
        'instansi_pengajar',
        'tempat',
        'tanggal',
        'ttd_pimpinan',
        'ttd_pengajar'
    ];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }
}
