<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal', 'jenis_vaksin', 'jam'
    ];

    /**
     * Get all of the daftar for the Jadwal
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function daftar()
    {
        return $this->hasMany(Daftar::class);
    }
}