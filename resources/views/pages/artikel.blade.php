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
                        'slide-up': 'slideUp 0.5s ease-out',
                        'bounce-in': 'bounceIn 0.6s ease-out',
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
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        bounceIn: {
                            '0%': { opacity: '0', transform: 'scale(0.3)' },
                            '50%': { opacity: '1', transform: 'scale(1.05)' },
                            '70%': { transform: 'scale(0.9)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
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
        
        /* Line clamp utility */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        /* Modal scrollbar styling */
        .modal-content::-webkit-scrollbar {
            width: 6px;
        }
        .modal-content::-webkit-scrollbar-track {
            background: transparent;
        }
        .modal-content::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
        .modal-content::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        .dark .modal-content::-webkit-scrollbar-thumb {
            background: #475569;
        }
        .dark .modal-content::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }
        
        /* Badge animation */
        .badge-pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(59, 130, 246, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0);
            }
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER ARTIKEL -->
    <div class="relative bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 border-b border-blue-100 dark:border-gray-700 pb-20 pt-20 overflow-hidden">
        <!-- Background Decor (Blue blobs) -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-100/50 dark:bg-blue-900/20 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 -left-24 w-72 h-72 bg-cyan-100/50 dark:bg-cyan-900/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-purple-100/30 dark:bg-purple-900/20 rounded-full blur-3xl"></div>
        </div>

        <div class="relative container mx-auto px-4 z-10 text-center">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white dark:bg-gray-800 text-primary text-xs font-bold mb-6 border border-blue-200 dark:border-blue-800 badge-pulse">
                <i class="fa-solid fa-newspaper"></i> Informasi Terkini
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 dark:text-white mb-6 tracking-tight">
                Artikel <span class="gradient-text">Sekolah</span>
            </h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-2xl mx-auto mb-10">
                Informasi terkini seputar kegiatan akademik, prestasi, dan pengumuman di SMK Negeri 1 Kawali.
            </p>

            <!-- Search Bar -->
            <div class="max-w-xl mx-auto relative group">
                <form action="{{ route('artikel.index') }}" method="GET" class="relative">
                    <input
                        name="cari"
                        value="{{ request('cari') }}"
                        type="text" 
                        placeholder="Cari artikel..."
                        class="search-input w-full pl-12 pr-4 py-4 rounded-xl border border-blue-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none shadow-lg transition group-hover:shadow-xl">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                </form>
            </div>
        </div>
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
        </div>
        @endif

        <!-- TOOLBAR (RESET) -->
        <div class="flex justify-between items-center mb-10 animate-fade-in" style="animation-delay: 0.3s">
            <div class="flex items-center gap-2">
                <button onclick="resetSearch()" class="text-sm text-gray-500 hover:text-primary transition-colors flex items-center gap-1">
                    <i class="fas fa-sync-alt"></i>
                    Reset
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- ARTIKEL GRID -->
            <div class="lg:col-span-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @forelse ($artikels as $index => $item)
                    <div class="block group">
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
                                        <button 
                                            class="font-semibold text-lg bg-primary/70 hover:bg-primary/90 px-4 py-2 rounded-lg transition-colors"
                                            onclick="openModal({{ $index }})">
                                            Baca Selengkapnya
                                        </button>
                                        <p class="text-sm opacity-90 mt-2">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
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
                    </div>
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
                        <!-- DIUBAH: Dari <a> menjadi <div> dan ditambahkan cursor-default agar tidak bisa diklik -->
                        <div
                            class="flex justify-between items-center text-gray-600 dark:text-gray-300 hover:text-primary transition-colors group py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 cursor-default">

                            <span class="flex items-center">
                                <i class="fas fa-tag text-xs mr-2 opacity-60"></i>
                                {{ $kat->kategori }}
                            </span>

                            <span
                                class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-400 text-xs px-2 py-1 rounded-full
                                       group-hover:bg-primary group-hover:text-white transition-colors">
                                {{ $kat->total }}
                            </span>
                        </div>
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
                    <!-- DIUBAH: Dari <a> menjadi <div> dan ditambahkan cursor-default agar tidak bisa diklik -->
                    <div class="group block cursor-default">
                        <h4
                            class="text-sm font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors mb-1 line-clamp-2">
                            {{ $item->judul }}
                        </h4>

                        <div class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                            <i class="material-icons text-[10px]">access_time</i>
                            {{ \Carbon\Carbon::parse($item->tanggal)->diffForHumans() }}
                        </div>
                    </div>
                </li>
            @empty
                <li class="text-sm text-gray-500 flex items-center gap-2">
                    <i class="material-icons text-sm">info</i>
                    Belum ada artikel
                </li>
            @endforelse
        </ul>
    </div>
