@extends('admin.layout')

@section('title', 'Manajemen Tenaga Kependidikan')

@section('content')
<style>
:root {
    --primary-blue:#3b82f6;
    --secondary-blue:#60a5fa;
    --lighter-blue:#eff6ff;
    --light-gray:#f3f4f6;
    --gray-color:#6b7280;
    --dark-color:#1f2937;
    --border-color:#e5e7eb;
    --accent-red:#ef4444;
    --accent-yellow:#eab308;
    --shadow-md:0 4px 6px -1px rgba(0,0,0,.1);
    --shadow-lg:0 10px 15px -3px rgba(0,0,0,.1);
    --gradient-primary:linear-gradient(135deg,var(--primary-blue),var(--secondary-blue));
}

@keyframes fadeIn {
    from {opacity:0;transform:translateY(20px);}
    to {opacity:1;transform:translateY(0);}
}
@keyframes slideIn {
    from {opacity:0;transform:translateX(-20px);}
    to {opacity:1;transform:translateX(0);}
}

.container{max-width:1400px;padding:2rem}
.page-header{
    background:var(--gradient-primary);
    border-radius:16px;
    padding:2rem;
    color:#fff;
    box-shadow:var(--shadow-lg);
    margin-bottom:2rem;
}
.stat-card{
    background:#fff;
    border-radius:16px;
    padding:1.5rem;
    box-shadow:var(--shadow-md);
    border-left:4px solid var(--primary-blue);
}
.filter-card{
    background:#fff;
    border-radius:16px;
    padding:1.5rem;
    box-shadow:var(--shadow-md);
    margin-bottom:2rem;
}
.tenaga-container{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(280px,1fr));
    gap:1.5rem;
}
.tenaga-card{
    background:#fff;
    border-radius:16px;
    overflow:hidden;
    box-shadow:var(--shadow-lg);
    transition:.3s;
}
.tenaga-card:hover{transform:translateY(-5px)}
.tenaga-image-wrapper{
    position:relative;
    height:200px;
    overflow:hidden;
}
.tenaga-image{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.4s;
}
.tenaga-card:hover .tenaga-image{transform:scale(1.05)}
.tenaga-overlay{
    position:absolute;
    inset:0;
    background:rgba(0,0,0,.45);
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    font-size:2rem;
    opacity:0;
    transition:.3s;
}
.tenaga-card:hover .tenaga-overlay{opacity:1}
.tenaga-badge{
    position:absolute;
    top:10px;
    right:10px;
    background:rgba(255,255,255,.9);
    padding:4px 8px;
    border-radius:12px;
    font-size:.7rem;
    font-weight:600;
}
.card-body{padding:1rem}
.card-title{font-weight:600;margin-bottom:.25rem}
.card-text{font-size:.85rem;color:var(--gray-color)}
</style>

