<?php

use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SertifController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('sert', function() {
    return view('sertif');
});

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::resource('peserta', PesertaController::class)->parameters([
        'peserta' => 'peserta'
    ]);
    Route::resource('sertif', SertifController::class);
});

require __DIR__.'/auth.php';
