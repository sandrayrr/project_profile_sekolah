@extends('admin.layout')

@section('title','Agenda Sekolah')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Agenda Sekolah</h4>
            <p class="text-muted mb-0">Kelola agenda dan kegiatan sekolah</p>
        </div>

        <a href="{{ route('admin.agenda.create') }}"
           class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="bi bi-plus-circle me-2"></i> Tambah Agenda
        </a>
    </div>

    {{-- STAT CARD --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 bg-gradient-primary text-white shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white-50 mb-0">Total Agenda</h6>
                        <h3 class="fw-bold mb-0">{{ $agendas->count() }}</h3>
                    </div>
                    <i class="bi bi-calendar-check fs-1 opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- FILTER & SEARCH --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <div class="row g-3 align-items-end">

                {{-- SEARCH --}}
                <div class="col-md-6">
                    <label class="form-label small text-muted fw-semibold">Cari Agenda</label>
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-end-0">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text"
                               id="searchInput"
                               class="form-control border-start-0"
                               placeholder="Cari judul agenda...">
                    </div>
                </div>

                {{-- FILTER TANGGAL --}}
                <div class="col-md-3">
                    <label class="form-label small text-muted fw-semibold">Filter</label>
                    <select class="form-select" id="filterTanggal">
                        <option value="">Semua</option>
                        <option value="today">Hari Ini</option>
                        <option value="upcoming">Akan Datang</option>
                        <option value="past">Terlewat</option>
                    </select>
                </div>

                {{-- SORT --}}
                <div class="col-md-3">
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
            <table class="table table-hover align-middle mb-0" id="agendaTable">
                <thead class="bg-light">
                    <tr>
                        <th>Judul</th>
                        <th width="160">Tanggal</th>
                        <th width="120">Waktu</th>
                        <th width="120" class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($agendas as $agenda)
                    <tr class="agenda-row"
                        data-judul="{{ strtolower($agenda->judul) }}"
                        data-tanggal="{{ $agenda->tanggal }}">

                        <td class="fw-semibold">
                            {{ $agenda->judul }}
                        </td>

                        <td>
                            <span class="badge bg-info bg-opacity-10 text-info px-3 py-2 rounded-pill">
                                <i class="bi bi-calendar-event me-1"></i>
                                {{ \Carbon\Carbon::parse($agenda->tanggal)->format('d M Y') }}
                            </span>
                        </td>

                        <td>
                            <span class="badge bg-secondary px-3 py-2 rounded-pill">
                                <i class="bi bi-clock me-1"></i>
                                {{ $agenda->waktu }} WIB
                            </span>
                        </td>

                        <td class="text-center">
                            <a href="{{ route('admin.agenda.edit',$agenda->id) }}"
                               class="btn btn-sm btn-outline-primary px-3">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form action="{{ route('admin.agenda.destroy',$agenda->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Hapus agenda ini?')">
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
                        <td colspan="4" class="text-center py-5 text-muted">
                            <i class="bi bi-calendar-x fs-1 mb-2"></i><br>
                            Belum ada agenda
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
.bg-gradient-primary {
    background: linear-gradient(135deg,#43cea2,#185a9d);
}
.hover-lift {
    transition: .3s;
}
.hover-lift:hover {
    transform: translateY(-2px);
}
</style>

{{-- SCRIPT --}}
<script>
const searchInput = document.getElementById('searchInput');
const filterTanggal = document.getElementById('filterTanggal');
const sortBy = document.getElementById('sortBy');

function applyFilter() {
    const search = searchInput.value.toLowerCase();
    const filter = filterTanggal.value;
    const today = new Date().toISOString().slice(0,10);

    document.querySelectorAll('.agenda-row').forEach(row => {
        let visible = true;
        const judul = row.dataset.judul;
        const tanggal = row.dataset.tanggal;

        if (search && !judul.includes(search)) visible = false;

        if (filter === 'today' && tanggal !== today) visible = false;
        if (filter === 'upcoming' && tanggal < today) visible = false;
        if (filter === 'past' && tanggal >= today) visible = false;

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
</script>

@endsection
