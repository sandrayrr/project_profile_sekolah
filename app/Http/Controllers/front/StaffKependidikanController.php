<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\StaffKependidikan;
use Illuminate\Http\Request; // Tambahkan ini

class StaffKependidikanController extends Controller
{
    public function index(Request $request) // Tambahkan Request $request
    {
        // Mulai dengan query dasar
        $query = StaffKependidikan::query();
        
        // Terapkan filter pencarian jika ada query pencarian
        if ($request->filled('cari')) {
            $searchTerm = $request->cari;
            $query->where(function($q) use ($searchTerm) {
                $q->where('nama', 'like', '%' . $searchTerm . '%')
                  ->orWhere('jabatan', 'like', '%' . $searchTerm . '%');
            });
        }
        
        // Dapatkan hasil dengan pagination yang sudah diterapkan pencariannya
        $staff = $query->latest()->paginate(12);
        
        // Tambahkan query pencarian ke link pagination
        // Ini penting agar saat pindah halaman, kata kunci pencarian tetap ada
        $staff->appends(['cari' => $request->cari]);
        
        return view('pages.staffkependidikan', compact('staff'));
    }
}