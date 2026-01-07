@extends('admin.layout')

@section('title','Manajemen Tenaga Kependidikan')

@section('content')
<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <div>
            <h4 class="fw-bold mb-1">Manajemen Tenaga Kependidikan</h4>
            <p class="text-muted mb-0">
                Kelola data staf & pegawai sekolah
            </p>
        </div>

        <a href="{{ route('admin.tenaga.create') }}"
           class="btn btn-primary btn-lg px-4 shadow-sm hover-lift">
            <i class="material-icons align-middle me-1">add</i>
            Tambah Tenaga
        </a>
    </div>

    {{-- STAT CARD --}}
    <div class="row mb-4">
        <div class="col-md-3 col-sm-6">
            <div class="card border-0 shadow-sm bg-gradient-primary text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-white-50 mb-0">Total Tenaga</h6>
                        <h3 class="fw-bold mb-0">{{ $tenaga->count() }}</h3>
                    </div>
                    <i class="material-icons fs-1 opacity-75">groups</i>
                </div>
            </div>
        </div>
    </div>

    {{-- SEARCH --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <label class="form-label small text-muted fw-semibold">
                Cari Tenaga Kependidikan
            </label>
            <div class="input-group">
                <span class="input-group-text bg-transparent border-end-0">
                    <i class="material-icons text-muted">search</i>
                </span>
                <input type="text"
                       id="searchInput"
                       class="form-control border-start-0"
                       placeholder="Cari berdasarkan nama atau jabatan...">
            </div>
        </div>
    </div>

    {{-- TABLE --}}
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" id="tenagaTable">
                <thead class="table-light">
                    <tr>
                        <th width="80">Foto</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th width="140">Tanggal</th>
                        <th width="160" class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($tenaga as $item)
                    <tr class="tenaga-row"
                        data-nama="{{ strtolower($item->nama) }}"
                        data-jabatan="{{ strtolower($item->jabatan) }}">

                        {{-- FOTO --}}
                        <td>
                            @if($item->foto)
                                <img src="{{ asset('storage/'.$item->foto) }}"
                                     class="rounded shadow-sm"
                                     width="60" height="60"
                                     style="object-fit:cover">
                            @else
                                <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                     style="width:60px;height:60px">
                                    <i class="material-icons text-muted">person</i>
                                </div>
                            @endif
                        </td>

                        {{-- NAMA --}}
                        <td class="fw-semibold">
                            {{ $item->nama }}
                        </td>

                        {{-- JABATAN --}}
                        <td>
                            <span class="badge bg-secondary bg-opacity-10 text-secondary px-3 py-2 rounded-pill">
                                {{ $item->jabatan }}
                            </span>
                        </td>

                        {{-- TANGGAL --}}
                        <td class="text-muted">
                            <i class="material-icons fs-6 align-middle me-1">event</i>
                            {{ $item->created_at->format('d M Y') }}
                        </td>

                        {{-- AKSI --}}
                        <td class="text-center">
                            <a href="{{ route('admin.tenaga.edit',$item->id) }}"
                               class="btn btn-sm btn-outline-primary me-1"
                               title="Edit">
                                <i class="material-icons fs-6">edit</i>
                            </a>

                            <form action="{{ route('admin.tenaga.destroy',$item->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Hapus data tenaga ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger"
                                        title="Hapus">
                                    <i class="material-icons fs-6">delete</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">
                            <i class="material-icons fs-1 d-block mb-2">groups</i>
                            Data tenaga kependidikan belum tersedia
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
.tenaga-row:hover{
    background:#f8f9fa;
}
</style>

{{-- SCRIPT --}}
<script>
const searchInput = document.getElementById('searchInput');

searchInput.addEventListener('input', function () {
    const keyword = this.value.toLowerCase();

    document.querySelectorAll('.tenaga-row').forEach(row => {
        const nama = row.dataset.nama;
        const jabatan = row.dataset.jabatan;

        row.style.display =
            nama.includes(keyword) || jabatan.includes(keyword)
            ? '' : 'none';
    });
});
</script>

@endsection
