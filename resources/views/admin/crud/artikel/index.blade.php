@extends('admin.layout')

@section('title','Artikel')

@section('content')

{{-- HEADER --}}
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">Manajemen Artikel</h4>

    <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Artikel
    </a>
</div>

{{-- ALERT --}}
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

{{-- TABLE --}}
<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th width="50">No</th>
                    <th width="140">Foto</th>
                    <th>Judul</th>
                    <th width="140">Tanggal</th>
                    <th>Deskripsi</th>
                    <th width="160" class="text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($artikels as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    {{-- FOTO --}}
                    <td>
                        @if($item->foto)
                            <img src="{{ asset('storage/'.$item->foto) }}"
                                 class="rounded border"
                                 style="width:120px;height:80px;object-fit:cover;">
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>

                    {{-- JUDUL --}}
                    <td class="fw-semibold">
                        {{ $item->judul }}
                    </td>

                    {{-- TANGGAL --}}
                    <td>
                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                    </td>

                    {{-- DESKRIPSI --}}
                    <td class="text-muted">
                        {{ Str::limit(strip_tags($item->deskripsi), 80) }}
                    </td>

                    {{-- AKSI --}}
                    <td class="text-center">
                        <a href="{{ route('admin.artikel.edit', $item->id) }}"
                           class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{ route('admin.artikel.destroy', $item->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
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
                    <td colspan="6" class="text-center text-muted py-4">
                        Data artikel belum tersedia
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

{{-- PAGINATION --}}
<div class="mt-3">
    {{ $artikels->links() }}
</div>

@endsection
