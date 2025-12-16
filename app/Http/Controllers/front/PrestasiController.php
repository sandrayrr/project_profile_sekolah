<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
   public function index(){

    $prestasi = Prestasi::latest()->paginate(6); // ✅
    return view('pages.prestasi', compact('prestasi'));
}

}
