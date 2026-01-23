<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Beranda;

class BerandaController extends Controller
{
     public function index()
    {
        $beranda = Beranda::latest()->first();

        return view('pages.beranda', compact('beranda'));
    }
}
