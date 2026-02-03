<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index(Request $request)
    {
        $query = Prestasi::query();

        // 🔍 Search judul atau nama
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('judul', 'like', '%' . $request->search . '%')
                  ->orWhere('nama', 'like', '%' . $request->search . '%');
            });
        }

        // 🎯 Filter rombel (X TJKT 1)
        if ($request->filled('rombel')) {
            [$kelas, $jurusan, $subkelas] = explode(' ', $request->rombel);

            $query->where('kelas', $kelas)
                  ->where('jurusan', $jurusan)
                  ->where('subkelas', $subkelas);
        }

        // 🔃 Sorting
        $query->orderBy(
            'tanggal',
            $request->sort === 'oldest' ? 'asc' : 'desc'
        );

        $prestasi = $query->paginate(8)->withQueryString();

        return view('admin.crud.prestasi.index', compact('prestasi'));
    }

    public function create()
    {
        return view('admin.crud.prestasi.create');
    }

    public function store(Request $request)
    {
        // Aturan validasi
        $rules = [
            'judul'         => 'required|string|max:255',
            'nama'          => 'required|string|max:255', // Field nama ditambahkan
            'deskripsi'     => 'nullable|string',
            'kelas_input'   => 'required|string|max:10',
            'jurusan'       => 'required|string|max:20',
            'subkelas'      => 'required|string|max:5',
            'juara'         => 'required|string|max:50',
            'tingkat'       => 'required|string|max:50',
            'penyelenggara' => 'nullable|string|max:100',
            'tanggal'       => 'required|date',
            'foto'          => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
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
            'judul'         => 'Judul Prestasi',
            'deskripsi'     => 'Deskripsi',
            'kelas_input'   => 'Kelas',
            'jurusan'       => 'Jurusan',
            'subkelas'      => 'Sub Kelas',
            'juara'         => 'Peringkat/Juara',
            'tingkat'       => 'Tingkat Kompetisi',
            'penyelenggara' => 'Penyelenggara',
            'tanggal'       => 'Tanggal Prestasi',
            'foto'          => 'Foto Prestasi',
        ];

        // Jalankan validasi dengan pesan kustom
        $validated = $request->validate($rules, $customMessages, $customAttributes);

        $validated['kelas'] = $validated['kelas_input'];
        unset($validated['kelas_input']);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('prestasi', 'public');
        }

        Prestasi::create($validated);

        return redirect()
            ->route('admin.prestasi.index')
            ->with('success', 'Prestasi berhasil ditambahkan');
    }

    public function edit(Prestasi $prestasi)
    {
        return view('admin.crud.prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, Prestasi $prestasi)
    {
        // Aturan validasi (sama seperti store)
        $rules = [
            'judul'         => 'required|string|max:255',
            'nama'          => 'required|string|max:255', // Field nama ditambahkan
            'deskripsi'     => 'nullable|string',
            'kelas_input'   => 'required|string|max:10',
            'jurusan'       => 'required|string|max:20',
            'subkelas'      => 'required|string|max:5',
            'juara'         => 'required|string|max:50',
            'tingkat'       => 'required|string|max:50',
            'penyelenggara' => 'nullable|string|max:100',
            'tanggal'       => 'required|date',
            'foto'          => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ];

        // Pesan error kustom (sama seperti store)
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

        // Nama atribut (sama seperti store)
        $customAttributes = [
            'judul'         => 'Judul Prestasi',
            'deskripsi'     => 'Deskripsi',
            'kelas_input'   => 'Kelas',
            'jurusan'       => 'Jurusan',
            'subkelas'      => 'Sub Kelas',
            'juara'         => 'Peringkat/Juara',
            'tingkat'       => 'Tingkat Kompetisi',
            'penyelenggara' => 'Penyelenggara',
            'tanggal'       => 'Tanggal Prestasi',
            'foto'          => 'Foto Prestasi',
        ];

        // Jalankan validasi dengan pesan kustom
        $validated = $request->validate($rules, $customMessages, $customAttributes);

        $validated['kelas'] = $validated['kelas_input'];
        unset($validated['kelas_input']);

        if ($request->hasFile('foto')) {
            if ($prestasi->foto) {
                Storage::disk('public')->delete($prestasi->foto);
            }
            $validated['foto'] = $request->file('foto')->store('prestasi', 'public');
        }

        $prestasi->update($validated);

        return redirect()
            ->route('admin.prestasi.index')
            ->with('success', 'Prestasi berhasil diperbarui');
    }

    public function destroy(Prestasi $prestasi)
    {
        if ($prestasi->foto) {
            Storage::disk('public')->delete($prestasi->foto);
        }

        $prestasi->delete();

        return back()->with('success', 'Prestasi berhasil dihapus');
    }
}