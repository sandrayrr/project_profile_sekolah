@extends('admin.layout')

@section('title', 'Manajemen User')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Manajemen User</h4>
            <p class="text-muted mb-0">Kelola akun pengguna sistem (Admin, Guru, Siswa)</p>
        </div>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="bi bi-person-plus-fill me-2"></i> Tambah User
        </a>
    </div>

    {{-- STATISTIK KARTU --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-0 bg-gradient-primary text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h6 class="mb-0 text-white-50">Total User</h6>
                            <h3 class="mb-0 fw-bold">{{ $users->count() }}</h3>
                        </div>
                        <div class="ms-3">
                            <i class="bi bi-people-fill fs-1 opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-0 bg-gradient-danger text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h6 class="mb-0 text-white-50">Admin</h6>
                            <h3 class="mb-0 fw-bold">{{ $users->where('role', 'admin')->count() }}</h3>
                        </div>
                        <div class="ms-3">
                            <i class="bi bi-shield-fill-check fs-1 opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-0 bg-gradient-info text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h6 class="mb-0 text-white-50">Guru</h6>
                            <h3 class="mb-0 fw-bold">{{ $users->where('role', 'guru')->count() }}</h3>
                        </div>
                        <div class="ms-3">
                            <i class="bi bi-person-workspace fs-1 opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-0 bg-gradient-success text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h6 class="mb-0 text-white-50">Siswa</h6>
                            <h3 class="mb-0 fw-bold">{{ $users->where('role', 'siswa')->count() }}</h3>
                        </div>
                        <div class="ms-3">
                            <i class="bi bi-mortarboard-fill fs-1 opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- NOTIFIKASI --}}
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-4" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- SEARCH & FILTER --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.users.index') }}">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-end-0">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" name="q" value="{{ $q ?? '' }}" class="form-control border-start-0" placeholder="Cari nama atau email...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select name="role" class="form-select" id="filterRole">
                            <option value="">Semua Role</option>
                            <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="guru" {{ request('role') == 'guru' ? 'selected' : '' }}>Guru</option>
                            <option value="siswa" {{ request('role') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-outline-secondary w-100">
                            <i class="bi bi-funnel me-2"></i> Terapkan Filter
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- TABLE --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light border-bottom">
                        <tr>
                            <th class="text-center" style="width:60px;">No</th>
                            <th>Nama</th>
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
                                    <div class="avatar-sm bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3">
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
                                    <form action="{{ route('admin.users.destroy', $u->id) }}" 
                                          method="POST" 
                                          onsubmit="return confirmDelete('Yakin ingin menghapus user {{ $u->name }}?')">
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
                            <td colspan="6">
                                <div class="text-center py-5">
                                    <i class="bi bi-person-x fs-1 text-muted"></i>
                                    <h5 class="mt-3 text-muted">Belum ada user</h5>
                                    <p class="text-muted">Tambahkan user pertama untuk memulai</p>
                                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary mt-2">
                                        <i class="bi bi-person-plus-fill me-2"></i>Tambah User
                                    </a>
                                </div>
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

<style>
.bg-gradient-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.bg-gradient-danger { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
.bg-gradient-info { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
.bg-gradient-success { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }
.hover-lift { transition: all 0.3s ease; }
.hover-lift:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; }
.avatar-sm { width: 35px; height: 35px; font-size: 0.9rem; font-weight: bold; }
.table th { font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; border-bottom: 2px solid #dee2e6; }
.form-control:focus, .form-select:focus { border-color: #667eea; box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25); }
.input-group-text { border-color: #dee2e6; }
</style>

<script>
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
