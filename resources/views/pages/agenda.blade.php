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
    <link rel="stylesheet" href="css/global.css">
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
                        zoomIn: {
                            '0%': { opacity: '0', transform: 'scale(0.8)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
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
        .agenda-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(229, 231, 235, 0.5);
        }

        .agenda-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border-color: rgba(59, 130, 246, 0.3);
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
        
        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Card gradient border */
        .card-gradient-border {
            position: relative;
            background: linear-gradient(white, white) padding-box,
                        linear-gradient(135deg, rgba(59, 130, 246, 0.5), rgba(147, 51, 234, 0.5)) border-box;
            border: 1px solid transparent;
        }
        
        .dark .card-gradient-border {
            background: linear-gradient(#1f2937, #1f2937) padding-box,
                        linear-gradient(135deg, rgba(59, 130, 246, 0.5), rgba(147, 51, 234, 0.5)) border-box;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300 min-h-screen flex flex-col">

    @include('layouts.navbar')

    <!-- HEADER AGENDA SEKOLAH -->
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
                <i class="fa-solid fa-calendar-days"></i> Informasi Terkini
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 dark:text-white mb-6 tracking-tight">
                Agenda <span class="gradient-text">Sekolah</span>
            </h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-2xl mx-auto mb-10">
                Kumpulan informasi mengenai kegiatan, acara, dan jadwal penting di lingkungan SMK Negeri 1 Kawali.
            </p>

            <!-- Search Bar -->
            <div class="max-w-xl mx-auto relative group">
                <input type="text" placeholder="Cari agenda atau kegiatan..."
                    class="w-full pl-12 pr-4 py-4 rounded-xl border border-blue-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none shadow-lg transition group-hover:shadow-xl">
                <i
                    class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="flex-grow container mx-auto px-4 py-12 lg:py-16 -mt-10 relative z-20">

        <!-- NOTIFIKASI (opsional) -->
        @if(request('cari'))
            <div class="mb-6 bg-primary-light dark:bg-blue-900/20 border-l-4 border-primary p-4 rounded-lg animate-fade-in">
                <p class="text-sm">
                    Menampilkan hasil pencarian untuk: <strong>{{ request('cari') }}</strong>
                </p>
            </div>
        @endif

        <!-- GRID CARD -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="agendaGrid">

            @forelse ($agendas as $index => $item)
                <div class="agenda-card card-gradient-border bg-card-light dark:bg-card-dark rounded-2xl overflow-hidden animate-fade-in group"
                    data-index="{{ $index }}">

                    <!-- HEADER WITH ICON -->
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-800 dark:to-gray-700 p-6 border-b border-border-light dark:border-border-dark">
                        <div class="flex items-center">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-primary to-primary-dark dark:from-blue-600 dark:to-blue-800 rounded-full flex items-center justify-center mr-4 shadow-lg">
                                <span class="material-icons text-white text-2xl">
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
                        <p class="text-sm text-gray-600 dark:text-gray-300 mb-6 line-clamp-3">
                            {{ $item->deskripsi }}
                        </p>

                        <!-- TANGGAL & WAKTU -->
                        <div class="space-y-3 text-sm text-gray-500 dark:text-gray-400 mb-6">
                            <div class="flex items-center gap-3 bg-gray-50 dark:bg-gray-800 rounded-lg p-3">
                                <i class="fa-regular fa-calendar text-primary"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                            </div>

                            <div class="flex items-center gap-3 bg-gray-50 dark:bg-gray-800 rounded-lg p-3">
                                <i class="fa-regular fa-clock text-primary"></i>
                                {{ $item->waktu }}
                            </div>
                        </div>

                        <!-- BUTTON -->
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <span class="inline-block w-2 h-2 bg-green-500 rounded-full"></span>
                                <span class="text-xs text-gray-500 dark:text-gray-400">Aktif</span>
                            </div>
                            <button onclick="openModal({{ $index }})"
                                class="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white text-sm font-semibold py-2 px-5 rounded-full transition-all transform hover:scale-105 shadow-md hover:shadow-lg">
                                Detail <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center text-center py-20">
                    <div
                        class="w-24 h-24 bg-primary-light dark:bg-blue-900/20 rounded-full flex items-center justify-center mb-6 animate-float">
                        <span class="material-icons text-5xl text-primary">event_busy</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300 mb-2">
                        Belum Ada Agenda
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400 max-w-md">
                        Belum ada agenda sekolah yang tersedia saat ini. Kunjungi kembali lain hari untuk melihat agenda
                        terbaru dari kami.
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
            <button onclick="closeModal()"
                class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors z-10">
                <i class="fas fa-times text-3xl"></i>
            </button>

            <div
                class="relative max-w-3xl w-full bg-white dark:bg-gray-800 rounded-2xl shadow-2xl overflow-hidden animate-bounce-in">
                <!-- Modal Header -->
                <div class="bg-gradient-to-r from-primary to-primary-dark p-6 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                    
                    <div class="relative flex items-center">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mr-4 shadow-lg">
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
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3 flex items-center">
                            <i class="fas fa-info-circle text-primary mr-2"></i>
                            Deskripsi
                        </h3>
                        <p id="modalDescription" class="text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 rounded-lg p-4"></p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-600 rounded-lg p-4 border border-blue-100 dark:border-gray-600">
                            <div class="flex items-center mb-2">
                                <i class="fa-regular fa-calendar text-primary mr-2"></i>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Tanggal</h4>
                            </div>
                            <p id="modalDate" class="text-gray-600 dark:text-gray-300"></p>
                        </div>

                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-600 rounded-lg p-4 border border-blue-100 dark:border-gray-600">
                            <div class="flex items-center mb-2">
                                <i class="fa-regular fa-clock text-primary mr-2"></i>
                                <h4 class="font-semibold text-gray-900 dark:text-white">Waktu</h4>
                            </div>
                            <p id="modalTime" class="text-gray-600 dark:text-gray-300"></p>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button onclick="closeModal()"
                            class="bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white font-medium py-2 px-6 rounded-lg transition-all transform hover:scale-105 shadow-md hover:shadow-lg">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DARK MODE BUTTON -->
    {{-- <button id="darkToggle"
        class="fixed bottom-6 right-6 bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white p-3 rounded-full shadow-lg z-40 transition-all duration-300 hover:scale-110">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
    </button> --}}

    <script>
        // Agenda data for modal
        const agendaData = [];
        @forelse ($agendas as $item)
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
        document.addEventListener('keydown', function (e) {
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