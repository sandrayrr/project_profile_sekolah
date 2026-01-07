<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\StaffPengajar;

class StaffPengajarController extends Controller
{
    public function index()
    {
        $staffPengajar = StaffPengajar::latest()->paginate(12);
        return view('pages.staff-pengajar', compact('staffPengajar'));
    }
}
