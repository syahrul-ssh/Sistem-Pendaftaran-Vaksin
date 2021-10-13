<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\SelesaiVaksin;
use Illuminate\Http\Request;
use PDF;

class CetakKartuController extends Controller
{
    public function cetak(Daftar $daftar)
    {
        $pdf = PDF::loadview('cetak.pendaftaran_pdf', ['daftar'=>$daftar]);
        return $pdf->download('cetak-pendaftaran.pdf');
    }
    public function cetakKartuVaksin(SelesaiVaksin $selesai)
    {
        $pdf = PDF::loadview('cetak.kartu_vaksin_pdf', ['selesai'=>$selesai]);
        return $pdf->download('cetak-kartu_vaksin.pdf');
    }
}