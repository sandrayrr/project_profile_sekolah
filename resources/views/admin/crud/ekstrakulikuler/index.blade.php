@extends('admin.layout')

@section('title', 'Manajemen Ekstrakulikuler')

@section('content')
<div class="container-fluid py-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Manajemen Ekstrakulikuler</h4>
            <p class="text-muted mb-0">Kelola seluruh data kegiatan ekstrakulikuler sekolah</p>
        </div>
        <a href="{{ route('admin.ekstrakulikuler.create') }}" class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="bi bi-plus-circle me-2"></i> Tambah Baru
        </a>
    </div>

    <!-- STATISTIK KARTU -->
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-0 bg-gradient-primary text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h6 class="mb-0 text-white-50">Total Ekstrakulikuler</h6>
                            <h3 class="mb-0 fw-bold">{{ $ekstrakulikulers->count() }}</h3>
                        </div>
                        <div class="ms-3">
                            <i class="bi bi-trophy fs-1 opacity-75"></i>
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
                            <h6 class="mb-0 text-white-50">Ditambahkan Bulan Ini</h6>
                            <h3 class="mb-0 fw-bold">{{ $ekstrakulikulers->where('created_at', '>=', now()->startOfMonth())->count() }}</h3>
                        </div>
                        <div class="ms-3">
                            <i class="bi bi-calendar-check fs-1 opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NOTIFIKASI SUKSES -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- SEARCH BAR -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-end-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" id="searchInput" placeholder="Cari berdasarkan judul...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select" id="filterKategori">
                        <option value="">Semua Kategori</option>
                        <option value="Wajib">Wajib</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Kesenian">Kesenian</option>
                        <option value="Kedisiplinan">Kedisiplinan</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" id="sortBy">
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="title">Judul A-Z</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- TABLE -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="ekstrakulikulerTable">
                    <thead class="bg-light border-bottom">
                        <tr>
                            <th class="text-center" style="width:60px">No</th>
                            <th class="text-center" style="width:120px">Foto</th>
                            <th class="text-start">Judul</th>
                            <th class="text-center" style="width:140px">Kategori</th>
                            <th class="text-center" style="width:140px">Tanggal</th>
                            <th class="text-center" style="width:120px">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($ekstrakulikulers as $item)
                        <tr class="ekstrakulikuler-row" data-judul="{{ strtolower($item->judul) }}" data-kategori="{{ $item->kategori ?? 'Olahraga' }}">
                            <td class="text-center">
                                <span class="badge bg-light text-dark rounded-pill">{{ $loop->iteration }}</span>
                            </td>

                            <!-- FOTO -->
                            <td class="text-center">
                                @if ($item->foto)
                                    <div class="image-container">
                                        <img src="{{ asset('storage/'.$item->foto) }}"
                                             class="rounded-3 shadow-sm"
                                             style="width:90px;height:60px;object-fit:cover;cursor:pointer;"
                                             onclick="showImageModal('{{ asset('storage/'.$item->foto) }}', '{{ $item->judul }}')"
                                             alt="Foto Ekstrakulikuler">
                                    </div>
                                @else
                                    <div class="bg-light rounded-3 d-flex align-items-center justify-content-center" 
                                         style="width:90px;height:60px;">
                                        <i class="bi bi-image text-muted fs-4"></i>
                                    </div>
                                @endif
                            </td>

                            <!-- JUDUL -->
                            <td class="text-start">
                                <div>
                                    <h6 class="mb-1 fw-semibold">{{ $item->judul }}</h6>
                                    <small class="text-muted">
                                        <i class="bi bi-clock me-1"></i>
                                        {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                    </small>
                                </div>
                            </td>

                            <!-- KATEGORI -->
                            <td class="text-center">
                                <span class="badge bg-info bg-opacity-10 text-info px-3 py-2 rounded-pill fw-semibold">
                                    {{ $item->kategori ?? 'Olahraga' }}
                                </span>
                            </td>

                            <!-- TANGGAL -->
                            <td class="text-center">
                                <div class="text-muted">
                                    <i class="bi bi-calendar3 me-1"></i>
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                                </div>
                            </td>

                            <!-- AKSI -->
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.ekstrakulikuler.edit', $item->id) }}"
                                       class="btn btn-sm btn-outline-primary rounded-3 px-3"
                                       title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <form action="{{ route('admin.ekstrakulikuler.destroy', $item->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirmDelete('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-sm btn-outline-danger rounded-3 px-3"
                                                title="Hapus">
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
                                    <i class="bi bi-inbox fs-1 text-muted"></i>
                                    <h5 class="mt-3 text-muted">Data ekstrakulikuler belum tersedia</h5>
                                    <p class="text-muted">Tambahkan data ekstrakulikuler pertama untuk memulai.</p>
                                    <a href="{{ route('admin.ekstrakulikuler.create') }}" class="btn btn-primary mt-2">
                                        <i class="bi bi-plus-circle me-2"></i>Tambah Data Pertama</a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- PAGINATION (jika ada) -->
        @if($ekstrakulikulers->hasPages())
        <div class="card-footer bg-transparent border-top">
            <div class="d-flex justify-content-between align-items-center">
                <div class="text-muted">
                    Menampilkan {{ $ekstrakulikulers->firstItem() }} - {{ $ekstrakulikulers->lastItem() }} dari {{ $ekstrakulikulers->total() }} data
                </div>
                {{ $ekstrakulikulers->links('pagination::bootstrap-4') }}
            </div>
        </div>
        @endif
    </div>

</div>

{{-- Image Modal --}}
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="imageModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-0">
                <img id="modalImage" src="" class="w-100" style="border-radius: 0.5rem;">
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}
.bg-gradient-success {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
}
.hover-lift {
    transition: all 0.3s ease;
}
.hover-lift:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}
.ekstrakulikuler-row {
    transition: background-color 0.2s ease;
}
.ekstrakulikuler-row:hover {
    background-color: #f8f9fa;
}
.btn-group .btn {
    border-radius: 0.375rem !important;
    margin: 0 2px;
}
.input-group-text {
    border-color: #dee2e6;
}
.form-control:focus, .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}
</style>

<script>
// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const rows = document.querySelectorAll('.ekstrakulikuler-row');
    
    rows.forEach(row => {
        const judul = row.dataset.judul;
        if (judul.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

// Filter by category
document.getElementById('filterKategori').addEventListener('change', function(e) {
    const filterValue = e.target.value;
    const rows = document.querySelectorAll('.ekstrakulikuler-row');
    
    rows.forEach(row => {
        const kategori = row.dataset.kategori;
        if (filterValue === '' || kategori === filterValue) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

// Sort functionality
document.getElementById('sortBy').addEventListener('change', function(e) {
    const sortValue = e.target.value;
    const table = document.getElementById('ekstrakulikulerTable');
    const tbody = table.querySelector('tbody');
    const rows = Array.from(tbody.querySelectorAll('tr'));
    
    rows.sort((a, b) => {
        if (sortValue === 'newest') {
            return new Date(b.dataset.tanggal) - new Date(a.dataset.tanggal);
        } else if (sortValue === 'oldest') {
            return new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
        } else if (sortValue === 'title') {
            return a.dataset.judul.localeCompare(b.dataset.judul);
        }
    });
    
    // Re-append sorted rows
    rows.forEach(row => tbody.appendChild(row));
});

// Show image modal
function showImageModal(imageSrc, imageTitle) {
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('imageModalLabel').innerText = imageTitle;
    new bootstrap.Modal(document.getElementById('imageModal')).show();
}

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