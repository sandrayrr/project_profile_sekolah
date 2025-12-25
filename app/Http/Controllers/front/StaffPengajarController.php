<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\StaffPengajar;
use Illuminate\Http\Request;

class StaffPengajarController extends Controller
{
    public function index() {

        $staffPengajars = StaffPengajar::paginate(10);
        return view('pages.staffpengajar' , compact('staffPengajars'));
    }
}
