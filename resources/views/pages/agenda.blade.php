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
        .agenda-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .agenda-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
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

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300 min-h-screen flex flex-col">

    @include('layouts.navbar')

    <!-- HEADER WITH BLUE BACKGROUND -->
    <div class="relative bg-gradient-to-br from-primary to-primary-dark dark:from-blue-800 dark:to-blue-900 py-20 header-pattern">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3 animate-fade-in">
                Agenda Sekolah
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl animate-fade-in" style="animation-delay: 0.2s">
                Informasi kegiatan dan jadwal penting SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="flex-grow container mx-auto px-4 py-12 lg:py-16">

        <!-- NOTIFIKASI (opsional) -->
        @if(request('cari'))
        <div class="mb-6 bg-primary-light dark:bg-blue-900/20 border-l-4 border-primary p-4 rounded animate-fade-in">
            <p class="text-sm">
                Menampilkan hasil pencarian untuk: <strong>{{ request('cari') }}</strong>
            </p>
        </div>
        @endif

        <!-- GRID CARD -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="agendaGrid">

            @forelse ($agenda as $index => $item)
                <div class="agenda-card bg-card-light dark:bg-card-dark rounded-2xl overflow-hidden animate-fade-in group" data-index="{{ $index }}">
                    
                    <!-- HEADER WITH ICON -->
                    <div class="bg-primary/10 dark:bg-primary/20 p-6 border-b border-border-light dark:border-border-dark">
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
                            <button onclick="openModal({{ $index }})" class="inline-flex items-center gap-2 bg-primary/10 hover:bg-primary hover:text-white text-primary dark:text-primary-300 dark:hover:text-white text-sm font-semibold py-2 px-4 rounded-full transition-colors">
                                Detail <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center text-center py-20">
                    <div class="w-24 h-24 bg-primary-light dark:bg-blue-900/20 rounded-full flex items-center justify-center mb-6 animate-float">
                        <span class="material-icons text-5xl text-primary">event_busy</span>
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

    <!-- AGENDA DETAIL MODAL -->
    <div id="agendaModal" class="fixed inset-0 z-50 hidden">
        <div class="modal-backdrop absolute inset-0 bg-black/80" onclick="closeModal()"></div>
        <div class="relative h-full flex items-center justify-center p-4">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors z-10">
                <i class="fas fa-times text-3xl"></i>
            </button>
            
            <div class="relative max-w-3xl w-full bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden animate-zoom-in">
                <!-- Modal Header -->
                <div class="bg-gradient-to-r from-primary to-primary-dark p-6">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mr-4">
                            <span id="modalIcon" class="material-icons text-white text-3xl">
                                event
                            </span>
                        </div>
                        <h2 id="modalTitle" class="text-2xl font-bold text-white"></h2>
                    </div>
                </div>
                
                <!-- Modal Body -->
                <div class="p-6">
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Deskripsi</h3>
                        <p id="modalDescription" class="text-gray-600 dark:text-gray-300"></p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <i class="fa-regular fa-calendar text-primary mr-2"></i>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Tanggal</h4>
                            </div>
                            <p id="modalDate" class="text-gray-600 dark:text-gray-300"></p>
                        </div>
                        
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                            <div class="flex items-center mb-2">
                                <i class="fa-regular fa-clock text-primary mr-2"></i>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Waktu</h4>
                            </div>
                            <p id="modalTime" class="text-gray-600 dark:text-gray-300"></p>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end">
                        <button onclick="closeModal()" class="bg-primary hover:bg-primary-dark text-white font-medium py-2 px-6 rounded-lg transition-colors">
                            Tutup
                        </button>
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
        // Agenda data for modal
        const agendaData = [];
        @forelse ($agenda as $item)
        agendaData.push({
            title: "{{ $item->judul }}",
            description: "{{ $item->deskripsi }}",
            date: "{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}",
            time: "{{ $item->waktu }}",
            icon: "{{ $item->ikon ?? 'event' }}"
        });
        @empty
        @endforelse

        // Modal functions
        function openModal(index) {
            const modal = document.getElementById('agendaModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');
            const modalDate = document.getElementById('modalDate');
            const modalTime = document.getElementById('modalTime');
            const modalIcon = document.getElementById('modalIcon');
            
            if (agendaData[index]) {
                modalTitle.textContent = agendaData[index].title;
                modalDescription.textContent = agendaData[index].description;
                modalDate.textContent = agendaData[index].date;
                modalTime.textContent = agendaData[index].time;
                modalIcon.textContent = agendaData[index].icon;
                
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal() {
            const modal = document.getElementById('agendaModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('agendaModal');
            if (!modal.classList.contains('hidden')) {
                if (e.key === 'Escape') {
                    closeModal();
                }
            }
        });

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