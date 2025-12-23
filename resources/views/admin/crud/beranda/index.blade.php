@extends('admin.layout')

@section('title','Manajemen Beranda')

@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">Manajemen Beranda</h3>
            <p class="text-muted mb-0">
                Kelola sambutan kepala sekolah & statistik beranda
            </p>
        </div>

        <a href="{{ route('admin.beranda.create') }}"
           class="btn btn-primary d-flex align-items-center gap-2 px-4">
            <i class="bi bi-plus-circle"></i>
            Tambah Beranda
        </a>
    </div>

    {{-- STAT CARD (MATCH GALERI) --}}
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100"
                 style="background: linear-gradient(135deg,#667eea,#764ba2);">
                <div class="card-body text-white d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-uppercase small opacity-75">
                            Total Konten
                        </div>
                        <h2 class="fw-bold mb-0">
                            {{ $data->count() }}
                        </h2>
                    </div>
                    <i class="bi bi-house-door fs-1 opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- DATA TABLE --}}
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white fw-semibold">
            <i class="bi bi-list-ul me-1"></i> Daftar Konten Beranda
        </div>

        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th width="60">No</th>
                        <th>Konten Sambutan</th>
                        <th width="160" class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($data as $item)
                        <tr>
                            <td class="fw-semibold">{{ $loop->iteration }}</td>

                            <td>
                                <div class="fw-semibold text-dark mb-1">
                                    {{ $item->judul }}
                                </div>

                                <small class="text-muted d-block mb-2">
                                    {{ \Illuminate\Support\Str::limit($item->deskripsi, 120) }}
                                </small>

                                {{-- STAT --}}
                                <div class="d-flex gap-2 flex-wrap">
                                    <span class="badge bg-light text-dark border">
                                        👨‍🎓 {{ $item->jumlah_siswa ?? 0 }} Siswa
                                    </span>
                                    <span class="badge bg-light text-dark border">
                                        👩‍🏫 {{ $item->jumlah_guru ?? 0 }} Guru
                                    </span>
                                    <span class="badge bg-light text-dark border">
                                        🏫 {{ $item->jumlah_jurusan ?? 0 }} Jurusan
                                    </span>
                                </div>
                            </td>

                            <td class="text-center">
                                <a href="{{ route('admin.beranda.edit', $item->id) }}"
                                   class="btn btn-warning btn-sm me-1"
                                   title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="{{ route('admin.beranda.destroy', $item->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus konten beranda ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-5 text-muted">
                                <i class="bi bi-house-x fs-2 d-block mb-2"></i>
                                Belum ada konten beranda
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
