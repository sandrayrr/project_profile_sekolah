@extends('admin.layout')

@section('content')
<div class="container">
    <h1>Staff Pengajar</h1>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
        Tambah Staff
    </button>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($staff as $s)
            <tr>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->jabatan }}</td>
                <td>
                    @if($s->foto)
                        <img src="{{ asset($s->foto) }}" width="80">
                    @else
                        Tidak ada
                    @endif
                </td>
                <td>
                    <button type="button" class="btn btn-warning btn-edit" data-id="{{ $s->id }}" data-nama="{{ $s->nama }}" data-jabatan="{{ $s->jabatan }}" data-foto="{{ $s->foto }}" data-bs-toggle="modal" data-bs-target="#editModal">
                        Edit
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Include Modal -->
@include('admin.crud.staff-pengajar.create')
@include('admin.crud.staff-pengajar.edit')

@endsection
