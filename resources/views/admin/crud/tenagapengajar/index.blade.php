@extends('admin.layout')

@section('title', 'Manajemen Tenaga Kependidikan')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Manajemen Tenaga Kependidikan</h4>
            <p class="text-muted mb-0">Kelola data tenaga kependidikan sekolah</p>
        </div>
        <a href="{{ route('admin.tenagapengajar.create') }}"
           class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="bi bi-plus-circle me-2"></i> Tambah Tenaga Kependidikan
        </a>
    </div>

    {{-- STATISTIK --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-0 bg-gradient-primary text-white shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="mb-0 text-white-50">Total Tenaga Kependidikan</h6>
                        <h3 class="mb-0 fw-bold">{{ $tenagaPengajar->count() }}</h3>
                    </div>
                    <i class="bi bi-people fs-1 opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- ALERT --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- FILTER --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="row g-3">

                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-end-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text"
                               id="searchInput"
                               class="form-control border-start-0"
                               placeholder="Cari nama tenaga kependidikan...">
                    </div>
                </div>

                <div class="col-md-4">
                    <select id="filterPengampu" class="form-select">
                        <option value="">Semua Pengampu</option>
                        @foreach($tenagaPengajar->pluck('pengampu')->unique() as $p)
                            <option value="{{ strtolower($p) }}">{{ $p }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <select id="sortBy" class="form-select">
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
        <div class="card-body table-responsive">

            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="text-center" width="5%">No</th>
                        <th class="text-center" width="15%">Foto</th>
                        <th>Nama</th>
                        <th class="text-center" width="20%">Pengampu</th>
                        <th class="text-center" width="15%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($tenagaPengajar as $item)
                    <tr class="staff-row"
                        data-nama="{{ strtolower($item->nama) }}"
                        data-pengampu="{{ strtolower($item->pengampu) }}"
                        data-tanggal="{{ $item->created_at }}">

                        <td class="text-center">{{ $loop->iteration }}</td>

                        {{-- FOTO --}}
                        <td class="text-center">
                            @if($item->foto)
                                <img src="{{ asset('storage/'.$item->foto) }}"
                                     class="rounded shadow-sm"
                                     style="width:60px;height:60px;object-fit:cover">
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>

                        {{-- NAMA --}}
                        <td>
                            <div class="fw-semibold">{{ $item->nama }}</div>
                            <small class="text-muted">
                                <i class="bi bi-clock me-1"></i>
                                {{ $item->created_at->diffForHumans() }}
                            </small>
                        </td>

                        {{-- PENGAMPU --}}
                        <td class="text-center">
                            <span class="badge bg-info-subtle text-info">
                                {{ $item->pengampu }}
                            </span>
                        </td>

                        {{-- AKSI --}}
                        <td class="text-center">
                            <a href="{{ route('admin.tenagapengajar.edit',$item->id) }}"
                               class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form action="{{ route('admin.tenagapengajar.destroy',$item->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">
                            <i class="bi bi-people fs-1 d-block mb-2"></i>
                            Data tenaga kependidikan belum tersedia
                        </td>
                    </tr>
                @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>

{{-- STYLE --}}
<style>
.bg-gradient-primary{
    background:linear-gradient(135deg,#667eea,#764ba2)
}
.hover-lift{transition:.3s}
.hover-lift:hover{transform:translateY(-3px)}
</style>

{{-- SCRIPT --}}
<script>
const rows = document.querySelectorAll('.staff-row');

// SEARCH
document.getElementById('searchInput').addEventListener('input', e => {
    const val = e.target.value.toLowerCase();
    rows.forEach(r => {
        r.style.display = r.dataset.nama.includes(val) ? '' : 'none';
    });
});

// FILTER
document.getElementById('filterPengampu').addEventListener('change', e => {
    const val = e.target.value;
    rows.forEach(r => {
        r.style.display = !val || r.dataset.pengampu === val ? '' : 'none';
    });
});

// SORT
document.getElementById('sortBy').addEventListener('change', e => {
    const tbody = document.querySelector('tbody');
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
@endsection
