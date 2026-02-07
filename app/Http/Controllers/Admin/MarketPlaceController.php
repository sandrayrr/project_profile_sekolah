<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marketplace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarketPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua produk dengan paginasi
        $marketplaces = Marketplace::latest()->paginate(12); // Diubah menjadi 12 agar lebih pas dengan grid

        // --- TAMBAHKAN INI ---
        // Ambil semua kategori yang unik dari database, urutkan secara alfabetis
        $categories = Marketplace::select('kategori')->distinct()->pluck('kategori')->sort();
        // --------------------

        // Kirim variabel $marketplaces dan $categories ke view
        return view('admin.crud.marketplace.index', compact('marketplaces', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crud.marketplace.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Aturan validasi tetap sama
        $rules = [
            'nama'     => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga'    => 'required|numeric',
            'foto'     => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ];

        // Pesan error kustom dalam Bahasa Indonesia
        $customMessages = [
            'required' => ':attribute harus diisi.',
            'string'   => ':attribute harus berupa teks.',
            'max'      => [
                'string' => ':attribute tidak boleh lebih dari :max karakter.',
                'file'   => 'Ukuran :attribute tidak boleh lebih dari :max kilobyte.',
            ],
            'numeric'  => ':attribute harus berupa angka.',
            'image'    => 'File yang diunggah untuk :attribute harus berupa gambar.',
            'mimes'    => ':attribute harus berformat: :values.',
        ];

        // Nama atribut yang akan ditampilkan di pesan error
        $customAttributes = [
            'nama'     => 'Nama Produk',
            'kategori' => 'Kategori',
            'harga'    => 'Harga',
            'foto'     => 'Foto Produk',
        ];

        // Jalankan validasi dengan pesan kustom
        $request->validate($rules, $customMessages, $customAttributes);

        $fotoPath = $request->file('foto')->store('marketplace', 'public');

        Marketplace::create([
            'nama'     => $request->nama,
            'kategori' => $request->kategori,
            'harga'    => $request->harga,
            'foto'     => $fotoPath,
        ]);

        return redirect()->route('admin.marketplace.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marketplace $marketplace)
    {
        return view('admin.crud.marketplace.edit', compact('marketplace'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marketplace $marketplace)
    {
        // Aturan validasi untuk update (foto bisa kosong)
        $rules = [
            'nama'     => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga'    => 'required|numeric',
            'foto'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];

        // Pesan error kustom (sama seperti di store)
        $customMessages = [
            'required' => ':attribute harus diisi.',
            'string'   => ':attribute harus berupa teks.',
            'max'      => [
                'string' => ':attribute tidak boleh lebih dari :max karakter.',
                'file'   => 'Ukuran :attribute tidak boleh lebih dari :max kilobyte.',
            ],
            'numeric'  => ':attribute harus berupa angka.',
            'image'    => 'File yang diunggah untuk :attribute harus berupa gambar.',
            'mimes'    => ':attribute harus berformat: :values.',
        ];

        // Nama atribut (sama seperti di store)
        $customAttributes = [
            'nama'     => 'Nama Produk',
            'kategori' => 'Kategori',
            'harga'    => 'Harga',
            'foto'     => 'Foto Produk',
        ];

        // Jalankan validasi dengan pesan kustom
        $request->validate($rules, $customMessages, $customAttributes);

        $data = [
            'nama'     => $request->nama,
            'kategori' => $request->kategori,
            'harga'    => $request->harga,
        ];

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            Storage::disk('public')->delete($marketplace->foto);
            // Simpan foto baru
            $data['foto'] = $request->file('foto')->store('marketplace', 'public');
        }

        $marketplace->update($data);

        return redirect()->route('admin.marketplace.index')
            ->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marketplace $marketplace)
    {
        // Hapus foto dari storage
        Storage::disk('public')->delete($marketplace->foto);
        // Hapus data dari database
        $marketplace->delete();

        return redirect()->route('admin.marketplace.index')
            ->with('success', 'Produk berhasil dihapus');
    }
}