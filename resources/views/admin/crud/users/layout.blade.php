@extends('admin.layout')

@section('title', 'Manajemen User')

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
        /* Background yang lebih bersih dan elegan */
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        color: var(--dark-color);
        position: relative;
        overflow-x: hidden;
        line-height: 1.6;
        min-height: 100vh;
    }
    
    /* Animasi yang lebih halus */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes slideInLeft {
        from { opacity: 0; transform: translateX(-30px); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes slideInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .fade-in {
        animation: fadeIn 0.8s ease-out;
    }
    
    .slide-in-left {
        animation: slideInLeft 0.8s ease-out;
    }
    
    .slide-in-up {
        animation: slideInUp 0.8s ease-out;
    }
    
    /* Container */
    .container-fluid {
        padding: 2rem;
        max-width: 1400px;
        margin: 0 auto;
    }
    
    /* Header Section yang lebih bersih */
    .page-header {
        background: var(--gradient-primary);
        color: white;
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: var(--shadow-2xl);
        position: relative;
        overflow: hidden;
        margin-bottom: 2rem;
        /* Menambahkan efek glassmorphism */
        backdrop-filter: blur(10px);
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
    
    .page-header-content {
        position: relative;
        z-index: 1;
    }
    
    /* Stat Card yang lebih modern */
    .stat-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        margin-bottom: 1.5rem;
        height: 100%;
        border: 1px solid rgba(0,0,0,0.05);
        /* Border kiri yang menarik */
        border-left: 4px solid transparent;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-xl);
    }
    
    /* Memberi warna pada border kiri saat hover */
    .stat-card:hover::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--gradient-primary);
    }

    .stat-card:nth-child(1):hover::before { background: var(--gradient-modern); }
    .stat-card:nth-child(2):hover::before { background: var(--gradient-danger); }
    .stat-card:nth-child(3):hover::before { background: var(--gradient-secondary); }
    .stat-card:nth-child(4):hover::before { background: var(--gradient-success); }
    
    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
        color: white;
        box-shadow: var(--shadow-md);
    }
    
    /* Filter Card */
    .filter-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: var(--shadow-md);
        margin-bottom: 1.5rem;
        border: 1px solid rgba(0,0,0,0.05);
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
    
    /* Table Card yang lebih rapi */
    .table-card {
        background: white;
        border-radius: 16px;
        box-shadow: var(--shadow-lg);
        overflow: hidden;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .table {
        margin-bottom: 0;
    }
    
    .table thead th {
        border-bottom: 2px solid var(--border-color);
        color: var(--dark-color);
        font-weight: 600;
        padding: 15px;
        background: rgba(0, 86, 179, 0.05);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .table tbody td {
        padding: 15px;
        vertical-align: middle;
        border-bottom: 1px solid var(--border-color);
    }
    
    /* Hover effect pada baris tabel yang lebih halus */
    .table tbody tr {
        transition: all 0.2s ease-in-out;
    }
    
    .table tbody tr:hover {
        background-color: var(--light-blue);
        box-shadow: var(--shadow-sm);
    }
    
    /* Badge */
    .badge {
        padding: 6px 12px;
        border-radius: 50px;
        font-weight: 500;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
    }
    
    /* User Avatar yang sedikit lebih baik */
    .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        color: white;
        margin-right: 12px;
        flex-shrink: 0;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.2);
    }
    
    .avatar-admin { background: var(--gradient-danger); }
    .avatar-guru { background: var(--gradient-secondary); }
    .avatar-siswa { background: var(--gradient-success); }
    
    /* Button yang lebih halus */
    .btn {
        padding: 0.6rem 1.2rem;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    
    .btn i {
        margin-right: 0.5rem;
    }
    
    .btn-primary {
        background: var(--gradient-primary);
        color: white;
        box-shadow: var(--shadow-sm);
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-lg);
        color: white;
    }
    
    .btn-light {
        background: white;
        color: var(--primary-blue);
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--border-color);
    }
    
    .btn-light:hover {
        background: var(--light-blue);
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
        color: var(--primary-blue);
    }

    .btn-group .btn {
        border-radius: 0;
    }
    .btn-group .btn:first-child { border-radius: 8px 0 0 8px; }
    .btn-group .btn:last-child { border-radius: 0 8px 8px 0; }
    .btn-group .btn:not(:last-child) { border-right: 1px solid var(--border-color); }

    /* Empty State */
    .empty-state {
        padding: 60px 20px;
        text-align: center;
    }
    
    .empty-state i {
        font-size: 4rem;
        color: var(--text-muted);
        margin-bottom: 1.5rem;
    }
    
    .empty-state h5 {
        margin-bottom: 1rem;
        font-size: 1.25rem;
        font-weight: 600;
    }
    
    /* Pagination */
    .pagination {
        justify-content: center;
        margin-top: 2rem;
    }
    
    .page-link {
        border-radius: 10px;
        margin: 0 3px;
        color: var(--primary-blue);
        border: 1px solid var(--border-color);
    }
    
    .page-item.active .page-link {
        background: var(--gradient-primary);
        border-color: var(--primary-blue);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .container-fluid { padding: 1rem; }
        .page-header { padding: 1.5rem; }
    }
