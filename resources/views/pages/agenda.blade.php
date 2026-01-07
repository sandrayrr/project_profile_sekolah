<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agenda Sekolah - SMK Negeri 1 Kawali</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#6b7280", // Warna abu-abu
                        "background-light": "#f9fafb",
                        "background-dark": "#111827",
                        "card-light": "#ffffff",
                        "card-dark": "#1f2937",
                        "border-light": "#e5e7eb",
                        "border-dark": "#374151",
                    },
                    fontFamily: {
                        body: ["Inter", "sans-serif"],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                },
            },
        };
    </script>
    <style>
        /* Custom styles for visual enhancement */
        .agenda-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .agenda-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300 min-h-screen flex flex-col">

    @include('layouts.navbar')

    <!-- HEADER WITH GRAY BACKGROUND -->
    <div class="relative bg-gradient-to-br from-primary to-gray-600 dark:from-gray-700 dark:to-gray-900 py-20">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3">
                Agenda Sekolah
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Informasi kegiatan dan jadwal penting SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="flex-grow container mx-auto px-4 py-12 lg:py-16">

        <!-- NOTIFIKASI (opsional) -->
        @if(request('cari'))
        <div class="mb-6 bg-gray-50 dark:bg-gray-900/20 border-l-4 border-gray-500 p-4 rounded">
            <p class="text-sm">
                Menampilkan hasil pencarian untuk: <strong>{{ request('cari') }}</strong>
            </p>
        </div>
        @endif

        <!-- GRID CARD -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse ($agenda as $item)
                <div class="agenda-card bg-card-light dark:bg-card-dark rounded-2xl shadow-lg border border-border-light dark:border-border-dark overflow-hidden animate-fade-in group">
                    
                    <!-- HEADER WITH ICON -->
                    <div class="bg-gray-100 dark:bg-gray-800 p-6 border-b border-border-light dark:border-border-dark">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-primary/20 dark:bg-primary/30 rounded-full flex items-center justify-center mr-4">
                                <span class="material-icons text-primary text-2xl">
                                    {{ $item->ikon ?? 'event' }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white truncate">
                                {{ $item->judul }}
                            </h3>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="p-6">
                        <!-- DESKRIPSI -->
                        <p class="text-sm text-gray-600 dark:text-gray-300 mb-4 line-clamp-3">
                            {{ $item->deskripsi }}
                        </p>

                        <!-- TANGGAL & WAKTU -->
                        <div class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
                            <div class="flex items-center gap-2">
                                <i class="fa-regular fa-calendar"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                            </div>

                            <div class="flex items-center gap-2">
                                <i class="fa-regular fa-clock"></i>
                                {{ $item->waktu }}
                            </div>
                        </div>

                        <!-- BUTTON -->
                        <div class="mt-4 flex justify-end">
                            <a href="#" class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white text-gray-700 dark:text-gray-300 text-sm font-semibold py-2 px-4 rounded-full transition-colors">
                                Detail <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center text-center py-20">
                    <div class="w-24 h-24 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mb-6">
                        <span class="material-icons text-5xl text-gray-400">event_busy</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300 mb-2">
                        Belum Ada Agenda
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400 max-w-md">
                        Belum ada agenda sekolah yang tersedia saat ini. Kunjungi kembali lain hari untuk melihat agenda terbaru dari kami.
                    </p>
                </div>
            @endforelse

        </div>

        <!-- PAGINATION (jika diperlukan) -->
        @if(isset($agenda) && method_exists($agenda, 'links') && $agenda->hasPages())
        <div class="flex justify-center mt-10">
            {{ $agenda->links() }}
        </div>
        @endif

    </main>

    @include('layouts.footer')

    <!-- DARK MODE BUTTON -->
    <button
        id="darkToggle"
        class="fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg z-50 hover:bg-gray-600 transition-colors">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
    </button>

    <script>
        // Dark mode toggle
        const toggle = document.getElementById('darkToggle');
        const html = document.documentElement;

        if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
        }

        toggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme',
                html.classList.contains('dark') ? 'dark' : 'light'
            );
        });
    </script>

</body>
</html>