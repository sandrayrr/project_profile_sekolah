@extends('admin.layout')

@section('title', 'Tambah Prestasi')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="bi bi-plus-circle me-2"></i>
                        Tambah Prestasi Baru
                    </h5>
                </div>
                <div class="card-body">

                    {{-- PESAN ERROR --}}
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.prestasi.store') }}" method="POST" enctype="multipart/form-data" id="prestasiForm">
                        @csrf

                        <!-- Informasi Prestasi -->
                        <h6 class="text-muted mb-3">Informasi Prestasi</h6>
                        
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Prestasi</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                                   id="judul" name="judul" value="{{ old('judul') }}" 
                                   placeholder="Contoh: Juara 1 Lomba Futsal" required>
                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                      id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr>

                        <!-- Informasi Peserta -->
                        <h6 class="text-muted mb-3">Informasi Peserta</h6>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="kelas_input" class="form-label">Kelas</label>
                                <select class="form-select @error('kelas_input') is-invalid @enderror" 
                                        id="kelas_input" name="kelas_input" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="X" {{ old('kelas_input') == 'X' ? 'selected' : '' }}>X</option>
                                    <option value="XI" {{ old('kelas_input') == 'XI' ? 'selected' : '' }}>XI</option>
                                    <option value="XII" {{ old('kelas_input') == 'XII' ? 'selected' : '' }}>XII</option>
                                </select>
                                @error('kelas_input')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select class="form-select @error('jurusan') is-invalid @enderror" 
                                        id="jurusan" name="jurusan" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="TO" {{ old('jurusan') == 'TO' ? 'selected' : '' }}>TO</option>
                                    <option value="TJKT" {{ old('jurusan') == 'TJKT' ? 'selected' : '' }}>TJKT</option>
                                    <option value="PPLG" {{ old('jurusan') == 'PPLG' ? 'selected' : '' }}>PPLG</option>
                                    <option value="DPIB" {{ old('jurusan') == 'DPIB' ? 'selected' : '' }}>DPIB</option>
                                    <option value="MPLB" {{ old('jurusan') == 'MPLB' ? 'selected' : '' }}>MPLB</option>
                                    <option value="AKL" {{ old('jurusan') == 'AKL' ? 'selected' : '' }}>AKL</option>
                                    <option value="SP" {{ old('jurusan') == 'SP' ? 'selected' : '' }}>SP</option>
                                </select>
                                @error('jurusan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="subkelas" class="form-label">Sub Kelas</label>
                                <select class="form-select @error('subkelas') is-invalid @enderror" 
                                        id="subkelas" name="subkelas" disabled required>
                                    <option value="">-- Pilih Jurusan --</option>
                                </select>
                                @error('subkelas')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Hidden field untuk menggabungkan kelas -->
                        <input type="hidden" id="kelas" name="kelas" value="{{ old('kelas') }}">
                        
                        <div class="alert alert-info mb-3">
                            <small><i class="bi bi-info-circle me-1"></i> Format kelas yang akan disimpan: <strong id="kelas-preview">-</strong></small>
                        </div>

                        <hr>

                        <!-- Detail Prestasi -->
                        <h6 class="text-muted mb-3">Detail Prestasi</h6>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="juara" class="form-label">Juara</label>
                                <select class="form-select @error('juara') is-invalid @enderror" 
                                        id="juara" name="juara" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="1" {{ old('juara') == '1' ? 'selected' : '' }}>Juara 1</option>
                                    <option value="2" {{ old('juara') == '2' ? 'selected' : '' }}>Juara 2</option>
                                    <option value="3" {{ old('juara') == '3' ? 'selected' : '' }}>Juara 3</option>
                                    <option value="Harapan 1" {{ old('juara') == 'Harapan 1' ? 'selected' : '' }}>Harapan 1</option>
                                    <option value="Harapan 2" {{ old('juara') == 'Harapan 2' ? 'selected' : '' }}>Harapan 2</option>
                                    <option value="Partisipasi" {{ old('juara') == 'Partisipasi' ? 'selected' : '' }}>Partisipasi</option>
                                </select>
                                @error('juara')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="tingkat" class="form-label">Tingkat</label>
                                <select class="form-select @error('tingkat') is-invalid @enderror" 
                                        id="tingkat" name="tingkat" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Sekolah" {{ old('tingkat') == 'Sekolah' ? 'selected' : '' }}>Sekolah</option>
                                    <option value="Kecamatan" {{ old('tingkat') == 'Kecamatan' ? 'selected' : '' }}>Kecamatan</option>
                                    <option value="Kabupaten" {{ old('tingkat') == 'Kabupaten' ? 'selected' : '' }}>Kabupaten</option>
                                    <option value="Provinsi" {{ old('tingkat') == 'Provinsi' ? 'selected' : '' }}>Provinsi</option>
                                    <option value="Nasional" {{ old('tingkat') == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                                    <option value="Internasional" {{ old('tingkat') == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                                </select>
                                @error('tingkat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="penyelenggara" class="form-label">Penyelenggara</label>
                            <input type="text" class="form-control @error('penyelenggara') is-invalid @enderror" 
                                   id="penyelenggara" name="penyelenggara" value="{{ old('penyelenggara') }}" 
                                   placeholder="Contoh: Dinas Pendidikan">
                            @error('penyelenggara')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" 
                                   id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                            @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto Prestasi</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                                   id="foto" name="foto" accept="image/*">
                            <small class="form-text text-muted">Format: JPG, PNG. Maks: 2MB</small>
                            @error('foto')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr>

                        <!-- Tombol Aksi -->
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.prestasi.index') }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-1"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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

// Set nilai awal jika ada data lama
document.addEventListener('DOMContentLoaded', function() {
    const oldKelas = "{{ old('kelas') }}";
    if (oldKelas) {
        const parts = oldKelas.split(' ');
        if (parts.length === 3) {
            document.getElementById('kelas_input').value = parts[0];
            document.getElementById('jurusan').value = parts[1];
            
            // Trigger change untuk populate subkelas
            document.getElementById('jurusan').dispatchEvent(new Event('change'));
            
            // Set subkelas setelah options terisi
            setTimeout(() => {
                document.getElementById('subkelas').value = parts[2];
                updateKelas();
            }, 100);
        }
    }
});
</script>
@endsection