</style>

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="page-header fade-in">
        <div class="page-header-content">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h1 class="fw-bold mb-1">Manajemen User</h1>
                    <p class="mb-0 opacity-75">Kelola akun pengguna sistem (Admin, Guru, Siswa)</p>
                </div>
                <a href="{{ route('admin.users.create') }}" class="btn btn-light px-4 shadow-sm">
                    <i class="bi bi-person-plus-fill me-2"></i> Tambah User
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
                        <span class="text-muted small d-block mb-1">Total User</span>
                        <h2 class="fw-bold mb-0">{{ $users->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: var(--gradient-modern);">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 slide-in-left" style="animation-delay: 0.2s;">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small d-block mb-1">Admin</span>
                        <h2 class="fw-bold mb-0">{{ $users->where('role', 'admin')->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: var(--gradient-danger);">
                        <i class="bi bi-shield-fill-check"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 slide-in-left" style="animation-delay: 0.3s;">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small d-block mb-1">Guru</span>
                        <h2 class="fw-bold mb-0">{{ $users->where('role', 'guru')->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: var(--gradient-secondary);">
                        <i class="bi bi-person-workspace"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 slide-in-left" style="animation-delay: 0.4s;">
            <div class="stat-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span class="text-muted small d-block mb-1">Siswa</span>
                        <h2 class="fw-bold mb-0">{{ $users->where('role', 'siswa')->count() }}</h2>
                    </div>
                    <div class="stat-icon" style="background: var(--gradient-success);">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- NOTIFIKASI --}}
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4 slide-in-up" style="animation-delay: 0.5s;">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-4 slide-in-up" style="animation-delay: 0.5s;">
        <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    {{-- SEARCH & FILTER --}}
    <div class="filter-card slide-in-up" style="animation-delay: 0.6s;">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.users.index') }}">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small text-muted fw-semibold">Cari User</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                            <input type="text" name="q" value="{{ $q ?? '' }}" class="form-control" placeholder="Cari nama atau email...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label small text-muted fw-semibold">Role</label>
                        <select name="role" class="form-select" id="filterRole">
                            <option value="">Semua Role</option>
                            <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="guru" {{ request('role') == 'guru' ? 'selected' : '' }}>Guru</option>
                            <option value="siswa" {{ request('role') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label small text-muted fw-semibold">Filter</label>
                        <button type="submit" class="btn btn-outline-secondary w-100">
                            <i class="bi bi-funnel me-2"></i> Terapkan Filter
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- TABLE --}}
    <div class="table-card slide-in-up" style="animation-delay: 0.7s;">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:60px;">No</th>
                            <th>User</th>
                            <th>Email</th>
                            <th class="text-center" style="width:120px;">Role</th>
                            <th class="text-center" style="width:150px;">Dibuat</th>
                            <th class="text-center" style="width:180px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $u)
                        <tr>
                            <td class="text-center">
                                <span class="badge bg-light text-dark rounded-pill">{{ $users->firstItem() + $loop->index }}</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="user-avatar avatar-{{ $u->role }}">
                                        {{ strtoupper(substr($u->name, 0, 1)) }}
                                    </div>
                                    <div class="fw-semibold">{{ $u->name }}</div>
                                </div>
                            </td>
                            <td class="text-muted">{{ $u->email }}</td>
                            <td class="text-center">
                                @if($u->role === 'admin')
                                    <span class="badge bg-danger">Admin</span>
                                @elseif($u->role === 'guru')
                                    <span class="badge bg-info">Guru</span>
                                @else
                                    <span class="badge bg-success">Siswa</span>
                                @endif
                            </td>
                            <td class="text-center text-muted">
                                <small>{{ $u->created_at ? $u->created_at->format('d M Y') : '-' }}</small>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.users.show', $u->id) }}" class="btn btn-sm btn-outline-primary" title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.users.edit', $u->id) }}" class="btn btn-sm btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('admin.users.destroy', $u->id) }}" method="POST" onsubmit="return confirmDelete('Yakin ingin menghapus user {{ $u->name }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="empty-state">
                                <i class="bi bi-people"></i>
                                <h5 class="mt-3 text-muted">Belum ada user</h5>
                                <p class="text-muted">Tambahkan user pertama untuk memulai</p>
                                <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-lg px-4">
                                    <i class="bi bi-person-plus-fill me-2"></i>Tambah User
                                </a>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        
        {{-- PAGINATION --}}
        @if($users->hasPages())
        <div class="card-footer bg-transparent border-top">
            <div class="d-flex justify-content-between align-items-center">
                <div class="text-muted">
                    Menampilkan {{ $users->firstItem() }} - {{ $users->lastItem() }} dari {{ $users->total() }} data
                </div>
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
        </div>
        @endif
    </div>

</div>

<script>
// Custom confirm dialog dengan SweetAlert2 yang lebih menarik
function confirmDelete(message) {
    return Swal.fire({
        title: 'Konfirmasi Hapus',
        text: message,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal',
        reverseButtons: true
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