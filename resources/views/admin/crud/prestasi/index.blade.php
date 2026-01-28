@extends('admin.layout')

@section('title', 'Manajemen Prestasi')

@section('content')
<style>
.container{max-width:1200px;margin:auto;padding:20px}
.page-header{background:linear-gradient(135deg,#3b82f6,#60a5fa);color:#fff;padding:24px;border-radius:10px;margin-bottom:24px;display:flex;justify-content:space-between;align-items:center}
.btn-add{background:#fff;color:#3b82f6;padding:10px 16px;border-radius:6px;text-decoration:none;font-weight:500}
.filter-section,.table-container{background:#fff;border-radius:10px;padding:16px;margin-bottom:20px;box-shadow:0 2px 10px rgba(0,0,0,.05)}
.filter-row{display:flex;gap:12px;flex-wrap:wrap}
.filter-group{flex:1;min-width:180px}
.filter-group label{font-size:14px;font-weight:500;margin-bottom:4px;display:block}
.filter-group input,.filter-group select{width:100%;padding:8px 10px;border:1px solid #d1d5db;border-radius:6px}
.btn-filter{background:#3b82f6;color:#fff;border:none;padding:8px 16px;border-radius:6px}
.btn-reset{background:#f3f4f6;padding:8px 16px;border-radius:6px;text-decoration:none;color:#374151}
table{width:100%;border-collapse:collapse}
thead{background:#f9fafb}
th,td{padding:12px;border-bottom:1px solid #e5e7eb;font-size:14px}
tbody tr:hover{background:#f9fafb}
.prestasi-image{width:56px;height:56px;object-fit:cover;border-radius:6px;cursor:pointer}
.no-image{width:56px;height:56px;background:#f3f4f6;border-radius:6px;display:flex;align-items:center;justify-content:center;color:#9ca3af}
.badge{padding:3px 8px;border-radius:12px;font-size:12px;font-weight:500}
.badge-juara{background:#fef3c7;color:#d97706}
.badge-tingkat{background:#dbeafe;color:#2563eb}
.badge-kelas{background:#d1fae5;color:#059669}
.badge-jurusan{background:#fce7f3;color:#be185d}
.badge-subkelas{background:#e0e7ff;color:#4338ca}
.actions{display:flex;gap:6px}
.btn-action{width:32px;height:32px;border:1px solid #d1d5db;border-radius:6px;display:flex;align-items:center;justify-content:center;background:#fff}
.btn-edit{color:#2563eb}
.btn-delete{color:#ef4444}
.pagination{margin-top:20px;display:flex;justify-content:center}
.modal{display:none;position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:1000;align-items:center;justify-content:center}
.modal.show{display:flex}
.modal-content{background:#fff;border-radius:10px;max-width:800px;width:90%}
.modal-header{padding:16px;border-bottom:1px solid #e5e7eb;display:flex;justify-content:space-between}
.modal-body img{width:100%}
</style>

<div class="container">

    <div class="page-header">
        <div>
            <h2>Manajemen Prestasi</h2>
            <small>Kelola data prestasi siswa</small>
        </div>
        <a href="{{ route('admin.prestasi.create') }}" class="btn-add">
            <i class="bi bi-plus-circle"></i> Tambah
        </a>
    </div>

    {{-- FILTER --}}
    <div class="filter-section">
        <form method="GET">
            <div class="filter-row">
                <div class="filter-group">
                    <label>Cari</label>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Judul prestasi">
                </div>
                <div class="filter-group">
                    <label>Kelas</label>
                    <select name="kelas">
                        <option value="">Semua</option>
                        <option value="X" @selected(request('kelas')=='X')>X</option>
                        <option value="XI" @selected(request('kelas')=='XI')>XI</option>
                        <option value="XII" @selected(request('kelas')=='XII')>XII</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label>Jurusan</label>
                    <select name="jurusan">
                        <option value="">Semua</option>
                        @foreach(['TO','TJKT','PPLG','DPIB','MPLB','AKL','SP'] as $j)
                            <option value="{{ $j }}" @selected(request('jurusan')==$j)>{{ $j }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="filter-group">
                    <button class="btn-filter">Filter</button>
                    <a href="{{ route('admin.prestasi.index') }}" class="btn-reset">Reset</a>
                </div>
            </div>
        </form>
    </div>

    {{-- TABLE --}}
    <div class="table-container">
        <p style="margin-bottom:12px;font-size:14px;color:#6b7280">
            Menampilkan {{ $prestasi->firstItem() }}–{{ $prestasi->lastItem() }} dari {{ $prestasi->total() }} data
        </p>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Informasi Prestasi</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Sub Kelas</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @forelse($prestasi as $p)
                <tr>
                    <td>{{ $prestasi->firstItem() + $loop->index }}</td>
                    <td>
                        @if($p->foto)
                            <img src="{{ asset('storage/'.$p->foto) }}" class="prestasi-image"
                                 onclick="showImage('{{ asset('storage/'.$p->foto) }}')">
                        @else
                            <div class="no-image"><i class="bi bi-image"></i></div>
                        @endif
                    </td>
                    <td>
                        <strong>{{ $p->judul }}</strong><br>
                        <small style="color:#6b7280">
                            {{ \Illuminate\Support\Str::limit(strip_tags($p->deskripsi),60) }}
                        </small>
                        <div style="margin-top:4px">
                            @if($p->juara)
                                <span class="badge badge-juara">Juara {{ $p->juara }}</span>
                            @endif
                            <span class="badge badge-tingkat">{{ $p->tingkat }}</span>
                            <span class="badge badge-tingkat">{{ $p->penyelenggara }}</span>
                        </div>
                    </td>
                    <td><span class="badge badge-kelas">{{ $p->kelas_only }}</span></td>
                    <td><span class="badge badge-jurusan">{{ $p->jurusan_only }}</span></td>
                    <td><span class="badge badge-subkelas">{{ $p->subkelas }}</span></td>
                    <td>{{ \Carbon\Carbon::parse($p->tanggal)->format('d M Y') }}</td>
                    <td>
                        <div class="actions">
                            <a href="{{ route('admin.prestasi.edit',$p->id) }}" class="btn-action btn-edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('admin.prestasi.destroy',$p->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn-action btn-delete"
                                    onclick="return confirm('Hapus data ini?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" style="text-align:center;color:#6b7280;padding:32px">
                        Belum ada data prestasi
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div class="pagination">
        {{ $prestasi->links() }}
    </div>
</div>

{{-- MODAL IMAGE --}}
<div id="imageModal" class="modal" onclick="hideImage()">
    <div class="modal-content" onclick="event.stopPropagation()">
        <div class="modal-header">
            <strong>Foto Prestasi</strong>
            <button onclick="hideImage()">×</button>
        </div>
        <div class="modal-body">
            <img id="modalImage">
        </div>
    </div>
</div>

<script>
function showImage(src){
    document.getElementById('modalImage').src = src;
    document.getElementById('imageModal').classList.add('show');
}
function hideImage(){
    document.getElementById('imageModal').classList.remove('show');
}
</script>
@endsection