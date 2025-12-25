@extends('admin.layout')

@section('title','Agenda Sekolah')

@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">Agenda Sekolah</h3>
            <p class="text-muted mb-0">
                Kelola agenda dan kegiatan sekolah
            </p>
        </div>

        <a href="{{ route('admin.agenda.create') }}"
           class="btn btn-primary d-flex align-items-center gap-2 px-4">
            <i class="bi bi-plus-circle"></i>
            Tambah Agenda
        </a>
    </div>

    {{-- INFO CARD --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100"
                 style="background: linear-gradient(135deg,#43cea2,#185a9d);">
                <div class="card-body text-white d-flex justify-content-between align-items-center">
                    <div>
                        <div class="text-uppercase small opacity-75">
                            Total Agenda
                        </div>
                        <h2 class="fw-bold mb-0">
                            {{ $agendas->count() }}
                        </h2>
                    </div>
                    <i class="bi bi-calendar-check fs-1 opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- TABLE --}}
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white fw-semibold">
            <i class="bi bi-list-ul me-1"></i> Daftar Agenda
        </div>

        <div class="card-body p-0">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Judul Agenda</th>
                        <th width="160">Tanggal</th>
                        <th width="130">Waktu</th>
                        <th width="140" class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($agendas as $agenda)
                        <tr>
                            {{-- JUDUL --}}
                            <td class="fw-semibold text-dark">
                                {{ $agenda->judul }}
                            </td>

                            {{-- TANGGAL --}}
                            <td>
                                <span class="badge bg-light text-dark border">
                                    <i class="bi bi-calendar-event me-1"></i>
                                    {{ \Carbon\Carbon::parse($agenda->tanggal)->translatedFormat('d M Y') }}
                                </span>
                            </td>

                            {{-- WAKTU --}}
                            <td>
                                <span class="badge bg-secondary">
                                    <i class="bi bi-clock me-1"></i>
                                    {{ $agenda->waktu }} WIB
                                </span>
                            </td>

                            {{-- AKSI --}}
                            <td class="text-center">
                                <a href="{{ route('admin.agenda.edit',$agenda->id) }}"
                                   class="btn btn-warning btn-sm me-1"
                                   title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="{{ route('admin.agenda.destroy',$agenda->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus agenda ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                            title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-5">
                                <i class="bi bi-calendar-x fs-3 d-block mb-2"></i>
                                Belum ada agenda yang ditambahkan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

