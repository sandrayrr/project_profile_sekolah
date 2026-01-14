<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TkrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Contoh data TKR, bisa dari database juga
        $tkr = [
            ['nama' => 'Drs. H. Budi Santoso', 'mata_pelajaran' => 'Pemrograman'],
            ['nama' => 'Siti Aminah, S.Pd', 'mata_pelajaran' => 'Jaringan Komputer'],
            // Tambah data lain sesuai kebutuhan
        ];

        return view('pages.tkr', compact('tkr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
