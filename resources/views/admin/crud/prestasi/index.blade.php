@extends('admin.layout')

@section('title', 'Manajemen Prestasi')

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
    
    /* Badge Jurusan */
    .badge-to {
        background-color: rgba(0, 86, 179, 0.1);
        color: var(--primary-blue);
    }
    
    .badge-tjkt {
        background-color: rgba(99, 102, 241, 0.1);
        color: #6366f1;
    }
    
    .badge-pplg {
        background-color: rgba(255, 193, 7, 0.1);
        color: var(--accent-yellow);
    }
    
    .badge-dpib {
        background-color: rgba(107, 114, 128, 0.1);
        color: #6b7280;
    }
    
    .badge-mplb {
        background-color: rgba(239, 68, 68, 0.1);
        color: var(--accent-red);
    }
    
    .badge-akl {
        background-color: rgba(251, 146, 60, 0.1);
        color: #fb923c;
    }
    
    .badge-sp {
        background-color: rgba(17, 24, 39, 0.1);
        color: #111827;
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
    
    /* Tombol tambah prestasi yang lebih kecil di empty state */
    .empty-state .btn-primary {
        padding: 0.35rem 0.7rem;
        font-size: 0.7rem;
        border-radius: 6px;
    }
    
    .empty-state .btn-primary i {
        font-size: 0.75rem;
        margin-right: 0.3rem;
    }
    
    /* Image Container */
    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .image-container:hover {
        transform: scale(1.05);
        box-shadow: var(--shadow-lg);
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
    }
</style>

<div class="container">
    <!-- HEADER -->
    <div class="page-header fade-in">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="fw-bold mb-1">Manajemen Prestasi</h1>
                <p class="mb-0 opacity-90">Kelola daftar prestasi siswa dengan mudah</p>
            </div>
            <a href="{{ route('admin.prestasi.create') }}" class="btn btn-light">
                <i class="bi bi-plus-circle me-2"></i> Tambah Prestasi
            </a>
        </div>
    </div>

    <!-- STATISTIK -->
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Total Prestasi</p>
                        <h2 class="fw-bold mb-0">{{ $prestasi->count() }}</h2>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-trophy"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in" style="animation-delay: 0.1s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Tahun Ini</p>
                        <h2 class="fw-bold mb-0">{{ $prestasi->where('tanggal', '>=', now()->startOfYear())->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: var(--gradient-primary);">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in" style="animation-delay: 0.2s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Juara Umum</p>
                        <h2 class="fw-bold mb-0">{{ $prestasi->where('juara', 1)->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);">
                        <i class="bi bi-award"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in" style="animation-delay: 0.3s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Kategori</p>
                        <h2 class="fw-bold mb-0">7</h2>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                        <i class="bi bi-tags"></i>
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
            <h5>Filter Prestasi</h5>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" id="searchInput" placeholder="Cari judul prestasi...">
                </div>
            </div>
            <div class="col-md-2">
                <select class="form-select" id="filterKelas">
                    <option value="">Semua Kelas</option>
                    <option value="Kelas X">Kelas X</option>
                    <option value="Kelas XI">Kelas XI</option>
                    <option value="Kelas XII">Kelas XII</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-select" id="filterJurusan">
                    <option value="">Semua Jurusan</option>
                    <option value="TJKT">TJKT</option>
                    <option value="TO">TO</option>
                    <option value="PPLG">PPLG</option>
                    <option value="DPIB">DPIB</option>
                    <option value="MPLB">MPLB</option>
                    <option value="AKL">AKL</option>
                    <option value="SP">SP</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-select" id="sortBy">
                    <option value="newest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="title">Judul A-Z</option>
                </select>
            </div>
        </div>
    </div>

    <!-- TABEL PRESTASI -->
    <div class="table-card slide-in" style="animation-delay: 0.4s;">
        <div class="table-header">
            <h5 class="table-title">Daftar Prestasi</h5>
            <div class="table-actions">
                <button class="btn btn-light btn-sm">
                    <i class="bi bi-download me-2"></i> Export
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table" id="prestasiTable">
                <thead>
                    <tr>
                        <th width="60">No</th>
                        <th width="120">Foto</th>
                        <th>Informasi Prestasi</th>
                        <th width="120">Kelas</th>
                        <th width="120">Jurusan</th>
                        <th width="140">Tanggal</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($prestasi as $p)
                        <tr class="prestasi-row"
                            data-judul="{{ strtolower($p->judul) }}"
                            data-kelas="{{ $p->kelas }}"
                            data-jurusan="{{ $p->jurusan }}"
                            data-tanggal="{{ $p->tanggal }}">
                            
                            <td class="text-center text-muted fw-semibold">
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                @if ($p->foto)
                                    <div class="image-container">
                                        <img src="{{ asset('storage/'.$p->foto) }}"
                                             class="rounded"
                                             style="width:80px;height:60px;object-fit:cover;cursor:pointer"
                                             onclick="showImageModal('{{ asset('storage/'.$p->foto) }}')">
                                    </div>
                                @else
                                    <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                         style="width:80px;height:60px">
                                        <i class="bi bi-image text-muted"></i>
                                    </div>
                                @endif
                            </td>

                            <td>
                                <div class="fw-semibold mb-1">{{ $p->judul }}</div>
                                <small class="text-muted d-block mb-2">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($p->deskripsi), 80) }}
                                </small>
                                <div class="d-flex gap-2 flex-wrap">
                                    @if($p->juara)
                                        <span class="badge badge-warning">Juara {{ $p->juara }}</span>
                                    @endif
                                    <span class="badge badge-primary">{{ $p->tingkat }}</span>
                                    <span class="badge badge-info">{{ $p->penyelenggara }}</span>
                                </div>
                            </td>

                            <td class="text-center">
                                <span class="badge badge-info">{{ $p->kelas }}</span>
                            </td>

                            <td class="text-center">
                                <span class="badge badge-{{ strtolower($p->jurusan) }}">{{ $p->jurusan }}</span>
                            </td>

                            <td class="text-center text-muted">
                                {{ \Carbon\Carbon::parse($p->tanggal)->format('d M Y') }}
                            </td>

                            <td class="text-center">
                                <div class="d-inline-flex gap-1">
                                    <a href="{{ route('admin.prestasi.edit',$p->id) }}" class="btn btn-icon btn-icon-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.prestasi.destroy',$p->id) }}" method="POST"
                                          onsubmit="return confirmDelete()">
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
                            <td colspan="7">
                                <div class="empty-state">
                                    <i class="bi bi-trophy"></i>
                                    <h5>Data prestasi belum tersedia</h5>
                                    <p>Belum ada data prestasi yang ditambahkan. Mulai dengan menambahkan prestasi baru.</p>
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
        {{ $prestasi->links('pagination::bootstrap-4') }}
    </div>
</div>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <img id="modalImage" src="" class="modal-image" alt="Prestasi Image">
            </div>
        </div>
    </div>
</div>

<script>
const searchInput = document.getElementById('searchInput');
const filterKelas = document.getElementById('filterKelas');
const filterJurusan = document.getElementById('filterJurusan');
const sortBy = document.getElementById('sortBy');

function filterPrestasi() {
    const searchValue = searchInput.value.toLowerCase();
    const kelasFilter = filterKelas.value;
    const jurusanFilter = filterJurusan.value;

    document.querySelectorAll('.prestasi-row').forEach(item => {
        const judul = item.dataset.judul.toLowerCase();
        const kelasItem = item.dataset.kelas;
        const jurusanItem = item.dataset.jurusan;

        const matchesSearch = judul.includes(searchValue);
        const matchesKelas = !kelasFilter || kelasItem === kelasFilter;
        const matchesJurusan = !jurusanFilter || jurusanItem === jurusanFilter;

        item.style.display =
            matchesSearch && matchesKelas && matchesJurusan
                ? ''
                : 'none';
    });
}

searchInput.addEventListener('input', filterPrestasi);
filterKelas.addEventListener('change', filterPrestasi);
filterJurusan.addEventListener('change', filterPrestasi);

sortBy.addEventListener('change', function () {
    const items = [...document.querySelectorAll('.prestasi-row')];
    const tbody = document.querySelector('#prestasiTable tbody');

    items.sort((a, b) => {
        if (this.value === 'title') {
            return a.dataset.judul.localeCompare(b.dataset.judul);
        }

        return this.value === 'newest'
            ? new Date(b.dataset.tanggal) - new Date(a.dataset.tanggal)
            : new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
    });

    items.forEach(item => tbody.appendChild(item));
});
</script>

@endsection