</aside>

        </div>
    </main>

    @include('layouts.footer')

    <!-- DARK MODE BUTTON -->
        {{-- <button
            id="darkToggle"
            class="dark-mode-btn fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg z-50 hover:bg-blue-600 transition-all">
            <i class="fa-solid fa-moon dark:hidden"></i>
            <i class="fa-solid fa-sun hidden dark:block"></i>
        </button> --}}

    <!-- BACK TO TOP BUTTON -->
    <button
        id="backToTop"
        class="fixed bottom-6 right-20 bg-primary text-white p-3 rounded-full shadow-lg z-50 hover:bg-blue-600 transition-all opacity-0 invisible">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- ARTIKEL MODAL -->
    <div id="artikelModal" class="fixed inset-0 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-black/70 backdrop-blur-sm" onclick="closeModal()"></div>
            
            <!-- Modal Container -->
            <div class="relative bg-white dark:bg-gray-800 rounded-lg shadow-2xl max-w-4xl w-full max-h-[90vh] flex flex-col z-10">
                <!-- Modal Header with Close Button -->
                <div class="absolute top-4 right-4 z-20">
                    <button onclick="closeModal()" class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white p-2 rounded-full shadow-lg transition-all">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                
                <!-- Scrollable Content Area -->
                <div class="modal-content overflow-y-auto max-h-[90vh]">
                    <!-- Image Section -->
                    <div id="modalImageContainer" class="relative w-full">
                        <img id="modalImageElement" src="" alt="" class="w-full h-auto object-contain">
                        <!-- Gradient overlay for better text visibility -->
                        <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-black/50 to-transparent pointer-events-none"></div>
                    </div>
                    
                    <!-- Content Section -->
                    <div class="px-6 py-6">
                        <h3 id="modalTitle" class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-3"></h3>
                        <p id="modalDate" class="text-sm text-gray-500 dark:text-gray-400 mb-6 flex items-center">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span></span>
                        </p>
                        <div id="modalContent" class="prose prose-sm md:prose-base max-w-none dark:prose-invert prose-headings:text-gray-900 dark:prose-headings:text-white prose-p:text-gray-700 dark:prose-p:text-gray-300"></div>
                    </div>
                </div>
                
                <!-- Fixed Footer -->
                <div class="bg-gray-50 dark:bg-gray-700/90 backdrop-blur-sm px-6 py-4 border-t border-gray-200 dark:border-gray-600">
                    <div class="flex justify-end">
                        <button onclick="closeModal()" class="bg-gray-300 hover:bg-gray-400 dark:bg-gray-600 dark:hover:bg-gray-500 text-gray-800 dark:text-white font-medium py-2 px-6 rounded-lg transition-colors">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Store artikel data in JavaScript array
        const artikelData = [
            @foreach ($artikels as $item)
            {
                id: {{ $item->id }},
                judul: "{{ $item->judul }}",
                foto: "{{ $item->foto ? asset('storage/' . $item->foto) : '' }}",
                deskripsi: @json($item->deskripsi),
                tanggal: "{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}"
            },
            @endforeach
        ];
        
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
            const searchInput = document.querySelector('input[name="cari"]');
            
            // Auto-submit form on Enter key
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    this.form.submit();
                }
            });
        });
        
        // --- FITUR RESET (SAME AS OTHERS) ---
        function resetSearch() {
            window.location.href = "{{ route('artikel.index') }}";
        }
        // ----------------------------------------

        // Back to top button
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
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
        
        // Modal functions
        function openModal(index) {
            const modal = document.getElementById('artikelModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalImage = document.getElementById('modalImageElement');
            const modalImageContainer = document.getElementById('modalImageContainer');
            const modalContent = document.getElementById('modalContent');
            const modalDate = document.getElementById('modalDate');
            
            const artikel = artikelData[index];
            
            modalTitle.textContent = artikel.judul;
            modalDate.querySelector('span').textContent = artikel.tanggal;
            
            if (artikel.foto) {
                modalImage.src = artikel.foto;
                modalImageContainer.style.display = 'block';
                // Preload image to get natural dimensions
                const img = new Image();
                img.onload = function() {
                    // Set max height based on viewport
                    const maxHeight = window.innerHeight * 0.5; // 50% of viewport height
                    if (this.naturalHeight > maxHeight) {
                        modalImage.style.maxHeight = maxHeight + 'px';
                        modalImage.style.width = 'auto';
                    } else {
                        modalImage.style.maxHeight = 'none';
                        modalImage.style.width = '100%';
                    }
                };
                img.src = artikel.foto;
            } else {
                modalImageContainer.style.display = 'none';
            }
            
            modalContent.innerHTML = artikel.deskripsi;
            
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            
            // Scroll to top of modal content
            const modalContentArea = document.querySelector('.modal-content');
            modalContentArea.scrollTop = 0;
        }
        
        function closeModal() {
            const modal = document.getElementById('artikelModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        
        // Close modal with ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
        
        // Prevent modal content from closing when clicking inside
        document.getElementById('artikelModal').addEventListener('click', function(e) {
            if (e.target === this || e.target.classList.contains('modal-content')) {
                // Allow closing when clicking on backdrop or content area
                return;
            }
            e.stopPropagation();
        });
    </script>

</body>

</html>