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
        $agendas = Agenda::orderBy('tanggal', 'asc')->paginate(3);

        return view('admin.crud.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('admin.crud.agenda.create');
    }

    public function store(Request $request)
    {
        // Aturan validasi
        $rules = [
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal'   => 'required|date',
            'waktu'     => 'required',
            'ikon'      => 'nullable|string|max:50'
        ];

        // Pesan error kustom dalam Bahasa Indonesia
        $customMessages = [
            'required' => ':attribute harus diisi.',
            'string'   => ':attribute harus berupa teks.',
            'max'      => ':attribute tidak boleh lebih dari :max karakter.',
            'date'     => ':attribute bukan tanggal yang valid.',
        ];

        // Nama atribut yang akan ditampilkan di pesan error
        $customAttributes = [
            'judul'     => 'Judul Agenda',
            'deskripsi' => 'Deskripsi',
            'tanggal'   => 'Tanggal',
            'waktu'     => 'Waktu',
            'ikon'      => 'Ikon',
        ];

        // Jalankan validasi dengan pesan kustom
        $request->validate($rules, $customMessages, $customAttributes);

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
        // Aturan validasi (sama seperti store)
        $rules = [
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal'   => 'required|date',
            'waktu'     => 'required',
            'ikon'      => 'nullable|string|max:50'
        ];

        // Pesan error kustom (sama seperti store)
        $customMessages = [
            'required' => ':attribute harus diisi.',
            'string'   => ':attribute harus berupa teks.',
            'max'      => ':attribute tidak boleh lebih dari :max karakter.',
            'date'     => ':attribute bukan tanggal yang valid.',
        ];

        // Nama atribut (sama seperti store)
        $customAttributes = [
            'judul'     => 'Judul Agenda',
            'deskripsi' => 'Deskripsi',
            'tanggal'   => 'Tanggal',
            'waktu'     => 'Waktu',
            'ikon'      => 'Ikon',
        ];

        // Jalankan validasi dengan pesan kustom
        $request->validate($rules, $customMessages, $customAttributes);

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