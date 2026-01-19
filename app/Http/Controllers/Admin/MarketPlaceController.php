<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marketplace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarketPlaceController extends Controller
{
    public function index()
    {
        $marketplaces = Marketplace::latest()->paginate(10);
        return view('admin.crud.marketplace.index', compact('marketplaces'));
    }

    public function create()
    {
        return view('admin.crud.marketplace.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'harga' => 'required|numeric',
            'foto'  => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoPath = $request->file('foto')->store('marketplace', 'public');

        Marketplace::create([
            'nama'  => $request->nama,
            'harga' => $request->harga,
            'foto'  => $fotoPath,
        ]);

        return redirect()->route('admin.marketplace.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Marketplace $marketplace)
    {
        return view('admin.crud.marketplace.edit', compact('marketplace'));
    }

    public function update(Request $request, Marketplace $marketplace)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'harga' => 'required|numeric',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($marketplace->foto);
            $marketplace->foto = $request->file('foto')->store('marketplace', 'public');
        }

        $marketplace->update([
            'nama'  => $request->nama,
            'harga' => $request->harga,
            'foto'  => $marketplace->foto,
        ]);

        return redirect()->route('admin.marketplace.index')
            ->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(Marketplace $marketplace)
    {
        Storage::disk('public')->delete($marketplace->foto);
        $marketplace->delete();

        return redirect()->route('admin.marketplace.index')
            ->with('success', 'Produk berhasil dihapus');
    }
}
