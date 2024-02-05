<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdf()
    {
        $pdf = Pdf::loadView('sertif');

        $pdf->stream('Sertif_Codely.pdf');
    }
}
