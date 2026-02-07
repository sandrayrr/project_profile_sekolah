<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'nama',
        'deskripsi',
        'kelas',
        'jurusan',
        'subkelas',        // Format: "X TO 1", "XI PPLG 2", dll
        'juara',        // "1", "2", "3", "Harapan 1", "Harapan 2", "Partisipasi"
        'tingkat',      // "Sekolah", "Kecamatan", "Kabupaten", "Provinsi", "Nasional", "Internasional"
        'penyelenggara', // Nama penyelenggara lomba
        'tanggal',
        'foto'
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    // Accessor untuk mendapatkan kelas saja (X, XI, XII)
    public function getKelasOnlyAttribute()
    {
        return substr($this->kelas, 0, 1);
    }

    // Accessor untuk mendapatkan jurusan saja (TO, TJKT, PPLG, dll)
    public function getJurusanOnlyAttribute()
    {
        if (preg_match('/\b(TO|TJKT|PPLG|DPIB|MPLB|AKL|SP)\b/', $this->kelas, $matches)) {
            return $matches[1];
        }
        return null;
    }

    // Accessor untuk mendapatkan sub_kelas saja (1, 2, 3)
    public function getSubKelasOnlyAttribute()
    {
        $parts = explode(' ', $this->kelas);
        return isset($parts[2]) ? $parts[2] : null;
    }

    // Scope untuk filter berdasarkan kelas
    public function scopeByKelas($query, $kelas)
    {
        return $query->where('kelas', 'like', $kelas . '%');
    }

    // Scope untuk filter berdasarkan jurusan
    public function scopeByJurusan($query, $jurusan)
    {
        return $query->where('kelas', 'like', '% ' . $jurusan . ' %');
    }

    // Scope untuk filter berdasarkan tahun
    public function scopeByYear($query, $year)
    {
        return $query->whereYear('tanggal', $year);
    }

    // Mutator untuk format kelas saat disimpan
    public function setKelasAttribute($value)
    {
        // Pastikan format kelas konsisten (contoh: "X TO 1")
        $this->attributes['kelas'] = trim($value);
    }

    public function getRombelAttribute()
{
    return "{$this->kelas} {$this->jurusan} {$this->subkelas}";
}

}