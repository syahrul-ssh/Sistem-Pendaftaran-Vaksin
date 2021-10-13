<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
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


    /**
     * Get the jadwal that owns the Daftar
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}