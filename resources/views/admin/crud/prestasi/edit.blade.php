@extends('admin.layout')

@section('title','Edit Prestasi')

@section('content')
<style>
/* ================= OVERLAY ================= */
.popup-overlay{
    position: fixed;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(219,234,254,.85),
        rgba(191,219,254,.9)
    );
    backdrop-filter: blur(8px);
    z-index: 1200;
    animation: fadeOverlay .3s ease;
}

/* ================= CONTAINER ================= */
.popup-container{
    position: fixed;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1300;
}

/* ================= CARD ================= */
.popup-card{
    width: 680px;
    max-width: 96%;
    background: #fff;
    border-radius: 22px;
    box-shadow:
        0 25px 60px rgba(37,99,235,.25),
        0 10px 30px rgba(0,0,0,.15);
    overflow: hidden;
    animation: popupShow .35s cubic-bezier(.16,1,.3,1);
}

/* ================= HEADER ================= */
.popup-header{
    padding: 18px 24px;
    background: linear-gradient(135deg,#3b82f6,#2563eb);
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.popup-header h5{
    margin: 0;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 8px;
}

.popup-close{
    font-size: 28px;
    color: rgba(255,255,255,.9);
    text-decoration: none;
    transition: .25s;
}
.popup-close:hover{
    color: #fff;
    transform: rotate(90deg) scale(1.1);
}

/* ================= BODY ================= */
.popup-body{
    padding: 26px;
    max-height: 75vh;
    overflow-y: auto;
}

/* Scrollbar */
.popup-body::-webkit-scrollbar{ width:6px; }
.popup-body::-webkit-scrollbar-thumb{
    background:#93c5fd;
    border-radius:10px;
}

/* ================= FORM ================= */
.form-label{
    font-size:.85rem;
    color:#334155;
}

.form-control{
    border-radius:12px;
    padding:10px 14px;
    border:1px solid #e5e7eb;
    transition:.25s;
}

.form-control:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 .15rem rgba(37,99,235,.25);
}

.form-section {
    margin-bottom: 24px;
    padding: 16px;
    background-color: #f8fafc;
    border-radius: 12px;
    border-left: 4px solid #3b82f6;
}

.section-title {
    font-weight: 600;
    color: #1e40af;
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* ================= BUTTON ================= */
.btn{
    border-radius:12px;
    padding:10px 18px;
    font-weight:600;
}

.btn-primary{
    background:linear-gradient(135deg,#3b82f6,#2563eb);
    border:none;
}
.btn-primary:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 25px rgba(37,99,235,.35);
}

.btn-light{
    background:#f1f5f9;
}
.btn-light:hover{
    background:#e2e8f0;
}

.btn-secondary {
    background-color: #6c757d;
    color: white;
}
.btn-secondary:hover {
    background-color: #5a6268;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(108, 117, 125, 0.35);
}

/* ================= ANIMATION ================= */
@keyframes popupShow{
    from{opacity:0;transform:translateY(20px) scale(.95);}
    to{opacity:1;transform:translateY(0) scale(1);}
}
@keyframes fadeOverlay{
    from{opacity:0;}
    to{opacity:1;}
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
    .popup-card {
        width: 95%;
        max-width: none;
    }
    
    .popup-body {
        padding: 20px;
    }
    
    .form-section {
        padding: 12px;
    }
}
</style>

{{-- OVERLAY --}}
<div class="popup-overlay"></div>

{{-- CONTAINER --}}
<div class="popup-container">
    <div class="popup-card">

        {{-- HEADER --}}
        <div class="popup-header">
            <h5>
                <i class="bi bi-pencil-square"></i>
                Edit Prestasi
            </h5>
            <a href="{{ route('admin.prestasi.index') }}" class="popup-close" title="Tutup">&times;</a>
        </div>

        {{-- BODY --}}
        <div class="popup-body">
            <form action="{{ route('admin.prestasi.update',$prestasi->id) }}"
                  method="POST"
                  enctype="multipart/form-data"
                  id="prestasiForm">
                @csrf
                @method('PUT')

                {{-- PESAN ERROR --}}
                @if($errors->any())
                    <div class="alert alert-danger mb-3">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- ================= INFORMASI PRESTASI ================= --}}
                <div class="form-section">
                    <h6 class="section-title">
                        <i class="bi bi-trophy-fill"></i> Informasi Prestasi
                    </h6>

                    <div class="mb-3">
                        <label for="judul" class="form-label fw-semibold">Judul Prestasi</label>
                        <input type="text"
                               id="judul"
                               name="judul"
                               class="form-control @error('judul') is-invalid @enderror"
                               value="{{ old('judul', $prestasi->judul) }}"
                               placeholder="Contoh: Juara 1 Lomba Futsal"
                               required>
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                  id="deskripsi"
                                  name="deskripsi"
                                  rows="3">{{ old('deskripsi', $prestasi->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- ================= INFORMASI PESERTA ================= --}}
                <div class="form-section">
                    <h6 class="section-title">
                        <i class="bi bi-people-fill"></i> Informasi Peserta
                    </h6>
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="kelas_input" class="form-label fw-semibold">Kelas</label>
                            <select class="form-select @error('kelas_input') is-invalid @enderror"
                                    id="kelas_input"
                                    name="kelas_input"
                                    required>
                                <option value="">-- Pilih --</option>
                                <option value="X" {{ old('kelas_input', $prestasi->kelas_only) == 'X' ? 'selected' : '' }}>X</option>
                                <option value="XI" {{ old('kelas_input', $prestasi->kelas_only) == 'XI' ? 'selected' : '' }}>XI</option>
                                <option value="XII" {{ old('kelas_input', $prestasi->kelas_only) == 'XII' ? 'selected' : '' }}>XII</option>
                            </select>
                            @error('kelas_input')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="jurusan" class="form-label fw-semibold">Jurusan</label>
                            <select class="form-select @error('jurusan') is-invalid @enderror"
                                    id="jurusan"
                                    name="jurusan"
                                    required>
                                <option value="">-- Pilih --</option>
                                <option value="TO" {{ old('jurusan', $prestasi->jurusan_only) == 'TO' ? 'selected' : '' }}>TO</option>
                                <option value="TJKT" {{ old('jurusan', $prestasi->jurusan_only) == 'TJKT' ? 'selected' : '' }}>TJKT</option>
                                <option value="PPLG" {{ old('jurusan', $prestasi->jurusan_only) == 'PPLG' ? 'selected' : '' }}>PPLG</option>
                                <option value="DPIB" {{ old('jurusan', $prestasi->jurusan_only) == 'DPIB' ? 'selected' : '' }}>DPIB</option>
                                <option value="MPLB" {{ old('jurusan', $prestasi->jurusan_only) == 'MPLB' ? 'selected' : '' }}>MPLB</option>
                                <option value="AKL" {{ old('jurusan', $prestasi->jurusan_only) == 'AKL' ? 'selected' : '' }}>AKL</option>
                                <option value="SP" {{ old('jurusan', $prestasi->jurusan_only) == 'SP' ? 'selected' : '' }}>SP</option>
                            </select>
                            @error('jurusan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="subkelas" class="form-label fw-semibold">Sub Kelas</label>
                            <select class="form-select @error('subkelas') is-invalid @enderror"
                                    id="subkelas"
                                    name="subkelas"
                                    disabled required>
                                <option value="">-- Pilih --</option>
                            </select>
                            @error('subkelas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <!-- Hidden field untuk menggabungkan kelas -->
                    <input type="hidden" id="kelas" name="kelas" value="{{ old('kelas', $prestasi->kelas) }}">
                    
                    <div class="alert alert-info mb-0">
                        <small><i class="bi bi-info-circle me-1"></i> Format kelas yang akan disimpan: <strong id="kelas-preview">{{ $prestasi->kelas }}</strong></small>
                    </div>
                </div>

                {{-- ================= DETAIL PRESTASI ================= --}}
                <div class="form-section">
                    <h6 class="section-title">
                        <i class="bi bi-info-circle-fill"></i> Detail Prestasi
                    </h6>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="juara" class="form-label fw-semibold">Juara</label>
                            <select class="form-select @error('juara') is-invalid @enderror"
                                    id="juara"
                                    name="juara"
                                    required>
                                <option value="">-- Pilih --</option>
                                <option value="Juara 1" {{ old('juara', $prestasi->juara) == 'Juara 1' ? 'selected' : '' }}>Juara 1</option>
                                <option value="Juara 2" {{ old('juara', $prestasi->juara) == 'Juara 2' ? 'selected' : '' }}>Juara 2</option>
                                <option value="Juara 3" {{ old('juara', $prestasi->juara) == 'Juara 3' ? 'selected' : '' }}>Juara 3</option>
                                <option value="Harapan 1" {{ old('juara', $prestasi->juara) == 'Harapan 1' ? 'selected' : '' }}>Harapan 1</option>
                                <option value="Harapan 2" {{ old('juara', $prestasi->juara) == 'Harapan 2' ? 'selected' : '' }}>Harapan 2</option>
                                <option value="Partisipasi" {{ old('juara', $prestasi->juara) == 'Partisipasi' ? 'selected' : '' }}>Partisipasi</option>
                            </select>
                            @error('juara')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="tingkat" class="form-label fw-semibold">Tingkat</label>
                            <select class="form-select @error('tingkat') is-invalid @enderror"
                                    id="tingkat"
                                    name="tingkat"
                                    required>
                                <option value="">-- Pilih --</option>
                                <option value="Sekolah" {{ old('tingkat', $prestasi->tingkat) == 'Sekolah' ? 'selected' : '' }}>Sekolah</option>
                                <option value="Kecamatan" {{ old('tingkat', $prestasi->tingkat) == 'Kecamatan' ? 'selected' : '' }}>Kecamatan</option>
                                <option value="Kabupaten" {{ old('tingkat', $prestasi->tingkat) == 'Kabupaten' ? 'selected' : '' }}>Kabupaten</option>
                                <option value="Provinsi" {{ old('tingkat', $prestasi->tingkat) == 'Provinsi' ? 'selected' : '' }}>Provinsi</option>
                                <option value="Nasional" {{ old('tingkat', $prestasi->tingkat) == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                                <option value="Internasional" {{ old('tingkat', $prestasi->tingkat) == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                            </select>
                            @error('tingkat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="penyelenggara" class="form-label fw-semibold">Penyelenggara</label>
                        <input type="text"
                               class="form-control @error('penyelenggara') is-invalid @enderror"
                               id="penyelenggara"
                               name="penyelenggara"
                               value="{{ old('penyelenggara', $prestasi->penyelenggara) }}"
                               placeholder="Contoh: Dinas Pendidikan">
                        @error('penyelenggara')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label fw-semibold">Tanggal</label>
                        <input type="date"
                               class="form-control @error('tanggal') is-invalid @enderror"
                               id="tanggal"
                               name="tanggal"
                               value="{{ old('tanggal', $prestasi->tanggal) }}"
                               required>
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label fw-semibold">Foto Prestasi</label>

                        @if($prestasi->foto)
                            <div class="mb-3 p-2 border rounded bg-light">
                                <p class="small text-muted mb-2">Foto Saat Ini:</p>
                                <img src="{{ asset('storage/'.$prestasi->foto) }}"
                                     class="rounded shadow-sm"
                                     style="width:180px;height:110px;object-fit:cover;">
                            </div>
                        @endif

                        <input type="file"
                               class="form-control @error('foto') is-invalid @enderror"
                               id="foto"
                               name="foto"
                               accept="image/*">
                        <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti foto.</small>

                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- TOMBOL AKSI --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.prestasi.index') }}" class="btn btn-secondary">
                        <i class="bi bi-x-circle me-1"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-arrow-clockwise me-1"></i> Perbarui Prestasi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- JAVASCRIPT UNTUK DROPDOWN DINAMIS & INISIALISASI --}}
<script>
// Data subkelas untuk setiap jurusan
const subKelasOptions = {
    'TO': ['1', '2', '3'],
    'TJKT': ['1', '2', '3'],
    'PPLG': ['1', '2', '3'],
    'DPIB': ['1', '2'],
    'MPLB': ['1', '2'],
    'AKL': ['1', '2'],
    'SP': ['1', '2']
};

// Fungsi untuk update preview dan hidden field kelas
function updateKelas() {
    const kelas = document.getElementById('kelas_input').value;
    const jurusan = document.getElementById('jurusan').value;
    const subkelas = document.getElementById('subkelas').value;
    const preview = document.getElementById('kelas-preview');
    const hiddenKelas = document.getElementById('kelas');

    if (kelas && jurusan && subkelas) {
        const formatKelas = `${kelas} ${jurusan} ${subkelas}`;
        preview.textContent = formatKelas;
        hiddenKelas.value = formatKelas;
    } else {
        preview.textContent = '-';
        hiddenKelas.value = '';
    }
}

// Event listener untuk jurusan
document.getElementById('jurusan').addEventListener('change', function() {
    const selectedJurusan = this.value;
    const subKelasSelect = document.getElementById('subkelas');
    
    // Reset
    subKelasSelect.innerHTML = '<option value="">-- Pilih --</option>';
    subKelasSelect.disabled = true;
    
    if (selectedJurusan && subKelasOptions[selectedJurusan]) {
        subKelasSelect.disabled = false;
        subKelasOptions[selectedJurusan].forEach(function(sub) {
            const option = document.createElement('option');
            option.value = sub;
            option.textContent = sub;
            subKelasSelect.appendChild(option);
        });
    }
    updateKelas(); // Update preview
});

// Event listener untuk kelas dan subkelas
document.getElementById('kelas_input').addEventListener('change', updateKelas);
document.getElementById('subkelas').addEventListener('change', updateKelas);

// Set nilai awal saat halaman dimuat (baik dari data lama maupun old input)
document.addEventListener('DOMContentLoaded', function() {
    // Prioritaskan old input jika ada (setelah validasi gagal)
    let kelasValue = "{{ old('kelas') }}";
    if (!kelasValue) {
        // Jika tidak ada old input, gunakan data dari database
        kelasValue = "{{ $prestasi->kelas }}";
    }

    if (kelasValue) {
        const parts = kelasValue.split(' ');
        if (parts.length === 3) {
            // Set nilai dropdown
            document.getElementById('kelas_input').value = parts[0];
            document.getElementById('jurusan').value = parts[1];
            
            // Trigger change untuk populate subkelas
            document.getElementById('jurusan').dispatchEvent(new Event('change'));
            
            // Set subkelas setelah options terisi
            setTimeout(() => {
                document.getElementById('subkelas').value = parts[2];
                updateKelas(); // Update preview
            }, 100);
        }
    }
});
</script>
@endsection