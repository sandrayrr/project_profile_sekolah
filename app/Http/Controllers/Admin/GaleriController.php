<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // PERBAIKAN TYPO

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->paginate(6);
        return view('admin.crud.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.crud.galeri.create');
    }

    public function store(Request $request)
    {
        // Aturan validasi
        $rules = [
            'judul' => 'required|string|max:255',
            'foto'  => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ];

        // Pesan error kustom dalam Bahasa Indonesia
        $customMessages = [
            'required' => ':attribute harus diisi.',
            'string'   => ':attribute harus berupa teks.',
            'max'      => [
                'string' => ':attribute tidak boleh lebih dari :max karakter.',
                'file'   => 'Ukuran :attribute tidak boleh lebih dari :max kilobyte.',
            ],
            'image'    => 'File yang diunggah untuk :attribute harus berupa gambar.',
            'mimes'    => ':attribute harus berformat: :values.',
        ];

        // Nama atribut yang akan ditampilkan di pesan error
        $customAttributes = [
            'judul' => 'Judul Foto',
            'foto'  => 'Foto Galeri',
        ];

        // Jalankan validasi dengan pesan kustom
        $request->validate($rules, $customMessages, $customAttributes);

        $foto = $request->file('foto')->store('galeri', 'public');

        Galeri::create([
            'judul' => $request->judul,
            'foto'  => $foto
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil ditambahkan');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.crud.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        // Aturan validasi (sama seperti store, kecuali foto nullable)
        $rules = [
            'judul' => 'required|string|max:255',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ];

        // Pesan error kustom (sama seperti store)
        $customMessages = [
            'required' => ':attribute harus diisi.',
            'string'   => ':attribute harus berupa teks.',
            'max'      => [
                'string' => ':attribute tidak boleh lebih dari :max karakter.',
                'file'   => 'Ukuran :attribute tidak boleh lebih dari :max kilobyte.',
            ],
            'image'    => 'File yang diunggah untuk :attribute harus berupa gambar.',
            'mimes'    => ':attribute harus berformat: :values.',
        ];

        // Nama atribut (sama seperti store)
        $customAttributes = [
            'judul' => 'Judul Foto',
            'foto'  => 'Foto Galeri',
        ];

        // Jalankan validasi dengan pesan kustom
        $request->validate($rules, $customMessages, $customAttributes);

        // Siapkan data untuk update
        $data = ['judul' => $request->judul];

        // Proses update foto jika ada file baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($galeri->foto) {
                Storage::disk('public')->delete($galeri->foto);
            }
            // Simpan foto baru
            $data['foto'] = $request->file('foto')->store('galeri', 'public');
        }

        $galeri->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil diperbarui');
    }

    public function destroy(Galeri $galeri)
    {
        // Hapus foto dari storage sebelum menghapus data
        if ($galeri->foto) {
            Storage::disk('public')->delete($galeri->foto);
        }

        $galeri->delete();
        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil dihapus');
    }
}