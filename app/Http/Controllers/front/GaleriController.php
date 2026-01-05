<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        // ======================
        // QUERY GALERI
        // ======================
        $query = Galeri::query();

        // (opsional) SEARCH GALERI – belum dipakai tapi aman
        if ($request->filled('cari')) {
            $query->where('judul', 'like', '%' . $request->cari . '%');
        }

        $galeri = $query->latest()
                        ->paginate(8)
                        ->withQueryString();

        return view('pages.galeri', compact('galeri'));
    }
}
