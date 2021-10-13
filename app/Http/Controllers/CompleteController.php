<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\SelesaiVaksin;
use Illuminate\Http\Request;
use PDF;

class CompleteController extends Controller
{

    public function getData(Daftar $daftar)
    {
        $newRecord = $daftar->replicate();
        $newRecord->setTable('selesai_vaksins');
        $newRecord->save();
    
        $daftar->delete();
    
        return redirect()->route('daftar.index')
                ->with('success', 'Data berhasil dipindahkan');
    }
    
    public function index()
    {
        $selesai = SelesaiVaksin::latest()->simplePaginate(5);
        return view('selesai.index', compact('selesai'))
                ->with('i', (request()->input('page', 1)-1)*5);
    }
    
    public function destroy(SelesaiVaksin $selesai)
    {
        $selesai->delete();

        return redirect()->route('selesai.index')
                ->with('success', 'Data berhasil dihapus');
    }
}