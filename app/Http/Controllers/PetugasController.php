<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function data_petugas()
    {
        return view('petugas.data-petugas');
    }
}
