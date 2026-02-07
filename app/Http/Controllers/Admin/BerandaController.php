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
        // Aturan validasi
        $rules = [
            'judul'          => 'required|string|max:255',
            'deskripsi'      => 'nullable|string',
            'jumlah_siswa'   => 'required|integer|min:0',
            'jumlah_guru'    => 'required|integer|min:0',
            'jumlah_jurusan' => 'required|integer|min:0',
        ];

        // Pesan error kustom dalam Bahasa Indonesia
        $customMessages = [
            'required' => ':attribute harus diisi.',
            'string'   => ':attribute harus berupa teks.',
            'max'      => ':attribute tidak boleh lebih dari :max karakter.',
            'integer'  => ':attribute harus berupa angka bulat.',
            'min'      => [
                'integer' => ':attribute tidak boleh kurang dari :min.',
                'string'  => ':attribute tidak boleh kurang dari :min karakter.',
            ],
        ];

        // Nama atribut yang akan ditampilkan di pesan error
        $customAttributes = [
            'judul'          => 'Judul',
            'deskripsi'      => 'Deskripsi',
            'jumlah_siswa'   => 'Jumlah Siswa',
            'jumlah_guru'    => 'Jumlah Guru',
            'jumlah_jurusan' => 'Jumlah Jurusan',
        ];

        // Jalankan validasi dengan pesan kustom
        $request->validate($rules, $customMessages, $customAttributes);

        Beranda::create([
            'judul'          => $request->judul,
            'deskripsi'      => $request->deskripsi,
            'jumlah_siswa'   => $request->jumlah_siswa,
            'jumlah_guru'    => $request->jumlah_guru,
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
        // Aturan validasi (sama seperti store)
        $rules = [
            'judul'          => 'required|string|max:255',
            'deskripsi'      => 'nullable|string',
            'jumlah_siswa'   => 'required|integer|min:0',
            'jumlah_guru'    => 'required|integer|min:0',
            'jumlah_jurusan' => 'required|integer|min:0',
        ];

        // Pesan error kustom (sama seperti store)
        $customMessages = [
            'required' => ':attribute harus diisi.',
            'string'   => ':attribute harus berupa teks.',
            'max'      => ':attribute tidak boleh lebih dari :max karakter.',
            'integer'  => ':attribute harus berupa angka bulat.',
            'min'      => [
                'integer' => ':attribute tidak boleh kurang dari :min.',
                'string'  => ':attribute tidak boleh kurang dari :min karakter.',
            ],
        ];

        // Nama atribut (sama seperti store)
        $customAttributes = [
            'judul'          => 'Judul',
            'deskripsi'      => 'Deskripsi',
            'jumlah_siswa'   => 'Jumlah Siswa',
            'jumlah_guru'    => 'Jumlah Guru',
            'jumlah_jurusan' => 'Jumlah Jurusan',
        ];

        // Jalankan validasi dengan pesan kustom
        $request->validate($rules, $customMessages, $customAttributes);

        $beranda = Beranda::findOrFail($id);
        $beranda->update([
            'judul'          => $request->judul,
            'deskripsi'      => $request->deskripsi,
            'jumlah_siswa'   => $request->jumlah_siswa,
            'jumlah_guru'    => $request->jumlah_guru,
            'jumlah_jurusan' => $request->jumlah_jurusan,
        ]);

        return redirect()->route('admin.beranda.index')
            ->with('success', 'Data beranda berhasil diperbarui'); // Saya perbaiki agar konsisten
    }

    public function destroy($id)
    {
        Beranda::findOrFail($id)->delete();

        return redirect()->route('admin.beranda.index')
            ->with('success', 'Data beranda berhasil dihapus');
    }
}