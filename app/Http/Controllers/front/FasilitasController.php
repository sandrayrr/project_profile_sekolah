<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index(Request $request)
    {
        $query = Fasilitas::query();

        if ($request->filled('cari')) {
            $query->where('judul', 'like', '%' . $request->cari . '%');
            // kalau field kamu bukan "nama", ganti sesuai kolom tabel
        }

        $fasilitas = $query->latest()->paginate(6);

        return view('pages.fasilitas', compact('fasilitas'));
    }
}
