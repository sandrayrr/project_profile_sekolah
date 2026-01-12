@extends('admin.layout')

@section('title', 'Manajemen Galeri')

@section('content')
<style>
    :root {
        /* Warna yang terinspirasi dari logo SMKN 1 Kawali */
        --primary-blue: #0056b3;
        --primary-yellow: #ffc107;
        --primary-red: #dc3545;
        --secondary-blue: #4a6cf7;
        --secondary-purple: #7c3aed;
        --secondary-pink: #ec4899;
        --light-blue: #e6f2ff;
        --light-yellow: #fff8e1;
        --light-red: #ffebee;
        --dark-color: #1a1a2e;
        --light-color: #f5f5f5;
        --text-muted: #6c757d;
        --border-color: #e0e0e0;
        --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, #0040a0 100%);
        --gradient-accent: linear-gradient(135deg, var(--primary-yellow) 0%, #ff9800 100%);
        --gradient-secondary: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        --gradient-success: linear-gradient(135deg, #10b981 0%, #059669 100%);
        --gradient-danger: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        --gradient-modern: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --gradient-vibrant: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        --shadow-sm: 0 2px 4px rgba(0,0,0,0.05);
        --shadow-md: 0 4px 6px rgba(0,0,0,0.07);
        --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
        --shadow-xl: 0 20px 25px rgba(0,0,0,0.1);
        --shadow-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        color: var(--dark-color);
        position: relative;
        overflow-x: hidden;
        line-height: 1.6;
        min-height: 100vh;
    }
    
    /* Animasi */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes slideInLeft {
        from { opacity: 0; transform: translateX(-30px); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes slideInRight {
        from { opacity: 0; transform: translateX(30px); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes slideInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
    
    @keyframes shimmer {
        0% { background-position: -1000px 0; }
        100% { background-position: 1000px 0; }
    }
    
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    
    .fade-in {
        animation: fadeIn 0.8s ease-out;
    }
    
    .slide-in-left {
        animation: slideInLeft 0.8s ease-out;
    }
    
    .slide-in-right {
        animation: slideInRight 0.8s ease-out;
    }
    
    .slide-in-up {
        animation: slideInUp 0.8s ease-out;
    }
    
    .pulse-animation {
        animation: pulse 2s infinite;
    }
    
    .float-animation {
        animation: float 3s ease-in-out infinite;
    }
    
    /* Watermark Logo Sekolah di tengah halaman */
    .watermark-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: -1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
    
    .school-logo-watermark {
        width: 600px;
        height: 600px;
        background-image: url('https://z-cdn-media.chatglm.cn/files/87692716-b454-4f10-975a-68b6e0678b15.png?auth_key=1867942909-fa1d2338d8714febac500b8f54a413df-0-48e85327eb38ab7c1cb8680e2576aa2d');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.05;
        filter: grayscale(100%) contrast(1.2);
    }
    
    .school-text-watermark {
        font-size: 5rem;
        font-weight: 900;
        color: var(--dark-color);
        opacity: 0.02;
        letter-spacing: 0.5rem;
        text-transform: uppercase;
        margin-top: 2rem;
        transform: rotate(-5deg);
    }
    
    /* Background Pattern */
    .bg-pattern {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: radial-gradient(var(--primary-blue) 1px, transparent 1px);
        background-size: 30px 30px;
        opacity: 0.03;
        z-index: -2;
    }
    
    /* Modern Background Elements */
    .bg-blob {
        position: fixed;
        border-radius: 50%;
        filter: blur(40px);
        opacity: 0.4;
        z-index: -1;
    }
    
    .blob-1 {
        top: 10%;
        left: 10%;
        width: 300px;
        height: 300px;
        background: var(--gradient-primary);
        animation: blob 7s infinite;
    }
    
    .blob-2 {
        bottom: 10%;
        right: 10%;
        width: 400px;
        height: 400px;
        background: var(--gradient-accent);
        animation: blob 9s infinite;
    }
    
    .blob-3 {
        top: 50%;
        right: 30%;
        width: 250px;
        height: 250px;
        background: var(--gradient-secondary);
        animation: blob 11s infinite;
    }
    
    /* Container */
    .container-fluid {
        padding: 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }
    
    /* Header Section */
    .page-header {
        background: var(--gradient-primary);
        color: white;
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: var(--shadow-2xl);
        position: relative;
        overflow: hidden;
        margin-bottom: 2rem;
    }
    
    .page-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://picsum.photos/seed/smkn1kawali/1200/300.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.1;
        z-index: 0;
    }
    
    .page-header::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
        z-index: 0;
    }
    
    .page-header-content {
        position: relative;
        z-index: 1;
    }
    
    /* Stat Card */
    .stat-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        box-shadow: var(--shadow-lg);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        margin-bottom: 1.5rem;
        height: 100%;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-2xl);
    }
    
    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--gradient-primary);
    }
    
    .stat-card::after {
        content: '';
        position: absolute;
        bottom: -50px;
        right: -50px;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: var(--gradient-primary);
        opacity: 0.05;
    }
    
    .stat-icon {
        width: 70px;
        height: 70px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
        color: white;
        position: relative;
        z-index: 1;
        box-shadow: var(--shadow-md);
    }
    
    /* Filter Card */
    .filter-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        box-shadow: var(--shadow-lg);
        margin-bottom: 1.5rem;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .filter-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: var(--gradient-modern);
    }
    
    .input-group-text {
        background: var(--light-blue);
        border: 1px solid var(--border-color);
        color: var(--primary-blue);
        border-radius: 10px 0 0 10px;
    }
    
    .form-control, .form-select {
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 12px 15px;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 0.2rem rgba(0, 86, 179, 0.25);
    }
    
    /* Gallery Grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
    }
    
    /* Gallery Card */
    .gallery-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .gallery-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-2xl);
    }
    
    .gallery-image-wrapper {
        position: relative;
        overflow: hidden;
        height: 220px;
    }
    
    .gallery-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .gallery-card:hover .gallery-image {
        transform: scale(1.1);
    }
    
    .gallery-overlay {
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
    
    .gallery-card:hover .gallery-overlay {
        opacity: 1;
    }
    
    .gallery-body {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .gallery-title {
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        color: var(--dark-color);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    
    .gallery-date {
        color: var(--text-muted);
        font-size: 0.9rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
    }
    
    .gallery-date i {
        margin-right: 0.5rem;
    }
    
    .gallery-actions {
        display: flex;
        gap: 0.5rem;
        margin-top: auto;
    }
    
    /* Button */
    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        font-size: 0.95rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }
    
    .btn i {
        margin-right: 0.5rem;
    }
    
    .btn-primary {
        background: var(--gradient-primary);
        color: white;
        box-shadow: var(--shadow-md);
    }
    
    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }
    
    .btn-primary:hover::before {
        left: 100%;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-xl);
    }
    
    .btn-light {
        background: rgba(255, 255, 255, 0.9);
        color: var(--primary-blue);
        box-shadow: var(--shadow-sm);
    }
    
    .btn-light:hover {
        background: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }
    
    .btn-outline-primary {
        background: transparent;
        color: var(--primary-blue);
        border: 1px solid var(--primary-blue);
    }
    
    .btn-outline-primary:hover {
        background: var(--primary-blue);
        color: white;
    }
    
    .btn-outline-danger {
        background: transparent;
        color: var(--primary-red);
        border: 1px solid var(--primary-red);
    }
    
    .btn-outline-danger:hover {
        background: var(--primary-red);
        color: white;
    }
    
    /* Alert */
    .alert {
        border-radius: 15px;
        border: none;
        box-shadow: var(--shadow-sm);
    }
    
    /* Modal */
    .modal-content {
        border-radius: 20px;
        border: none;
        overflow: hidden;
    }
    
    .modal-header {
        border-bottom: none;
        padding: 1.5rem;
    }
    
    .modal-body {
        padding: 0;
    }
    
    .modal-image {
        width: 100%;
        border-radius: 0;
    }
    
    /* Empty State */
    .empty-state {
        padding: 50px 0;
        text-align: center;
    }
    
    .empty-state i {
        font-size: 4rem;
        color: var(--text-muted);
        margin-bottom: 20px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .container-fluid {
            padding: 1rem;
        }
        
        .page-header {
            padding: 1.5rem;
        }
        
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
        }
        
        .school-logo-watermark {
            width: 300px;
            height: 300px;
        }
        
        .school-text-watermark {
            font-size: 2.5rem;
        }
        
    }
