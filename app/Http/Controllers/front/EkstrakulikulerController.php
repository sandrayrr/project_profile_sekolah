<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
    public function index(Request $request)
{
    $query = Ekstrakulikuler::query();

    if ($request->filled('cari')) {
        $query->where('judul', 'like', '%' . $request->cari . '%');
    }

    $ekstrakulikulers = $query->latest()->paginate(8);

    return view('pages.ekstrakulikuler', compact('ekstrakulikulers'));
}

}
