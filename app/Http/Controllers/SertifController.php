<?php

namespace App\Http\Controllers;

use App\Models\Sertif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SertifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Sertif $sertif)
    {
        return view('dashboard.sertif.edit', compact('sertif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sertif $sertif)
    {
        $request->validate([
            'ceo'               => 'required',
            'nama_pengajar'     => 'required',
            'instansi_pengajar' => 'required',
            'tempat'            => 'required',
            'tanggal'           => 'required',
            'ttd_pimpinan'      => 'image|mimes:png|max:2048',
            'ttd_pengajar'      => 'image|mimes:png|max:2048'
        ]);

        if ($request->file('ttd_pimpinan')) {
            $namaCEO = $request->file('ttd_pimpinan')->getClientOriginalName();
            if ($sertif->ttd_pimpinan) {
                File::delete($sertif->ttd_pimpinan);
            }

            $request->file('ttd_pimpinan')->move(public_path('ttd', $namaCEO));
        }

        if ($request->file('ttd_pengajar')) {
            $namaPengajar = $request->file('ttd_pengajar')->getClientOriginalName();
            if ($sertif->ttd_pengajar) {
                File::delete($sertif->ttd_pengajar);
            }

            $request->file('ttd_pengajar')->move(public_path('ttd', $namaPengajar));
        }


        $sertif->update([
            'ceo'               => $request->ceo,
            'nama_pengajar'     => $request->nama_pengajar,
            'instansi_pengajar' => $request->instansi_pengajar,
            'tempat'            => $request->tempat,
            'tanggal'           => $request->tanggal,
            'ttd_pimpinan'      => 'ttd/' . $namaCEO,
            'ttd_pengajar'      => 'ttd/' . $namaPengajar
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}