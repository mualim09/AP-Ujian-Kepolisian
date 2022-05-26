<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UjianController;
use App\Http\Controllers\UkomController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::group(['prefix' => 'client'], function () {
    Route::get('/', [ClientController::class, 'index'])->name('client-index');
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [BackController::class, 'index'])->name('dashboard');
    Route::get('/bank-soal', [SoalController::class, 'bank_soal'])->name('bank-soal');

    // PESERTA
    Route::get('/data-peserta', [PesertaController::class, 'data_peserta'])->name('data-peserta');

    // PETUGAS
    Route::get('/data-petugas', [PetugasController::class, 'data_petugas'])->name('data-petugas');

    // UKOM
    Route::get('/data-ukom', [UkomController::class, 'data_ukom'])->name('data-ukom');

    // UKOM
    Route::get('/jadwal-ujian', [UjianController::class, 'jadwal_ujian'])->name('jadwal-ujian');
    Route::get('/hasil-ujian', [UjianController::class, 'hasil_ujian'])->name('hasil-ujian');
});
