<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected $users;

    public function __construct()
    {
        $this->users = session('data_login');
    }

    public function index()
    {
        if($this->users == "admin"){
            return redirect()->route('dashboard')->with('status', 'Maaf anda tidak punya akses ke halaman ini.');
        }
        return view('client.index');
    }
}
