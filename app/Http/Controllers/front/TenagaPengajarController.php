<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\TenagaPengajar;

class TenagaPengajarController extends Controller
{
    public function index()
    {
        $tenagaPengajar = TenagaPengajar::latest()->paginate(8);
        return view('pages.tenagapengajar', compact('tenagaPengajar'));
    }
}
