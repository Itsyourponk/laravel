<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function index() {
        $nama = "Irfan";
        return view('beranda', compact('nama'));        
    }
}
