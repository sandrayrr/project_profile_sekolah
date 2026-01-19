<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Artikel - SMK Negeri 1 Kawali</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#3b82f6", // Warna biru yang lebih menarik
                        secondary: "#6366f1", // Warna sekunder
                        "background-light": "#f9fafb",
                        "background-dark": "#111827",
                        "card-light": "#ffffff",
                        "card-dark": "#1f2937",
                        "border-light": "#e5e7eb",
                        "border-dark": "#374151",
                        "text-light": "#111318",
                        "text-dark": "#f9fafb",
                    },
                    fontFamily: {
                        body: ["Inter", "sans-serif"],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                            '100%': { transform: 'translateY(0px)' },
                        }
                    }
                },
            },
        };
    </script>
    <style>
        /* Custom styles for visual enhancement */
        .artikel-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .artikel-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .artikel-image-container .overlay {
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 60%);
        }
        .artikel-card:hover .overlay {
            opacity: 1;
        }
        .artikel-card:hover .overlay-text {
            transform: translateY(0);
        }
        .overlay-text {
            transform: translateY(10px);
            transition: transform 0.3s ease;
        }
        
        /* Search input styling */
        .search-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }
        
        /* Category hover effect */
        .category-item {
            transition: all 0.2s ease;
        }
        .category-item:hover {
            transform: translateX(5px);
        }
        
        /* Latest article hover effect */
        .latest-article {
            transition: all 0.2s ease;
        }
        .latest-article:hover {
            transform: translateX(5px);
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
        
        /* Dark mode button animation */
        .dark-mode-btn {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Gradient text effect */
        .gradient-text {
            background: linear-gradient(to right, #3b82f6, #6366f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        .dark ::-webkit-scrollbar-track {
            background: #1f2937;
        }
        .dark ::-webkit-scrollbar-thumb {
            background: #4b5563;
        }
        .dark ::-webkit-scrollbar-thumb:hover {
            background: #6b7280;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-secondary dark:from-gray-700 dark:to-gray-900 py-20 overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-32 -mt-32"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white opacity-5 rounded-full -ml-48 -mb-48"></div>
        
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3 animate-fade-in">
                Artikel
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl animate-fade-in">
                Informasi terkini seputar kegiatan akademik, prestasi, dan pengumuman di SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- SEARCH -->
    <div class="max-w-4xl mx-auto mt-10 px-4">
        <form action="{{ route('artikel.index') }}" method="GET"
            class="flex shadow-lg rounded-2xl overflow-hidden bg-white dark:bg-gray-800">
            <div class="relative flex-grow">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-search text-gray-400"></i>
                </div>
                <input
                    name="cari"
                    value="{{ request('cari') }}"
                    class="search-input w-full pl-10 pr-3 py-4 bg-transparent border-none focus:ring-2 focus:ring-primary focus:outline-none"
                    placeholder="Cari Artikel..."
                    type="text"
                    id="searchInput">
            </div>
            <button
                type="submit"
                class="bg-primary text-white px-8 py-4 font-medium hover:bg-blue-600 transition-colors flex items-center gap-2">
                <span>Cari</span>
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </form>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- NOTIFIKASI HASIL PENCARIAN / FILTER -->
        @if(request('cari'))
        <div class="mb-6 bg-blue-50 dark:bg-blue-900/20 border-l-4 border-primary p-4 rounded animate-fade-in">
            <p class="text-sm">
                Menampilkan hasil pencarian untuk: <strong class="gradient-text">{{ request('cari') }}</strong>
            </p>
        </div>
        @elseif(request('kategori'))
        <div class="mb-6 bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-500 p-4 rounded flex justify-between items-center">
            <p class="text-sm">
                Menampilkan kategori: <strong>{{ request('kategori') }}</strong>
            </p>
            <a href="{{ route('artikel.index') }}" class="text-sm text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                <i class="fas fa-times mr-1"></i> Hapus Filter
            </a>
        </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- ARTIKEL GRID -->
            <div class="lg:col-span-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @forelse ($artikels as $item)
                    <a href="{{ route('artikel.show', $item->id) }}" class="block group">
                        <div
                            class="artikel-card bg-card-light dark:bg-card-dark 
                                   rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                                   overflow-hidden animate-fade-in h-full flex flex-col">

                            <!-- FOTO -->
                            <div class="artikel-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                                @if ($item->foto)
                                    <img
                                        src="{{ asset('storage/' . $item->foto) }}"
                                        alt="{{ $item->judul }}"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                                        <span class="material-icons text-6xl">article</span>
                                    </div>
                                @endif

                                <!-- OVERLAY -->
                                <div
                                    class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                                    <div class="overlay-text text-white">
                                        <p class="font-semibold text-lg">Baca Selengkapnya</p>
                                        <p class="text-sm opacity-90">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- BODY -->
                            <div class="p-5 flex flex-col flex-grow">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
                                            Artikel
                                        </span>
                                        @if($item->kategori)
                                        <span class="text-xs bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 px-3 py-1 rounded-full font-medium">
                                            {{ $item->kategori }}
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="flex-grow">
                                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white line-clamp-2 group-hover:text-primary transition-colors">
                                        {{ $item->judul }}
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">
                                        {{ Str::limit(strip_tags($item->deskripsi), 100) }}
                                    </p>
                                </div>

                                <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center mt-4 pt-3 border-t border-border-light dark:border-border-dark">
                                    <i class="far fa-calendar-alt mr-1"></i>
                                    <span>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    @empty
                    <div class="col-span-full text-center py-12">
                        <i class="fas fa-inbox text-6xl text-gray-300 dark:text-gray-600 mb-4"></i>
                        <p class="text-gray-500 dark:text-gray-400">Artikel tidak ditemukan.</p>
                    </div>
                    @endforelse
                </div>

                <!-- PAGINATION -->
                @if($artikels->hasPages())
                <div class="mt-8 flex justify-center">
                    {{ $artikels->links('pagination::tailwind') }}
                </div>
                @endif
            </div>

           <!-- SIDEBAR -->
<aside class="space-y-8">

    {{-- ================= KATEGORI ARTIKEL ================= --}}
    <div
        class="bg-gray-50 dark:bg-card-dark rounded-xl p-6 shadow-sm border border-border-light dark:border-border-dark">

        <h3
            class="text-lg font-bold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-200 dark:border-gray-700 flex items-center">
            <i class="fas fa-folder-open mr-2 text-primary"></i>
            Kategori Artikel
        </h3>

        <ul class="space-y-2">
            @forelse ($kategoriArtikel as $kat)
                @if(!empty($kat->kategori))
                    <li class="category-item">
                        <a
                            href="{{ route('artikel.kategori', ['kategori' => $kat->kategori]) }}"
                            class="flex justify-between items-center text-gray-600 dark:text-gray-300 hover:text-primary transition-colors group py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800">

                            <span class="flex items-center">
                                <i class="fas fa-tag text-xs mr-2 opacity-60"></i>
                                {{ $kat->kategori }}
                            </span>

                            <span
                                class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 text-xs px-2 py-1 rounded-full
                                       group-hover:bg-primary group-hover:text-white transition-colors">
                                {{ $kat->total }}
                            </span>
                        </a>
                    </li>
                @endif
            @empty
                <li class="text-sm text-gray-500 py-2 px-3">
                    <i class="fas fa-info-circle mr-1"></i>
                    Belum ada kategori
                </li>
            @endforelse
        </ul>
    </div>

    {{-- ================= ARTIKEL TERBARU ================= --}}
    <div
        class="bg-gray-50 dark:bg-card-dark rounded-xl p-6 shadow-sm border border-border-light dark:border-border-dark">

        <h3
            class="text-lg font-bold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-200 dark:border-gray-700 flex items-center">
            <i class="fas fa-clock mr-2 text-primary"></i>
            Artikel Terbaru
        </h3>

        <ul class="space-y-4">
            @forelse ($artikelTerbaru as $item)
                <li class="latest-article pb-3 border-b border-gray-200 dark:border-gray-700 last:border-0 last:pb-0">
                    <a class="group block" href="{{ route('artikel.show', $item->id) }}">
                        <h4
                            class="text-sm font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors mb-1 line-clamp-2">
                            {{ $item->judul }}
                        </h4>

                                <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                                    <i class="material-icons text-[10px]">access_time</i>
                                    {{ \Carbon\Carbon::parse($item->tanggal)->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            @empty
                <li class="text-sm text-gray-500 flex items-center gap-2">
                    <i class="material-icons text-sm">info</i>
                    Belum ada artikel
                </li>
            @endforelse
        </ul>
    </div>
        <!-- PAGINATION -->
        @if(isset($galeri) && method_exists($galeri, 'links') && $galeri->hasPages())
        <div class="flex justify-center mt-10">
            {{ $galeri->links() }}
        </div>
        @endif
</aside>

        </div>
    </main>

    @include('layouts.footer')

    <!-- DARK MODE BUTTON -->
    <button
        id="darkToggle"
        class="dark-mode-btn fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg z-50 hover:bg-blue-600 transition-all">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
    </button>

    <!-- BACK TO TOP BUTTON -->
    <button
        id="backToTop"
        class="fixed bottom-6 right-20 bg-primary text-white p-3 rounded-full shadow-lg z-50 hover:bg-blue-600 transition-all opacity-0 invisible">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <script>
        // Dark mode toggle
        const toggle = document.getElementById('darkToggle');
        const html = document.documentElement;

        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
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
        
        // Back to top button
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.add('opacity-0', 'invisible');
                backToTopButton.classList.remove('opacity-100', 'visible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

</body>

</html>


