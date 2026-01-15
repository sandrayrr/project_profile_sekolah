@extends('admin.layout')

@section('title', 'Manajemen Staff Kependidikan')

@section('content')
<style>
    :root {
        --primary-color: #667eea;
        --secondary-color: #764ba2;
        --light-gray: #f8f9fa;
        --medium-gray: #e9ecef;
        --dark-gray: #6c757d;
        --white: #ffffff;
        --shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        --shadow-md: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        --shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
        --border-radius: 0.5rem;
    }
    
    /* Animasi */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .fade-in {
        animation: fadeIn 0.5s ease-out;
    }
    
    /* Card Styles */
    .staff-card {
        border: none;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
        height: 100%;
    }
    
    .staff-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .staff-card-header {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        padding: 1.5rem;
        text-align: center;
        position: relative;
    }
    
    .staff-card-header::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 30px;
        background: var(--white);
        border-radius: 50%;
        z-index: 1;
    }
    
    .staff-photo {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid var(--white);
        margin: 0 auto;
        display: block;
        box-shadow: var(--shadow-md);
    }
    
    .staff-photo-placeholder {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background-color: var(--light-gray);
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 4px solid var(--white);
        box-shadow: var(--shadow-md);
    }
    
    .staff-card-body {
        padding: 2rem 1.5rem 1.5rem;
        text-align: center;
    }
    
    .staff-name {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    
    .staff-position {
        color: var(--dark-gray);
        margin-bottom: 1rem;
    }
    
    .staff-date {
        color: var(--dark-gray);
        font-size: 0.875rem;
        margin-bottom: 1.5rem;
    }
    
    .staff-actions {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
    }
    
    .btn-action {
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        font-size: 0.875rem;
        transition: all 0.2s ease;
    }
    
    .btn-edit {
        background-color: rgba(13, 110, 253, 0.1);
        color: #0d6efd;
        border: 1px solid rgba(13, 110, 253, 0.2);
    }
    
    .btn-edit:hover {
        background-color: #0d6efd;
        color: white;
    }
    
    .btn-delete {
        background-color: rgba(220, 53, 69, 0.1);
        color: #dc3545;
        border: 1px solid rgba(220, 53, 69, 0.2);
    }
    
    .btn-delete:hover {
        background-color: #dc3545;
        color: white;
    }
    
    /* Grid Layout */
    .staff-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
    }
    
    /* Empty State */
    .empty-state {
        grid-column: 1 / -1;
        text-align: center;
        padding: 3rem;
    }
    
    .empty-state i {
        font-size: 4rem;
        color: var(--dark-gray);
        margin-bottom: 1rem;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .staff-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4 fade-in">
        <div>
            <h4 class="fw-bold mb-1">Manajemen Staff Kependidikan</h4>
            <p class="text-muted mb-0">Kelola seluruh data staf kependidikan sekolah</p>
        </div>
        <a href="{{ route('admin.staffkependidikan.create') }}"
           class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="bi bi-plus-circle me-2"></i> Tambah Staff
        </a>
    </div>

    {{-- STAT --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 bg-gradient-primary text-white shadow-sm fade-in" style="animation-delay: 0.1s;">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h6 class="mb-0 text-white-50">Total Staff Kependidikan</h6>
                        <h3 class="mb-0 fw-bold">{{ $staff->count() }}</h3>
                    </div>
                    <i class="bi bi-people fs-1 opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- ALERT --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4 fade-in" style="animation-delay: 0.2s;">
            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- FILTER --}}
    <div class="card border-0 shadow-sm mb-4 fade-in" style="animation-delay: 0.3s;">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-8">
                    <input type="text" id="searchInput"
                           class="form-control"
                           placeholder="Cari nama atau jabatan staff...">
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="sortBy">
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="name">Nama A-Z</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    {{-- CARD GRID --}}
    <div class="card border-0 shadow-sm fade-in" style="animation-delay: 0.4s;">
        <div class="card-body p-4">
            <div class="staff-grid" id="staffGrid">
                @forelse ($staff as $item)
                    <div class="staff-card staff-item"
                         data-nama="{{ strtolower($item->nama) }}"
                         data-jabatan="{{ strtolower($item->jabatan) }}"
                         data-tanggal="{{ $item->created_at }}">
                        
                        <div class="staff-card-header">
                            @if($item->foto)
                                <img src="{{ asset('storage/'.$item->foto) }}"
                                     class="staff-photo"
                                     alt="{{ $item->nama }}">
                            @else
                                <div class="staff-photo-placeholder">
                                    <i class="bi bi-person text-muted fs-2"></i>
                                </div>
                            @endif
                        </div>
                        
                        <div class="staff-card-body">
                            <h5 class="staff-name">{{ $item->nama }}</h5>
                            <p class="staff-position">
                                <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-2 rounded-pill">
                                    {{ $item->jabatan }}
                                </span>
                            </p>
                            <p class="staff-date">
                                <i class="bi bi-calendar3 me-1"></i>
                                {{ $item->created_at->format('d M Y') }}
                            </p>
                            
                            <div class="staff-actions">
                                <a href="{{ route('admin.staffkependidikan.edit',$item->id) }}"
                                   class="btn btn-action btn-edit">
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </a>

                                <form action="{{ route('admin.staffkependidikan.destroy',$item->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-action btn-delete">
                                        <i class="bi bi-trash me-1"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    {{-- EMPTY STATE --}}
                    <div class="empty-state">
                        <i class="bi bi-person-badge"></i>
                        <h5 class="text-muted">Data staff kependidikan belum tersedia</h5>
                        <p class="text-muted">Tambahkan staff kependidikan untuk ditampilkan</p>
                        <a href="{{ route('admin.staffkependidikan.create') }}"
                           class="btn btn-primary mt-2">
                            <i class="bi bi-plus-circle me-1"></i>
                            Tambah Staff
                        </a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

{{-- SCRIPT --}}
<script>
// Mengubah selector dari .staff-row menjadi .staff-item
const items = document.querySelectorAll('.staff-item');

// SEARCH
document.getElementById('searchInput').addEventListener('input', e => {
    const val = e.target.value.toLowerCase();
    items.forEach(item => {
        item.style.display =
            item.dataset.nama.includes(val) ||
            item.dataset.jabatan.includes(val)
            ? '' : 'none';
    });
});

// SORT
document.getElementById('sortBy').addEventListener('change', e => {
    const grid = document.getElementById('staffGrid');
    const sorted = [...items].sort((a,b) => {
        if(e.target.value === 'name')
            return a.dataset.nama.localeCompare(b.dataset.nama);
        if(e.target.value === 'oldest')
            return new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
        return new Date(b.dataset.tanggal) - new Date(a.dataset.tanggal);
    });
    sorted.forEach(item => grid.appendChild(item));
});
</script>

<style>
.bg-gradient-primary {
    background: linear-gradient(135deg,#667eea,#764ba2);
}
.hover-lift:hover {
    transform: translateY(-2px);
}
</style>
@endsection