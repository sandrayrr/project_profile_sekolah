<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\StaffKependidikan;

class StaffKependidikanController extends Controller
{
    public function index()
    {
        $staff = StaffKependidikan::latest()->get();
        return view('pages.staffkependidikan', compact('staff'));
    }
}
