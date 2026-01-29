<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ekstrakulikuler - SMK Negeri 1 Kawali</title>

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
        /* Custom styles for visual enhancement */
        .ekstrakurikuler-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .ekstrakurikuler-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .ekstrakurikuler-image-container {
            overflow: hidden;
            cursor: pointer;
        }
        .ekstrakurikuler-image-container img {
            transition: transform 0.5s ease;
        }
        .ekstrakurikuler-card:hover .ekstrakurikuler-image-container img {
            transform: scale(1.1);
        }
        .ekstrakurikuler-image-container .overlay {
            background: linear-gradient(to top, rgba(37, 99, 235, 0.8) 0%, rgba(37, 99, 235, 0) 60%);
        }
        .ekstrakurikuler-card:hover .overlay {
            opacity: 1;
        }
        .ekstrakurikuler-card:hover .overlay-text {
            transform: translateY(0);
        }
        .overlay-text {
            transform: translateY(10px);
            transition: transform 0.3s ease;
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

        /* Pagination styling */
        .pagination {
            @apply flex list-none -space-x-px;
        }
        
        .page-link {
            @apply relative block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white;
        }
        
        .page-item.active .page-link {
            @apply z-10 text-white bg-primary border-primary dark:bg-primary-dark dark:border-primary-dark;
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
        
        /* Custom scrollbar for modal */
        .modal-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .modal-scrollbar::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .modal-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }
        .modal-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.5);
        }
        .dark .modal-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }
        .dark .modal-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
        }
        .dark .modal-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-primary-dark dark:from-blue-800 dark:to-blue-900 py-20 header-pattern">
        <!-- Optional: Add a subtle pattern overlay -->
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3 animate-fade-in">
                Ekstrakulikuler
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl animate-fade-in" style="animation-delay: 0.2s">
                Informasi lengkap mengenai kegiatan ekstrakulikuler yang tersedia di SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- SEARCH -->
    <div class="max-w-4xl mx-auto mt-10 px-4">
      <form action="{{ route('ekstrakulikuler') }}" method="GET"
    class="flex shadow-lg rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700">

    <div class="relative flex-grow">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fa-solid fa-search text-gray-400"></i>
        </div>

        <input
            type="text"
            name="cari"
            value="{{ request('cari') }}"
            placeholder="Cari Ekstrakulikuler..."
            class="w-full pl-10 pr-3 py-4 bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary focus:outline-none">
    </div>

    <button type="submit"
        class="bg-primary hover:bg-primary-dark text-white px-8 py-4 font-medium flex items-center">
        <span>Cari</span>
        <i class="fas fa-arrow-right ml-2"></i>
    </button>