<div class="container">

    <!-- HEADER -->
    <div class="page-header fade-in">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="fw-bold mb-1">Manajemen Tenaga Kependidikan</h1>
                <p class="mb-0 opacity-90">Kelola data tenaga kependidikan sekolah</p>
            </div>
            <a href="{{ route('admin.tenagapengajar.create') }}" class="btn btn-light">
                <i class="bi bi-plus-circle me-2"></i> Tambah Tenaga Kependidikan
            </a>
        </div>
    </div>

    <!-- STATISTIK -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3">
            <div class="stat-card slide-in">
                <p class="text-muted small mb-1">Total Tenaga Kependidikan</p>
                <h2 class="fw-bold">{{ $tenagaPengajar->count() }}</h2>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="stat-card slide-in" style="animation-delay: 0.1s">
                <p class="text-muted small mb-1">Pengampu</p>
                <h2 class="fw-bold">{{ $tenagaPengajar->pluck('pengampu')->unique()->count() }}</h2>
            </div>
        </div>
    </div>

    <!-- FILTER -->
    <div class="filter-card slide-in">
        <div class="mb-3 fw-semibold">
            <i class="bi bi-funnel me-2 text-primary"></i>Filter Tenaga Kependidikan
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <input type="text" id="searchInput" class="form-control"
                       placeholder="Cari nama tenaga kependidikan...">
            </div>
            <div class="col-md-4">
                <select id="filterPengampu" class="form-select">
                    <option value="">Semua Pengampu</option>
                    @foreach($tenagaPengajar->pluck('pengampu')->unique() as $p)
                        <option value="{{ strtolower($p) }}">{{ $p }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <select id="sortBy" class="form-select">
                    <option value="newest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="name">Nama A-Z</option>
                </select>
            </div>
        </div>
    </div>

    <!-- GRID TENAGA KEPENDIDIKAN -->
    <div class="tenaga-container">
        @forelse($tenagaPengajar as $index => $t)
        <div class="tenaga-item fade-in" 
             data-nama="{{ strtolower($t->nama) }}" 
             data-pengampu="{{ strtolower($t->pengampu) }}"
             data-tanggal="{{ $t->created_at->format('Y-m-d') }}"
             style="animation-delay: {{ 0.1 * ($index + 5) }}s">
            <div class="tenaga-card">

                <div class="tenaga-image-wrapper">
                    @if($t->foto)
                        <img src="{{ asset('storage/'.$t->foto) }}"
                             class="tenaga-image"
                             alt="{{ $t->nama }}"
                             onclick="showImageModal('{{ asset('storage/'.$t->foto) }}','{{ $t->nama }}')">
                    @else
                        <div class="tenaga-image d-flex align-items-center justify-content-center bg-light">
                            <i class="bi bi-person text-muted" style="font-size: 5rem;"></i>
                        </div>
                    @endif

                    <span class="tenaga-badge">{{ $t->pengampu }}</span>

                    <div class="tenaga-overlay">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                </div>

                <div class="card-body">
                    <div class="card-title text-truncate">{{ $t->nama }}</div>
                    <div class="card-text mb-2">
                        <span class="badge bg-primary bg-opacity-10 text-primary">
                            {{ $t->pengampu }}
                        </span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            <i class="bi bi-clock me-1"></i>
                            {{ $t->created_at->format('d M Y') }}
                        </small>
                        <div class="d-flex gap-1">
                            <a href="{{ route('admin.tenagapengajar.edit',$t->id) }}"
                               class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.tenagapengajar.destroy',$t->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @empty
        <div class="text-center py-5">
            <i class="bi bi-people fs-1 text-muted"></i>
            <h5 class="mt-3 text-muted">Belum ada tenaga kependidikan</h5>
            <p class="text-muted">Tambahkan tenaga kependidikan pertama dengan klik tombol "Tambah Tenaga Kependidikan" di atas</p>
        </div>
        @endforelse
    </div>

    <!-- PAGINATION -->
    

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
    // Search functionality
    const searchInput = document.getElementById('searchInput');
    const filterPengampu = document.getElementById('filterPengampu');
    const sortBy = document.getElementById('sortBy');
    
    function applyFilter() {
        const searchQuery = searchInput.value.toLowerCase();
        const pengampuQuery = filterPengampu.value.toLowerCase();
        
        document.querySelectorAll('.tenaga-item').forEach(item => {
            const nama = item.dataset.nama;
            const pengampu = item.dataset.pengampu;
            
            const matchesSearch = nama.includes(searchQuery);
            const matchesPengampu = !pengampuQuery || pengampu.includes(pengampuQuery);
            
            if (matchesSearch && matchesPengampu) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    }
    
    function applySort() {
        const rows = Array.from(document.querySelectorAll('.tenaga-item'));
        const container = document.querySelector('.tenaga-container');

        rows.sort((a,b)=>{
            if (sortBy.value === 'name') {
                return a.dataset.nama.localeCompare(b.dataset.nama);
            }
            if (sortBy.value === 'oldest') {
                return new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
            }
            return new Date(b.dataset.tanggal) - new Date(a.dataset.tanggal);
        });

        rows.forEach(r => container.appendChild(r));
    }
    
    searchInput.addEventListener('input', applyFilter);
    filterPengampu.addEventListener('change', applyFilter);
    sortBy.addEventListener('change', () => {
        applySort();
        applyFilter();
    });
    
    // Image modal
    function showImageModal(src, title) {
        document.getElementById('modalImage').src = src;
        document.getElementById('imageModalLabel').innerText = title;
        new bootstrap.Modal(document.getElementById('imageModal')).show();
    }
    
    // Make function global
    window.showImageModal = showImageModal;
});
</script>
@endsection