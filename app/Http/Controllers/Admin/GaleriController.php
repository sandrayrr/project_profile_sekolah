<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->get();
        return view('admin.crud.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.crud.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto'  => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $foto = $request->file('foto')->store('galeri', 'public');

        Galeri::create([
            'judul' => $request->judul,
            'foto'  => $foto
        ]);

        return redirect()->route('admin.galeri.index')->with('success','Galeri berhasil ditambahkan');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.crud.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required',
            'foto'  => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('galeri', 'public');
            $galeri->foto = $foto;
        }

        $galeri->judul = $request->judul;
        $galeri->save();

        return redirect()->route('admin.galeri.index')->with('success','Galeri berhasil diupdate');
    }

    public function destroy(Galeri $galeri)
    {
        $galeri->delete();
        return redirect()->route('admin.galeri.index')->with('success','Galeri berhasil dihapus');
    }
}
