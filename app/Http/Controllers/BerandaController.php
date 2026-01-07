<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\TenagaKependidikan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Sambutan kepala sekolah
        $beranda = Beranda::latest()->first();

        // Tenaga kependidikan (tanpa pagination, cocok untuk beranda)
        $tenagakependidikan = TenagaKependidikan::latest()
            ->take(8)
            ->get();

        return view('pages.beranda', compact(
            'beranda',
            'tenagakependidikan'
        ));
    }
}
