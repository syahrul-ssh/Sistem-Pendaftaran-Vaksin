<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data dari tabel jadwals
        $jadwals = Jadwal::latest()->simplePaginate(5);
        //mengirim data ke view
        return view('jadwal.index', compact('jadwals'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan halaman tambah
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //membuat validasi untuk isian
        $request->validate([
            'tanggal'=>'required',
            'jam'=>'required',
        ]);

        //insert request dari form ke database
        Jadwal::create($request->all());

        //riderict juka sukses
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //membuat validasi untuk isian
        $request->validate([
            'tanggal'=>'required',
            'jam'=>'required',
        ]);

        //insert request dari form ke database
        $jadwal->update($request->all());

        //riderict juka sukses
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('jadwal.index')
                ->with('success', 'Jadwal Berhasil dihapus!');
    }
}