<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prestasi - SMK Negeri 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#6b7280", // Warna abu-abu sebagai pengganti biru
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
        .prestasi-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .prestasi-card:hover {
            transform: translateY(-8px);
        }
        .prestasi-image-container .overlay {
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 60%);
        }
        .prestasi-card:hover .overlay {
            opacity: 1;
        }
        .prestasi-card:hover .overlay-text {
            transform: translateY(0);
        }
        .overlay-text {
            transform: translateY(10px);
            transition: transform 0.3s ease;
        }

        /* Pagination styling */
        .pagination {
            @apply flex list-none -space-x-px;
        }
        
        .page-link {
            @apply relative block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white;
        }
        
        .page-item.active .page-link {
            @apply z-10 text-primary-600 bg-primary-50 border-primary-500 dark:text-primary-300 dark:bg-primary-900 dark:border-primary-400;
        }
        
        .page-item.disabled .page-link {
            @apply opacity-50 cursor-not-allowed bg-gray-100 dark:bg-gray-800;
        }
        
        .page-item:first-child .page-link {
            @apply rounded-l-lg;
        }

        .page-item:last-child .page-link {
            @apply rounded-r-lg;
        }
    </style>
</head>

<<<<<<< Updated upstream
<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-gray-600 dark:from-gray-700 dark:to-gray-900 py-20">
        <!-- Optional: Add a subtle pattern overlay -->
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3">
=======
<body class="bg-background-light bg-background-dark text-slate-800 text-slate-200 font-body">

    @include('layouts.navbar')

    {{-- HEADER --}}
    <div class="bg-slate-200 bg-slate-800 py-12 px-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 text-white">
>>>>>>> Stashed changes
                Prestasi
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Dokumentasi prestasi dan kejuaraan yang diraih oleh siswa SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- SEARCH -->
    <div class="max-w-4xl mx-auto mt-10 px-4">
        <form action="{{ route('prestasi') }}" method="GET"
<<<<<<< Updated upstream
            class="flex shadow-md rounded-xl overflow-hidden">
            <div class="relative flex-grow">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-search text-gray-400"></i>
                </div>
                <input
                    name="cari"
                    value="{{ request('cari') }}"
                    class="w-full pl-10 pr-3 py-4 bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary focus:outline-none"
                    placeholder="Cari Prestasi..."
                    type="text"
                    id="searchInput">
            </div>
            <button
                type="submit"
                class="bg-primary text-white px-8 py-4 font-medium hover:bg-gray-700 transition-colors">
=======
            class="flex shadow-md rounded-lg overflow-hidden">
            <input
                name="cari"
                value="{{ request('cari') }}"
                class="flex-grow px-6 py-4 bg-slate-50 bg-slate-800 border-none focus:ring-2 focus:ring-primary"
                placeholder="Cari Prestasi..."
                type="text">
            <button
                class="bg-slate-300 bg-slate-700 px-8 py-4 font-medium hover:bg-slate-400 hover:bg-slate-600">
>>>>>>> Stashed changes
                Cari
            </button>
        </form>
        
        <!-- Tombol Reset Search -->
        @if(request('cari'))
        <div class="mt-3 text-right">
            <a href="{{ route('prestasi') }}" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary">
                <i class="fa-solid fa-times-circle mr-1"></i> Hapus pencarian
            </a>
        </div>
        @endif
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- NOTIFIKASI HASIL PENCARIAN -->
        @if(request('cari'))
        <div class="mb-6 bg-gray-50 dark:bg-gray-900/20 border-l-4 border-gray-500 p-4 rounded">
            <p class="text-sm">
                Menampilkan hasil pencarian untuk: <strong>{{ request('cari') }}</strong>
            </p>
        </div>
        @endif

        <!-- GRID CARD -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">

            @forelse ($prestasi as $item)
                <div
<<<<<<< Updated upstream
                    class="prestasi-card bg-card-light dark:bg-card-dark 
                           rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                           overflow-hidden animate-fade-in group">

                    <!-- FOTO -->
                    <div class="prestasi-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
=======
                    class="group bg-surface-light bg-surface-dark rounded-xl shadow-lg border border-border-light border-border-dark overflow-hidden flex flex-col hover:-translate-y-1 transition">

                    {{-- FOTO --}}
                    <div class="aspect-[4/3] overflow-hidden bg-slate-200 bg-slate-800">
>>>>>>> Stashed changes
                        @if ($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}"
                                alt="{{ $item->judul }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                                <i class="fa-solid fa-trophy text-6xl"></i>
                            </div>
                        @endif

                        <!-- OVERLAY -->
                        <div
                            class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                            <div class="overlay-text text-white">
                                
                                <p class="text-sm opacity-90">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- BODY -->
                    <div class="p-5 flex flex-col flex-grow">
                        <div class="flex justify-end mb-3">
<<<<<<< Updated upstream
                            <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
=======
                            <span class="text-xs bg-slate-100 bg-slate-800 px-3 py-1 rounded-full">
>>>>>>> Stashed changes
                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                            </span>
                        </div>

                        <div class="border-t pt-4 flex-grow">
                            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                                {{ $item->judul }}
                            </h3>
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="fas fa-graduation-cap mr-2"></i>
                                <span>{{ $item->kelas }}</span>
                            </div>
                        </div>

<<<<<<< Updated upstream
                       
=======
                        <div class="mt-auto flex justify-end">
                            <a href="#"
                                class="inline-flex items-center gap-2 bg-slate-200 bg-slate-700 text-xs font-semibold py-2 px-4 rounded-full">
                                Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
>>>>>>> Stashed changes
                    </div>
                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center text-center py-20">
                    <div class="w-24 h-24 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mb-6">
                        <i class="fa-solid fa-trophy text-5xl text-gray-400"></i>
                    </div>
                    @if(request('cari'))
                        <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300 mb-2">
                            Tidak ada hasil untuk "{{ request('cari') }}"
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 max-w-md mb-4">
                            Coba kata kunci lain atau lihat semua prestasi
                        </p>
                        <a href="{{ route('prestasi') }}" class="mt-4 inline-block bg-primary text-white px-6 py-2 rounded-lg hover:bg-gray-700 transition-colors">
                            Lihat Semua Prestasi
                        </a>
                    @else
                        <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300 mb-2">
                            Belum Ada Data Prestasi
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400 max-w-md">
                            Belum ada data prestasi yang tersedia saat ini. Kunjungi kembali lain hari untuk melihat prestasi terbaru dari kami.
                        </p>
                    @endif
                </div>
            @endforelse

        </div>

        <!-- PAGINATION -->
        <div class="flex justify-center mt-10">
            {{ $prestasi->links() }}
        </div>

    </main>

    @include('layouts.footer')

    <!-- DARK MODE BUTTON -->
    <button
        id="darkToggle"
<<<<<<< Updated upstream
        class="fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg z-50 hover:bg-gray-600 transition-colors">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
=======
        class="fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg z-50">
        <i class="fa-solid fa-moon hidden"></i>
        <i class="fa-solid fa-sun hidden block"></i>
>>>>>>> Stashed changes
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

        // Search functionality
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            
            // Auto-submit form on Enter key
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    this.form.submit();
                }
            });
        });
    </script>

</body>
<<<<<<< Updated upstream
</html>
=======
</html>

>>>>>>> Stashed changes