</form>

    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- NOTIFIKASI HASIL PENCARIAN -->
        @if(request('cari'))
        <div class="mb-6 bg-primary-light dark:bg-blue-900/20 border-l-4 border-primary p-4 rounded animate-fade-in">
            <p class="text-sm">
                Menampilkan hasil pencarian untuk: <strong>{{ request('cari') }}</strong>
            </p>
        </div>
        @endif

        <!-- GRID CARD -->
        @if($ekstrakulikulers->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12" id="ekstrakurikulerGrid">

            @forelse ($ekstrakulikulers as $index => $item)
            <div
                class="ekstrakurikuler-card bg-card-light dark:bg-card-dark 
                       rounded-2xl overflow-hidden animate-fade-in group"
                data-index="{{ $index }}">

                <!-- FOTO -->
                <div class="ekstrakurikuler-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative"
                     onclick="openModal({{ $index }})">
                    <img
                        src="{{ $item->foto 
                            ? asset('storage/' . $item->foto) 
                            : 'https://via.placeholder.com/400x300?text=Tidak+Ada+Gambar' }}"
                        alt="{{ $item->judul }}"
                        class="w-full h-full object-cover"
                        data-full="{{ $item->foto 
                            ? asset('storage/' . $item->foto) 
                            : 'https://via.placeholder.com/800x600?text=Tidak+Ada+Gambar' }}">

                    <!-- OVERLAY -->
                    <div class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                        <div class="overlay-text text-white">
                            <p class="font-semibold text-lg">{{ $item->judul }}</p>
                            <p class="text-sm opacity-90">Ekstrakurikuler</p>
                        </div>
                    </div>
                </div>

                <!-- BODY -->
                @php
                    $kategoriStyle = [
                        'olahraga'    => 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300',
                        'seni'        => 'bg-pink-100 text-pink-700 dark:bg-pink-900/30 dark:text-pink-300',
                        'kepramukaan' => 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-300',
                        'keagamaan'   => 'bg-indigo-100 text-indigo-700 dark:bg-indigo-900/30 dark:text-indigo-300',
                        'akademik'    => 'bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300',
                        'lainnya'     => 'bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-300',
                    ];
                @endphp

                <div class="p-5 flex flex-col flex-grow">

                    <!-- Badge kategori -->
                    <div class="flex justify-end mb-3">
                        <span
                            class="text-xs px-3 py-1 rounded-full font-medium
                            {{ $kategoriStyle[$item->kategori] ?? 'bg-gray-100 text-gray-700' }}">
                            {{ ucfirst($item->kategori) }}
                        </span>
                    </div>

                    <div class="border-t pt-4 flex-grow">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                            {{ $item->judul }}
                        </h3>
                    </div>

                    <div class="mt-4">
                        <button onclick="openDetailModal({{ $index }})"
                               class="text-primary hover:text-primary-dark 
                                      dark:text-primary-300 dark:hover:text-primary-200 
                                      font-medium text-sm flex items-center transition-colors">
                            Lihat Detail
                            <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>

                </div>

            </div>
            @empty
                <div class="col-span-full text-center py-10">
                    <p class="text-gray-500 dark:text-gray-400">
                        Data ekstrakulikuler belum tersedia.
                    </p>
                </div>
            @endforelse

        </div>

        <!-- PAGINATION -->
        @if($ekstrakulikulers->hasPages())
        <div class="flex justify-center mt-8">
            {{ $ekstrakulikulers->links() }}
        </div>
        @endif

        @else
        <!-- EMPTY STATE -->
        <div class="flex flex-col items-center justify-center text-center py-20">
            <div class="w-24 h-24 bg-primary-light dark:bg-blue-900/20 rounded-full flex items-center justify-center mb-6 animate-float">
                <i class="fas fa-search text-5xl text-primary"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300 mb-2">
                @if(request('cari'))
                Tidak ada hasil untuk pencarian "<strong>{{ request('cari') }}</strong>"
                @else
                Tidak ada data ekstrakulikuler
                @endif
            </h3>
            <p class="text-gray-500 dark:text-gray-400 max-w-md">
                @if(request('cari'))
                Coba kata kunci pencarian lainnya
                @else
                Data ekstrakulikuler akan segera ditambahkan
                @endif
            </p>
        </div>
        @endif

    </main>

    @include('layouts.footer')

    <!-- IMAGE MODAL -->
    <div id="imageModal" class="fixed inset-0 z-50 hidden">
        <div class="modal-backdrop absolute inset-0 bg-black/80" onclick="closeModal()"></div>
        <div class="relative h-full flex items-center justify-center p-4">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors z-10">
                <i class="fas fa-times text-3xl"></i>
            </button>
            
            <button onclick="previousImage()" class="absolute left-4 text-white hover:text-gray-300 transition-colors z-10 hidden md:block">
                <i class="fas fa-chevron-left text-4xl"></i>
            </button>
            
            <button onclick="nextImage()" class="absolute right-4 text-white hover:text-gray-300 transition-colors z-10 hidden md:block">
                <i class="fas fa-chevron-right text-4xl"></i>
            </button>
            
            <div class="relative max-w-7xl mx-auto">
                <img id="modalImage" src="" alt="" class="max-w-full max-h-[80vh] object-contain animate-zoom-in rounded-lg">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 rounded-b-lg">
                    <h3 id="modalTitle" class="text-white text-2xl font-bold mb-2"></h3>
                    <p id="modalCategory" class="text-gray-300">Ekstrakurikuler</p>
                </div>
            </div>
        </div>
    </div>

    <!-- DETAIL MODAL (Dapat di-scroll) -->
    <div id="detailModal" class="fixed inset-0 z-50 hidden">
        <div class="modal-backdrop absolute inset-0 bg-black/80" onclick="closeDetailModal()"></div>
        <div class="relative h-full flex items-center justify-center p-4">
            <button onclick="closeDetailModal()" class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors z-10">
                <i class="fas fa-times text-3xl"></i>
            </button>
            
            <!-- Modal Content dengan Scroll -->
            <div class="bg-white dark:bg-gray-800 rounded-xl max-w-3xl w-full max-h-[90vh] flex flex-col animate-zoom-in">
                <!-- Foto Header (Fixed) -->
                <div class="relative h-64 md:h-80 flex-shrink-0">
                    <img id="detailModalImage" src="" alt="" class="w-full h-full object-cover rounded-t-xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-t-xl"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 id="detailModalTitle" class="text-white text-2xl md:text-3xl font-bold mb-2"></h3>
                    </div>
                </div>
                
                <!-- Body Modal (Scrollable) -->
                <div class="flex-1 overflow-y-auto modal-scrollbar p-6 space-y-6">
                    <!-- DESKRIPSI -->
                    <div>
                        <h4 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">
                            <i class="fas fa-info-circle mr-2 text-primary"></i>Deskripsi
                        </h4>
                        <div id="detailModalDescription" class="text-gray-700 dark:text-gray-300 leading-relaxed bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                        </div>
                    </div>

                    <!-- PEMBINA -->
                    <div>
                        <h4 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">
                            <i class="fas fa-user-tie mr-2 text-primary"></i>Pembina
                        </h4>
                        <div id="detailModalMentor" class="text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                        </div>
                    </div>
                    
                    <!-- KATEGORI -->
                    <div>
                        <h4 class="text-lg font-semibold mb-2 text-gray-900 dark:text-white">
                            <i class="fas fa-tag mr-2 text-primary"></i>Kategori
                        </h4>
                        <div id="detailModalCategory" class="text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DARK MODE BUTTON -->
    <button
        id="darkToggle"
        class="fixed bottom-6 right-6 bg-primary hover:bg-primary-dark text-white p-3 rounded-full shadow-lg z-40 transition-all duration-300 hover:scale-110">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
    </button>

    <script>
        // Ekstrakurikuler data for modal
        const ekstrakurikulerData = [];
        @forelse ($ekstrakulikulers as $item)
        ekstrakurikulerData.push({
            image: "{{ $item->foto ? asset('storage/' . $item->foto) : 'https://via.placeholder.com/800x600?text=Tidak+Ada+Gambar' }}",
            title: "{{ $item->judul }}",
            category: "{{ $item->kategori }}",
            description: "{{ $item->deskripsi ?? 'Tidak ada deskripsi tersedia untuk ekstrakulikuler ini.' }}",
            // Data lain tetap ada di JS siapa tahu dibutuhkan di lain waktu
            schedule: "{{ $item->jadwal ?? 'Belum ada jadwal yang ditentukan.' }}",
            mentor: "{{ $item->pembina ?? 'Belum ada informasi pembina.' }}",
            contact: "{{ $item->kontak ?? 'Belum ada informasi kontak.' }}"
        });
        @empty
        @endforelse

        let currentImageIndex = 0;

        // Image Modal functions
        function openModal(index) {
            currentImageIndex = index;
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            
            if (ekstrakurikulerData[index]) {
                modalImage.src = ekstrakurikulerData[index].image;
                modalTitle.textContent = ekstrakurikulerData[index].title;
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % ekstrakurikulerData.length;
            updateModalImage();
        }

        function previousImage() {
            currentImageIndex = (currentImageIndex - 1 + ekstrakurikulerData.length) % ekstrakurikulerData.length;
            updateModalImage();
        }

        function updateModalImage() {
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            
            modalImage.style.opacity = '0';
            setTimeout(() => {
                modalImage.src = ekstrakurikulerData[currentImageIndex].image;
                modalTitle.textContent = ekstrakurikulerData[currentImageIndex].title;
                modalImage.style.opacity = '1';
            }, 200);
        }

        // Detail Modal functions (Diperbarui dengan Scroll)
        function openDetailModal(index) {
            const modal = document.getElementById('detailModal');
            const modalImage = document.getElementById('detailModalImage');
            const modalTitle = document.getElementById('detailModalTitle');
            const modalDescription = document.getElementById('detailModalDescription');
            const modalMentor = document.getElementById('detailModalMentor');
            const modalCategory = document.getElementById('detailModalCategory');
            
            if (ekstrakurikulerData[index]) {
                const data = ekstrakurikulerData[index];
                
                // Mengisi semua elemen
                modalImage.src = data.image;
                modalTitle.textContent = data.title;
                modalDescription.textContent = data.description;
                modalMentor.textContent = data.mentor;
                modalCategory.textContent = data.category.charAt(0).toUpperCase() + data.category.slice(1);
                
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
                
                // Scroll ke atas modal saat dibuka
                setTimeout(() => {
                    const modalBody = modal.querySelector('.modal-scrollbar');
                    if (modalBody) {
                        modalBody.scrollTop = 0;
                    }
                }, 100);
            }
        }

        function closeDetailModal() {
            const modal = document.getElementById('detailModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
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

        document.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        });

        document.addEventListener('touchend', function(e) {
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