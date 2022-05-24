<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function bank_soal()
    {
        return view('dashboard.bank-soal');
    }
}
