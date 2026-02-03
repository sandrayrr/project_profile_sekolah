<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StaffKependidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffKependidikanController extends Controller
{
    public function index()
    {
        $staff = StaffKependidikan::latest()->paginate(6);
        return view('admin.crud.staffkependidikan.index', compact('staff'));
    }

    public function create()
    {
        return view('admin.crud.staffkependidikan.create');
    }

    public function store(Request $request)
    {
        // Aturan validasi
        $rules = [
            'nama'    => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
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
            'nama'    => 'Nama Lengkap',
            'jabatan' => 'Jabatan',
            'foto'    => 'Foto Staff',
        ];

        // Jalankan validasi dengan pesan kustom
        $data = $request->validate($rules, $customMessages, $customAttributes);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('staffkependidikan', 'public');
        }

        StaffKependidikan::create($data);

        return redirect()->route('admin.staffkependidikan.index')
            ->with('success', 'Staff Kependidikan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $staff = StaffKependidikan::findOrFail($id);
        return view('admin.crud.staffkependidikan.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $staff = StaffKependidikan::findOrFail($id);

        // Aturan validasi (sama seperti store)
        $rules = [
            'nama'    => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
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
            'nama'    => 'Nama Lengkap',
            'jabatan' => 'Jabatan',
            'foto'    => 'Foto Staff',
        ];

        // Jalankan validasi dengan pesan kustom
        $data = $request->validate($rules, $customMessages, $customAttributes);

        if ($request->hasFile('foto')) {
            if ($staff->foto) {
                Storage::disk('public')->delete($staff->foto);
            }
            $data['foto'] = $request->file('foto')->store('staffkependidikan', 'public');
        }

        $staff->update($data);

        return redirect()->route('admin.staffkependidikan.index')
            ->with('success', 'Data Staff Kependidikan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $staff = StaffKependidikan::findOrFail($id);

        if ($staff->foto) {
            Storage::disk('public')->delete($staff->foto);
        }

        $staff->delete();

        return redirect()->route('admin.staffkependidikan.index')
            ->with('success', 'Data Staff Kependidikan berhasil dihapus');
    }
}