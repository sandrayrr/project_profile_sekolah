<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;

class EkstrakulikulerController extends Controller
{
      public function index()
    {
        $ekstrakulikulers = Ekstrakulikuler::latest()->paginate(6);
        return view('pages.ekstrakulikuler', compact('ekstrakulikulers'));
    }
}
