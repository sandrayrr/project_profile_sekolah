<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        // ======================
        // QUERY ARTIKEL UTAMA
        // ======================
        $query = Artikel::query();

        // 🔍 SEARCH ARTIKEL
        if ($request->filled('cari')) {
            $query->where(function ($q) use ($request) {
                $q->where('judul', 'like', '%' . $request->cari . '%');
                  
            });
        }

        $artikels = $query->latest()
                          ->paginate(6)
                          ->withQueryString();

        // ======================
        // SIDEBAR
        // ======================

        // Artikel terbaru
        $artikelTerbaru = Artikel::latest()->take(5)->get();

        // Kategori + jumlah
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
