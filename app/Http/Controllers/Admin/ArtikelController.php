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
        $artikels = Artikel::latest()->paginate(4);
        return view('admin.crud.artikel.index', compact('artikels'));
    }

    public function create()
    {
        return view('admin.crud.artikel.create');
    }

    public function store(Request $request)
    {
        // Aturan validasi
        $rules = [
            'judul'     => 'required|string|max:255',
            'kategori'  => 'required|string|max:100',
            // 'tanggal'   => 'required|date', // <--- DIHAPUS Karena otomatis
            'deskripsi' => 'required|string',
            'foto'      => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ];

        // Pesan error kustom dalam Bahasa Indonesia
        $customMessages = [
            'required' => ':attribute harus diisi.',
            'string'   => ':attribute harus berupa teks.',
            'max'      => [
                'string' => ':attribute tidak boleh lebih dari :max karakter.',
                'file'   => 'Ukuran :attribute tidak boleh lebih dari :max kilobyte.',
            ],
            'date'     => ':attribute bukan tanggal yang valid.',
            'image'    => 'File yang diunggah untuk :attribute harus berupa gambar.',
            'mimes'    => ':attribute harus berformat: :values.',
        ];

        // Nama atribut yang akan ditampilkan di pesan error
        $customAttributes = [
            'judul'     => 'Judul Artikel',
            'kategori'  => 'Kategori',
            // 'tanggal'   => 'Tanggal', // <--- DIHAPUS
            'deskripsi' => 'Deskripsi',
            'foto'      => 'Foto Artikel',
        ];

        // Jalankan validasi dengan pesan kustom
        $request->validate($rules, $customMessages, $customAttributes);

        $foto = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('artikel', 'public');
        }

        Artikel::create([
            'judul'     => $request->judul,
            'kategori'  => $request->kategori,
            'tanggal'   => now(), // <--- DIUBAH: Otomatis hari ini
            'deskripsi' => $request->deskripsi,
            'foto'      => $foto
        ]);

        return redirect()
            ->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit(Artikel $artikel)
    {
        return view('admin.crud.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        // Aturan validasi
        $rules = [
            'judul'     => 'required|string|max:255',
            'kategori'  => 'required|string|max:100',
            // 'tanggal'   => 'required|date', // <--- DIHAPUS (Opsional, agar edit tetap jalan walau input tanggal dihapus)
            'deskripsi' => 'required|string',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ];

        // Pesan error kustom
        $customMessages = [
            'required' => ':attribute harus diisi.',
            'string'   => ':attribute harus berupa teks.',
            'max'      => [
                'string' => ':attribute tidak boleh lebih dari :max karakter.',
                'file'   => 'Ukuran :attribute tidak boleh lebih dari :max kilobyte.',
            ],
            'date'     => ':attribute bukan tanggal yang valid.',
            'image'    => 'File yang diunggah untuk :attribute harus berupa gambar.',
            'mimes'    => ':attribute harus berformat: :values.',
        ];

        // Nama atribut
        $customAttributes = [
            'judul'     => 'Judul Artikel',
            'kategori'  => 'Kategori',
            // 'tanggal'   => 'Tanggal', // <--- DIHAPUS
            'deskripsi' => 'Deskripsi',
            'foto'      => 'Foto Artikel',
        ];

        // Jalankan validasi dengan pesan kustom
        $request->validate($rules, $customMessages, $customAttributes);

        // Siapkan data untuk update
        $data = [
            'judul'     => $request->judul,
            'kategori'  => $request->kategori,
            // 'tanggal'   => $request->tanggal, // <--- DIHAPUS: Tanggal asli akan dipertahankan
            'deskripsi' => $request->deskripsi,
        ];

        // Proses update foto jika ada file baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($artikel->foto) {
                Storage::disk('public')->delete($artikel->foto);
            }
            // Simpan foto baru
            $data['foto'] = $request->file('foto')->store('artikel', 'public');
        }

        $artikel->update($data);

        return redirect()->route('admin.artikel.index')
                         ->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy(Artikel $artikel)
    {
        if ($artikel->foto) {
            Storage::disk('public')->delete($artikel->foto);
        }

        $artikel->delete();
        return back()->with('success', 'Artikel berhasil dihapus');
    }
}