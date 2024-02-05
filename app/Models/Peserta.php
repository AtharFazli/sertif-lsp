<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'sertif_id',
        'no_sertif',
        'nama',
        'tema_pelatihan'
    ];

    public function sertif() : HasMany {
        return $this->hasMany(Sertif::class);
    }

}
