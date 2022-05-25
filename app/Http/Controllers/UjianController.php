<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function jadwal_ujian()
    {
        return view('ujian.jadwal-ujian');
    }

    public function hasil_ujian()
    {
        return view('ujian.hasil-ujian');
    }
}
