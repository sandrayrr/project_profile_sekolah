@extends('admin.layout')

@section('title', 'Manajemen Fasilitas')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Manajemen Fasilitas</h4>
            <p class="text-muted mb-0">Kelola fasilitas-fasilitas yang tersedia di sekolah</p>
        </div>
        <a href="{{ route('admin.fasilitas.create') }}" class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="bi bi-plus-circle me-2"></i> Tambah Fasilitas
        </a>
    </div>

    {{-- STATISTIK KARTU --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-0 bg-gradient-primary text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h6 class="mb-0 text-white-50">Total Fasilitas</h6>
                            <h3 class="mb-0 fw-bold">{{ $fasilitas->count() }}</h3>
                        </div>
                        <div class="ms-3">
                            <i class="bi bi-building fs-1 opacity-75"></i>
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

    <div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-3 align-items-center">

            {{-- SEARCH BAR --}}
            <div class="col-md-9">
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-end-0">
                        <i class="bi bi-search"></i>
                    </span>
                    <input
                        type="text"
                        class="form-control border-start-0"
                        id="searchInput"
                        placeholder="Cari berdasarkan judul foto...">
                </div>
            </div>

            {{-- FILTER / SORT --}}
            <div class="col-md-3">
                <select class="form-select" id="sortSelect">
                    <option value="newest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="title">Judul A–Z</option>
                </select>
            </div>

        </div>
    </div>
</div>


    {{-- FASILITAS GRID --}}
    <div class="row g-4" id="fasilitasContainer">
        @forelse ($fasilitas as $f)
        <div class="col-md-6 col-lg-4 col-xl-3 fasilitas-item" data-judul="{{ strtolower($f->judul) }}">
            <div class="card h-100 shadow-sm border-0 facility-card">
                <div class="facility-image-wrapper">
                    <img src="{{ asset('storage/'.$f->foto) }}"
                         class="card-img-top facility-image"
                         alt="{{ $f->judul }}"
                         onclick="showImageModal('{{ asset('storage/'.$f->foto) }}', '{{ $f->judul }}')">
                    <div class="facility-overlay">
                        <i class="bi bi-eye-fill fs-2"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="card-title fw-semibold text-truncate" title="{{ $f->judul }}">{{ $f->judul }}</h6>
                    <p class="card-text text-muted small mb-3">
                        <i class="bi bi-clock me-1"></i>
                        {{ $f->created_at->format('d M Y') }}
                    </p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.fasilitas.edit', $f->id) }}" class="btn btn-sm btn-outline-primary w-100 me-2">
                            <i class="bi bi-pencil-square me-1"></i> Edit
                        </a>
                        <form action="{{ route('admin.fasilitas.destroy', $f->id) }}" method="POST" class="d-inline w-100" onsubmit="return confirmDelete('Yakin ingin menghapus fasilitas ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger w-100">
                                <i class="bi bi-trash me-1"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="text-center py-5">
                <i class="bi bi-building fs-1 text-muted"></i>
                <h5 class="mt-3 text-muted">Belum ada fasilitas</h5>
                <p class="text-muted">Mulai dengan menambahkan fasilitas pertama</p>
                <a href="{{ route('admin.fasilitas.create') }}" class="btn btn-primary mt-2">
                    <i class="bi bi-plus-circle me-2"></i>Tambah Fasilitas
                </a>
            </div>
        </div>
        @endforelse
    </div>

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
.bg-gradient-info {
    background: linear-gradient(135deg, #36d1dc 0%, #5b86e5 100%);
}
.hover-lift {
    transition: all 0.3s ease;
}
.hover-lift:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}
.facility-card {
    transition: all 0.3s ease;
    overflow: hidden;
}
.facility-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
}
.facility-image-wrapper {
    position: relative;
    overflow: hidden;
}
.facility-image {
    height: 200px;
    width: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.facility-card:hover .facility-image {
    transform: scale(1.1);
}
.facility-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}
.facility-card:hover .facility-overlay {
    opacity: 1;
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
    const items = document.querySelectorAll('.fasilitas-item');
    
    items.forEach(item => {
        const judul = item.dataset.judul;
        if (judul.includes(searchTerm)) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
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
        cancelButtonColor: '#6c757d',
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
