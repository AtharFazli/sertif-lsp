<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesertas = Peserta::orderBy('id', 'desc')->get();
        return view('dashboard.peserta.index', compact('pesertas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'              => 'required',
            'tema_pelatihan'    => 'required'
        ]);

        $no = str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT);


        Peserta::create([
            'no_sertif'         => $no,
            'nama'              => $request->nama,
            'tema_pelatihan'    => $request->tema_pelatihan
        ]);

        return to_route('peserta.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peserta $peserta)
    {
        return view('dashboard.peserta.show', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peserta $peserta)
    {
        return view('dashboard.peserta.edit', compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta)
    {
        $request->validate([
            'nama'              => 'required',
            'tema_pelatihan'    => 'required'
        ]);



        $peserta->update([
            'nama'              => $request->nama,
            'tema_pelatihan'    => $request->tema_pelatihan
        ]);

        return to_route('peserta.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        $peserta->delete();

        return to_route('peserta.index');
    }
}
