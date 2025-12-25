<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fasilitas - SMK Negeri 1 Kawali</title>

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
        .fasilitas-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .fasilitas-card:hover {
            transform: translateY(-8px);
        }
        .fasilitas-image-container .overlay {
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 60%);
        }
        .fasilitas-card:hover .overlay {
            opacity: 1;
        }
        .fasilitas-card:hover .overlay-text {
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
                Fasilitas
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Informasi lengkap mengenai fasilitas dan sarana penunjang kegiatan belajar mengajar di SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- SEARCH -->
    

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- NOTIFIKASI HASIL PENCARIAN -->
        @if(request('cari'))
        <div class="mb-6 bg-gray-50 dark:bg-gray-900/20 border-l-4 border-gray-500 p-4 rounded">
            <p class="text-sm">
                Menampilkan hasil pencarian untuk: <strong>{{ request('cari') }}</strong>
            </p>
=======
<body
    class="bg-background-light bg-background-dark text-gray-800 text-gray-200 font-sans transition-colors duration-300">
   @include('layouts.navbar')
    <section class="bg-gray-200 bg-gray-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 text-white mb-2">Fasilitas</h1>
            <nav aria-label="Breadcrumb" class="flex text-sm text-gray-600 text-gray-400">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                   
                    <li>
                        <span class="mx-1">/</span>
                    </li>
                    <li aria-current="page">
                        <span class="font-medium text-gray-800 text-gray-200">Fasilitas</span>
                    </li>
                </ol>
            </nav>
        </div>
    </section>
    <main class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 text-white mb-2 relative inline-block">
                    Fasilitas &amp; Informasi Fasilitas
                </h2>
                <p class="text-gray-600 text-gray-400 mt-2 max-w-2xl">
                    Informasi struktur dan kelengkapan fasilitas di sekolah untuk menunjang kegiatan belajar mengajar.
                </p>
            </div>
            <a class="mt-4 md:mt-0 inline-flex items-center px-6 py-2 bg-gray-200 hover:bg-gray-300 bg-gray-700 hover:bg-gray-600 text-gray-800 text-gray-200 rounded-full text-sm font-medium transition group"
                href="#">
                Selengkapnya
                <span
                    class="material-icons text-sm ml-2 group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
>>>>>>> Stashed changes
        </div>
        @endif

        <!-- GRID CARD -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">

            @forelse ($fasilitas as $item)
<<<<<<< Updated upstream
                <div
                    class="fasilitas-card bg-card-light dark:bg-card-dark 
                           rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                           overflow-hidden animate-fade-in group">

                    <!-- FOTO -->
                    <div class="fasilitas-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                        @if ($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}"
                                alt="{{ $item->judul }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                                <span class="material-icons text-6xl">meeting_room</span>
                            </div>
                        @endif

                        <!-- OVERLAY -->
                        
                    </div>

                    <!-- BODY -->
                    <div class="p-5 flex flex-col flex-grow">
                        <div class="border-t pt-4 flex-grow">
                            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                                {{ $item->judul }}
                            </h3>
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <i class="fas fa-building mr-2"></i>
                                <span>Fasilitas Sekolah</span>
                            </div>
=======
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                <div class="h-64 bg-surface-light bg-gray-700 flex items-center justify-center relative">
                    @if($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover">
                    @else
                        <div class="bg-blue-50 bg-gray-600 p-6 rounded-full">
                            <span class="material-icons text-6xl text-blue-300 text-blue-400">meeting_room</span>
>>>>>>> Stashed changes
                        </div>

                        
                    </div>
                </div>
<<<<<<< Updated upstream
            @empty
                <div class="col-span-full flex flex-col items-center justify-center text-center py-20">
                    <div class="w-24 h-24 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mb-6">
                        <i class="material-icons text-5xl text-gray-400">domain</i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300 mb-2">
                        Belum Ada Data Fasilitas
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400 max-w-md">
                        Informasi mengenai fasilitas sekolah akan segera tersedia. Kunjungi kembali lain hari untuk informasi terbaru.
                    </p>
                </div>
=======
                <div class="h-24 bg-gray-200 bg-gray-600 p-6 flex flex-col justify-center">
                    <h3 class="text-xl font-semibold text-gray-800 text-gray-200">{{ $item->judul }}</h3>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500 text-gray-400">Belum ada data fasilitas yang tersedia.</p>
            </div>
>>>>>>> Stashed changes
            @endforelse

        </div>

        <!-- PAGINATION -->
        <div class="flex justify-center mt-10">
            {{ $fasilitas->links() }}
        </div>

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
