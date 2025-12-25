<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index() {

        $artikels = Artikel::latest()->paginate(6);
        return view('pages.artikel' , compact('artikels'));
    }
}
