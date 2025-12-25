@extends('admin.layout')

@section('content')
<div class="container-fluid">

    {{-- ================= HEADER ================= --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">Manajemen Tenaga Kependidikan</h3>
            <p class="text-muted mb-0">Kelola data staf & pegawai sekolah</p>
        </div>
        <a href="{{ route('admin.tenaga.create') }}" class="btn btn-primary">
            <i class="material-icons align-middle">add</i>
            Tambah Tenaga
        </a>
    </div>

    {{-- ================= STATISTIK ================= --}}
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white shadow-sm"
                 style="background: linear-gradient(135deg,#667eea,#764ba2)">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="mb-1">Total Tenaga</p>
                            <h3 class="fw-bold">{{ $tenaga->count() }}</h3>
                        </div>
                        <i class="material-icons fs-1 opacity-75">groups</i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ================= SEARCH ================= --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0">
                    <i class="material-icons text-muted">search</i>
                </span>
                <input type="text" class="form-control border-start-0"
                       placeholder="Cari berdasarkan nama atau jabatan...">
            </div>
        </div>
    </div>

 {{-- ================= TABLE ================= --}}
<div class="card shadow-sm border-0">
    <div class="card-body table-responsive">

        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th width="80">Foto</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Tanggal</th>
                    <th width="160" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tenaga as $item)
                <tr>
                    <td>
                        <img src="{{ asset('storage/'.$item->foto) }}"
                             class="rounded"
                             width="60" height="60"
                             style="object-fit:cover">
                    </td>
                    <td class="fw-semibold">{{ $item->nama }}</td>
                    <td>
                        <span class="badge bg-primary">{{ $item->jabatan }}</span>
                    </td>
                    <td class="text-muted">
                        {{ $item->created_at->format('d M Y') }}
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.tenaga.edit',$item->id) }}"
                           class="btn btn-outline-primary btn-sm">
                            <i class="material-icons fs-6">edit</i>
                        </a>

                        <form action="{{ route('admin.tenaga.destroy',$item->id) }}"
                              method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm"
                                    onclick="return confirm('Hapus data ini?')">
                                <i class="material-icons fs-6">delete</i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">
                        Data tenaga kependidikan belum tersedia
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>


</div>
@endsection

