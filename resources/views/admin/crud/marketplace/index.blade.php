@extends('admin.layout')

@section('title', 'Manajemen Marketplace')

@section('content')
<style>
    /* ==================== KONFIGURASI WARNA & TIPOGRAFI ==================== */
    :root {
        --primary-blue: #3b82f6;
        --primary-dark: #1e40af;
        --secondary-blue: #60a5fa;
        --light-blue: #dbeafe;
        --lighter-blue: #eff6ff;
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

    /* ==================== ANIMASI ==================== */
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

    /* ==================== KOMPONEN UTAMA ==================== */
    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 2rem;
    }

    /* --- Page Header --- */
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
    
    .page-header::before, .page-header::after {
        content: '';
        position: absolute;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }
    
    .page-header::before {
        top: 0; right: 0;
        width: 200px; height: 200px;
        transform: translate(50%, -50%);
    }
    
    .page-header::after {
        bottom: 0; left: 0;
        width: 150px; height: 150px;
        transform: translate(-20%, 20%);
    }

    /* --- Statistik Card --- */
    .stat-card {
        background: var(--gradient-card);
        border-radius: 16px;
        padding: 1.5rem 2rem;
        box-shadow: var(--shadow-md);
        margin-bottom: 2rem;
        display: flex;
        align-items: center;
        border-left: 4px solid var(--primary-blue);
        transition: all 0.3s ease;
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
        margin-right: 1.5rem;
        flex-shrink: 0; /* Mencegah ikon mengecil */
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

    /* --- Filter Card --- */
    .filter-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        margin-bottom: 1.5rem; /* Diperkecil untuk memberi jarak ke tab */
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

    /* --- Category Tabs --- */
    .category-tabs-container {
        background: white;
        border-radius: 16px;
        padding: 0 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: var(--shadow-md);
        overflow-x: auto;
    }

    .category-tabs {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 1rem 0;
        border-bottom: 1px solid var(--border-color);
    }

    .category-tab {
        padding: 0.5rem 1.25rem;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
        color: var(--gray-color);
        cursor: pointer;
        white-space: nowrap;
        transition: all 0.2s ease;
        border: 1px solid transparent;
    }

    .category-tab:hover {
        background-color: var(--light-gray);
        color: var(--dark-color);
    }

    .category-tab.active {
        background-color: var(--primary-blue);
        color: white;
        border-color: var(--primary-blue);
        box-shadow: var(--shadow-sm);
    }
    
    /* --- Data Card --- */
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
    
    /* --- Marketplace Item Card --- */
    .marketplace-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 1.5rem;
        padding: 1.5rem;
    }
    
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
        height: 180px;
        width: 100%;
        object-fit: cover;
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    
    .marketplace-image:hover {
        transform: scale(1.05);
    }
    
    .marketplace-body {
        padding: 1.25rem;
    }
    
    .marketplace-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: var(--dark-color);
    }

    .marketplace-price {
        font-size: 1.3rem;
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
    
    /* --- Empty State --- */
    .empty-state {
        padding: 3rem;
        text-align: center;
        grid-column: 1 / -1;
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

    /* ==================== FORM ELEMENTS ==================== */
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

    /* ==================== BUTTONS ==================== */
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
    
    .btn-icon-primary { color: var(--primary-blue); }
    .btn-icon-danger { color: var(--accent-red); }
    
    /* ==================== RESPONSIVE ==================== */
    @media (max-width: 768px) {
        .container { padding: 1rem; }
        .page-header { padding: 1.5rem; }
        .card-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }
        .card-actions { width: 100%; justify-content: flex-end; }
        .marketplace-grid { grid-template-columns: 1fr; padding: 1rem; }
        .btn-icon { width: 32px; height: 32px; }
    }
</style>

<div class="container">
    <!-- PAGE HEADER -->
    <header class="page-header fade-in">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="fw-bold mb-1">Manajemen Marketplace</h1>
                <p class="mb-0 opacity-90">Kelola seluruh produk yang tersedia di marketplace</p>
            </div>
            <a href="{{ route('admin.marketplace.create') }}" class="btn btn-light">
                <i class="bi bi-plus-circle me-2"></i> Tambah Produk
            </a>
        </div>
    </header>

    <!-- STATISTIK -->
    <section class="stat-card fade-in" style="animation-delay: 0.1s;">
        <div class="stat-icon">
            <i class="material-icons">storefront</i>
        </div>
        <div class="stat-content">
            <h2>{{ $marketplaces->total() ?? 0 }}</h2>
            <p>Total Produk Tercatat</p>
        </div>
    </section>

    <!-- ALERT -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4 fade-in" style="animation-delay: 0.2s;">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- FILTER -->
    <section class="filter-card slide-in" style="animation-delay: 0.3s;">
        <div class="filter-header">
            <i class="bi bi-funnel"></i>
            <h5>Filter Produk</h5>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
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
    </section>

    <!-- TAB KATEGORI -->
    <section class="category-tabs-container slide-in" style="animation-delay: 0.35s;">
        <div class="category-tabs">
            <span class="category-tab active" data-category="all">
                <i class="bi bi-grid-3x3-gap-fill me-2"></i>Semua
            </span>
            @forelse ($categories as $category)
                <span class="category-tab" data-category="{{ strtolower($category) }}">{{ $category }}</span>
            @empty
                <span class="text-muted">Belum ada kategori</span>
            @endforelse
        </div>
    </section>

    <!-- CARD MARKETPLACE -->
    <main class="card-container slide-in" style="animation-delay: 0.4s;">
        <div class="card-header">
            <h5 class="card-title">Daftar Produk</h5>
        </div>
        
        <div class="marketplace-grid" id="marketplaceGrid">
            @forelse ($marketplaces as $item)
                <article class="marketplace-card marketplace-item"
                         data-nama="{{ strtolower($item->nama) }}"
                         data-harga="{{ $item->harga }}"
                         data-tanggal="{{ $item->created_at->format('Y-m-d') }}"
                         data-kategori="{{ strtolower($item->kategori) }}">
                    
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
                        <div class="mb-2">
                            <span class="badge bg-light text-dark">{{ $item->kategori }}</span>
                        </div>
                        <div class="marketplace-price">Rp {{ number_format($item->harga, 0, ',', '.') }}</div>
                        <div class="marketplace-date">
                            <i class="bi bi-calendar me-1"></i>
                            {{ $item->created_at->format('d M Y') }}
                        </div>
                        <div class="marketplace-footer">
                            <div class="d-inline-flex gap-1">
                                <a href="{{ route('admin.marketplace.edit',$item->id) }}" class="btn btn-icon btn-icon-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.marketplace.destroy',$item->id) }}" method="POST" onsubmit="return confirmDelete()">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-icon btn-icon-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </article>
            @empty
                <div class="empty-state">
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
    </main>
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
document.addEventListener('DOMContentLoaded', function() {
    // Ambil semua elemen yang dibutuhkan
    const searchInput = document.getElementById('searchInput');
    const filterHarga = document.getElementById('filterHarga');
    const sortBy = document.getElementById('sortBy');
    const categoryTabs = document.querySelectorAll('.category-tab');
    const marketplaceGrid = document.getElementById('marketplaceGrid');
    const allItems = Array.from(document.querySelectorAll('.marketplace-item'));

    // Fungsi utama untuk menerapkan SEMUA filter
    function applyAllFilters() {
        const search = searchInput.value.toLowerCase();
        const hargaFilter = filterHarga.value;
        const activeCategoryTab = document.querySelector('.category-tab.active');
        const kategoriFilter = activeCategoryTab ? activeCategoryTab.dataset.category : 'all';

        allItems.forEach(item => {
            let visible = true;
            const nama = item.dataset.nama;
            const harga = parseFloat(item.dataset.harga);
            const kategori = item.dataset.kategori;

            // Filter berdasarkan pencarian
            if (search && !nama.includes(search)) visible = false;
            
            // Filter berdasarkan harga
            if (hargaFilter) {
                if (hargaFilter === 'expensive' && harga <= 1000000) visible = false;
                if (hargaFilter === 'medium' && (harga < 500000 || harga > 1000000)) visible = false;
                if (hargaFilter === 'cheap' && harga >= 500000) visible = false;
            }

            // Filter berdasarkan kategori
            if (kategoriFilter !== 'all' && kategori !== kategoriFilter) {
                visible = false;
            }

            item.style.display = visible ? '' : 'none';
        });
    }

    // Fungsi untuk sortir
    function applySort() {
        const sortValue = sortBy.value;
        const sortedItems = [...allItems].sort((a, b) => {
            const aVal = a.dataset[sortValue === 'name' ? 'nama' : sortValue === 'price_low' || sortValue === 'price_high' ? 'harga' : 'tanggal'];
            const bVal = b.dataset[sortValue === 'name' ? 'nama' : sortValue === 'price_low' || sortValue === 'price_high' ? 'harga' : 'tanggal'];
            
            if (sortValue === 'name') return aVal.localeCompare(bVal);
            if (sortValue === 'price_low') return parseFloat(aVal) - parseFloat(bVal);
            if (sortValue === 'price_high') return parseFloat(bVal) - parseFloat(aVal);
            if (sortValue === 'oldest') return new Date(aVal) - new Date(bVal);
            // Default: 'newest'
            return new Date(bVal) - new Date(aVal);
        });

        // Kosongkan grid dan tambahkan item yang sudah diurutkan
        marketplaceGrid.innerHTML = '';
        sortedItems.forEach(item => marketplaceGrid.appendChild(item));
        
        // Terapkan filter lagi setelah diurutkan
        applyAllFilters();
    }

    // Event Listeners
    searchInput.addEventListener('input', applyAllFilters);
    filterHarga.addEventListener('change', applyAllFilters);
    sortBy.addEventListener('change', applySort);

    categoryTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            categoryTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            applyAllFilters();
        });
    });
});

// Fungsi modal gambar
function showImageModal(src, title) {
    document.getElementById('modalImage').src = src;
    document.getElementById('imageModalLabel').innerText = title;
    new bootstrap.Modal(document.getElementById('imageModal')).show();
}

// Fungsi konfirmasi hapus
function confirmDelete() {
    return confirm('Yakin ingin menghapus produk ini?');
}
</script>
@endsection