</style>

<!-- Background Pattern -->
<div class="bg-pattern"></div>

<!-- Modern Background Elements -->
<div class="bg-blob blob-1"></div>
<div class="bg-blob blob-2"></div>
<div class="bg-blob blob-3"></div>

<!-- Watermark Container -->
<div class="watermark-container">
    <div class="school-logo-watermark"></div>
    <div class="school-text-watermark">SMKN 1 Kawali</div>
</div>

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="page-header fade-in">
        <div class="page-header-content">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h4 class="fw-bold mb-1">Manajemen Galeri</h4>
                    <p class="mb-0 opacity-75">
                        Kelola koleksi foto-foto kegiatan sekolah
                    </p>
                </div>
                <a href="{{ route('admin.galeri.create') }}" class="btn btn-light px-4 shadow-sm">
                    <i class="bi bi-plus-circle me-2"></i> Tambah Foto
                </a>
            </div>
        </div>
    </div>

    {{-- STATISTIK KARTU --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3 slide-in-left" style="animation-delay: 0.1s;">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small d-block mb-1">Total Foto</span>
                        <h2 class="fw-bold mb-0">{{ $galeri->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: var(--gradient-modern);">
                        <i class="bi bi-images"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- NOTIFIKASI SUKSES --}}
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4 slide-in-up" style="animation-delay: 0.2s;">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- FILTER --}}
    <div class="filter-card slide-in-up" style="animation-delay: 0.3s;">
        <div class="card-body">
            <div class="row g-3 align-items-center">
                {{-- SEARCH BAR --}}
                <div class="col-md-9">
                    <label class="form-label small text-muted fw-semibold">
                        Cari Foto
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <input
                            type="text"
                            class="form-control"
                            id="searchInput"
                            placeholder="Cari berdasarkan judul foto...">
                    </div>
                </div>

                {{-- FILTER / SORT --}}
                <div class="col-md-3">
                    <label class="form-label small text-muted fw-semibold">
                        Urutkan
                    </label>
                    <select class="form-select" id="sortSelect">
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="title">Judul A–Z</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{-- GALERI GRID --}}
    <div class="gallery-grid" id="galeriContainer">
        @forelse ($galeri as $g)
        <div class="galeri-item slide-in-up" data-judul="{{ strtolower($g->judul) }}" data-date="{{ $g->created_at }}" style="animation-delay: 0.{{ 4 + $loop->index * 0.1 }}s;">
            <div class="gallery-card">
                <div class="gallery-image-wrapper">
                    <img src="{{ asset('storage/'.$g->foto) }}"
                         class="gallery-image"
                         alt="{{ $g->judul }}"
                         onclick="showImageModal('{{ asset('storage/'.$g->foto) }}', '{{ $g->judul }}')">
                    <div class="gallery-overlay">
                        <i class="bi bi-eye-fill fs-2"></i>
                    </div>
                </div>
                <div class="gallery-body">
                    <h6 class="gallery-title" title="{{ $g->judul }}">{{ $g->judul }}</h6>
                    <div class="gallery-date">
                        <i class="bi bi-clock"></i>
                        {{ $g->created_at->format('d M Y') }}
                    </div>
                    <div class="gallery-actions">
                        <a href="{{ route('admin.galeri.edit', $g->id) }}" class="btn btn-outline-primary flex-grow-1">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <form action="{{ route('admin.galeri.destroy', $g->id) }}" method="POST" onsubmit="return confirmDelete('Yakin ingin menghapus foto ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="empty-state slide-in-up" style="animation-delay: 0.4s;">
                <i class="bi bi-image fs-1 text-muted"></i>
                <h5 class="mt-3 text-muted">Belum ada foto di galeri</h5>
                <p class="text-muted">Mulai dengan menambahkan foto pertama</p>
                <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary mt-2">
                    <i class="bi bi-plus-circle me-2"></i>Tambah Foto
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
                <img id="modalImage" src="" class="modal-image" alt="Gallery Image">
            </div>
        </div>
    </div>
</div>

{{-- Include SweetAlert2 if not already included --}}
@if(!View::hasSection('scripts'))
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@endif

<script>
// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const items = document.querySelectorAll('.galeri-item');
    
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

// Filter Sort
const sortSelect = document.getElementById('sortSelect');

sortSelect.addEventListener('change', function () {
    const value = this.value;

    const container = document.getElementById('galeriContainer');
    const items = Array.from(container.querySelectorAll('.galeri-item'));

    items.sort((a, b) => {
        if (value === 'title') {
            return a.dataset.judul.localeCompare(b.dataset.judul);
        }

        if (value === 'oldest') {
            return new Date(a.dataset.date) - new Date(b.dataset.date);
        }

        // newest (default)
        return new Date(b.dataset.date) - new Date(a.dataset.date);
    });

    // render ulang
    items.forEach(item => container.appendChild(item));
});
</script>
@endsection