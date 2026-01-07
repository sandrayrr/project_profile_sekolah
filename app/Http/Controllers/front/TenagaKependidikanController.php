<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\TenagaKependidikan;

class TenagaKependidikanController extends Controller
{
    public function index()
    {
        $tenagakependidikan = TenagaKependidikan::latest()->paginate(6);

        return view('pages.beranda', compact('tenagakependidikan'));
    }
}
