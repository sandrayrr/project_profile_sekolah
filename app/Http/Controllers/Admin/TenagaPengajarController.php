<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TenagaPengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TenagaPengajarController extends Controller
{
    // Menampilkan semua data tenaga pengajar
    public function index()
    {
        $tenagaPengajar = TenagaPengajar::latest()->paginate(8);
        return view('admin.crud.tenagapengajar.index', compact('tenagaPengajar'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('admin.crud.tenagapengajar.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        // Aturan validasi
        $rules = [
            'nama'     => 'required|string|max:255',
            'pengampu' => 'required|string|max:255',
            'status'   => 'required|string|max:255',
            'foto'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
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
            'nama'     => 'Nama Lengkap',
            'pengampu' => 'Mata Pelajaran',
            'status'   => 'Status Kepegawaian',
            'foto'     => 'Foto Guru',
        ];

        // Jalankan validasi dengan pesan kustom
        $data = $request->validate($rules, $customMessages, $customAttributes);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('tenagapengajar', 'public');
        }

        TenagaPengajar::create($data);

        return redirect()->route('admin.tenagapengajar.index')
            ->with('success', 'Tenaga pengajar berhasil ditambahkan');
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        $tenaga = TenagaPengajar::findOrFail($id);
        return view('admin.crud.tenagapengajar.edit', compact('tenaga'));
    }

    // Memperbarui data yang ada
    public function update(Request $request, $id)
    {
        $tenagaPengajar = TenagaPengajar::findOrFail($id);

        // Aturan validasi (sama seperti store)
        $rules = [
            'nama'     => 'required|string|max:255',
            'pengampu' => 'required|string|max:255',
            'status'   => 'required|string|max:255',
            'foto'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
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
            'nama'     => 'Nama Lengkap',
            'pengampu' => 'Mata Pelajaran',
            'status'   => 'Status Kepegawaian',
            'foto'     => 'Foto Guru',
        ];

        // Jalankan validasi dengan pesan kustom
        $data = $request->validate($rules, $customMessages, $customAttributes);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($tenagaPengajar->foto) {
                Storage::disk('public')->delete($tenagaPengajar->foto);
            }

            $data['foto'] = $request->file('foto')->store('tenagapengajar', 'public');
        }

        $tenagaPengajar->update($data);

        return redirect()->route('admin.tenagapengajar.index')
            ->with('success', 'Data tenaga pengajar berhasil diperbarui');
    }

    // Menghapus data
    public function destroy($id)
    {
        $tenagaPengajar = TenagaPengajar::findOrFail($id);

        if ($tenagaPengajar->foto) {
            Storage::disk('public')->delete($tenagaPengajar->foto);
        }

        $tenagaPengajar->delete();

        return redirect()->route('admin.tenagapengajar.index')
            ->with('success', 'Data tenaga pengajar berhasil dihapus');
    }
}