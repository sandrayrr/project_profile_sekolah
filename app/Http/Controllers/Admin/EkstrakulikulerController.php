<?php

// app/Http/Controllers/Admin/EkstrakulikulerController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakulikulerController extends Controller
{
    public function index()
    {
        $ekstrakulikulers = Ekstrakulikuler::latest()->paginate(6);
        return view('admin.crud.ekstrakulikuler.index', compact('ekstrakulikulers'));
    }

    public function create()
    {
        return view('admin.crud.ekstrakulikuler.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'judul' => 'required',
        'kategori' => 'required',
        'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $data = $request->only('judul','kategori');

    if ($request->hasFile('foto')) {
        $data['foto'] = $request->file('foto')
            ->store('ekstrakulikuler', 'public');
    }

    // Simpan ke database
    Ekstrakulikuler::create($data);

    return redirect()->route('admin.ekstrakulikuler.index')
                     ->with('success', 'Ekstrakulikuler berhasil ditambahkan!');
}


    public function edit(Ekstrakulikuler $ekstrakulikuler)
    {
        return view('admin.crud.ekstrakulikuler.edit', compact('ekstrakulikuler'));
    }

    public function update(Request $request, Ekstrakulikuler $ekstrakulikuler)
    {
        $request->validate([
            'judul' => 'required',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($ekstrakulikuler->foto);
            $ekstrakulikuler->foto = $request->file('foto')->store('ekstrakulikuler','public');
        }

        $ekstrakulikuler->judul = $request->judul;
        $ekstrakulikuler->save();

        return redirect()->route('admin.ekstrakulikuler.index')->with('success','Data berhasil diupdate');
    }

    public function destroy(Ekstrakulikuler $ekstrakulikuler)
    {
        Storage::disk('public')->delete($ekstrakulikuler->foto);
        $ekstrakulikuler->delete();

        return back()->with('success','Data berhasil dihapus');
    }
}

