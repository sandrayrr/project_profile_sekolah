@extends('admin.layout')

@section('title', 'Manajemen Staff Kependidikan')

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
    
    /* Stat Card */
    .stat-card {
        background: var(--gradient-card);
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        border-left: 4px solid var(--primary-blue);
        height: 100%;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-xl);
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
        margin-bottom: 1rem;
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
    
    /* Card Container */
    .card-container {
        background: white;
        border-radius: 16px;
        box-shadow: var(--shadow-md);
        overflow: hidden;
    }
    
    .card-header {
        padding: 1.5rem;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--dark-color);
        margin: 0;
    }
    
    .card-actions {
        display: flex;
        gap: 0.5rem;
    }
    
    /* Staff Card */
    .staff-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        border: 1px solid var(--border-color);
    }
    
    .staff-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-xl);
    }
    
    .staff-image {
        height: 180px; /* Diperkecil dari 200px */
        width: 100%;
        object-fit: cover;
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    
    .staff-image:hover {
        transform: scale(1.05);
    }
    
    .staff-body {
        padding: 1.25rem; /* Diperkecil dari 1.5rem */
    }
    
    .staff-title {
        font-size: 1.1rem; /* Diperkecil dari 1.25rem */
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: var(--dark-color);
    }
    
    .staff-description {
        color: var(--gray-color);
        margin-bottom: 1rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .staff-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }
    
    .staff-date {
        color: var(--gray-color);
        font-size: 0.875rem;
        margin-bottom: 1rem;
    }
    
    .staff-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1rem;
        border-top: 1px solid var(--border-color);
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
    
    /* Tombol tambah staff yang lebih kecil di empty state */
    .empty-state .btn-primary {
        padding: 0.35rem 0.7rem;
        font-size: 0.7rem;
        border-radius: 6px;
    }
    
    .empty-state .btn-primary i {
        font-size: 0.75rem;
        margin-right: 0.3rem;
    }
    
    /* Grid Layout - YANG DIUBAH */
    .staff-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); /* Diperkecil dari 300px */
        gap: 1.5rem;
        padding: 1.5rem;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .container {
            padding: 1rem;
        }
        
        .page-header {
            padding: 1.5rem;
        }
        
        .card-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }
        
        .card-actions {
            width: 100%;
            justify-content: flex-end;
        }
        
        .staff-grid {
            grid-template-columns: 1fr;
            padding: 1rem;
        }
        
        .btn-action {
            width: 32px;
            height: 32px;
        }
    }
</style>

