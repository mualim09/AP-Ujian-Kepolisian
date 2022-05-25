<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UkomController extends Controller
{
    public function data_ukom()
    {
        return view('ukom.data-ukom');
    }
}
