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
        $staff = StaffKependidikan::latest()->get();
        return view('admin.crud.staffkependidikan.index', compact('staff'));
    }

    public function create()
    {
        return view('admin.crud.staffkependidikan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

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

        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

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
