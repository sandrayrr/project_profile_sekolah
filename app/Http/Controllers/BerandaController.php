<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Models\Beranda;

class BerandaController extends Controller
{
    public function index()
    {
        
        // Ambil data beranda terbaru atau yang pertama
        $beranda = Beranda::latest()->first();
        return view('pages.beranda', compact('beranda'));
    }
}
