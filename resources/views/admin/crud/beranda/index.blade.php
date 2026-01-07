@extends('admin.layout')

@section('title','Manajemen Beranda')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Manajemen Beranda</h4>
            <p class="text-muted mb-0">
                Kelola sambutan kepala sekolah & statistik beranda
            </p>
        </div>

        <a href="{{ route('admin.beranda.create') }}"
           class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="bi bi-plus-circle me-2"></i> Tambah Beranda
        </a>
    </div>

    {{-- STAT CARD --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm bg-gradient-primary text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white-50 mb-0">Total Konten</h6>
                        <h3 class="fw-bold mb-0">{{ $data->count() }}</h3>
                    </div>
                    <i class="bi bi-house-door fs-1 opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- SEARCH & SORT --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="row g-3 align-items-end">

                {{-- SEARCH --}}
                <div class="col-md-8">
                    <label class="form-label small text-muted fw-semibold">Cari Konten</label>
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-end-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text"
                               id="searchInput"
                               class="form-control border-start-0"
                               placeholder="Cari judul atau isi sambutan...">
                    </div>
                </div>

                {{-- SORT --}}
                <div class="col-md-4">
                    <label class="form-label small text-muted fw-semibold">Urutkan</label>
                    <select class="form-select" id="sortBy">
                        <option value="newest">Terbaru</option>
                        <option value="oldest">Terlama</option>
                        <option value="title">Judul A–Z</option>
                    </select>
                </div>

            </div>
        </div>
    </div>

    {{-- TABLE --}}
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" id="berandaTable">
                <thead class="bg-light">
                    <tr>
                        <th width="60">No</th>
                        <th>Konten Sambutan</th>
                        <th width="160" class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($data as $item)
                    <tr class="beranda-row"
                        data-judul="{{ strtolower($item->judul) }}"
                        data-deskripsi="{{ strtolower(strip_tags($item->deskripsi)) }}"
                        data-created="{{ $item->created_at }}">

                        <td class="fw-semibold">{{ $loop->iteration }}</td>

                        <td>
                            <div class="fw-semibold text-dark mb-1">
                                {{ $item->judul }}
                            </div>

                            <small class="text-muted d-block mb-2">
                                {{ \Illuminate\Support\Str::limit(strip_tags($item->deskripsi),120) }}
                            </small>

                            {{-- STAT --}}
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge bg-light text-dark border">
                                    👨‍🎓 {{ $item->jumlah_siswa ?? 0 }} Siswa
                                </span>
                                <span class="badge bg-light text-dark border">
                                    👩‍🏫 {{ $item->jumlah_guru ?? 0 }} Guru
                                </span>
                                <span class="badge bg-light text-dark border">
                                    🏫 {{ $item->jumlah_jurusan ?? 0 }} Jurusan
                                </span>
                            </div>
                        </td>

                        <td class="text-center">
                            <a href="{{ route('admin.beranda.edit',$item->id) }}"
                               class="btn btn-sm btn-outline-primary px-3">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form action="{{ route('admin.beranda.destroy',$item->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Hapus konten beranda ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger px-3">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-5 text-muted">
                            <i class="bi bi-house-x fs-1 mb-2"></i><br>
                            Belum ada konten beranda
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- STYLE --}}
<style>
.bg-gradient-primary{
    background: linear-gradient(135deg,#667eea,#764ba2);
}
.hover-lift{
    transition:.3s;
}
.hover-lift:hover{
    transform:translateY(-2px);
}
</style>

{{-- SCRIPT --}}
<script>
const searchInput = document.getElementById('searchInput');
const sortBy = document.getElementById('sortBy');

function applyFilter() {
    const keyword = searchInput.value.toLowerCase();

    document.querySelectorAll('.beranda-row').forEach(row => {
        const judul = row.dataset.judul;
        const desc  = row.dataset.deskripsi;

        row.style.display =
            judul.includes(keyword) || desc.includes(keyword)
            ? '' : 'none';
    });
}

function applySort() {
    const rows = Array.from(document.querySelectorAll('.beranda-row'));
    const tbody = document.querySelector('#berandaTable tbody');

    rows.sort((a,b)=>{
        if(sortBy.value === 'title'){
            return a.dataset.judul.localeCompare(b.dataset.judul);
        }
        if(sortBy.value === 'oldest'){
            return new Date(a.dataset.created) - new Date(b.dataset.created);
        }
        return new Date(b.dataset.created) - new Date(a.dataset.created);
    });

    rows.forEach(r => tbody.appendChild(r));
}

searchInput.addEventListener('input', applyFilter);
sortBy.addEventListener('change', () => {
    applySort();
    applyFilter();
});
</script>

@endsection
