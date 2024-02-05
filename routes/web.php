<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SertifController;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (Request $request) {
    return view('index');
});

Route::post('/user', function (Request $request) {
    $search = $request->nama;
    $users = null;
    if (!empty($search)) {
        $users = Peserta::where('nama', 'like', "%{$search}%")->get();
    }
    return view('index2', compact('users'));
});

Route::get('print/{peserta}', [PdfController::class, 'pdf'])->name('print');

Route::get('sert', function() {
    return view('sertif');
});
Route::get('printf', function() {

    return view('print');
});

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::resource('peserta', PesertaController::class)->parameters([
        'peserta' => 'peserta'
    ]);
    Route::resource('sertif', SertifController::class);
});

require __DIR__.'/auth.php';
