<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Marketplace;
use App\Models\Product;
use Illuminate\Http\Request;

class MarketPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $marketplaces = Marketplace::latest()->paginate(4);
    return view('pages.marketplace', compact('marketplaces'));
}


    /**
     * Show the form for creating a new resource.
     */

}
