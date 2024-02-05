<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\Sertif;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function pdf(Peserta $peserta)
    {
        $peserta->load('sertif');
        return $peserta;
        return view('print', compact('peserta', 'sertif'));
        $pdf = Pdf::loadView('sertif')->setPaper('a4', 'landscape');

        // return $pdf->stream();
    }
}
