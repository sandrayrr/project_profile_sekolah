<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StaffPengajar;
use Illuminate\Http\Request;

class StaffPengajarController extends Controller
{
    public function index()
    {
        $staff = StaffPengajar::latest()->get();
        return view('admin.crud.staff-pengajar.index', compact('staff'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('staff'), $filename);
            $data['foto'] = 'staff/' . $filename;
        }

        StaffPengajar::create($data);

        return redirect()->route('admin.staff-pengajar.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(StaffPengajar $staff_pengajar)
    {
        return view('admin.crud.staff-pengajar.edit', compact('staff_pengajar'));
    }

    public function update(Request $request, StaffPengajar $staff_pengajar)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($staff_pengajar->foto && file_exists(public_path($staff_pengajar->foto))) {
                unlink(public_path($staff_pengajar->foto));
            }

            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('staff'), $filename);
            $data['foto'] = 'staff/' . $filename;
        }

        $staff_pengajar->update($data);

        return redirect()->route('admin.staff-pengajar.index')->with('success', 'Data berhasil diupdate');
    }
}
