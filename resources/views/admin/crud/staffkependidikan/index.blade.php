@extends('admin.layout')

@section('title', 'Manajemen Staff Kependidikan')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Manajemen Staff Kependidikan</h4>
            <p class="text-muted mb-0">Kelola seluruh data staf kependidikan sekolah</p>
        </div>
        <a href="{{ route('admin.staffkependidikan.create') }}"
           class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="bi bi-plus-circle me-2"></i> Tambah Staff
        </a>
    </div>

    {{-- STAT --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 bg-gradient-primary text-white shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="mb-0 text-white-50">Total Staff Kependidikan</h6>
                        <h3 class="mb-0 fw-bold">{{ $staff->count() }}</h3>
                    </div>
                    <i class="bi bi-people fs-1 opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- ALERT --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4">
            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- FILTER --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-8">
                    <input type="text" id="searchInput"
                           class="form-control"
                           placeholder="Cari nama atau jabatan staff...">
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="sortBy">
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="name">Nama A-Z</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{-- TABLE --}}
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Foto</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody id="staffTable">
                @forelse ($staff as $item)
                    <tr class="staff-row"
                        data-nama="{{ strtolower($item->nama) }}"
                        data-jabatan="{{ strtolower($item->jabatan) }}"
                        data-tanggal="{{ $item->created_at }}">

                        <td class="text-center">{{ $loop->iteration }}</td>

                        {{-- FOTO --}}
                        <td class="text-center">
                            @if($item->foto)
                                <img src="{{ asset('storage/'.$item->foto) }}"
                                     class="rounded shadow-sm"
                                     style="width:60px;height:60px;object-fit:cover">
                            @else
                                <i class="bi bi-person-circle fs-3 text-muted"></i>
                            @endif
                        </td>

                        {{-- NAMA --}}
                        <td>
                            <strong>{{ $item->nama }}</strong>
                        </td>

                        {{-- JABATAN --}}
                        <td>{{ $item->jabatan }}</td>

                        {{-- TANGGAL --}}
                        <td class="text-center">
                            {{ $item->created_at->format('d M Y') }}
                        </td>

                        {{-- AKSI --}}
                        <td class="text-center">
                            <a href="{{ route('admin.staffkependidikan.edit',$item->id) }}"
                               class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <form action="{{ route('admin.staffkependidikan.destroy',$item->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            Data staff kependidikan belum tersedia
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- SCRIPT --}}
<script>
const rows = document.querySelectorAll('.staff-row');

// SEARCH
document.getElementById('searchInput').addEventListener('input', e => {
    const val = e.target.value.toLowerCase();
    rows.forEach(r => {
        r.style.display =
            r.dataset.nama.includes(val) ||
            r.dataset.jabatan.includes(val)
            ? '' : 'none';
    });
});

// SORT
document.getElementById('sortBy').addEventListener('change', e => {
    const tbody = document.getElementById('staffTable');
    const sorted = [...rows].sort((a,b) => {
        if(e.target.value === 'name')
            return a.dataset.nama.localeCompare(b.dataset.nama);
        if(e.target.value === 'oldest')
            return new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
        return new Date(b.dataset.tanggal) - new Date(a.dataset.tanggal);
    });
    sorted.forEach(r => tbody.appendChild(r));
});
</script>

<style>
.bg-gradient-primary {
    background: linear-gradient(135deg,#667eea,#764ba2);
}
.hover-lift:hover {
    transform: translateY(-2px);
}
</style>
@endsection
