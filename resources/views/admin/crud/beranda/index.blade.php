@extends('admin.layout')

@section('title','Manajemen Beranda')

@section('content')

<style>
/* ================= CORE ================= */
.page-header {
    background: linear-gradient(135deg, #0056b3, #0040a0);
    color: #fff;
    padding: 2rem;
    border-radius: 16px;
    margin-bottom: 1.5rem;
}

.stat-card {
    background: #fff;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 10px 20px rgba(0,0,0,.08);
}

.stat-icon {
    width: 60px;
    height: 60px;
    border-radius: 14px;
    background: #0056b3;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
}

.filter-card,
.table-card {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 10px 20px rgba(0,0,0,.08);
    padding: 1.5rem;
    margin-bottom: 1.5rem;
}

.table thead th {
    background: #f4f6fa;
    font-weight: 600;
}

.table tbody tr:hover {
    background: #f8f9fc;
}

.badge-stat {
    padding: .45rem .75rem;
    border-radius: 20px;
    font-size: .8rem;
    font-weight: 500;
}

.badge-stat.blue { background:#e6f0ff;color:#0056b3 }
.badge-stat.green { background:#e9f7ef;color:#198754 }
.badge-stat.yellow { background:#fff8e1;color:#ffc107 }

.btn-action {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    border: 1px solid #e0e0e0;
    background: #fff;
}
</style>

<div class="container-fluid py-4">

{{-- ================= HEADER ================= --}}
<div class="page-header">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
        <div>
            <h4 class="fw-bold mb-1">Manajemen Beranda</h4>
            <p class="mb-0 opacity-75">
                Kelola sambutan kepala sekolah & statistik beranda
            </p>
        </div>

        <a href="{{ route('admin.beranda.create') }}" class="btn btn-light fw-semibold">
            <i class="bi bi-plus-circle me-2"></i> Tambah Beranda
        </a>
    </div>
</div>

{{-- ================= STAT ================= --}}
<div class="row mb-4">
    <div class="col-lg-4 col-md-6">
        <div class="stat-card d-flex justify-content-between align-items-center">
            <div>
                <small class="text-muted">Total Konten</small>
                <h2 class="fw-bold mb-0">{{ $data->count() }}</h2>
            </div>
            <div class="stat-icon">
                <i class="bi bi-house-door"></i>
            </div>
        </div>
    </div>
</div>

{{-- ================= FILTER ================= --}}
<div class="filter-card">
    <div class="row g-3">
        <div class="col-md-8">
            <label class="form-label small text-muted">Cari Konten</label>
            <input type="text" id="searchInput" class="form-control"
                   placeholder="Cari judul atau isi sambutan...">
        </div>
        <div class="col-md-4">
            <label class="form-label small text-muted">Urutkan</label>
            <select class="form-select" id="sortBy">
                <option value="newest">Terbaru</option>
                <option value="oldest">Terlama</option>
                <option value="title">Judul A–Z</option>
            </select>
        </div>
    </div>
</div>

{{-- ================= TABLE ================= --}}
<div class="table-card">
<div class="table-responsive">
<table class="table align-middle mb-0" id="berandaTable">
<thead>
<tr>
    <th width="60" class="text-center">No</th>
    <th>Konten Sambutan</th>
    <th width="120" class="text-center">Aksi</th>
</tr>
</thead>
<tbody>
@forelse($data as $item)
<tr class="beranda-row"
    data-judul="{{ strtolower($item->judul) }}"
    data-deskripsi="{{ strtolower(strip_tags($item->deskripsi)) }}"
    data-created="{{ $item->created_at }}">
    
<td class="text-center text-muted fw-semibold">
    {{ $loop->iteration }}
</td>

<td>
    <div class="fw-semibold mb-1">{{ $item->judul }}</div>
    <small class="text-muted d-block mb-2">
        {{ \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 120) }}
    </small>

    <div class="d-flex gap-2 flex-wrap">
        <span class="badge-stat blue">{{ $item->jumlah_siswa ?? 0 }} Siswa</span>
        <span class="badge-stat green">{{ $item->jumlah_guru ?? 0 }} Guru</span>
        <span class="badge-stat yellow">{{ $item->jumlah_jurusan ?? 0 }} Jurusan</span>
    </div>
</td>

<td class="text-center">
    <div class="d-inline-flex gap-1">
        <a href="{{ route('admin.beranda.edit',$item->id) }}" class="btn-action">
            <i class="bi bi-pencil text-primary"></i>
        </a>
        <form action="{{ route('admin.beranda.destroy',$item->id) }}" method="POST"
              onsubmit="return confirm('Hapus konten ini?')">
            @csrf @method('DELETE')
            <button class="btn-action">
                <i class="bi bi-trash text-danger"></i>
            </button>
        </form>
    </div>
</td>
</tr>
@empty
<tr>
<td colspan="3" class="text-center py-5 text-muted">
    <i class="bi bi-house fs-1 mb-2 d-block"></i>
    Belum ada konten beranda
</td>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>

</div>
@endsection
