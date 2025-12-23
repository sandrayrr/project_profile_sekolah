<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index() {

        $agenda = Agenda::latest()->paginate(6);
        return view('pages.agenda' , compact('agenda'));
    }
}
