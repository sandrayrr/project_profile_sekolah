@extends('admin.layout')

@section('title', 'Manajemen Galeri')

@section('content')
<style>
    :root {
        /* Warna tema biru yang modern */
        --primary-blue: #3b82f6;
        --primary-dark: #1e40af;
        --secondary-blue: #60a5fa;
        --light-blue: #dbeafe;
        --lighter-blue: #eff6ff;
        --accent-yellow: #eab308;
        --accent-green: #10b981;
        --accent-red: #ef4444;
        --dark-color: #1f2937;
        --gray-color: #6b7280;
        --light-gray: #f3f4f6;
        --border-color: #e5e7eb;
        --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
        --gradient-card: linear-gradient(135deg, #ffffff 0%, #f9fafb 100%);
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: var(--lighter-blue);
        color: var(--dark-color);
        line-height: 1.6;
    }
    
    /* Animasi */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes slideIn {
        from { opacity: 0; transform: translateX(-20px); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    .fade-in {
        animation: fadeIn 0.6s ease-out;
    }
    
    .slide-in {
        animation: slideIn 0.6s ease-out;
    }
    
    /* Container */
    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 2rem;
    }
    
    /* Header Section */
    .page-header {
        background: var(--gradient-primary);
        border-radius: 16px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: var(--shadow-lg);
        color: white;
        position: relative;
        overflow: hidden;
    }
    
    .page-header::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        transform: translate(50%, -50%);
    }
    
    .page-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 150px;
        height: 150px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        transform: translate(-20%, 20%);
    }
    
    /* Stat Card Single */
    .stat-card-single {
        background: var(--gradient-card);
        border-radius: 16px;
        padding: 1.5rem 2rem;
        box-shadow: var(--shadow-md);
        margin-bottom: 2rem;
        display: flex;
        align-items: center;
        border-left: 4px solid var(--primary-blue);
    }
    
    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--gradient-primary);
        color: white;
        font-size: 1.5rem;
        margin-right: 1.5rem;
    }
    
    .stat-content h2 {
        font-size: 2rem;
        font-weight: 700;
        margin: 0;
        color: var(--dark-color);
    }
    
    .stat-content p {
        margin: 0;
        color: var(--gray-color);
    }
    
    /* Filter Card */
    .filter-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        margin-bottom: 2rem;
    }
    
    .filter-header {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid var(--border-color);
    }
    
    .filter-header i {
        color: var(--primary-blue);
        margin-right: 0.5rem;
        font-size: 1.25rem;
    }
    
    .filter-header h5 {
        margin: 0;
        color: var(--dark-color);
        font-weight: 600;
    }
    
    .form-control, .form-select {
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 0.75rem;
        transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        outline: none;
    }
    
    .input-group {
        position: relative;
    }
    
    .input-group-text {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        color: var(--gray-color);
        z-index: 10;
    }
    
    .input-group .form-control {
        padding-left: 2.5rem;
    }
    
    /* Table Card */
    .table-card {
        background: white;
        border-radius: 16px;
        box-shadow: var(--shadow-md);
        overflow: hidden;
    }
    
    .table-header {
        padding: 1.5rem;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .table-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--dark-color);
        margin: 0;
    }
    
    .table-actions {
        display: flex;
        gap: 0.5rem;
    }
    
    /* Gallery Grid - PERBAIKAN UTAMA */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
        padding: 1.5rem;
    }
    
    /* Gallery Card */
    .gallery-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-xl);
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
        transform: scale(1.05);
    }
    
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(59, 130, 246, 0.7);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        cursor: pointer;
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
        color: var(--gray-color);
        font-size: 0.9rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
    }
    
    .gallery-date i {
        margin-right: 0.5rem;
        color: var(--primary-blue);
    }
    
    .gallery-actions {
        display: flex;
        gap: 0.5rem;
        margin-top: auto;
    }
    
    /* Badge */
    .badge {
        padding: 0.375rem 0.75rem;
        border-radius: 9999px;
        font-weight: 500;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .badge-primary {
        background-color: rgba(59, 130, 246, 0.1);
        color: var(--primary-blue);
    }
    
    .badge-success {
        background-color: rgba(16, 185, 129, 0.1);
        color: var(--accent-green);
    }
    
    .badge-warning {
        background-color: rgba(234, 179, 8, 0.1);
        color: var(--accent-yellow);
    }
    
    .badge-danger {
        background-color: rgba(239, 68, 68, 0.1);
        color: var(--accent-red);
    }
    
    .badge-info {
        background-color: rgba(59, 130, 246, 0.1);
        color: var(--primary-blue);
    }
    
    /* Button */
    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 500;
        font-size: 0.875rem;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    
    .btn-primary {
        background: var(--gradient-primary);
        color: white;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-lg);
    }
    
    .btn-light {
        background: white;
        color: var(--dark-color);
        border: 1px solid var(--border-color);
        margin: 0 2px;
        position: relative;
    }
    
    .btn-light:hover {
        background: var(--light-gray);
    }
    
    .btn-icon {
        width: 36px;
        height: 36px;
        padding: 0;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: white;
        border: 1px solid var(--border-color);
        color: var(--gray-color);
    }
    
    .btn-icon:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
        border-color: var(--primary-blue);
    }
    
    .btn-action i {
        font-size: 0.9rem;
        margin: 0;
    }
    
    .btn-icon-primary {
        color: var(--primary-blue);
    }
    
    .btn-icon-danger {
        color: var(--accent-red);
    }
    
    /* Empty State */
    .empty-state {
        padding: 3rem;
        text-align: center;
    }
    
    .empty-state i {
        font-size: 3rem;
        color: var(--gray-color);
        margin-bottom: 1rem;
    }
    
    .empty-state h5 {
        color: var(--dark-color);
        margin-bottom: 0.5rem;
    }
    
    .empty-state p {
        color: var(--gray-color);
        margin-bottom: 1.5rem;
    }
    
    /* Tombol tambah foto yang lebih kecil di empty state */
    .empty-state .btn-primary {
        padding: 0.35rem 0.7rem;
        font-size: 0.7rem;
        border-radius: 6px;
    }
    
    .empty-state .btn-primary i {
        font-size: 0.75rem;
        margin-right: 0.3rem;
    }
    
    /* Alert */
    .alert {
        border-radius: 12px;
        border: none;
        box-shadow: var(--shadow-sm);
    }
    
    /* Modal */
    .modal-content {
        border-radius: 16px;
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
    
    /* Responsive */
    @media (max-width: 768px) {
        .container {
            padding: 1rem;
        }
        
        .page-header {
            padding: 1.5rem;
        }
        
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
            padding: 1rem;
        }

        .pagination-modern {
    gap: 6px;
}

.pagination-modern .page-link {
    border-radius: 10px;
    border: 1px solid var(--border-color);
    color: var(--dark-color);
    padding: 8px 14px;
    transition: all 0.25s ease;
    background: white;
}

.pagination-modern .page-item.active .page-link {
    background: var(--gradient-primary);
    color: white;
    border-color: transparent;
    box-shadow: var(--shadow-md);
}

.pagination-modern .page-link:hover {
    background: var(--light-blue);
    transform: translateY(-2px);
}

.pagination-modern .page-item.disabled .page-link {
    opacity: 0.4;
    pointer-events: none;
}

    }
