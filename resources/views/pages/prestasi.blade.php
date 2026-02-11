<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prestasi - SMK Negeri 1 Kawali</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#2563eb",
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
                        'fade-in': 'fadeIn 0.6s ease-out forwards',
                        'float': 'float 3s ease-in-out infinite',
                        'zoom-in': 'zoomIn 0.3s ease-out forwards',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        zoomIn: {
                            '0%': { opacity: '0', transform: 'scale(0.95)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                    }
                },
            },
        };
    </script>

    <!-- Custom CSS -->
    <style>
        /* Card Hover Effects */
        .prestasi-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .prestasi-card:hover { transform: translateY(-8px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04); }

        /* Image Overlay */
        .prestasi-image-container .overlay {
            background: linear-gradient(to top, rgba(37, 99, 235, 0.9) 0%, rgba(37, 99, 235, 0) 100%);
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
        .prestasi-card:hover .overlay { opacity: 1; transform: translateY(0); }
        .prestasi-image-container { cursor: pointer; }

        /* Header Pattern */
        .header-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        .dark ::-webkit-scrollbar-track { background: #374151; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .dark ::-webkit-scrollbar-thumb { background: #4b5563; }

        /* Modal Transitions */
        #detailModal { transition: opacity 0.3s ease; }
        #detailModal.active { opacity: 1; pointer-events: auto; }
        #detailModal:not(.active) { opacity: 0; pointer-events: none; }
        
        /* Modal Content Animation */
        .modal-content { transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1); }
        #detailModal.active .modal-content { transform: scale(1); }
        #detailModal:not(.active) .modal-content { transform: scale(0.95); }

        /* Utils */
        .badge-pulse { animation: pulse 2s infinite; }
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(37, 99, 235, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0); }
        }
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER SECTION -->
    <div class="relative bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 border-b border-blue-100 dark:border-gray-700 pb-20 pt-20 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-100/50 dark:bg-blue-900/20 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 -left-24 w-72 h-72 bg-cyan-100/50 dark:bg-cyan-900/20 rounded-full blur-3xl"></div>
        </div>

        <div class="relative container mx-auto px-4 z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white dark:bg-gray-800 text-primary text-xs font-bold mb-6 border border-blue-200 dark:border-blue-800 badge-pulse">
                <i class="fa-solid fa-trophy"></i> Prestasi Siswa
            </div>
            <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 dark:text-white mb-6 tracking-tight">
                Prestasi <span class="gradient-text">Sekolah</span>
            </h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-2xl mx-auto mb-10">
                Dokumentasi prestasi dan kejuaraan yang diraih oleh siswa SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- SEARCH BAR (Floating over header) -->
    <div class="relative container mx-auto px-4 -mt-10 z-20">
        <form action="{{ route('prestasi') }}" method="GET" class="max-w-4xl mx-auto shadow-xl rounded-2xl overflow-hidden border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
            <div class="relative flex-grow">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fa-solid fa-search text-gray-400"></i>
                </div>
                <input name="cari" value="{{ request('cari') }}" placeholder="Cari Prestasi atau Nama Siswa..." type="text" id="searchInput"
                    class="w-full pl-11 pr-4 py-4 bg-transparent border-none focus:ring-0 focus:outline-none text-gray-700 dark:text-gray-200">
            </div>
        </form>
    </div>

    <!-- MAIN CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- Search Alert -->
        @if(request('cari'))
            <div class="mb-8 bg-primary-light dark:bg-blue-900/20 border-l-4 border-primary p-4 rounded-lg flex justify-between items-center animate-fade-in">
                <p class="text-sm">Menampilkan hasil pencarian untuk: <strong>{{ request('cari') }}</strong></p>
                <button onclick="resetSearch()" class="text-xs text-primary hover:text-primary-dark font-bold">RESET</button>
            </div>
        @endif

        <!-- GRID PRESTASI -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">
            
            @forelse ($prestasi as $item)
                <div class="prestasi-card bg-card-light dark:bg-card-dark rounded-2xl overflow-hidden flex flex-col group relative">

                    <!-- Image Container -->
                    <div class="prestasi-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden"
                         onclick="document.getElementById('btn-{{ $item->id }}').click()">
                        @if ($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->judul }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                                <i class="fa-solid fa-trophy text-6xl"></i>
                            </div>
                        @endif

                        <!-- Overlay Text -->
                        <div class="overlay absolute inset-0 opacity-0 flex flex-col justify-end p-4 text-white">
                            <p class="font-bold text-lg truncate">{{ $item->judul }}</p>
                            <p class="text-sm opacity-90">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-5 flex flex-col flex-grow">
                        <div class="flex justify-between items-start mb-3">
                            <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-2 py-1 rounded-full font-medium">
                                Prestasi
                            </span>
                        </div>

                        <div class="border-t border-gray-100 dark:border-gray-700 pt-4 flex-grow flex flex-col">
                            <h3 class="text-lg font-bold mb-2 text-gray-900 dark:text-white truncate leading-tight">
                                {{ $item->judul }}
                            </h3>
                            
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-1">
                                <i class="fa-solid fa-user mr-2 w-4"></i>
                                <span class="truncate">{{ $item->nama ?? 'Tidak tersedia' }}</span>
                            </div>
                            
                            <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-4">
                                <i class="fa-solid fa-graduation-cap mr-2 w-4"></i>
                                <span class="text-xs">{{ $item->kelas }} {{ $item->jurusan }} {{ $item->subkelas }}</span>
                            </div>
                            
                            <!-- TOMBOL LIHAT DETAIL (ID dibuat unik untuk memicu onclick gambar) -->
                            <button id="btn-{{ $item->id }}" onclick="openModal(this)"
                                
                                data-judul="{{ $item->judul }}"
                                data-deskripsi="{{ $item->deskripsi }}"
                                data-foto="{{ $item->foto ? asset('storage/' . $item->foto) : 'https://via.placeholder.com/600x400?text=No+Image' }}"
                                data-nama="{{ $item->nama }}"
                                data-rombel="{{ $item->kelas }} {{ $item->jurusan }} {{ $item->subkelas }}"
                                data-juara="{{ $item->juara }}"
                                data-tingkat="{{ $item->tingkat }}"
                                data-penyelenggara="{{ $item->penyelenggara }}"
                                data-tanggal="{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}"

                                class="w-full mt-auto bg-primary hover:bg-primary-dark text-white py-2.5 px-4 rounded-lg transition-all duration-300 flex items-center justify-center shadow-md hover:shadow-lg active:scale-95">
                                <span class="font-medium">Lihat Selengkapnya</span>
                                <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center text-center py-20">
                    <div class="w-24 h-24 bg-primary-light dark:bg-blue-900/20 rounded-full flex items-center justify-center mb-6 animate-float">
                        <i class="fa-solid fa-trophy text-5xl text-primary"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300 mb-2">Belum Ada Prestasi</h3>
                    <p class="text-gray-500 dark:text-gray-400 max-w-md">Belum ada data prestasi yang ditampilkan saat ini.</p>
                </div>
            @endforelse
        </div>

        <!-- PAGINATION -->
        @if(isset($prestasi) && method_exists($prestasi, 'links') && $prestasi->hasPages())
            <div class="flex justify-center mt-12">
                {{ $prestasi->links() }}
            </div>
        @endif

    </main>

    @include('layouts.footer')

    <!-- MODAL DETAIL PRESTASI (Single Modal Approach) -->
    <div id="detailModal" class="fixed inset-0 z-50 flex items-center justify-center p-4">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal()"></div>

        <!-- Modal Content -->
        <div class="modal-content relative bg-white dark:bg-gray-800 w-full max-w-4xl rounded-2xl shadow-2xl overflow-hidden flex flex-col md:flex-row max-h-[90vh]">
            
            <!-- Tombol Close -->
            <button onclick="closeModal()" class="absolute top-4 right-4 z-10 bg-white/80 hover:bg-white text-gray-800 dark:text-white rounded-full p-2 shadow-md transition-all hover:rotate-90">
                <i class="fa-solid fa-times text-xl"></i>
            </button>

            <!-- Bagian Kiri: Gambar -->
            <div class="w-full md:w-5/12 bg-gray-100 dark:bg-gray-900 flex items-center justify-center p-6 relative">
                <img id="modal-foto" src="" alt="Foto Prestasi" class="w-full h-auto max-h-[50vh] md:max-h-full object-contain rounded-lg shadow-sm">
            </div>

            <!-- Bagian Kanan: Detail Info -->
            <div class="w-full md:w-7/12 p-6 md:p-8 overflow-y-auto custom-scrollbar">
                <div class="mb-4">
                    <span id="modal-tingkat" class="px-3 py-1 bg-primary text-white text-xs font-bold uppercase tracking-wider rounded-full shadow-sm">Tingkat</span>
                </div>

                <h2 id="modal-judul" class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                    Judul Prestasi
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    <div class="bg-gray-50 dark:bg-gray-700/50 p-3 rounded-lg">
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold mb-1">Juara / Peringkat</p>
                        <p id="modal-juara" class="text-lg font-bold text-gray-800 dark:text-gray-100">-</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700/50 p-3 rounded-lg">
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold mb-1">Tanggal</p>
                        <p id="modal-tanggal" class="text-lg font-bold text-gray-800 dark:text-gray-100">-</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700/50 p-3 rounded-lg">
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold mb-1">Penyelenggara</p>
                        <p id="modal-penyelenggara" class="text-base font-medium text-gray-700 dark:text-gray-200">-</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700/50 p-3 rounded-lg">
                        <p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold mb-1">Rombel</p>
                        <p id="modal-rombel" class="text-base font-medium text-gray-700 dark:text-gray-200">-</p>
                    </div>
                </div>

                <div class="border-t border-gray-100 dark:border-gray-700 pt-6">
                    <p class="text-xs text-primary font-bold uppercase mb-2 tracking-wide">Siswa Pencapaian</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center text-primary">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <p id="modal-nama" class="text-xl font-bold text-gray-900 dark:text-white">Nama Siswa</p>
                    </div>
                </div>

                <div class="mt-6">
                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold mb-2">Deskripsi Kegiatan</p>
                    <div class="prose prose-sm dark:prose-invert max-w-none">
                        <p id="modal-deskripsi" class="text-gray-600 dark:text-gray-300 leading-relaxed">
                            Deskripsi lengkap akan muncul di sini...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DARK MODE TOGGLE -->
    {{-- <button id="darkToggle" class="fixed bottom-6 right-6 bg-primary hover:bg-primary-dark text-white p-3 rounded-full shadow-lg z-40 transition-all duration-300 hover:scale-110 border border-white/20">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
    </button> --}}

    <!-- SCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // --- DARK MODE LOGIC ---
            const toggle = document.getElementById('darkToggle');
            const html = document.documentElement;

            if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }

            toggle.addEventListener('click', () => {
                html.classList.toggle('dark');
                localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
            });

            // --- SEARCH LOGIC ---
            const searchInput = document.getElementById('searchInput');
            if(searchInput) {
                searchInput.addEventListener('keypress', (e) => {
                    if (e.key === 'Enter') e.target.form.submit();
                });
            }
        });

        // --- RESET SEARCH ---
        function resetSearch() {
            window.location.href = "{{ route('prestasi') }}";
        }

        // --- MODAL LOGIC (Data Attributes Approach) ---
        const modal = document.getElementById('detailModal');
        const modalElements = {
            judul: document.getElementById('modal-judul'),
            deskripsi: document.getElementById('modal-deskripsi'),
            foto: document.getElementById('modal-foto'),
            nama: document.getElementById('modal-nama'),
            rombel: document.getElementById('modal-rombel'),
            juara: document.getElementById('modal-juara'),
            tingkat: document.getElementById('modal-tingkat'),
            penyelenggara: document.getElementById('modal-penyelenggara'),
            tanggal: document.getElementById('modal-tanggal'),
        };

        function openModal(button) {
            const data = button.dataset;

            // Populate Data
            modalElements.judul.textContent = data.judul;
            modalElements.deskripsi.textContent = data.deskripsi || 'Tidak ada deskripsi tersedia.';
            modalElements.foto.src = data.foto;
            modalElements.nama.textContent = data.nama || '-';
            modalElements.rombel.textContent = data.rombel;
            modalElements.juara.textContent = data.juara;
            modalElements.tingkat.textContent = data.tingkat;
            modalElements.penyelenggara.textContent = data.penyelenggara || '-';
            modalElements.tanggal.textContent = data.tanggal;

            // Show Modal
            modal.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent body scroll
        }

        function closeModal() {
            modal.classList.remove('active');
            document.body.style.overflow = 'auto'; // Restore body scroll
        }

        // Close on ESC Key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                closeModal();
            }
        });
    </script>
</body>
</html>