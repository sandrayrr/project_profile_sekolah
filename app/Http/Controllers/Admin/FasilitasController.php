<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitas = Fasilitas::latest()->paginate(6);
        return view('admin.crud.fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crud.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Perbaiki: Tambahkan validasi untuk field 'status'
        $request->validate([
            'judul'  => 'required|string|max:255',
            'foto'   => 'required|image|mimes:jpg,jpeg,png|max:10000',
            'status' => 'required|string|max:255', // Field status ditambahkan
        ]);

        // Simpan foto
        $foto = $request->file('foto')->store('fasilitas', 'public');

        // Perbaiki: Tambahkan field 'status' saat membuat data baru
        Fasilitas::create([
            'judul'  => $request->judul,
            'foto'   => $foto,
            'status' => $request->status, // Field status ditambahkan
        ]);

        return redirect()
            ->route('admin.fasilitas.index')
            ->with('success', 'Data fasilitas berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fasilitas $fasilitas)
    {
        return view('admin.crud.fasilitas.edit', compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        // Perbaiki: Tambahkan validasi untuk field 'status'
        $request->validate([
            'judul'  => 'required|string|max:255',
            'foto'   => 'nullable|image|mimes:jpg,jpeg,png|max:10000',
            'status' => 'required|string|max:255', // Field status ditambahkan
        ]);

        // Perbarui foto jika ada yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama
            Storage::disk('public')->delete($fasilitas->foto);
            // Simpan foto baru
            $fasilitas->foto = $request->file('foto')->store('fasilitas', 'public');
        }

        // Perbaiki: Perbarui semua field termasuk 'status'
        $fasilitas->judul = $request->judul;
        $fasilitas->status = $request->status; // Field status diperbarui
        $fasilitas->save();

        return redirect()
            ->route('admin.fasilitas.index')
            ->with('success', 'Data fasilitas berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fasilitas $fasilitas)
    {
        // Hapus foto dari storage sebelum menghapus data
        if ($fasilitas->foto) {
            Storage::disk('public')->delete($fasilitas->foto);
        }

        $fasilitas->delete();

        return back()
            ->with('success', 'Data fasilitas berhasil dihapus');
    }
}