<div class="container">
    <!-- HEADER -->
    <div class="page-header fade-in">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="fw-bold mb-1">Manajemen Staff Kependidikan</h1>
                <p class="mb-0 opacity-90">Kelola seluruh data staf kependidikan sekolah</p>
            </div>
            <a href="{{ route('admin.staffkependidikan.create') }}" class="btn btn-light">
                <i class="bi bi-plus-circle me-2"></i> Tambah Staff
            </a>
        </div>
    </div>

    <!-- STATISTIK -->
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Total Staff Kependidikan</p>
                        <h2 class="fw-bold mb-0">{{ $staff->count() }}</h2>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-people"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in" style="animation-delay: 0.1s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Tata Usaha</p>
                        <h2 class="fw-bold mb-0">{{ $staff->where('jabatan', 'Tata Usaha')->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                        <i class="bi bi-card-text"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in" style="animation-delay: 0.2s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Pustakawan</p>
                        <h2 class="fw-bold mb-0">{{ $staff->where('jabatan', 'Pustakawan')->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);">
                        <i class="bi bi-book"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in" style="animation-delay: 0.3s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Toolman</p>
                        <h2 class="fw-bold mb-0">{{ $staff->whereNotIn('jabatan', ['toolman'])->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #eab308 0%, #d97706 100%);">
                        <i class="bi bi-three-dots"></i>
                    </div>
                </div>
            </div>
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
            <h5>Filter Staff Kependidikan</h5>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" id="searchInput" placeholder="Cari nama atau jabatan staff...">
                </div>
            </div>
            <div class="col-md-3">
                <select class="form-select" id="filterJabatan">
                    <option value="">Semua Jabatan</option>
                    <option value="tata usaha">Tata Usaha</option>
                    <option value="pustakawan">Pustakawan</option>
                    <option value="toolman">Toolman</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select" id="sortBy">
                    <option value="newest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="name">Nama A-Z</option>
                </select>
            </div>
        </div>
    </div>

    <!-- CARD STAFF -->
    <div class="card-container slide-in" style="animation-delay: 0.4s;">
        <div class="card-header">
            <h5 class="card-title">Daftar Staff Kependidikan</h5>
            <div class="card-actions">
                <button class="btn btn-light btn-sm">
                    <i class="bi bi-download me-2"></i> Export
                </button>
            </div>
        </div>
        
        <div class="staff-grid" id="staffGrid">
            @forelse ($staff as $item)
                <div class="staff-card staff-item"
                     data-nama="{{ strtolower($item->nama) }}"
                     data-jabatan="{{ strtolower($item->jabatan) }}"
                     data-tanggal="{{ $item->created_at->format('Y-m-d') }}">
                    
                    @if($item->foto)
                        <img src="{{ asset('storage/'.$item->foto) }}"
                             class="staff-image"
                             alt="{{ $item->nama }}"
                             onclick="showImageModal('{{ asset('storage/'.$item->foto) }}','{{ $item->nama }}')">
                    @else
                        <div class="staff-image bg-light d-flex align-items-center justify-content-center">
                            <i class="bi bi-person text-muted" style="font-size: 5rem;"></i>
                        </div>
                    @endif
                    
                    <div class="staff-body">
                        <h5 class="staff-title">{{ $item->nama }}</h5>
                        <p class="staff-description">
                            {{ \Illuminate\Support\Str::limit(strip_tags($item->deskripsi ?? ''), 120) }}
                        </p>
                        
                        <div class="staff-meta">
                            <span class="badge badge-info">
                                <i class="bi bi-briefcase me-1"></i>
                                {{ $item->jabatan }}
                            </span>
                        </div>
                        
                        <div class="staff-date">
                            <i class="bi bi-calendar me-1"></i>
                            {{ $item->created_at->format('d M Y') }}
                        </div>
                        
                        <div class="staff-footer">
                            <div class="d-inline-flex gap-1">
                                <a href="{{ route('admin.staffkependidikan.edit',$item->id) }}" class="btn btn-icon btn-icon-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.staffkependidikan.destroy',$item->id) }}" method="POST"
                                      onsubmit="return confirmDelete()">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-icon btn-icon-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <!-- EMPTY STATE -->
                <div class="empty-state" style="grid-column: 1 / -1;">
                    <i class="bi bi-people"></i>
                    <h5>Data staff kependidikan belum tersedia</h5>
                    <p>Belum ada staff kependidikan yang ditambahkan. Mulai dengan menambahkan staff kependidikan baru.</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- PAGINATION -->
    {{-- <div class="d-flex justify-content-center mt-4">
        {{ $staff->links('pagination::bootstrap-4') }}
    </div> --}}
</div>

<!-- MODAL GAMBAR -->
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="imageModalLabel"></h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-0">
                <img id="modalImage" class="w-100">
            </div>
        </div>
    </div>
</div>

<script>
// LOGIC TIDAK DIUBAH - HANYA PENYESUAIAN SELECTOR UNTUK CARD LAYOUT
const searchInput = document.getElementById('searchInput');
const filterJabatan = document.getElementById('filterJabatan');
const sortBy = document.getElementById('sortBy');

function applyFilter() {
    const search = searchInput.value.toLowerCase();
    const jabatan = filterJabatan.value.toLowerCase();

    // Mengubah selector dari .staff-row menjadi .staff-item
    document.querySelectorAll('.staff-item').forEach(item => {
        let visible = true;
        const nama = item.dataset.nama;
        const jabatanItem = item.dataset.jabatan;

        if (search && !nama.includes(search) && !jabatanItem.includes(search)) visible = false;
        if (jabatan && !jabatanItem.includes(jabatan)) visible = false;

        item.style.display = visible ? '' : 'none';
    });
}

function applySort() {
    // Mengubah selector dari .staff-row menjadi .staff-item
    const items = Array.from(document.querySelectorAll('.staff-item'));
    const grid = document.getElementById('staffGrid');

    items.sort((a,b)=>{
        if (sortBy.value === 'name') {
            return a.dataset.nama.localeCompare(b.dataset.nama);
        }
        if (sortBy.value === 'oldest') {
            return new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
        }
        return new Date(b.dataset.tanggal) - new Date(a.dataset.tanggal);
    });

    items.forEach(item => grid.appendChild(item));
}

// Event listeners tetap sama
searchInput.addEventListener('input', applyFilter);
filterJabatan.addEventListener('change', applyFilter);
sortBy.addEventListener('change', () => {
    applySort();
    applyFilter();
});

// Fungsi modal gambar tidak diubah
function showImageModal(src,title){
    document.getElementById('modalImage').src = src;
    document.getElementById('imageModalLabel').innerText = title;
    new bootstrap.Modal(document.getElementById('imageModal')).show();
}

// Fungsi konfirmasi hapus tidak diubah
function confirmDelete(){
    return confirm('Yakin ingin menghapus staff kependidikan ini?');
}
</script>
@endsection