<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
     public function index()
    {
        $fasilitas = Fasilitas::latest()->get();
        return view('pages.fasilitas', compact('fasilitas'));
    }
}
