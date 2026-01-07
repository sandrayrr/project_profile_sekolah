@extends('admin.layout')

@section('title', 'Manajemen Ekstrakulikuler')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Manajemen Ekstrakulikuler</h4>
            <p class="text-muted mb-0">Kelola seluruh data kegiatan ekstrakulikuler sekolah</p>
        </div>
        <a href="{{ route('admin.ekstrakulikuler.create') }}"
           class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="bi bi-plus-circle me-2"></i> Tambah Baru
        </a>
    </div>

    {{-- STAT --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 bg-gradient-primary text-white shadow-sm">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="mb-0 text-white-50">Total Ekstrakulikuler</h6>
                        <h3 class="mb-0 fw-bold">{{ $ekstrakulikulers->count() }}</h3>
                    </div>
                    <i class="bi bi-trophy fs-1 opacity-75"></i>
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
                <div class="col-md-6">
                    <input type="text" id="searchInput"
                           class="form-control"
                           placeholder="Cari berdasarkan judul...">
                </div>

                <div class="col-md-3">
                    <select class="form-select" id="filterKategori">
                        <option value="">Semua Kategori</option>
                        <option value="olahraga">Olahraga</option>
                        <option value="seni">Seni</option>
                        <option value="kepramukaan">Kepramukaan</option>
                        <option value="keagamaan">Keagamaan</option>
                        <option value="akademik">Akademik</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <select class="form-select" id="sortBy">
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="title">Judul A-Z</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{-- TABLE --}}
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" id="ekstrakulikulerTable">
                <thead class="bg-light">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Foto</th>
                        <th>Judul</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @forelse ($ekstrakulikulers as $item)
                    <tr class="ekstrakulikuler-row"
                        data-judul="{{ strtolower($item->judul) }}"
                        data-kategori="{{ strtolower($item->kategori) }}"
                        data-tanggal="{{ $item->created_at }}">

                        <td class="text-center">{{ $loop->iteration }}</td>

                        {{-- FOTO --}}
                        <td class="text-center">
                            @if($item->foto)
                                <img src="{{ asset('storage/'.$item->foto) }}"
                                     class="rounded shadow-sm"
                                     style="width:90px;height:60px;object-fit:cover;cursor:pointer"
                                     onclick="showImageModal(this.src,'{{ $item->judul }}')">
                            @else
                                <i class="bi bi-image text-muted fs-3"></i>
                            @endif
                        </td>

                        {{-- JUDUL --}}
                        <td>
                            <strong>{{ $item->judul }}</strong><br>
                            <small class="text-muted">
                                {{ $item->created_at->diffForHumans() }}
                            </small>
                        </td>

                        {{-- KATEGORI --}}
                        <td class="text-center">
                            @php
                                $badge = match($item->kategori) {
                                    'Olahraga' => 'bg-success',
                                    'Seni' => 'bg-warning text-dark',
                                    'Kepramukaan' => 'bg-primary',
                                    'Keagamaan' => 'bg-info',
                                    'Akademik' => 'bg-dark',
                                    'Lainnya' => 'bg-secondary',
                                    default => 'bg-secondary'
                                };
                            @endphp
                            <span class="badge {{ $badge }}">
                                {{ $item->kategori }}
                            </span>
                        </td>

                        {{-- TANGGAL --}}
                        <td class="text-center">
                            {{ $item->created_at->format('d M Y') }}
                        </td>

                        {{-- AKSI --}}
                        <td class="text-center">
                            <a href="{{ route('admin.ekstrakulikuler.edit',$item->id) }}"
                               class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <form action="{{ route('admin.ekstrakulikuler.destroy',$item->id) }}"
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
                            Data ekstrakulikuler belum tersedia
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
const rows = document.querySelectorAll('.ekstrakulikuler-row');

// SEARCH
document.getElementById('searchInput').addEventListener('input', e => {
    const val = e.target.value.toLowerCase();
    rows.forEach(r => {
        r.style.display = r.dataset.judul.includes(val) ? '' : 'none';
    });
});

// FILTER
document.getElementById('filterKategori').addEventListener('change', e => {
    const val = e.target.value;
    rows.forEach(r => {
        r.style.display = !val || r.dataset.kategori === val ? '' : 'none';
    });
});

// SORT
document.getElementById('sortBy').addEventListener('change', e => {
    const tbody = document.querySelector('tbody');
    const sorted = [...rows].sort((a,b) => {
        if(e.target.value === 'title')
            return a.dataset.judul.localeCompare(b.dataset.judul);
        if(e.target.value === 'oldest')
            return new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
        return new Date(b.dataset.tanggal) - new Date(a.dataset.tanggal);
    });
    sorted.forEach(r => tbody.appendChild(r));
});

function showImageModal(src,title){
    alert(title); // optional: ganti modal bootstrap
}
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
