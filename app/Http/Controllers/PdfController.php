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
        $pdf = Pdf::loadView('print', compact('peserta'));

        return $pdf->stream('Sertif_codely.pdf');
    }
}
