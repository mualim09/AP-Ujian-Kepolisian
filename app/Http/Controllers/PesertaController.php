<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function data_peserta()
    {
        return view('peserta.data-peserta');
    }
}
