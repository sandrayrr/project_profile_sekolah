@extends('admin.layout')

@section('title', 'Manajemen Artikel')

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
    
    /* Table Card - PERBAIKAN UTAMA */
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
    
    .table {
        margin-bottom: 0;
        table-layout: auto;
        width: 100%;
    }
    
    .table thead th {
        background-color: var(--light-gray);
        border-bottom: 1px solid var(--border-color);
        color: var(--dark-color);
        font-weight: 600;
        padding: 1rem;
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .table tbody td {
        padding: 1rem;
        vertical-align: middle;
        border-bottom: 1px solid var(--border-color);
    }
    
    .table tbody tr:last-child td {
        border-bottom: none;
    }
    
    .table tbody tr:hover {
        background-color: var(--lighter-blue);
    }
    
    /* Kolom Nomor */
   .table thead th:nth-child(3),
.table tbody td:nth-child(3) {
    min-width: 280px;
    max-width: 380px;
}

    
    /* Kolom Foto */
    .table thead th:nth-child(2),
    .table tbody td:nth-child(2) {
        width: 120px;
        text-align: center;
    }
    
    /* Kolom Informasi Artikel */
    .table thead th:nth-child(3),
    .table tbody td:nth-child(3) {
        width: auto;
        min-width: 350px; /* Diperbesar karena kolom status/views dihapus */
    }
    
    /* Kolom Kategori */
    .table thead th:nth-child(4),
    .table tbody td:nth-child(4) {
        width: 140px;
        text-align: center;
    }
    
    /* Kolom Tanggal */
    .table thead th:nth-child(5),
    .table tbody td:nth-child(5) {
        width: 130px;
        text-align: center;
    }
    
    /* Kolom Aksi */
    .table thead th:nth-child(6),
    .table tbody td:nth-child(6) {
        width: 140px;
        text-align: center;
    }
    
    .table td {
    word-wrap: break-word;
    white-space: normal;
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
    
    /* Tombol tambah artikel yang lebih kecil di empty state */
    .empty-state .btn-primary {
        padding: 0.35rem 0.7rem;
        font-size: 0.7rem;
        border-radius: 6px;
    }
    
    .empty-state .btn-primary i {
        font-size: 0.75rem;
        margin-right: 0.3rem;
    }
    
    /* Pagination */
    .pagination {
        justify-content: center;
        margin-top: 2rem;
    }
    
    .page-link {
        padding: 0.5rem 1rem;
        margin: 0 0.25rem;
        border-radius: 8px;
        color: var(--dark-color);
        border: 1px solid var(--border-color);
    }
    
    .page-item.active .page-link {
        background: var(--gradient-primary);
        border-color: var(--primary-blue);
        color: white;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .container {
            padding: 1rem;
        }
        
        .page-header {
            padding: 1.5rem;
        }
        
        .table-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }
        
        .table-actions {
            width: 100%;
            justify-content: flex-end;
        }
        
        .table {
            font-size: 0.875rem;
        }
        
        .table thead th,
        .table tbody td {
            padding: 12px 8px;
        }
        
        .btn-action {
            width: 32px;
            height: 32px;
        }
        
        .table {
            font-size: 0.875rem;
        }
        
        .table thead th,
        .table tbody td {
            padding: 12px 8px;
        }
        
        .btn-action {
            width: 32px;
            height: 32px;
        }
        
        .table {
            font-size: 0.875rem;
        }
        
        .table thead th,
        .table tbody td {
            padding: 12px 8px;
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
                <h1 class="fw-bold mb-1">Manajemen Artikel</h1>
                <p class="mb-0 opacity-90">Kelola konten artikel dan berita sekolah</p>
            </div>
            <a href="{{ route('admin.artikel.create') }}" class="btn btn-light">
                <i class="bi bi-plus-circle me-2"></i> Tambah Artikel
            </a>
        </div>
    </div>

    <!-- STATISTIK -->
      <div class="stat-card-single fade-in" style="animation-delay: 0.1s;">
        <div class="stat-icon">
            <i class="bi bi-file-text"></i>
        </div>
        <div class="stat-content">
            <h2>{{ $artikels->total() ?? 0 }}</h2>
            <p>Total Artikel Tercatat</p>
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
            <h5>Filter Artikel</h5>
        </div>
        <div class="row g-3">
            <div class="col-md-5">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" id="searchInput" placeholder="Cari judul artikel...">
                </div>
            </div>
            <div class="col-md-4">
                <select class="form-select" id="kategoriFilter">
                    <option value="">Semua Kategori</option>
                    <option value="Akademik">Akademik</option>
                    <option value="Kesiswaan">Kesiswaan</option>
                    <option value="Prestasi">Prestasi</option>
                    <option value="Pengumuman">Pengumuman</option>
                    <option value="Berita Sekolah">Berita Sekolah</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select" id="sortSelect">
                    <option value="newest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="title">Judul A-Z</option>
                </select>
            </div>
        </div>
    </div>

    <!-- TABEL ARTIKEL -->
    <div class="table-card slide-in" style="animation-delay: 0.4s;">
        <div class="table-header">
            <h5 class="table-title">Daftar Artikel</h5>
            <div class="table-actions">
                <button class="btn btn-light btn-sm">
                    <i class="bi bi-download me-2"></i> Export
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table" id="artikelTable">
                <thead>
                    <tr>
                        <th width="60">No</th>
                        <th width="120">Foto</th>
                        <th>Informasi Artikel</th>
                        <th width="160">Kategori</th>
                        <th width="150">Tanggal</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody id="artikelContainer">
                    @forelse ($artikels as $item)
                        @php
                            $badge = match($item->kategori) {
                                'Akademik' => 'primary',
                                'Kesiswaan' => 'success',
                                'Prestasi' => 'warning',
                                'Pengumuman' => 'danger',
                                'Berita Sekolah' => 'info',
                                default => 'secondary'
                            };
                        @endphp

                        <tr class="artikel-item"
                            data-judul="{{ strtolower($item->judul) }}"
                            data-kategori="{{ $item->kategori }}"
                            data-tanggal="{{ $item->tanggal }}">

                            <!-- NO -->
                            <td class="text-muted">
                                {{ $loop->iteration }}
                            </td>

                            <!-- FOTO -->
                            <td>
                                @if($item->foto)
                                    <img src="{{ asset('storage/'.$item->foto) }}"
                                         class="rounded"
                                         style="width:80px;height:60px;object-fit:cover">
                                @else
                                    <div class="bg-light rounded d-flex align-items-center justify-content-center" style="width:80px;height:60px;">
                                        <i class="bi bi-image text-muted"></i>
                                    </div>
                                @endif
                            </td>

                            <!-- INFORMASI ARTIKEL -->
                            <td>
                                <div class="fw-semibold text-dark mb-1">
                                    {{ $item->judul }}
                                </div>
                                <small class="text-muted">
                                    {{ Str::limit(strip_tags($item->deskripsi), 80) }}
                                </small>
                            </td>

                            <!-- KATEGORI -->
                            <td>
                                <span class="badge badge-{{ $badge }}">
                                    {{ $item->kategori }}
                                </span>
                            </td>

                            <!-- TANGGAL -->
                            <td class="text-muted">
                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                            </td>

                            <!-- AKSI -->
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{ route('admin.artikel.edit', $item->id) }}"
                                       class="btn btn-icon btn-icon-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.artikel.destroy', $item->id) }}"
                                          method="POST"
                                          onsubmit="return confirmDelete()"
                                          style="display: inline;">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-icon btn-icon-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <!-- EMPTY STATE -->
                        <tr>
                            <td colspan="6">
                                <div class="empty-state">
                                    <i class="bi bi-file-text"></i>
                                    <h5>Data artikel belum tersedia</h5>
                                    <p>Belum ada artikel yang ditambahkan. Mulai dengan menambahkan artikel baru.</p>
                                    {{-- <a href="{{ route('admin.artikel.create') }}" class="btn btn-primary">
                                        <i class="bi bi-plus-circle me-2"></i>
                                        Tambah Artikel Baru
                                    </a> --}}
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- PAGINATION -->
    <div class="d-flex justify-content-center mt-4">
        {{ $artikels->links('pagination::bootstrap-4') }}
    </div>
</div>

<!-- SCRIPT -->
<script>
const searchInput = document.getElementById('searchInput');
const kategoriFilter = document.getElementById('kategoriFilter');
const sortSelect = document.getElementById('sortSelect');

function filterArtikel(){
    const search = searchInput.value.toLowerCase();
    const kategori = kategoriFilter.value;

    document.querySelectorAll('.artikel-item').forEach(item => {
        const judul = item.dataset.judul;
        const kat = item.dataset.kategori;

        const matchesSearch = judul.includes(search);
        const matchesKategori = kategori === '' || kat === kategori;

        item.style.display = matchesSearch && matchesKategori ? '' : 'none';
    });
}

searchInput.addEventListener('input', filterArtikel);
kategoriFilter.addEventListener('change', filterArtikel);

sortSelect.addEventListener('change', function(){
    const items = [...document.querySelectorAll('.artikel-item')];
    const container = document.getElementById('artikelContainer');

    items.sort((a,b)=>{
        if(this.value==='title') return a.dataset.judul.localeCompare(b.dataset.judul);
        return this.value==='newest'
            ? new Date(b.dataset.tanggal)-new Date(a.dataset.tanggal)
            : new Date(a.dataset.tanggal)-new Date(b.dataset.tanggal);
    });

    items.forEach(i=>container.appendChild(i));
});

function confirmDelete(){
    return confirm('Yakin ingin menghapus artikel? Tindakan ini tidak dapat dibatalkan.');
}
</script>
@endsection