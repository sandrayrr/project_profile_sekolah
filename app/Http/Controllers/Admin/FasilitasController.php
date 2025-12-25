<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::latest()->paginate(6);
        return view('admin.crud.fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('admin.crud.fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto'  => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $foto = $request->file('foto')->store('fasilitas', 'public');

        Fasilitas::create([
            'judul' => $request->judul,
            'foto'  => $foto,
        ]);

        return redirect()->route('admin.fasilitas.index')->with('success','Data berhasil ditambahkan');
    }

    public function edit(Fasilitas $fasilitas)
    {
        return view('admin.crud.fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, Fasilitas $fasilitas)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($fasilitas->foto);
            $fasilitas->foto = $request->file('foto')->store('fasilitas', 'public');
        }

        $fasilitas->judul = $request->judul;
        $fasilitas->save();

        return redirect()->route('admin.fasilitas.index')->with('success','Data berhasil diupdate');
    }

    public function destroy(Fasilitas $fasilitas)
    {
        Storage::disk('public')->delete($fasilitas->foto);
        $fasilitas->delete();

        return back()->with('success','Data berhasil dihapus');
    }
}
