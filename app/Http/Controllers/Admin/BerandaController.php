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
            'jumlah_siswa' => 'required|integer|min:0',
            'jumlah_guru' => 'required|integer|min:0',
            'jumlah_jurusan' => 'required|integer|min:0',
        ]);

        Beranda::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'jumlah_siswa' => $request->jumlah_siswa,
            'jumlah_guru' => $request->jumlah_guru,
            'jumlah_jurusan' => $request->jumlah_jurusan,
        ]);

        return redirect()->route('admin.beranda.index')
            ->with('success', 'Data beranda berhasil ditambahkan');
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
            'jumlah_siswa' => 'required|integer|min:0',
            'jumlah_guru' => 'required|integer|min:0',
            'jumlah_jurusan' => 'required|integer|min:0',
        ]);

        $beranda = Beranda::findOrFail($id);
        $beranda->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'jumlah_siswa' => $request->jumlah_siswa,
            'jumlah_guru' => $request->jumlah_guru,
            'jumlah_jurusan' => $request->jumlah_jurusan,
        ]);

        return redirect()->route('admin.beranda.index')
            ->with('success', 'Data beranda berhasil diupdate');
    }

    public function destroy($id)
    {
        Beranda::findOrFail($id)->delete();

        return redirect()->route('admin.beranda.index')
            ->with('success', 'Data beranda berhasil dihapus');
    }
}
