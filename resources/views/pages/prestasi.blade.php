<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prestasi - SMK Negeri 1 Kawali</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

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
                        primary: "#2563eb", // Warna biru
                        "primary-light": "#dbeafe",
                        "primary-dark": "#1e40af",
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
                        'float': 'float 3s ease-in-out infinite',
                        'zoom-in': 'zoomIn 0.3s ease-out',
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
                        zoomIn: {
                            '0%': { opacity: '0', transform: 'scale(0.8)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        }
                    }
                },
            },
        };
    </script>

    <style>
        .prestasi-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .prestasi-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .prestasi-image-container .overlay {
            background: linear-gradient(to top, rgba(37, 99, 235, 0.8) 0%, rgba(37, 99, 235, 0) 60%);
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

        /* Image cursor */
        .prestasi-image-container {
            cursor: pointer;
        }

        /* Modal styles */
        .modal-backdrop {
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }

        /* Header pattern overlay */
        .header-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* Smooth scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
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
            background: #374151;
        }

        .dark ::-webkit-scrollbar-thumb {
            background: #6b7280;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div
        class="relative bg-gradient-to-br from-primary to-primary-dark dark:from-blue-800 dark:to-blue-900 py-20 header-pattern">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3 animate-fade-in">
                Prestasi
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl animate-fade-in" style="animation-delay: 0.2s">
                Dokumentasi prestasi dan kejuaraan yang diraih oleh siswa SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- SEARCH -->
    <div class="max-w-4xl mx-auto mt-10 px-4">
        <form action="{{ route('prestasi') }}" method="GET"
            class="flex shadow-lg rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700">
            <div class="relative flex-grow">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-search text-gray-400"></i>
                </div>
                <input name="cari" value="{{ request('cari') }}"
                    class="w-full pl-10 pr-3 py-4 bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary focus:outline-none"
                    placeholder="Cari Prestasi atau Nama Siswa..." type="text" id="searchInput">
            </div>
            <button type="submit"
                class="bg-primary hover:bg-primary-dark text-white px-8 py-4 font-medium transition-colors duration-300 flex items-center">
                <span>Cari</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </button>
        </form>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        @if(request('cari'))
            <div class="mb-6 bg-primary-light dark:bg-blue-900/20 border-l-4 border-primary p-4 rounded animate-fade-in">
                <p class="text-sm">
                    Menampilkan hasil pencarian untuk: <strong>{{ request('cari') }}</strong>
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

        <!-- GRID CARD -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12" id="prestasiGrid">

            @forelse ($prestasi as $index => $item)
                <div class="prestasi-card bg-card-light dark:bg-card-dark 
                           rounded-2xl overflow-hidden animate-fade-in group" data-index="{{ $index }}">

                    <!-- FOTO -->
                    <div class="prestasi-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden"
                        onclick="openModal({{ $index }})">
                        @if ($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                                data-full="{{ asset('storage/' . $item->foto) }}">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                                <i class="fa-solid fa-trophy text-6xl"></i>
                            </div>
                        @endif

                        <!-- OVERLAY -->
                        <div class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                            <div class="overlay-text text-white">
                                <p class="font-semibold text-lg">{{ $item->judul }}</p>
                                <p class="text-sm opacity-90">
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- BODY -->
                    <div class="p-5 flex flex-col flex-grow">
                        <div class="flex justify-end mb-3">
                            <span
                                class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
                                Prestasi
                            </span>
                        </div>

                        <div class="border-t pt-4 flex-grow">
                            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                                {{ $item->judul }}
                            </h3>
                            
                            <!-- NAMA SISWA DITAMBAHKAN DI SINI -->
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-2">
                                <i class="fa-solid fa-user mr-2"></i>
                                <span class="font-medium">
                                    {{ $item->nama ?? 'Tidak tersedia' }}
                                </span>
                            </div>
                            
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-3">
                                <i class="fa-solid fa-graduation-cap mr-2"></i>
                                <span>
                                    {{ $item->kelas }} {{ $item->jurusan }} {{ $item->subkelas }}
                                </span>
                            </div>
                            
                            <!-- Tombol Lihat Selengkapnya -->
                            <button onclick="openDetailModal({{ $index }})" 
                                class="w-full mt-3 bg-primary hover:bg-primary-dark text-white py-2 px-4 rounded-lg transition-colors duration-300 flex items-center justify-center">
                                <span>Lihat Selengkapnya</span>
                                <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center text-center py-20">
                    <div
                        class="w-24 h-24 bg-primary-light dark:bg-blue-900/20 rounded-full flex items-center justify-center mb-6 animate-float">
                        <i class="fa-solid fa-trophy text-5xl text-primary"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300 mb-2">
                        Belum Ada Prestasi
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400 max-w-md">
                        Belum ada data prestasi yang ditampilkan saat ini.
                    </p>
                </div>
            @endforelse

        </div>

        <!-- PAGINATION -->
        @if(isset($prestasi) && method_exists($prestasi, 'links') && $prestasi->hasPages())
            <div class="flex justify-center mt-10">
                {{ $prestasi->links() }}
            </div>
        @endif

    </main>

    @include('layouts.footer')

    <!-- IMAGE MODAL -->
    <div id="imageModal" class="fixed inset-0 z-50 hidden">
        <div class="modal-backdrop absolute inset-0 bg-black/80" onclick="closeModal()"></div>
        <div class="relative h-full flex items-center justify-center p-4">
            <button onclick="closeModal()"
                class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors z-10">
                <i class="fas fa-times text-3xl"></i>
            </button>

            <button onclick="previousImage()"
                class="absolute left-4 text-white hover:text-gray-300 transition-colors z-10 hidden md:block">
                <i class="fas fa-chevron-left text-4xl"></i>
            </button>

            <button onclick="nextImage()"
                class="absolute right-4 text-white hover:text-gray-300 transition-colors z-10 hidden md:block">
                <i class="fas fa-chevron-right text-4xl"></i>
            </button>

            <div class="relative max-w-7xl mx-auto">
                <img id="modalImage" src="" alt=""
                    class="max-w-full max-h-[80vh] object-contain animate-zoom-in rounded-lg">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 rounded-b-lg">
                    <h3 id="modalTitle" class="text-white text-2xl font-bold mb-2"></h3>
                    <p id="modalDate" class="text-gray-300"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- DETAIL MODAL - STRUKTUR YANG DIPERBAIKI -->
    <div id="detailModal" class="fixed inset-0 z-50 hidden">
        <div class="modal-backdrop absolute inset-0 bg-black/80" onclick="closeDetailModal()"></div>
        
        <!-- Tombol tutup di luar area scroll -->
        <button onclick="closeDetailModal()"
            class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors z-20">
            <i class="fas fa-times text-3xl"></i>
        </button>

        <div class="relative h-full flex items-center justify-center p-4">
            <!-- Modal card dengan tinggi maksimal -->
            <div class="bg-white dark:bg-gray-800 rounded-xl max-w-4xl w-full max-h-[90vh] animate-zoom-in">
                <!-- Container untuk SEMUA konten yang dapat di-scroll -->
                <div class="overflow-y-auto max-h-[90vh]">
                    <!-- GAMBAR -->
                    <div class="relative">
                        <img id="detailModalImage" src="" alt=""
                            class="w-full h-64 md:h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 id="detailModalTitle" class="text-white text-2xl md:text-3xl font-bold mb-2"></h3>
                            <p id="detailModalDate" class="text-gray-300"></p>
                        </div>
                    </div>

                    <!-- DETAIL INFORMASI -->
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Nama Siswa</h4>
                                <p id="detailModalStudent" class="text-lg font-semibold"></p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Kelas</h4>
                                <p id="detailModalClass" class="text-lg font-semibold"></p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Juara</h4>
                                <p id="detailModalRank" class="text-lg font-semibold"></p>
                            </div>
                            <div>
                                <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">Tingkat</h4>
                                <p id="detailModalLevel" class="text-lg font-semibold"></p>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 mb-2">Deskripsi</h4>
                            <p id="detailModalDescription" class="text-gray-700 dark:text-gray-300"></p>
                        </div>

                        <!-- TOMBOL TUTUP -->
                        <div class="flex justify-end">
                            <button onclick="closeDetailModal()"
                                class="bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-800 dark:text-white py-2 px-6 rounded-lg transition-colors duration-300">
                                Tutup
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DARK MODE BUTTON -->
    <button id="darkToggle"
        class="fixed bottom-6 right-6 bg-primary hover:bg-primary-dark text-white p-3 rounded-full shadow-lg z-40 transition-all duration-300 hover:scale-110">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
    </button>

    <script>
        // Prestasi data for modal
        const prestasiData = [];
        @forelse ($prestasi as $item)
            prestasiData.push({
                image: "{{ asset('storage/' . $item->foto) }}",
                title: "{{ $item->judul }}",
                date: "{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}",
                student: "{{ $item->nama ?? 'Tidak tersedia' }}",
                class: "{{ $item->kelas }} {{ $item->jurusan }} {{ $item->subkelas }}",
                rank: "{{ $item->juara ?? 'Tidak tersedia' }}",
                level: "{{ $item->tingkat ?? 'Tidak tersedia' }}",
                description: "{{ $item->deskripsi ?? 'Tidak ada deskripsi tersedia untuk prestasi ini.' }}"
            });
        @empty
        @endforelse

        let currentImageIndex = 0;

        // Modal functions
        function openModal(index) {
            currentImageIndex = index;
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDate = document.getElementById('modalDate');

            if (prestasiData[index]) {
                modalImage.src = prestasiData[index].image;
                modalTitle.textContent = prestasiData[index].title;
                modalDate.textContent = prestasiData[index].date;
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Detail Modal functions - SUDAH DIPERBAIKI
        function openDetailModal(index) {
            currentImageIndex = index;
            const modal = document.getElementById('detailModal');
            const modalImage = document.getElementById('detailModalImage');
            const modalTitle = document.getElementById('detailModalTitle');
            const modalDate = document.getElementById('detailModalDate');
            const modalStudent = document.getElementById('detailModalStudent');
            const modalClass = document.getElementById('detailModalClass');
            const modalRank = document.getElementById('detailModalRank');
            const modalLevel = document.getElementById('detailModalLevel');
            const modalDescription = document.getElementById('detailModalDescription');

            if (prestasiData[index]) {
                modalImage.src = prestasiData[index].image;
                modalTitle.textContent = prestasiData[index].title;
                modalDate.textContent = prestasiData[index].date;
                modalStudent.textContent = prestasiData[index].student;
                modalClass.textContent = prestasiData[index].class;
                modalRank.textContent = prestasiData[index].rank;
                modalLevel.textContent = prestasiData[index].level;
                modalDescription.textContent = prestasiData[index].description;
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeDetailModal() {
            const modal = document.getElementById('detailModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % prestasiData.length;
            updateModalImage();
        }

        function previousImage() {
            currentImageIndex = (currentImageIndex - 1 + prestasiData.length) % prestasiData.length;
            updateModalImage();
        }

        function updateModalImage() {
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDate = document.getElementById('modalDate');

            modalImage.style.opacity = '0';
            setTimeout(() => {
                modalImage.src = prestasiData[currentImageIndex].image;
                modalTitle.textContent = prestasiData[currentImageIndex].title;
                modalDate.textContent = prestasiData[currentImageIndex].date;
                modalImage.style.opacity = '1';
            }, 200);
        }

        // Keyboard navigation
        document.addEventListener('keydown', function (e) {
            const imageModal = document.getElementById('imageModal');
            const detailModal = document.getElementById('detailModal');
            
            if (!imageModal.classList.contains('hidden')) {
                if (e.key === 'Escape') {
                    closeModal();
                } else if (e.key === 'ArrowRight') {
                    nextImage();
                } else if (e.key === 'ArrowLeft') {
                    previousImage();
                }
            } else if (!detailModal.classList.contains('hidden')) {
                if (e.key === 'Escape') {
                    closeDetailModal();
                }
            }
        });

        // Touch/swipe support for mobile
        let touchStartX = 0;
        let touchEndX = 0;

        document.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].screenX;
        });

        document.addEventListener('touchend', function (e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            const modal = document.getElementById('imageModal');
            if (!modal.classList.contains('hidden')) {
                if (touchEndX < touchStartX - 50) {
                    nextImage();
                }
                if (touchEndX > touchStartX + 50) {
                    previousImage();
                }
            }
        }

        // Dark mode toggle
        const toggle = document.getElementById('darkToggle');
        const html = document.documentElement;

        if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
        }

        toggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem(
                'theme',
                html.classList.contains('dark') ? 'dark' : 'light'
            );
        });

        // Search functionality
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');

            // Auto-submit form on Enter key
            searchInput.addEventListener('keypress', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    this.form.submit();
                }
            });
        });

        // --- FITUR RESET (SAME AS OTHERS) ---
        function resetSearch() {
            window.location.href = "{{ route('prestasi') }}";
        }
        // ------------------------------------
    </script>

</body>

</html>