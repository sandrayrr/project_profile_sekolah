<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\TenagaPengajar;

class TenagaPengajarController extends Controller
{
    public function index()
    {
        $tenagaPengajar = TenagaPengajar::latest()->get();
        return view('pages.tenagapengajar', compact('tenagaPengajar'));
    }
}
