<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index() {

        $artikel = Artikel::all();
        return view('pages.artikel' , compact('artikel'));
    }
}
