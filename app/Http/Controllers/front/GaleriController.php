<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){

    $galeri = Galeri::latest()->paginate(6);
    return view('pages.galeri', compact('galeri'));
}
}