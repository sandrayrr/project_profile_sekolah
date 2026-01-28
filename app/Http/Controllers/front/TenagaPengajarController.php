<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\TenagaPengajar;
use Illuminate\Http\Request;

class TenagaPengajarController extends Controller
{
    public function index(Request $request)
    {
        // Start with base query
        $query = TenagaPengajar::query();
        
        // Apply search filter if search query exists
        if ($request->filled('cari')) {
            $searchTerm = $request->cari;
            $query->where(function($q) use ($searchTerm) {
                $q->where('nama', 'like', '%' . $searchTerm . '%')
                  ->orWhere('pengampu', 'like', '%' . $searchTerm . '%');
            });
        }
        
        // Get paginated results with search applied
        $tenagaPengajar = $query->latest()->paginate(12);
        
        // Append search query to pagination links
        $tenagaPengajar->appends(['cari' => $request->cari]);
        
        return view('pages.tenagapengajar', compact('tenagaPengajar'));
    }
}