@extends('layouts.home')

@section('content')

 <style>
        /* Custom Styles */
        .link-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid #dbeafe;
        }

        .link-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(37, 99, 235, 0.15);
            border-color: #93c5fd;
        }

        .delay-100 {
            animation-delay: 100ms;
        }

        .delay-200 {
            animation-delay: 200ms;
        }

        .delay-300 {
            animation-delay: 300ms;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.5s ease-out forwards;
            opacity: 0;
        }
    </style>

    <!-- HEADER SECTION (Hero) -->
    <div class="relative bg-white border-b border-blue-100 pb-16 pt-16 overflow-hidden">
        <!-- Background Decor (Blue blobs) -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-100/50 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 -left-24 w-72 h-72 bg-cyan-100/50 rounded-full blur-3xl"></div>
        </div>

        <div class="relative container mx-auto px-4 z-10 text-center">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-primary text-xs font-bold mb-4 border border-blue-200">
                <i class="fa-solid fa-bolt"></i> Akses Terintegrasi
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-4 tracking-tight">
                Portal Layanan <span class="text-primary">Sekolah</span>
            </h1>
            <p class="text-slate-600 text-lg max-w-2xl mx-auto mb-8">
                Pusat akses cepat ke Learning Management System (LMS), E-Rapor, Perpustakaan Digital, dan layanan
                akademik lainnya.
            </p>

            <!-- Search Bar (TAMBAHAN: id="searchInput") -->
            <div class="max-w-md mx-auto relative group">
                <input type="text" id="searchInput" placeholder="Cari layanan (misal: LMS, Rapor)..."
                    class="w-full pl-12 pr-4 py-3 rounded-xl border border-blue-200 bg-white text-slate-900 focus:ring-2 focus:ring-primary focus:border-transparent outline-none shadow-sm transition group-hover:shadow-md">
                <i
                    class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 -mt-10 z-20 relative">

        <!-- GRID CARD -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">

            <!-- CARD 1: LMS -->
            <div class="link-card bg-white rounded-2xl shadow-lg overflow-hidden opacity-0 animate-fade-in-up group">
                <!-- Card Header (Gradient Blue) -->
                <div class="h-32 bg-gradient-to-br from-blue-500 to-blue-600 relative flex items-center justify-center">
                    <div
                        class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
                    </div>
                    <i
                        class="fas fa-graduation-cap text-white text-5xl drop-shadow-lg transform group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-primary transition-colors">LMS
                            Sekolah</h3>
                        <span
                            class="bg-blue-100 text-blue-600 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wide">Akademik</span>
                    </div>
                    <p class="text-sm text-slate-500 mb-4 line-clamp-2">
                        Platform utama pembelajaran daring, materi, dan tugas siswa.
                    </p>
                    <a href="https://lms.smkn1kawali.sch.id/" target="_blank"
                        class="block w-full text-center bg-slate-50 hover:bg-primary hover:text-white text-slate-600 text-sm font-semibold py-2.5 rounded-lg transition-colors duration-200 border border-slate-200">
                        Buka LMS <i class="fa-solid fa-arrow-up-right-from-square ml-1 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- CARD 2: E-RAPOR -->
            <div
                class="link-card bg-white rounded-2xl shadow-lg overflow-hidden opacity-0 animate-fade-in-up delay-100 group">
                <div class="h-32 bg-gradient-to-br from-blue-600 to-cyan-500 relative flex items-center justify-center">
                    <div
                        class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
                    </div>
                    <i
                        class="fas fa-file-contract text-white text-5xl drop-shadow-lg transform group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition-colors">E-Rapor
                        </h3>
                        <span
                            class="bg-cyan-100 text-cyan-600 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wide">Siswa</span>
                    </div>
                    <p class="text-sm text-slate-500 mb-4 line-clamp-2">
                        Akses hasil belajar dan rapor digital semester siswa.
                    </p>
                    <a href="https://erapor.smkn1kawali.sch.id" target="_blank"
                        class="block w-full text-center bg-slate-50 hover:bg-cyan-600 hover:text-white text-slate-600 text-sm font-semibold py-2.5 rounded-lg transition-colors duration-200 border border-slate-200">
                        Buka Rapor <i class="fa-solid fa-arrow-up-right-from-square ml-1 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- CARD 3: PERPUSTAKAAN -->
            <div
                class="link-card bg-white rounded-2xl shadow-lg overflow-hidden opacity-0 animate-fade-in-up delay-200 group">
                <div
                    class="h-32 bg-gradient-to-br from-indigo-500 to-purple-500 relative flex items-center justify-center">
                    <div
                        class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
                    </div>
                    <i
                        class="fas fa-book-open text-white text-5xl drop-shadow-lg transform group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-indigo-600 transition-colors">
                            Perpustakaan</h3>
                        <span
                            class="bg-indigo-100 text-indigo-600 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wide">Literasi</span>
                    </div>
                    <p class="text-sm text-slate-500 mb-4 line-clamp-2">
                        Katalog buku, e-book, dan layanan peminjaman digital.
                    </p>
                    <a href="https://digilib.smkn1kawali.sch.id" target="_blank"
                        class="block w-full text-center bg-slate-50 hover:bg-indigo-600 hover:text-white text-slate-600 text-sm font-semibold py-2.5 rounded-lg transition-colors duration-200 border border-slate-200">
                        Cari Buku <i class="fa-solid fa-arrow-up-right-from-square ml-1 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- CARD 4: E-LEARNING -->
            <div
                class="link-card bg-white rounded-2xl shadow-lg overflow-hidden opacity-0 animate-fade-in-up delay-300 group">
                <div class="h-32 bg-gradient-to-br from-sky-400 to-blue-500 relative flex items-center justify-center">
                    <div
                        class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
                    </div>
                    <i
                        class="fas fa-laptop-code text-white text-5xl drop-shadow-lg transform group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-sky-600 transition-colors">
                            E-Learning</h3>
                        <span
                            class="bg-sky-100 text-sky-600 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wide">Kelas</span>
                    </div>
                    <p class="text-sm text-slate-500 mb-4 line-clamp-2">
                        Ruang belajar tambahan dan ujian online.
                    </p>
                    <a href="#" target="_blank"
                        class="block w-full text-center bg-slate-50 hover:bg-sky-600 hover:text-white text-slate-600 text-sm font-semibold py-2.5 rounded-lg transition-colors duration-200 border border-slate-200">
                        Masuk Kelas <i class="fa-solid fa-arrow-up-right-from-square ml-1 text-xs"></i>
                    </a>
                </div>
            </div>

            <!-- CARD 5: E-PAYMENT -->
            <div
                class="link-card bg-white rounded-2xl shadow-lg overflow-hidden opacity-0 animate-fade-in-up delay-100 group">
                <div
                    class="h-32 bg-gradient-to-br from-teal-400 to-emerald-500 relative flex items-center justify-center">
                    <div
                        class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
                    </div>
                    <i
                        class="fas fa-wallet text-white text-5xl drop-shadow-lg transform group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-lg font-bold text-slate-900 group-hover:text-teal-600 transition-colors">
                            E-Payment</h3>
                        <span
                            class="bg-teal-100 text-teal-700 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wide">Keuangan</span>
                    </div>
                    <p class="text-sm text-slate-500 mb-4 line-clamp-2">
                        Pembayaran SPP, Uang Gedung, dan lain-lain.
                    </p>
                    <a href="#" target="_blank"
                        class="block w-full text-center bg-slate-50 hover:bg-teal-600 hover:text-white text-slate-600 text-sm font-semibold py-2.5 rounded-lg transition-colors duration-200 border border-slate-200">
                        Bayar SPP <i class="fa-solid fa-arrow-up-right-from-square ml-1 text-xs"></i>
                    </a>
                </div>
            </div>

        </div>
    </main>

     <!-- SCRIPT LOGIC (Dipindahkan ke sini agar valid) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- FITUR SEARCH (Ditambahkan) ---
            const searchInput = document.getElementById('searchInput');
            const cards = document.querySelectorAll('.link-card');

            if(searchInput) {
                searchInput.addEventListener('input', function(e) {
                    const keyword = e.target.value.toLowerCase();
                    
                    cards.forEach(card => {
                        // Mengambil seluruh teks di dalam card (Judul, Deskripsi, dll)
                        const cardText = card.textContent.toLowerCase();
                        
                        // Cek apakah keyword ada di dalam teks card
                        if (cardText.includes(keyword)) {
                            card.style.display = ""; // Tampilkan (menghapus inline style)
                        } else {
                            card.style.display = "none"; // Sembunyikan
                        }
                    });
                });
            }
            // ------------------------------------

            // Mobile menu toggle dengan animasi
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            
            mobileMenuButton.addEventListener('click', function() {
                // Toggle animasi max-height
                if (mobileMenu.style.maxHeight && mobileMenu.style.maxHeight !== '0px') {
                    mobileMenu.style.maxHeight = '0px';
                    menuIcon.classList.remove('fa-times');
                    menuIcon.classList.add('fa-bars');
                    menuIcon.style.transform = 'rotate(0deg)';
                } else {
                    // Set max-height to a value large enough to contain the menu
                    mobileMenu.style.maxHeight = mobileMenu.scrollHeight + "px";
                    menuIcon.classList.remove('fa-bars');
                    menuIcon.classList.add('fa-times');
                    menuIcon.style.transform = 'rotate(180deg)';
                }
            });
            
            // Mobile dropdown toggles
            const dropdownButtons = document.querySelectorAll('.mobile-dropdown-btn');
            
            dropdownButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const dropdownId = this.id.replace('-btn', '');
                    const dropdown = document.getElementById(dropdownId);
                    const chevron = this.querySelector('.fa-chevron-down');
                    
                    // Toggle dropdown visibility
                    if (dropdown.classList.contains('hidden')) {
                        dropdown.classList.remove('hidden');
                        // Set max-height for animation
                        setTimeout(() => {
                            dropdown.style.maxHeight = dropdown.scrollHeight + "px";
                        }, 10);
                        chevron.style.transform = 'rotate(180deg)';
                    } else {
                        dropdown.style.maxHeight = '0px';
                        chevron.style.transform = 'rotate(0deg)';
                        // Hide after animation completes
                        setTimeout(() => {
                            dropdown.classList.add('hidden');
                        }, 300);
                    }
                });
            });
        });
    </script>
@endsection