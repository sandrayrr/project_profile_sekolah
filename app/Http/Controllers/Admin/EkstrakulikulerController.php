<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakulikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ekstrakulikulers = Ekstrakulikuler::latest()->paginate(8);
        return view('admin.crud.ekstrakulikuler.index', compact('ekstrakulikulers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crud.ekstrakulikuler.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'         => 'required|string|max:255',
            'kategori'      => 'required|string|max:50',
            'deskripsi'     => 'required|string',
            'pembina'       => 'required|string|max:255', // <-- DITAMBAHKAN
            'foto'          => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('ekstrakulikuler', 'public');
        }

        Ekstrakulikuler::create($validated);

        return redirect()
            ->route('admin.ekstrakulikuler.index')
            ->with('success', 'Ekstrakulikuler berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ekstrakulikuler $ekstrakulikuler)
    {
        return view('admin.crud.ekstrakulikuler.edit', compact('ekstrakulikuler'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ekstrakulikuler $ekstrakulikuler)
    {
        $validated = $request->validate([
            'judul'         => 'required|string|max:255',
            'kategori'      => 'required|string|max:50',
            'deskripsi'     => 'required|string',
            'pembina'       => 'required|string|max:255', // <-- DITAMBAHKAN
            'foto'          => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($ekstrakulikuler->foto) {
                Storage::disk('public')->delete($ekstrakulikuler->foto);
            }
            $validated['foto'] = $request->file('foto')->store('ekstrakulikuler', 'public');
        }

        $ekstrakulikuler->update($validated);

        return redirect()
            ->route('admin.ekstrakulikuler.index')
            ->with('success', 'Ekstrakulikuler berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekstrakulikuler $ekstrakulikuler)
    {
        if ($ekstrakulikuler->foto) {
            Storage::disk('public')->delete($ekstrakulikuler->foto);
        }

        $ekstrakulikuler->delete();

        return back()->with('success', 'Ekstrakulikuler berhasil dihapus');
    }
}