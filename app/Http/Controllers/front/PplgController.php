<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PplgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Contoh data PPLG, bisa dari database juga
    $pplg = [
        ['nama' => 'Drs. H. Budi Santoso', 'mata_pelajaran' => 'Pemrograman'],
        ['nama' => 'Siti Aminah, S.Pd', 'mata_pelajaran' => 'Jaringan Komputer'],
        // Tambah data lain sesuai kebutuhan
    ];

    return view('pages.pplg', compact('pplg'));
}


    /**
     * Show the form for creating a new resource.
*/}