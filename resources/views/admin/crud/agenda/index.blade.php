@extends('admin.layout')

@section('title','Agenda Sekolah')

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
        border-bottom: 2px solid var(--border-color);
        color: var(--dark-color);
        font-weight: 600;
        padding: 1rem;
        font-size: 0.875rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        position: sticky;
        top: 0;
        z-index: 10;
    }
    
    .table tbody td {
        padding: 1rem;
        vertical-align: middle;
        border-bottom: 1px solid var(--border-color);
    }
    
    .table tbody tr:last-child td {
        border-bottom: none;
    }
    
    .table tbody tr {
        transition: all 0.2s ease;
    }
    
    .table tbody tr:hover {
        background-color: var(--lighter-blue);
        transform: scale(1.01);
        box-shadow: var(--shadow-sm);
    }
    
    /* Badge */
    .badge {
        padding: 0.375rem 0.75rem;
        border-radius: 9999px;
        font-weight: 500;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
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
        transition: all 0.2s ease;
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
    
    .btn-icon-primary:hover {
        background-color: var(--primary-blue);
        color: white;
    }
    
    .btn-icon-danger {
        color: var(--accent-red);
    }
    
    .btn-icon-danger:hover {
        background-color: var(--accent-red);
        color: white;
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
    
    /* Tombol tambah agenda yang lebih kecil di empty state */
    .empty-state .btn-primary {
        padding: 0.35rem 0.7rem;
        font-size: 0.7rem;
        border-radius: 6px;
    }
    
    .empty-state .btn-primary i {
        font-size: 0.75rem;
        margin-right: 0.3rem;
    }
    
    /* Table Cell Styling */
    .table-cell-no {
        width: 50px;
        text-align: center;
    }
    
    .table-cell-info {
        min-width: 300px;
    }
    
    .table-cell-date {
        width: 140px;
        text-align: center;
    }
    
    .table-cell-status {
        width: 140px;
        text-align: center;
    }
    
    .table-cell-actions {
        width: 100px;
        text-align: center;
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
                <h1 class="fw-bold mb-1">Agenda Sekolah</h1>
                <p class="mb-0 opacity-90">Kelola agenda dan kegiatan sekolah</p>
            </div>
            <a href="{{ route('admin.agenda.create') }}" class="btn btn-light">
                <i class="bi bi-plus-circle me-2"></i> Tambah Agenda
            </a>
        </div>
    </div>

    <!-- STATISTIK -->
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Total Agenda</p>
                        <h2 class="fw-bold mb-0">{{ $agendas->count() }}</h2>
                    </div>
                    <div class="stat-icon">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in" style="animation-delay: 0.1s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Bulan Ini</p>
                        <h2 class="fw-bold mb-0">{{ $agendas->where('tanggal', '>=', now()->startOfMonth())->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: var(--gradient-primary);">
                        <i class="bi bi-calendar-month"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in" style="animation-delay: 0.2s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Akan Datang</p>
                        <h2 class="fw-bold mb-0">{{ $agendas->where('tanggal', '>', now())->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);">
                        <i class="bi bi-calendar-event"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="stat-card slide-in" style="animation-delay: 0.3s;">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Selesai</p>
                        <h2 class="fw-bold mb-0">{{ $agendas->where('tanggal', '<', now())->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                        <i class="bi bi-calendar-check"></i>
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
            <h5>Filter Agenda</h5>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control" id="searchInput" placeholder="Cari judul agenda...">
                </div>
            </div>
            <div class="col-md-3">
                <select class="form-select" id="filterTanggal">
                    <option value="">Semua</option>
                    <option value="today">Hari Ini</option>
                    <option value="upcoming">Akan Datang</option>
                    <option value="past">Terlewat</option>
                    <option value="this-month">Bulan Ini</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select" id="sortBy">
                    <option value="newest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="title">Judul A-Z</option>
                    <option value="date">Tanggal Terdekat</option>
                </select>
            </div>
        </div>
    </div>

    <!-- TABEL AGENDA -->
    <div class="table-card slide-in" style="animation-delay: 0.4s;">
        <div class="table-header">
            <h5 class="table-title">Daftar Agenda</h5>
        </div>
        <div class="table-responsive">
            <table class="table" id="agendaTable">
                <thead>
                    <tr>
                        <th class="table-cell-no">No</th>
                        <th class="table-cell-info">Informasi Agenda</th>
                        <th class="table-cell-date">Tanggal</th>
                        <th class="table-cell-status">Status</th>
                        <th class="table-cell-actions">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($agendas as $agenda)
                        <tr class="agenda-row"
                            data-judul="{{ strtolower($agenda->judul) }}"
                            data-tanggal="{{ $agenda->tanggal }}"
                            data-status="{{ $agenda->status ?? 'upcoming' }}">
                            
                            <td class="table-cell-no">
                                <span class="badge bg-light text-dark rounded-pill">
                                    {{ $loop->iteration }}
                                </span>
                            </td>

                            <td class="table-cell-info">
                                <div class="fw-semibold mb-1">{{ $agenda->judul }}</div>
                                <small class="text-muted">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($agenda->deskripsi), 80) }}
                                </small>
                            </td>

                            <td class="table-cell-date">
                                <span class="badge badge-info">
                                    <i class="bi bi-calendar-event me-1"></i>
                                    {{ \Carbon\Carbon::parse($agenda->tanggal)->format('d M Y') }}
                                </span>
                            </td>

                            <td class="table-cell-status">
                                @if($agenda->tanggal > now())
                                    <span class="badge badge-warning">Akan Datang</span>
                                @elseif($agenda->tanggal == now()->format('Y-m-d'))
                                    <span class="badge badge-primary">Hari Ini</span>
                                @else
                                    <span class="badge badge-success">
                                        <i class="bi bi-calendar-check me-1"></i>Selesai
                                    </span>
                                @endif
                            </td>

                            <td class="table-cell-actions">
                                <div class="d-inline-flex gap-1">
                                    <a href="{{ route('admin.agenda.edit',$agenda->id) }}" class="btn btn-icon btn-icon-primary" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.agenda.destroy',$agenda->id) }}" method="POST"
                                          onsubmit="return confirmDelete()">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-icon btn-icon-danger" title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <!-- EMPTY STATE -->
                        <tr>
                            <td colspan="5">
                                <div class="empty-state">
                                    <i class="bi bi-calendar-x"></i>
                                    <h5>Data agenda belum tersedia</h5>
                                    <p>Belum ada agenda yang ditambahkan. Mulai dengan menambahkan agenda baru.</p>
                                    </a>
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
        {{ $agendas->links('pagination::bootstrap-4') }}
    </div>
</div>

<script>
const searchInput = document.getElementById('searchInput');
const filterTanggal = document.getElementById('filterTanggal');
const sortBy = document.getElementById('sortBy');

function applyFilter() {
    const search = searchInput.value.toLowerCase();
    const filter = filterTanggal.value;
    const today = new Date().toISOString().slice(0,10);
    const currentMonth = new Date().toISOString().slice(0,7);

    document.querySelectorAll('.agenda-row').forEach(row => {
        let visible = true;
        const judul = row.dataset.judul;
        const tanggal = row.dataset.tanggal;

        if (search && !judul.includes(search)) visible = false;

        if (filter === 'today' && tanggal !== today) visible = false;
        if (filter === 'upcoming' && tanggal <= today) visible = false;
        if (filter === 'past' && tanggal > today) visible = false;
        if (filter === 'this-month' && !tanggal.startsWith(currentMonth)) visible = false;

        row.style.display = visible ? '' : 'none';
    });
}

function applySort() {
    const rows = Array.from(document.querySelectorAll('.agenda-row'));
    const tbody = document.querySelector('#agendaTable tbody');

    rows.sort((a,b)=>{
        if (sortBy.value === 'title') {
            return a.dataset.judul.localeCompare(b.dataset.judul);
        }
        if (sortBy.value === 'date') {
            return new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
        }
        if (sortBy.value === 'oldest') {
            return new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
        }
        return new Date(b.dataset.tanggal) - new Date(a.dataset.tanggal);
    });

    rows.forEach(r => tbody.appendChild(r));
}

searchInput.addEventListener('input', applyFilter);
filterTanggal.addEventListener('change', applyFilter);
sortBy.addEventListener('change', () => {
    applySort();
    applyFilter();
});

function confirmDelete(){
    return confirm('Yakin ingin menghapus agenda ini?');
}
</script>
@endsection