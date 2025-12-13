<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beranda;

class BerandaController extends Controller
{
    public function index()
    {
        $data = Beranda::latest()->get();
        return view('admin.crud.beranda.index', compact('data'));
    }

    public function create()
    {
        return view('admin.crud.beranda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Beranda::create($request->only('judul','deskripsi'));

        return redirect()->route('admin.beranda.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $beranda = Beranda::findOrFail($id);
        return view('admin.crud.beranda.edit', compact('beranda'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $beranda = Beranda::findOrFail($id);
        $beranda->update($request->only('judul','deskripsi'));

        return redirect()->route('admin.beranda.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Beranda::findOrFail($id)->delete();

        return redirect()->route('admin.beranda.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
