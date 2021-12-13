<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftars = Daftar::orderBy('tanggal', 'asc')->simplePaginate(5);
        return view('daftar.index', compact('daftars'))
                ->with('i', (request()->input('page', 1)-1)*5);
    }

    public function indexFiltered(Request $request)
    {
        $keyword1 = $request->filter1;
        $keyword2 = $request->filter2;
        $daftars = Daftar::where('nik', 'like', "%" . $keyword1 . "%")
                ->where('kode_unik', 'like', "%" . $keyword2 . "%")
                ->latest()
                ->simplePaginate(5);
        return view('daftar.filter', compact('daftars', 'keyword1', 'keyword2'))
                ->with('i', (request()->input('page', 1)-1)*5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $jadwals = Jadwal::all();
        // return view('daftar.create', compact('jadwals'))
        //         ->with('i', (request()->input('page', 1)-1)*10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal'=>'required',
            'jenis_vaksin'=>'required',
            'nik'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'nomor_hp'=>'required',
            'email'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'kode_unik'=>'required',
            'jam'=>'required',
        ]);

        $daftar = Daftar::create($request->all());

        return redirect()->route('pendaftaran', $daftar->kode_unik)
                ->with('success', 'Selamat anda berhasil mendaftar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Daftar $daftar)
    {
        $daftars = Daftar::latest();
        return view('daftar.show', compact('daftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftar $daftar)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftar $daftar)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftar $daftar)
    {
        $daftar->delete();

        return redirect()->route('daftar.index')
                ->with('success', 'Data berhasil dihapus');
    }
}