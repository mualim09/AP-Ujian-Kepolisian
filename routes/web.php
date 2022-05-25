<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UkomController;

Route::get('/', function () {
    return view('welcome');
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
});
