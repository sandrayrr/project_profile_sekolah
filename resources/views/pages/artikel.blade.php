<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Artikel - SMK Negeri 1 Kawali</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#3b82f6", // Blue typical for education/professional
                        secondary: "#fcd34d", // Yellow accent from the logo
                        "background-light": "#f3f4f6", // Light gray background
                        "background-dark": "#111827", // Dark mode background
                        "card-light": "#ffffff",
                        "card-dark": "#1f2937",
                        "text-light": "#1f2937",
                        "text-dark": "#f9fafb",
                        "border-light": "#e5e7eb",
                        "border-dark": "#374151"
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"],
                        sans: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        lg: "0.75rem",
                        xl: "1rem",
                    },
                },
            },
        };
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark font-sans transition-colors duration-200">
    <header class="bg-card-light dark:bg-card-dark shadow-sm border-b border-border-light dark:border-border-dark">
       @include('layouts.navbar')
    <main class="container mx-auto px-4 py-8 lg:py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
<div class="lg:col-span-2">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($artikels as $item)
        <div
            class="bg-card-light dark:bg-card-dark rounded-xl shadow-sm border border-border-light dark:border-border-dark overflow-hidden hover:shadow-md transition-shadow">

            <!-- FOTO -->
            <div class="h-48 bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                @if ($item->foto)
                    <img
                        src="{{ asset('storage/' . $item->foto) }}"
                        alt="{{ $item->judul }}"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                @else
                    <div class="w-full h-full flex items-center justify-center">
                        <span class="material-icons text-5xl text-gray-400">image</span>
                    </div>
                @endif
            </div>

            <!-- KONTEN -->
            <div class="p-5">
                <div class="text-xs font-semibold text-primary mb-2 flex items-center gap-1">
                    <span class="material-icons text-xs">calendar_today</span>
                    {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                </div>

                <h3
                    class="text-lg font-bold text-gray-900 dark:text-white mb-2 leading-snug hover:text-primary transition-colors">
                    {{ $item->judul }}
                </h3>

                <p class="text-gray-500 dark:text-gray-400 text-sm line-clamp-3">
                    {{ $item->deskripsi }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
              
                <div class="mt-8 flex justify-center">
                    <nav aria-label="Pagination" class="isolate inline-flex -space-x-px rounded-md shadow-sm">
                        <a class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 dark:ring-gray-600 dark:hover:bg-gray-700"
                            href="#">
                            <span class="sr-only">Previous</span>
                            <span class="material-icons text-sm">chevron_left</span>
                        </a>
                        <a aria-current="page"
                            class="relative z-10 inline-flex items-center bg-primary px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                            href="#">1</a>
                        <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 dark:text-gray-200 dark:ring-gray-600 dark:hover:bg-gray-700"
                            href="#">2</a>
                        <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 dark:text-gray-200 dark:ring-gray-600 dark:hover:bg-gray-700"
                            href="#">3</a>
                        <a class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 dark:ring-gray-600 dark:hover:bg-gray-700"
                            href="#">
                            <span class="sr-only">Next</span>
                            <span class="material-icons text-sm">chevron_right</span>
                        </a>
                    </nav>
                </div>
            </div>
            <aside class="space-y-8">
                <div
                    class="bg-gray-50 dark:bg-card-dark rounded-xl p-6 shadow-sm border border-border-light dark:border-border-dark">
                    <h3
                        class="text-lg font-bold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-200 dark:border-gray-700">
                        Kategori Artikel
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a class="flex justify-between items-center text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors group"
                                href="#">
                                <span>Akademik</span>
                                <span
                                    class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 text-xs px-2 py-1 rounded-full group-hover:bg-primary group-hover:text-white transition-colors">12</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex justify-between items-center text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors group"
                                href="#">
                                <span>Kesiswaan</span>
                                <span
                                    class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 text-xs px-2 py-1 rounded-full group-hover:bg-primary group-hover:text-white transition-colors">8</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex justify-between items-center text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors group"
                                href="#">
                                <span>Prestasi</span>
                                <span
                                    class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 text-xs px-2 py-1 rounded-full group-hover:bg-primary group-hover:text-white transition-colors">5</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex justify-between items-center text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors group"
                                href="#">
                                <span>Pengumuman</span>
                                <span
                                    class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 text-xs px-2 py-1 rounded-full group-hover:bg-primary group-hover:text-white transition-colors">10</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex justify-between items-center text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors group"
                                href="#">
                                <span>Berita Sekolah</span>
                                <span
                                    class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 text-xs px-2 py-1 rounded-full group-hover:bg-primary group-hover:text-white transition-colors">24</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="bg-gray-50 dark:bg-card-dark rounded-xl p-6 shadow-sm border border-border-light dark:border-border-dark">
                    <h3
                        class="text-lg font-bold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-200 dark:border-gray-700">
                        Artikel Terbaru
                    </h3>
                    <ul class="space-y-4">
                        <li class="pb-3 border-b border-gray-200 dark:border-gray-700 last:border-0 last:pb-0">
                            <a class="group block" href="#">
                                <h4
                                    class="text-sm font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors mb-1">
                                    Penerimaan Peserta Didik Baru (PPDB) Tahun 2024
                                </h4>
                                <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                                    <span class="material-icons text-[10px]">access_time</span> 2 Hari yang lalu
                                </div>
                            </a>
                        </li>
                        <li class="pb-3 border-b border-gray-200 dark:border-gray-700 last:border-0 last:pb-0">
                            <a class="group block" href="#">
                                <h4
                                    class="text-sm font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors mb-1">
                                    Kunjungan Industri Jurusan TKR ke PT. Astra Honda Motor
                                </h4>
                                <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                                    <span class="material-icons text-[10px]">access_time</span> 5 Hari yang lalu
                                </div>
                            </a>
                        </li>
                        <li class="pb-3 border-b border-gray-200 dark:border-gray-700 last:border-0 last:pb-0">
                            <a class="group block" href="#">
                                <h4
                                    class="text-sm font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors mb-1">
                                    Workshop Kewirausahaan untuk Siswa
                                </h4>
                                <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                                    <span class="material-icons text-[10px]">access_time</span> 1 Minggu yang lalu
                                </div>
                            </a>
                        </li>
                        <li class="pb-3 border-b border-gray-200 dark:border-gray-700 last:border-0 last:pb-0">
                            <a class="group block" href="#">
                                <h4
                                    class="text-sm font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors mb-1">
                                    Rapat Komite Sekolah Awal Semester
                                </h4>
                                <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                                    <span class="material-icons text-[10px]">access_time</span> 2 Minggu yang lalu
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </main>
   @include('layouts.footer')
</body>

</html>