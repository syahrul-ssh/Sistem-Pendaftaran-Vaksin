<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\SelesaiVaksin;
use Illuminate\Http\Request;

class CariController extends Controller
{
    public function show(Daftar $daftar)
    {
        return view('daftar.show', compact('daftar'));
    }

    public function search()
    {
        return view('daftar.search');
    }

    public function find(Request $request)
    {
        $keyword = $request->search;
        $daftars = Daftar::where('kode_unik', 'like', "%" . $keyword . "%")->first();
        $sudah = "belum";
        if ($daftars != null) {
            return view('daftar.result', compact('daftars', 'sudah'));
        } else if ($daftars == null) {
            $daftars = SelesaiVaksin::where('kode_unik', 'like', "%" . $keyword . "%")->first();
            $sudah = "sudah";
            if ($daftars != null) {
                return view('daftar.result', compact('daftars', 'sudah'));
            }
            return view('daftar.notFound');
        }
    }

    public function searchKartu()
    {
        return view('selesai.search');
    }

    public function findKartu(Request $request)
    {
        $keyword = $request->search;
        $selesai = SelesaiVaksin::where('kode_unik', 'like', "%" . $keyword . "%")->first();
        if ($selesai != null) {
            return view('selesai.result', compact('selesai'));
        }
        return view('selesai.notFound');
    }
}