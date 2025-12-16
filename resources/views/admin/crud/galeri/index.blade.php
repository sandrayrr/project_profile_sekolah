@extends('admin.layout')

@section('title','Galeri')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">Manajemen Galeri</h4>

    <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Galeri
    </a>
</div>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th width="50">No</th>
                    <th width="120">Foto</th>
                    <th>Judul</th>
                    <th width="160" class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($galeri as $g)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>
                        <img src="{{ asset('storage/'.$g->foto) }}"
                             class="rounded border"
                             style="width: 110px; height: 70px; object-fit: cover;">
                    </td>

                    <td class="fw-semibold">
                        {{ $g->judul }}
                    </td>

                    <td class="text-center">
                        <a href="{{ route('admin.galeri.edit',$g->id) }}"
                           class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{ route('admin.galeri.destroy',$g->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Yakin hapus galeri ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-4">
                        Belum ada data galeri
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
