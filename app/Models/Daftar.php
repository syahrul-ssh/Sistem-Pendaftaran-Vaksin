<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;


    protected $fillable = [
            'tanggal',
            'jenis_vaksin',
            'nik',
            'nama',
            'jenis_kelamin',
            'nomor_hp',
            'email',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat',
            'kode_unik',
            'jam',
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