</style>

<div class="container">
    <!-- HEADER -->
    <div class="page-header fade-in">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="fw-bold mb-1">Manajemen Galeri</h1>
                <p class="mb-0 opacity-90">Kelola koleksi foto-foto kegiatan sekolah</p>
            </div>
            <a href="{{ route('admin.galeri.create') }}" class="btn btn-light">
                <i class="bi bi-plus-circle me-2"></i> Tambah Foto
            </a>
        </div>
    </div>

    <!-- STATISTIK -->
   <div class="stat-card-single fade-in" style="animation-delay: 0.1s;">
        <div class="stat-icon">
            <i class="bi bi-image"></i>
        </div>
        <div class="stat-content">
            <h2>{{ $galeri->total() ?? 0 }}</h2>
            <p>Total Galeri Tercatat</p>
        </div>
    </div>

    <!-- ALERT -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4 fade-in" style="animation-delay: 0.2s;">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- FILTER -->
    <div class="filter-card slide-in" style="animation-delay: 0.3s;">
        <div class="filter-header">
            <i class="bi bi-funnel"></i>
            <h5>Filter Galeri</h5>
        </div>
        <div class="row g-3">
            <div class="col-md-8">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" id="searchInput" placeholder="Cari judul foto...">
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

    <!-- TABEL GALERI -->
    <div class="table-card slide-in" style="animation-delay: 0.4s;">
        <div class="table-header">
            <h5 class="table-title">Daftar Galeri</h5>
        </div>
        
        <!-- PERBAIKAN UTAMA: Struktur grid yang benar -->
        @if($galeri->count() > 0)
            <div class="gallery-grid">
                @foreach ($galeri as $g)
                    <div class="galeri-item" data-judul="{{ strtolower($g->judul) }}" data-date="{{ $g->created_at }}">
                        <div class="gallery-card">
                            <div class="gallery-image-wrapper">
                                <img src="{{ asset('storage/' . $g->foto) }}" class="gallery-image" alt="{{ $g->judul }}"
                                    onclick="showImageModal('{{ asset('storage/' . $g->foto) }}', '{{ $g->judul }}')">
                                <div class="gallery-overlay" onclick="showImageModal('{{ asset('storage/' . $g->foto) }}', '{{ $g->judul }}')">
                                    <i class="bi bi-eye-fill fs-2"></i>
                                </div>
                            </div>
                            <div class="gallery-body">
                                <h6 class="gallery-title" title="{{ $g->judul }}">{{ $g->judul }}</h6>
                                <div class="gallery-date">
                                    <i class="bi bi-calendar"></i>
                                    {{ $g->created_at->format('d M Y') }}
                                </div>
                                <div class="gallery-actions">
                                    <a href="{{ route('admin.galeri.edit', $g->id) }}" class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.galeri.destroy', $g->id) }}" method="POST"
                                        onsubmit="return confirmDelete()" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- EMPTY STATE  -->
            <div class="empty-state">
                <i class="bi bi-image"></i>
                <h5>Data galeri belum tersedia</h5>
                <p>Belum ada foto yang ditambahkan. Mulai dengan menambahkan foto baru.</p>
            </div>
        @endif
    </div>
</div>

{{-- PAGINATION --}}
@if ($galeri->hasPages())
    <div class="d-flex justify-content-center mt-4 fade-in">
        <nav>
            <ul class="pagination pagination-modern">
                {{-- Previous --}}
                <li class="page-item {{ $galeri->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $galeri->previousPageUrl() ?? '#' }}">
                        <i class="bi bi-chevron-left"></i>
                    </a>
                </li>

                {{-- Page Numbers --}}
                @foreach ($galeri->getUrlRange(1, $galeri->lastPage()) as $page => $url)
                    <li class="page-item {{ $galeri->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                {{-- Next --}}
                <li class="page-item {{ $galeri->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $galeri->nextPageUrl() ?? '#' }}">
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endif


<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <img id="modalImage" src="" class="modal-image" alt="Gallery Image">
            </div>
        </div>
    </div>
</div>

<script>
    // Search functionality
    document.getElementById('searchInput').addEventListener('input', function (e) {
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
    function confirmDelete() {
        return confirm('Yakin ingin menghapus foto ini?');
    }

    // Filter Sort
    const sortSelect = document.getElementById('sortSelect');

    sortSelect.addEventListener('change', function () {
        const value = this.value;

        const container = document.querySelector('.gallery-grid');
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