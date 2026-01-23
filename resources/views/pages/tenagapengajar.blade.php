<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tenaga Pengajar - SMK Negeri 1 Kawali</title>

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
        /* Header pattern overlay */
        .header-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* Staff card hover effect */
        .staff-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .staff-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Image overlay effect */
        .staff-image-container {
            position: relative;
            overflow: hidden;
        }
        .staff-image-container .overlay {
            background: linear-gradient(to top, rgba(37, 99, 235, 0.8) 0%, rgba(37, 99, 235, 0) 60%);
        }
        .staff-card:hover .overlay {
            opacity: 1;
        }
        .overlay-text {
            transform: translateY(10px);
            transition: transform 0.3s ease;
        }
        .staff-card:hover .overlay-text {
            transform: translateY(0);
        }

        /* Modal styles */
        .modal-backdrop {
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
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

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-primary-dark dark:from-blue-800 dark:to-blue-900 py-20 header-pattern">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3 animate-fade-in">
                Tenaga Pengajar
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl animate-fade-in" style="animation-delay: 0.2s">
                Daftar tenaga pendidik dan kependidikan SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 min-h-screen">

        <!-- TOOLBAR -->
        <div class="flex justify-between items-center mb-10 animate-fade-in" style="animation-delay: 0.3s">
            {{-- <button
                class="flex items-center gap-2 bg-card-light dark:bg-card-dark border border-border-light dark:border-border-dark px-4 py-2 rounded-xl text-sm shadow hover:bg-primary/10 hover:text-primary transition">
                <i class="fas fa-sliders-h"></i>
                Filter
            </button> --}}
            <span class="text-sm text-gray-500 dark:text-gray-400">
                Menampilkan {{ $tenagaPengajar->count() }} Tenaga Pengajar
            </span>
        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @forelse ($tenagaPengajar as $index => $pengajar)
            <div
                class="staff-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark overflow-hidden group animate-fade-in"
                style="animation-delay: {{ $index * 0.1 + 0.4 }}s">
                <div class="staff-image-container h-64 bg-gray-200 dark:bg-gray-700 flex items-center justify-center cursor-pointer" onclick="openModal({{ $index }})">
                    @if($pengajar->foto)
                        <img src="{{ asset('storage/' . $pengajar->foto) }}" alt="{{ $pengajar->nama }}" class="w-full h-full object-cover">
                    @else
                        <div class="flex flex-col items-center justify-center">
                            <i class="fas fa-user-tie text-4xl text-gray-400 mb-2"></i>
                            <span class="text-gray-400 text-sm">Foto Tidak Tersedia</span>
                        </div>
                    @endif
                    <div class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                        <div class="overlay-text text-white">
                            <p class="font-semibold">{{ $pengajar->nama }}</p>
                            <p class="text-sm opacity-90">{{ $pengajar->pengampu }}</p>
                        </div>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h3
                        class="font-semibold text-lg group-hover:text-primary transition">
                        {{ $pengajar->nama }}
                    </h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $pengajar->pengampu }}
                    </p>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <i class="fas fa-user-tie text-6xl text-gray-300 dark:text-gray-600 mb-4"></i>
                <p class="text-xl text-gray-500 dark:text-gray-400">Belum ada data tenaga pengajar</p>
            </div>
            @endforelse
        </div>

        <!-- PAGINATION -->
        @if($tenagaPengajar->hasPages())
        <div class="flex justify-center mt-14">
            {{ $tenagaPengajar->links() }}
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
            
            <div class="relative max-w-4xl mx-auto">
                <img id="modalImage" src="" alt="" class="max-w-full max-h-[80vh] object-contain animate-zoom-in rounded-lg">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 rounded-b-lg">
                    <h3 id="modalTitle" class="text-white text-2xl font-bold mb-2"></h3>
                    <p id="modalPosition" class="text-gray-300"></p>
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
        // Staff data for modal
        const staffData = [
            @foreach($tenagaPengajar as $pengajar)
            {
                name: '{{ $pengajar->nama }}',
                position: '{{ $pengajar->pengampu }}',
                photo: '{{ $pengajar->foto ? asset('storage/' . $pengajar->foto) : '' }}'
            },
            @endforeach
        ];

        let currentImageIndex = 0;

        // Modal functions
        function openModal(index) {
            currentImageIndex = index;
            const modal = document.getElementById('imageModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalPosition = document.getElementById('modalPosition');
            const modalImage = document.getElementById('modalImage');
            
            if (staffData[index]) {
                modalTitle.textContent = staffData[index].name;
                modalPosition.textContent = staffData[index].position;
                
                // Set image if available
                if (staffData[index].photo) {
                    modalImage.src = staffData[index].photo;
                    modalImage.style.display = 'block';
                } else {
                    modalImage.style.display = 'none';
                }
                
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
            currentImageIndex = (currentImageIndex + 1) % staffData.length;
            updateModalContent();
        }

        function previousImage() {
            currentImageIndex = (currentImageIndex - 1 + staffData.length) % staffData.length;
            updateModalContent();
        }

        function updateModalContent() {
            const modalTitle = document.getElementById('modalTitle');
            const modalPosition = document.getElementById('modalPosition');
            const modalImage = document.getElementById('modalImage');
            
            modalTitle.textContent = staffData[currentImageIndex].name;
            modalPosition.textContent = staffData[currentImageIndex].position;
            
            // Update image if available
            if (staffData[currentImageIndex].photo) {
                modalImage.src = staffData[currentImageIndex].photo;
                modalImage.style.display = 'block';
            } else {
                modalImage.style.display = 'none';
            }
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('imageModal');
            if (!modal.classList.contains('hidden')) {
                if (e.key === 'Escape') {
                    closeModal();
                } else if (e.key === 'ArrowRight') {
                    nextImage();
                } else if (e.key === 'ArrowLeft') {
                    previousImage();
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
    </script>

</body>
</html>