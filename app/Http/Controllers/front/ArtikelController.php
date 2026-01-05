<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        // Artikel utama (konten)
        $artikels = Artikel::latest()->paginate(6);

        // Sidebar: artikel terbaru
        $artikelTerbaru = Artikel::latest()->take(5)->get();

        // Sidebar: kategori + jumlah
        $kategoriArtikel = Artikel::select('kategori')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('kategori')
            ->get();

        return view('pages.artikel', compact(
            'artikels',
            'artikelTerbaru',
            'kategoriArtikel'
        ));
    }
}
