@extends('admin.layout')

@section('title', 'Manajemen Artikel')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Manajemen Artikel</h4>
            <p class="text-muted mb-0">Kelola konten artikel dan berita sekolah</p>
        </div>
        <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="bi bi-plus-circle me-2"></i> Tambah Artikel
        </a>
    </div>

    {{-- STATISTIK KARTU --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-0 bg-gradient-primary text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h6 class="mb-0 text-white-50">Total Artikel</h6>
                            <h3 class="mb-0 fw-bold">{{ $artikels->count() }}</h3>
                        </div>
                        <div class="ms-3">
                            <i class="bi bi-journal-text fs-1 opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-0 bg-gradient-success text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h6 class="mb-0 text-white-50">Ditulis Bulan Ini</h6>
                            <h3 class="mb-0 fw-bold">{{ $artikels->where('created_at', '>=', now()->startOfMonth())->count() }}</h3>
                        </div>
                        <div class="ms-3">
                            <i class="bi bi-calendar-check fs-1 opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- NOTIFIKASI SUKSES --}}
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- SEARCH BAR --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-8">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-end-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" id="searchInput" placeholder="Cari berdasarkan judul artikel...">
                    </div>
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="sortSelect">
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="title">Judul A-Z</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{-- DAFTAR ARTIKEL DALAM BENTUK KARTU --}}
    <div class="row" id="artikelContainer">
        @forelse ($artikels as $item)
        <div class="col-lg-6 col-xl-4 mb-4 artikel-item" data-judul="{{ strtolower($item->judul) }}" data-tanggal="{{ $item->tanggal }}" data-id="{{ $item->id }}">
            <div class="card h-100 shadow-sm border-0 article-card">
                {{-- GAMBAR ARTIKEL --}}
                @if($item->foto)
                    <img src="{{ asset('storage/'.$item->foto) }}"
                         class="card-img-top article-image"
                         style="height: 200px; object-fit: cover;"
                         alt="{{ $item->judul }}"
                         onclick="showImageModal('{{ asset('storage/'.$item->foto) }}', '{{ $item->judul }}')">
                @else
                    <div class="card-img-top d-flex align-items-center justify-content-center bg-light" style="height: 200px;">
                        <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                    </div>
                @endif
                
                {{-- ISI KARTU --}}
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-semibold">{{ $item->judul }}</h5>
                    <p class="card-text text-muted small flex-grow-1">
                        {{ Str::limit(strip_tags($item->deskripsi), 100) }}
                    </p>
                    
                    {{-- BAGIAN YANG DIPERBAIKI: TANGGAL & AKSI --}}
                    <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                        <span class="text-muted small">
                            <i class="bi bi-calendar3 me-1"></i>
                            {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                        </span>
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="{{ route('admin.artikel.edit', $item->id) }}"
                               class="btn btn-outline-primary"
                               title="Edit">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('admin.artikel.destroy', $item->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirmDelete('Yakin ingin menghapus artikel ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-outline-danger"
                                        title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="text-center py-5">
                <i class="bi bi-journal-x fs-1 text-muted"></i>
                <h5 class="mt-3 text-muted">Belum ada artikel</h5>
                <p class="text-muted">Mulai dengan menulis artikel pertama untuk memberikan informasi terbaru.</p>
                <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary mt-2">
                    <i class="bi bi-plus-circle me-2"></i>Tambah Artikel
                </a>
            </div>
        </div>
        @endforelse
    </div>

    {{-- PAGINATION --}}
    @if($artikels->hasPages())
    <div class="d-flex justify-content-between align-items-center mt-4">
        <div class="text-muted">
            Menampilkan {{ $artikels->firstItem() }} - {{ $artikels->lastItem() }} dari {{ $artikels->total() }} artikel
        </div>
        {{ $artikels->links('pagination::bootstrap-4') }}
    </div>
    @endif

</div>

{{-- Image Modal --}}
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="imageModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <img id="modalImage" src="" class="w-100" style="border-radius: 0.5rem;">
            </div>
        </div>
    </div>
</div>

<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}
.bg-gradient-success {
    background: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%);
}
.hover-lift {
    transition: all 0.3s ease;
}
.hover-lift:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}
.article-card {
    transition: all 0.3s ease;
    overflow: hidden;
}
.article-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
}
.article-image {
    transition: transform 0.5s ease;
    cursor: pointer;
}
.article-card:hover .article-image {
    transform: scale(1.05);
}
.form-control:focus, .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}
.input-group-text {
    border-color: #dee2e6;
}
</style>

<script>
// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const items = document.querySelectorAll('.artikel-item');
    
    items.forEach(item => {
        const judul = item.dataset.judul;
        if (judul.includes(searchTerm)) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
});

// Sort functionality
document.getElementById('sortSelect').addEventListener('change', function(e) {
    const sortValue = e.target.value;
    const container = document.getElementById('artikelContainer');
    const items = Array.from(container.querySelectorAll('.artikel-item'));

    items.sort((a, b) => {
        if (sortValue === 'newest') {
            return new Date(b.dataset.tanggal) - new Date(a.dataset.tanggal);
        } else if (sortValue === 'oldest') {
            return new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
        } else if (sortValue === 'title') {
            return a.dataset.judul.localeCompare(b.dataset.judul);
        }
    });

    items.forEach(item => container.appendChild(item));
});

// Show image modal
function showImageModal(imageSrc, imageTitle) {
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('imageModalLabel').innerText = imageTitle;
    new bootstrap.Modal(document.getElementById('imageModal')).show();
}

// Custom confirm dialog
function confirmDelete(message) {
    return Swal.fire({
        title: 'Konfirmasi Hapus',
        text: message,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: #6c757d,
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        return result.isConfirmed;
    });
}
</script>

{{-- Include SweetAlert2 if not already included --}}
@if(!View::hasSection('scripts'))
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@endif

@endsection