<?php

namespace App\Http\Controllers;

use App\Models\JenisVaksin;
use Illuminate\Http\Request;

class VaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vaksins = JenisVaksin::latest()->simplePaginate(5);

        return view('vaksin.index', compact('vaksins'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaksin.create');
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
            'jenis_vaksin'=>'required',
        ]);

        //insert request dari form ke database
        JenisVaksin::create($request->all());

        //riderict juka sukses
        return redirect()->route('vaksin.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisVaksin $vaksin)
    {
        return view('vaksin.edit', compact('vaksin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisVaksin $vaksin)
    {
        //membuat validasi untuk isian
        $request->validate([
            'jenis_vaksin'=>'required',
        ]);

        //insert request dari form ke database
        $vaksin->update($request->all());

        //riderict juka sukses
        return redirect()->route('vaksin.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisVaksin $vaksin)
    {
        $vaksin->delete();

        return redirect()->route('vaksin.index')
                ->with('success', 'Data Berhasil dihapus!');
    }
}
