<?php

// app/Http/Controllers/ArtikelController.php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest()->paginate(6);
        return view('admin.crud.artikel.index', compact('artikels'));
    }


    
    public function create()
    {
        return view('admin.crud.artikel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $foto = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('artikel', 'public');
        }

        Artikel::create([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto
        ]);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit(Artikel $artikel)
    {
        return view('admin.crud.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            if ($artikel->foto) {
                Storage::disk('public')->delete($artikel->foto);
            }
            $artikel->foto = $request->file('foto')->store('artikel', 'public');
        }

        $artikel->update($request->only('judul','tanggal','deskripsi'));

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diupdate');
    }

    public function destroy(Artikel $artikel)
    {
        if ($artikel->foto) {
            Storage::disk('public')->delete($artikel->foto);
        }

        $artikel->delete();
        return back()->with('success', 'Artikel dihapus');
    }
}

