<?php

namespace App\Http\Controllers;

use App\Models\NilaiNasya;
use Illuminate\Http\Request;

class NilaiNasyaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilai = NilaiNasya::get();      
        return view('nilainasya.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nilainasya.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nilai = new nilai();
        $nilai->nama_guru = $request->nama_guru;
        $nilai->nama_siswa = $request->nama_siswa;
        $nilai->nama_kurikulum = $request->nama_kurikulum;
        $nilai->save();
        return redirect()->route('nilai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function cetak_nilai(){
        $nilaii = NilaiNasya::get();
        return view ('nilainasya.cetak_nilai', compact('nilaii'));
    }
}
