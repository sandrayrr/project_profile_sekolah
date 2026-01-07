<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TenagaKependidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TenagaKependidikanController extends Controller
{
    public function index()
    {
        $tenaga = TenagaKependidikan::latest()->get();
        return view('admin.crud.tenagakependidikan.index', compact('tenaga'));
    }

    public function create()
    {
        return view('admin.crud.tenagakependidikan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('tenaga', 'public');
        }

        TenagaKependidikan::create($data);

        return redirect()->route('admin.tenaga.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $tenaga = TenagaKependidikan::findOrFail($id);
        return view('admin.crud.tenagakependidikan.edit', compact('tenaga'));
    }

    public function update(Request $request, $id)
    {
        $tenaga = TenagaKependidikan::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($tenaga->foto) {
                Storage::disk('public')->delete($tenaga->foto);
            }
            $data['foto'] = $request->file('foto')->store('tenaga', 'public');
        }

        $tenaga->update($data);

        return redirect()->route('admin.tenaga.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $tenaga = TenagaKependidikan::findOrFail($id);

        if ($tenaga->foto) {
            Storage::disk('public')->delete($tenaga->foto);
        }

        $tenaga->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }
}
