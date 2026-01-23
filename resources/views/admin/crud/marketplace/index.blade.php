@extends('admin.layout')

@section('title', 'Manajemen Marketplace')

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
    
    /* Marketplace Card */
    .marketplace-card {
        background: white;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        border: 1px solid var(--border-color);
    }
    
    .marketplace-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-xl);
    }
    
    .marketplace-image {
        height: 180px; /* Sedikit diperkecil */
        width: 100%;
        object-fit: cover;
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    
    .marketplace-image:hover {
        transform: scale(1.05);
    }
    
    .marketplace-body {
        padding: 1.25rem; /* Diperkecil dari 1.5rem */
    }
    
    .marketplace-title {
        font-size: 1.1rem; /* Sedikit diperkecil */
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: var(--dark-color);
    }

    .marketplace-price {
        font-size: 1.3rem; /* Sedikit diperkecil */
        font-weight: 700;
        color: var(--accent-green);
        margin-bottom: 1rem;
    }
    
    .marketplace-date {
        color: var(--gray-color);
        font-size: 0.875rem;
        margin-bottom: 1rem;
    }
    
    .marketplace-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1rem;
        border-top: 1px solid var(--border-color);
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
    
    /* Tombol tambah produk yang lebih kecil di empty state */
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
    .marketplace-grid {
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
        
        .marketplace-grid {
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
                <h1 class="fw-bold mb-1">Manajemen Marketplace</h1>
                <p class="mb-0 opacity-90">Kelola seluruh produk yang tersedia di marketplace</p>
            </div>
            <a href="{{ route('admin.marketplace.create') }}" class="btn btn-light">
                <i class="bi bi-plus-circle me-2"></i> Tambah Produk
            </a>
        </div>
    </div>

    <!-- STATISTIK -->
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Total Produk</p>
                        <h2 class="fw-bold mb-0">{{ $stats['total'] ?? $marketplaces->total() }}</h2>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-box-seam"></i>
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
            <h5>Filter Produk</h5>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" id="searchInput" placeholder="Cari nama produk...">
                </div>
            </div>
            <div class="col-md-3">
                <select class="form-select" id="filterHarga">
                    <option value="">Semua Harga</option>
                    <option value="expensive">> 1.000.000</option>
                    <option value="medium">500.000 - 1.000.000</option>
                    <option value="cheap">< 500.000</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select" id="sortBy">
                    <option value="newest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="name">Nama A-Z</option>
                    <option value="price_low">Harga Terendah</option>
                    <option value="price_high">Harga Tertinggi</option>
                </select>
            </div>
        </div>
    </div>

    <!-- CARD MARKETPLACE -->
    <div class="card-container slide-in" style="animation-delay: 0.4s;">
        <div class="card-header">
            <h5 class="card-title">Daftar Produk</h5>
            <div class="card-actions">
                <button class="btn btn-light btn-sm">
                    <i class="bi bi-download me-2"></i> Export
                </button>
            </div>
        </div>
        
        <div class="marketplace-grid" id="marketplaceGrid">
            @forelse ($marketplaces as $item)
                <div class="marketplace-card marketplace-item"
                     data-nama="{{ strtolower($item->nama) }}"
                     data-harga="{{ $item->harga }}"
                     data-tanggal="{{ $item->created_at->format('Y-m-d') }}">
                    
                    @if($item->foto)
                        <img src="{{ asset('storage/'.$item->foto) }}"
                             class="marketplace-image"
                             alt="{{ $item->nama }}"
                             onclick="showImageModal('{{ asset('storage/'.$item->foto) }}','{{ $item->nama }}')">
                    @else
                        <div class="marketplace-image bg-light d-flex align-items-center justify-content-center">
                            <i class="bi bi-image text-muted" style="font-size: 5rem;"></i>
                        </div>
                    @endif
                    
                    <div class="marketplace-body">
                        <h5 class="marketplace-title">{{ $item->nama }}</h5>
                        
                        <div class="marketplace-price">
                            Rp {{ number_format($item->harga, 0, ',', '.') }}
                        </div>
                        
                        <div class="marketplace-date">
                            <i class="bi bi-calendar me-1"></i>
                            {{ $item->created_at->format('d M Y') }}
                        </div>
                        
                        <div class="marketplace-footer">
                            <div class="d-inline-flex gap-1">
                                <a href="{{ route('admin.marketplace.edit',$item->id) }}" class="btn btn-icon btn-icon-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.marketplace.destroy',$item->id) }}" method="POST"
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
                    <i class="bi bi-box-seam"></i>
                    <h5>Belum ada produk</h5>
                    <p>Belum ada produk yang ditambahkan. Mulai dengan menambahkan produk baru.</p>
                </div>
            @endforelse
        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-center p-3">
            {{ $marketplaces->links() }}
        </div>
    </div>
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
// Filter dan Sortir
const searchInput = document.getElementById('searchInput');
const filterHarga = document.getElementById('filterHarga');
const sortBy = document.getElementById('sortBy');

function applyFilter() {
    const search = searchInput.value.toLowerCase();
    const hargaFilter = filterHarga.value;

    document.querySelectorAll('.marketplace-item').forEach(item => {
        let visible = true;
        const nama = item.dataset.nama;
        const harga = parseFloat(item.dataset.harga);

        if (search && !nama.includes(search)) visible = false;
        
        if (hargaFilter) {
            if (hargaFilter === 'expensive' && harga <= 1000000) visible = false;
            if (hargaFilter === 'medium' && (harga < 500000 || harga > 1000000)) visible = false;
            if (hargaFilter === 'cheap' && harga >= 500000) visible = false;
        }

        item.style.display = visible ? '' : 'none';
    });
}

function applySort() {
    const items = Array.from(document.querySelectorAll('.marketplace-item'));
    const grid = document.getElementById('marketplaceGrid');

    items.sort((a,b)=>{
        const aNama = a.dataset.nama;
        const bNama = b.dataset.nama;
        const aHarga = parseFloat(a.dataset.harga);
        const bHarga = parseFloat(b.dataset.harga);
        const aTanggal = a.dataset.tanggal;
        const bTanggal = b.dataset.tanggal;

        switch (sortBy.value) {
            case 'name':
                return aNama.localeCompare(bNama);
            case 'oldest':
                return new Date(aTanggal) - new Date(bTanggal);
            case 'price_low':
                return aHarga - bHarga;
            case 'price_high':
                return bHarga - aHarga;
            default: // 'newest'
                return new Date(bTanggal) - new Date(aTanggal);
        }
    });

    items.forEach(item => grid.appendChild(item));
}

// Event listeners
searchInput.addEventListener('input', applyFilter);
filterHarga.addEventListener('change', applyFilter);
sortBy.addEventListener('change', () => {
    applySort();
    applyFilter();
});

// Fungsi modal gambar
function showImageModal(src,title){
    document.getElementById('modalImage').src = src;
    document.getElementById('imageModalLabel').innerText = title;
    new bootstrap.Modal(document.getElementById('imageModal')).show();
}

// Fungsi konfirmasi hapus
function confirmDelete(){
    return confirm('Yakin ingin menghapus produk ini?');
}
</script>
@endsection