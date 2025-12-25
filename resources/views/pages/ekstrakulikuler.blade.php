<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ekstrakurikuler - SMK Negeri 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
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
        .ekstrakurikuler-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .ekstrakurikuler-card:hover {
            transform: translateY(-8px);
        }
        .ekstrakurikuler-image-container {
            overflow: hidden;
        }
        .ekstrakurikuler-image-container img {
            transition: transform 0.5s ease;
        }
        .ekstrakurikuler-card:hover .ekstrakurikuler-image-container img {
            transform: scale(1.1);
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

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-gray-600 dark:from-gray-700 dark:to-gray-900 py-20">
        <!-- Optional: Add a subtle pattern overlay -->
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3">
                Ekstrakurikuler
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Informasi lengkap mengenai kegiatan ekstrakurikuler yang tersedia di SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- SEARCH -->
    <div class="max-w-4xl mx-auto mt-10 px-4">
        <form action="#" method="GET"
            class="flex shadow-md rounded-xl overflow-hidden">
            <div class="relative flex-grow">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-search text-gray-400"></i>
                </div>
                <input
                    name="cari"
                    value="{{ request('cari') }}"
                    class="w-full pl-10 pr-3 py-4 bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary focus:outline-none"
                    placeholder="Cari Ekstrakurikuler..."
                    type="text"
                    id="searchInput">
            </div>
            <button
                type="submit"
                class="bg-primary text-white px-8 py-4 font-medium hover:bg-gray-700 transition-colors">
                Cari
            </button>
        </form>
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
        @if(isset($ekstrakurikuler) && count($ekstrakurikuler) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">
            @foreach($ekstrakurikuler as $item)
            <div
                class="ekstrakurikuler-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- FOTO -->
                <div class="ekstrakurikuler-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative">
                    <img src="{{ $item->foto ?? 'https://via.placeholder.com/400x300?text=Tidak+Ada+Gambar' }}"
                        alt="{{ $item->judul }}"
                        class="w-full h-full object-cover">
                </div>

                <!-- BODY -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-end mb-3">
                        @if(isset($item->jenis) && $item->jenis === 'wajib')
                        <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
                            Wajib
                        </span>
                        @else
                        <span class="text-xs bg-green-500/10 dark:bg-green-500/20 text-green-600 dark:text-green-300 px-3 py-1 rounded-full font-medium">
                            Pilihan
                        </span>
                        @endif
                    </div>

                    <div class="border-t pt-4 flex-grow">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                            {{ $item->judul }}
                        </h3>
                        
                        @if(isset($item->deskripsi))
                        <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">
                            {{ Str::limit($item->deskripsi, 100) }}
                        </p>
                        @endif
                    </div>
                    
                    @if(isset($item->id))
                    <div class="mt-4">
                        <a href="{{ route('ekstrakurikuler.show', $item->id) }}" 
                           class="text-primary hover:text-gray-700 dark:text-primary-300 dark:hover:text-primary-200 font-medium text-sm flex items-center">
                            Lihat Detail
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- PAGINATION -->
        @if(isset($ekstrakurikuler) && method_exists($ekstrakurikuler, 'links'))
        <div class="flex justify-center mt-8">
            {{ $ekstrakurikuler->links() }}
        </div>
        @endif
        
        @else
        <!-- EMPTY STATE -->
        <div class="text-center py-16">
            <i class="fas fa-search text-6xl text-gray-300 dark:text-gray-600 mb-4"></i>
            <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mb-2">
                @if(request('cari'))
                Tidak ada hasil untuk pencarian "<strong>{{ request('cari') }}</strong>"
                @else
                Tidak ada data ekstrakurikuler
                @endif
            </h3>
            <p class="text-gray-500 dark:text-gray-400">
                @if(request('cari'))
                Coba kata kunci pencarian lainnya
                @else
                Data ekstrakurikuler akan segera ditambahkan
                @endif
            </p>
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

</html>