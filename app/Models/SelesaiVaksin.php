<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelesaiVaksin extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_vaksin',
        'nik',
        'nama',
        'nomor_hp',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kode_unik',
];
}