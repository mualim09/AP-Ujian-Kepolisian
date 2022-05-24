<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\PesertaController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [BackController::class, 'index'])->name('dashboard');
    Route::get('/bank-soal', [SoalController::class, 'bank_soal'])->name('bank-soal');
    Route::get('/data-peserta', [PesertaController::class, 'data_peserta'])->name('data-peserta');
});
