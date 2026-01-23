<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        $currentYear = now()->year;
        $lastYear = $currentYear - 1;

        // Ambil data Beranda terbaru
        $beranda = Beranda::latest()->first();

        $siswaNow = $beranda->jumlah_siswa ?? 0;
        $guruNow = $beranda->jumlah_guru ?? 0;
        $jurusanNow = $beranda->jumlah_jurusan ?? 0;

        // Ambil data tahun lalu
        $berandaLast = Beranda::whereYear('created_at', $lastYear)->latest()->first();
        $siswaLast = $berandaLast->jumlah_siswa ?? 0;
        $guruLast = $berandaLast->jumlah_guru ?? 0;
        $jurusanLast = $berandaLast->jumlah_jurusan ?? 0;

        // Hitung growth
        $siswaGrowth = $siswaLast == 0 ? ($siswaNow > 0 ? 100 : 0) : round((($siswaNow - $siswaLast) / $siswaLast) * 100);
        $guruGrowth = $guruLast == 0 ? ($guruNow > 0 ? 100 : 0) : round((($guruNow - $guruLast) / $guruLast) * 100);
        $jurusanGrowth = $jurusanLast == 0 ? ($jurusanNow > 0 ? 100 : 0) : round((($jurusanNow - $jurusanLast) / $jurusanLast) * 100);

        // Prestasi
        $prestasiNow = Prestasi::whereYear('tanggal', $currentYear)->count();
        $prestasiLast = Prestasi::whereYear('tanggal', $lastYear)->count();
        $prestasiGrowth = $prestasiLast == 0 ? ($prestasiNow > 0 ? 100 : 0) : round((($prestasiNow - $prestasiLast) / $prestasiLast) * 100);

        // ----------------------------
        // Tambahan untuk chart realtime
        // Bisa gunakan data 6 bulan terakhir sebagai contoh
       $months = [];
$siswaHistory = [];
$guruHistory = [];
$prestasiHistory = [];

for ($i = 5; $i >= 0; $i--) {
    $month = Carbon::now()->subMonths($i)->format('M'); // nama bulan otomatis
    $yearMonth = Carbon::now()->subMonths($i)->format('Y-m');

    $months[] = $month;

    // Ambil data bulan tertentu
    $berandaMonth = Beranda::whereYear('created_at', substr($yearMonth, 0, 4))
                            ->whereMonth('created_at', substr($yearMonth, 5, 2))
                            ->latest()->first();

    $siswaHistory[] = $berandaMonth->jumlah_siswa ?? 0;
    $guruHistory[] = $berandaMonth->jumlah_guru ?? 0;

    $prestasiMonth = Prestasi::whereYear('tanggal', substr($yearMonth, 0, 4))
                              ->whereMonth('tanggal', substr($yearMonth, 5, 2))
                              ->count();
    $prestasiHistory[] = $prestasiMonth;
}
        return view('admin.dashboard', compact(
            'beranda',
            'siswaNow', 'siswaGrowth',
            'guruNow', 'guruGrowth',
            'jurusanNow', 'jurusanGrowth',
            'prestasiNow', 'prestasiGrowth',
            'months', 'siswaHistory', 'guruHistory', 'prestasiHistory'
        ));
    }
}
