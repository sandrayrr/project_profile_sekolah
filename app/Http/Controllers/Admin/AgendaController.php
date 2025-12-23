<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        // INI YANG KEMARIN KURANG
        $agendas = Agenda::orderBy('tanggal', 'asc')->get();

        return view('admin.crud.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('admin.crud.agenda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required',
            'deskripsi' => 'required',
            'tanggal'   => 'required|date',
            'waktu'     => 'required',
            'ikon'      => 'nullable'
        ]);

        Agenda::create($request->all());

        return redirect()
            ->route('admin.agenda.index')
            ->with('success', 'Agenda berhasil ditambahkan');
    }

    public function edit(Agenda $agenda)
    {
        return view('admin.crud.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([
            'judul'     => 'required',
            'deskripsi' => 'required',
            'tanggal'   => 'required|date',
            'waktu'     => 'required',
            'ikon'      => 'nullable'
        ]);

        $agenda->update($request->all());

        return redirect()
            ->route('admin.agenda.index')
            ->with('success', 'Agenda berhasil diperbarui');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return back()->with('success', 'Agenda berhasil dihapus');
    }
}
