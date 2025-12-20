@extends('admin.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h4 class="fw-bold">Manajemen Fasilitas</h4>
        <a href="{{ route('admin.fasilitas.create') }}" class="btn btn-primary">Tambah</a>
    </div>

    <table class="table table-bordered align-middle text-center">
        <thead class="table-light">
            <tr>
                <th width="5%">No</th>
                <th>Judul</th>
                <th width="20%">Foto</th>
                <th width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($fasilitas as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->judul }}</td>
                <td>
                    <img src="{{ asset('storage/'.$item->foto) }}" class="img-fluid rounded" width="120">
                </td>
                <td>
                    <a href="{{ route('admin.fasilitas.edit',$item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.fasilitas.destroy',$item->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">Data kosong</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
