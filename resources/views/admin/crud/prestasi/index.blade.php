@extends('admin.layout')

@section('title', 'Manajemen Prestasi')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER dengan statistik --}}
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h4 class="fw-bold mb-1">Manajemen Prestasi</h4>
                    <p class="text-muted mb-0">Kelola daftar prestasi siswa dengan mudah</p>
                </div>
                <a href="{{ route('admin.prestasi.create') }}" class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
                    <i class="bi bi-plus-circle me-2"></i> Tambah Prestasi
                </a>
            </div>
        </div>
    </div>

    {{-- STATISTIK KARTU --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="card border-0 bg-gradient-primary text-white shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h6 class="mb-0 text-white-50">Total Prestasi</h6>
                            <h3 class="mb-0 fw-bold">{{ $prestasi->count() }}</h3>
                        </div>
                        <div class="ms-3">
                            <i class="bi bi-trophy fs-1 opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FILTER DAN SEARCH --}}
  <div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-3 align-items-end">

            {{-- SEARCH --}}
            <div class="col-md-6">
                <label class="form-label fw-semibold small text-muted">Cari</label>
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-end-0">
                        <i class="bi bi-search"></i>
                    </span>
                    <input
                        type="text"
                        class="form-control border-start-0"
                        placeholder="Cari judul prestasi..."
                        id="searchInput">
                </div>
            </div>

            {{-- FILTER KELAS --}}
            <div class="col-md-2">
                <label class="form-label fw-semibold small text-muted">Kelas</label>
                <select class="form-select" id="filterKelas">
                    <option value="">Semua</option>
                    <option value="Kelas X">Kelas X</option>
                    <option value="Kelas XI">Kelas XI</option>
                    <option value="Kelas XII">Kelas XII</option>
                </select>
            </div>

            {{-- FILTER JURUSAN --}}
            <div class="col-md-2">
                <label class="form-label fw-semibold small text-muted">Jurusan</label>
                <select class="form-select" id="filterJurusan">
                    <option value="">Semua</option>
                    <option value="TJKT">TJKT</option>
                    <option value="TO">TO</option>
                    <option value="PPLG">PPLG</option>
                    <option value="DPIB">DPIB</option>
                    <option value="MPLB">MPLB</option>
                    <option value="AKL">AKL</option>
                    <option value="SP">SP</option>
                </select>
            </div>

            {{-- SORT --}}
            <div class="col-md-2">
                <label class="form-label fw-semibold small text-muted">Urutkan</label>
                <select class="form-select" id="sortBy">
                    <option value="newest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="title">Judul A–Z</option>
                </select>
            </div>

        </div>
    </div>
</div>

{{-- UNTUK MEGUBAH WARNA JURUSAN SESUAI DENGAN WARNA JURUSAN --}}

{{-- @php
$warnaJurusan = [
    'TO'    => 'info',       // biru muda
    'TJKT'  => 'primary',    // biru tua
    'PPLG'  => 'warning',    // kuning
    'DPIB'  => 'secondary',  // abu
    'MPLB'  => 'danger',     // merah
    'AKL'   => 'orange',     // custom
    'SP'    => 'dark-solid',       // hitam
];
@endphp --}}


    {{-- TABLE --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="prestasiTable">
            <thead class="bg-light border-bottom">
                <tr>
                    <th class="text-center" style="width:60px">No</th>
                    <th class="text-center" style="width:120px">Foto</th>
                    <th class="text-start">Judul</th>
                    <th class="text-center" style="width:120px">Kelas</th>
                    <th class="text-center" style="width:120px">Jurusan</th>
                    <th class="text-center" style="width:140px">Tanggal</th>
                    <th class="text-center" style="width:120px">Aksi</th>
                </tr>
            </thead>

                    <tbody>
                        @forelse ($prestasi as $p)
                      <tr class="prestasi-row"
                     data-judul="{{ strtolower($p->judul) }}"
                     data-kelas="{{ $p->kelas }}"
                     data-jurusan="{{ $p->jurusan }}"
                     data-tanggal="{{ $p->tanggal }}">

                            <td class="text-center">
                                <span class="badge bg-light text-dark rounded-pill">{{ $loop->iteration }}</span>
                            </td>

                            {{-- FOTO --}}
                            <td class="text-center">
                                @if ($p->foto)
                                    <div class="image-container">
                                        <img src="{{ asset('storage/'.$p->foto) }}"
                                             class="rounded-3 shadow-sm"
                                             style="width:90px;height:60px;object-fit:cover;cursor:pointer;"
                                             onclick="showImageModal('{{ asset('storage/'.$p->foto) }}')"
                                             alt="Foto Prestasi">
                                    </div>
                                @else
                                    <div class="bg-light rounded-3 d-flex align-items-center justify-content-center" 
                                         style="width:90px;height:60px;">
                                        <i class="bi bi-image text-muted fs-4"></i>
                                    </div>
                                @endif
                            </td>

                            {{-- JUDUL --}}
                            <td class="text-start">
                                <div>
                                    <h6 class="mb-1 fw-semibold">{{ $p->judul }}</h6>
                                    <small class="text-muted">
                                        <i class="bi bi-clock me-1"></i>
                                        {{ \Carbon\Carbon::parse($p->tanggal)->diffForHumans() }}
                                    </small>
                                </div>
                            </td>

                            {{-- KELAS --}}
                            <td class="text-center">
                                <span class="badge bg-info bg-opacity-10 text-secondary px-3 py-2 rounded-pill fw-semibold">
                                    {{ $p->kelas }}
                                </span>
                            </td>

                            {{-- JURUSAN --}}

                            <td class="text-center">
                            <span class="badge bg-secondary bg-opacity-10 text-info px-3 py-2 rounded-pill fw-semibold">
                              {{ $p->jurusan }}
                          </span>
                                 </td>

                            {{-- <td class="text-center">
                               @php
                                $warna = $warnaJurusan[$p->jurusan] ?? 'secondary';
                               @endphp

                        <span
                             class="badge 
                             bg-{{ $warna }} bg-opacity-10 
                             text-{{ $warna }} 
                             px-3 py-2 rounded-pill fw-semibold">
                             {{ $p->jurusan }}
                         </span>
                       </td> --}}

                            {{-- TANGGAL --}}
                            <td class="text-center">
                                <div class="text-muted">
                                    <i class="bi bi-calendar3 me-1"></i>
                                    {{ \Carbon\Carbon::parse($p->tanggal)->format('d M Y') }}
                                </div>
                            </td>

                            {{-- AKSI --}}
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.prestasi.edit', $p->id) }}"
                                       class="btn btn-sm btn-outline-primary rounded-3 px-3"
                                       title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <form action="{{ route('admin.prestasi.destroy', $p->id) }}"
                                          method="POST"
                                          class="d-inline"
                                          onsubmit="return confirmDelete('Yakin ingin menghapus prestasi ini?')">
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
                                    <h5 class="mt-3 text-muted">Data prestasi belum tersedia</h5>
                                    <p class="text-muted">Tambahkan prestasi pertama untuk memulai</p>
                                    <a href="{{ route('admin.prestasi.create') }}" class="btn btn-primary mt-2">
                                        <i class="bi bi-plus-circle me-2"></i>Tambah Prestasi
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        
        {{-- PAGINATION (jika ada) --}}
        @if($prestasi->hasPages())
        <div class="card-footer bg-transparent border-top">
            <div class="d-flex justify-content-between align-items-center">
                <div class="text-muted">
                    Menampilkan {{ $prestasi->firstItem() }} - {{ $prestasi->lastItem() }} dari {{ $prestasi->total() }} data
                </div>
                {{ $prestasi->links('pagination::bootstrap-4') }}
            </div>
        </div>
        @endif
    </div>

</div>

{{-- Image Modal --}}
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg">
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
.image-container img {
    transition: transform 0.3s ease;
}
.image-container img:hover {
    transform: scale(1.05);
}
.table th {
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 0.5px;
    border-bottom: 2px solid #dee2e6;
}
.prestasi-row {
    transition: background-color 0.2s ease;
}
.prestasi-row:hover {
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
/* .bg-orange {
    background-color: #fd7e14 !important;
}
.text-orange {
    color: #fd7e14 !important;
}
.bg-dark-solid {
    background-color: #000 !important;
}
.text-dark-solid {
    color: #fff !important;
} */

</style>

<script>
const searchInput   = document.getElementById('searchInput');
const filterKelas   = document.getElementById('filterKelas');
const filterJurusan = document.getElementById('filterJurusan');
const sortBy        = document.getElementById('sortBy');

function applyFilter() {
    const search   = searchInput.value.toLowerCase();
    const kelas    = filterKelas.value;
    const jurusan  = filterJurusan.value;

    const rows = Array.from(document.querySelectorAll('.prestasi-row'));

    rows.forEach(row => {
        const judulRow   = row.dataset.judul;
        const kelasRow   = row.dataset.kelas;
        const jurusanRow = row.dataset.jurusan;

        let visible = true;

        if (search && !judulRow.includes(search)) {
            visible = false;
        }

        if (kelas && kelasRow !== kelas) {
            visible = false;
        }

        if (jurusan && jurusanRow !== jurusan) {
            visible = false;
        }

        row.style.display = visible ? '' : 'none';
    });
}

// ================= SORTING =================
function applySort() {
    const rows = Array.from(document.querySelectorAll('.prestasi-row'));
    const tbody = document.querySelector('#prestasiTable tbody');

    rows.sort((a, b) => {

        // SORT BY KELAS → JURUSAN
        const kelasA = a.dataset.kelas;
        const kelasB = b.dataset.kelas;

        if (kelasA !== kelasB) {
            return kelasA.localeCompare(kelasB);
        }

        const jurusanA = a.dataset.jurusan;
        const jurusanB = b.dataset.jurusan;

        if (jurusanA !== jurusanB) {
            return jurusanA.localeCompare(jurusanB);
        }

        // SORT OPSIONAL
        if (sortBy.value === 'title') {
            return a.dataset.judul.localeCompare(b.dataset.judul);
        }

        if (sortBy.value === 'oldest') {
            return new Date(a.dataset.tanggal) - new Date(b.dataset.tanggal);
        }

        return new Date(b.dataset.tanggal) - new Date(a.dataset.tanggal);
    });

    rows.forEach(row => tbody.appendChild(row));
}

// ================= EVENT =================
searchInput.addEventListener('input', applyFilter);
filterKelas.addEventListener('change', applyFilter);
filterJurusan.addEventListener('change', applyFilter);

sortBy.addEventListener('change', () => {
    applySort();
    applyFilter();
});
</script>


{{-- Include SweetAlert2 if not already included --}}
@if(!View::hasSection('scripts'))
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@endif
@endsection
