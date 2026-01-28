</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-900 dark:text-gray-100 font-sans antialiased transition-colors duration-300">
    <header class="w-full bg-surface-light dark:bg-surface-dark border-b border-gray-200 dark:border-gray-700 shadow-sm">
        <div class="container mx-auto px-4 py-4 md:py-6 flex flex-col md:flex-row justify-between items-center gap-4">
<<<<<<< Updated upstream
            <div class="flex items-center gap-4 w-full md:w-auto justify-center md:justify-start group">
                <div class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0 transform transition-all duration-300 group-hover:scale-105">
                    <img alt="Logo SMK Negeri 1 Kawali" class="w-full h-full object-contain filter drop-shadow-sm rounded-lg"
                        src="{{ asset('beranda/logo smkn.png') }}" alt="Logo SMK">
=======
            <div class="flex items-center gap-4 w-full md:w-auto justify-center md:justify-start">
                <div class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0">
                    <img alt="Logo SMK Negeri 1 Kawali" class="w-full h-full object-contain filter drop-shadow-sm"
                   <img src="{{ asset('asset/esemkey.png') }}" alt="Logo SMK">


>>>>>>> Stashed changes
                </div>
                <span class="text-xl md:text-2xl font-semibold tracking-tight text-gray-800 dark:text-white transition-colors duration-300 group-hover:text-blue-600 dark:group-hover:text-blue-400">
                    SMK Negeri 1 Kawali
                </span>
            </div>
            <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8 text-sm">
                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2 group cursor-pointer">
                        <div
                            class="w-8 h-8 rounded-full bg-black dark:bg-white text-white dark:text-black flex items-center justify-center transform transition-all duration-300 group-hover:scale-110 group-hover:bg-blue-600 dark:group-hover:bg-blue-400">
                            <i class="fa-solid fa-phone text-xs"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase">Telepon</span>
                            <span class="font-medium text-gray-900 dark:text-gray-200 transition-colors duration-300 group-hover:text-blue-600 dark:group-hover:text-blue-400">(0265) 791727</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 group cursor-pointer">
                        <div
                            class="w-8 h-8 rounded-full bg-black dark:bg-white text-white dark:text-black flex items-center justify-center transform transition-all duration-300 group-hover:scale-110 group-hover:bg-blue-600 dark:group:hover:bg-blue-400">
                            <i class="fa-solid fa-envelope text-xs"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase">Email</span>
                            <span class="font-medium text-gray-900 dark:text-gray-200 transition-colors duration-300 group-hover:text-blue-600 dark:group-hover:text-blue-400">smkn1kawali@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block h-10 w-px bg-gray-300 dark:bg-gray-600"></div>
                <div class="flex items-center gap-4 text-xl text-black dark:text-white">
                    <a class="hover:text-green-500 transition-all duration-300 transform hover:scale-125" href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a class="hover:text-blue-600 transition-all duration-300 transform hover:scale-125" href="https://www.facebook.com/smkn1kawali/"><i class="fa-brands fa-facebook"></i></a>
                    <a class="hover:text-sky-500 transition-all duration-300 transform hover:scale-125" href="https://x.com/smkn1kawali"><i class="fa-brands fa-twitter"></i></a>
                    <a class="hover:text-pink-600 transition-all duration-300 transform hover:scale-125" href="https://www.instagram.com/smkn1kawali?igsh=cmFqdTU5dnZiZ2xh"><i class="fa-brands fa-instagram"></i></a>
                    <a class="hover:text-red-600 transition-all duration-300 transform hover:scale-125" href="https://youtube.com/@smkn1kawaliofficial?si=YUPbrK5HkNwOpZW9"><i class="fa-brands fa-youtube"></i></a>
                    <a class="hover:text-black dark:hover:text-white transition-all duration-300 transform hover:scale-125" href="https://www.tiktok.com/@smkn1kawali?_r=1&_t=ZS-934643ZQHv0"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </header>
   <nav
        class="w-full bg-gray-200 dark:bg-gray-900 border-b border-gray-300 dark:border-gray-800 sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Mobile menu button -->
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-md text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none transition-all duration-300">
                    <i id="menu-icon" class="fa-solid fa-bars text-xl transition-all duration-300 ease-in-out"></i>
                </button>
                
                <!-- Desktop navigation -->
                <div id="desktop-menu" class="hidden md:flex items-center space-x-8 text-sm font-medium text-gray-700 dark:text-gray-300">
                    <a class="hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105" href="{{ route('beranda') }}">Beranda</a>

                  <div class="relative group desktop-dropdown">
    <a href="{{ route('profil') }}"
   class="group flex items-center gap-1 hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105 cursor-pointer">
    Profil
    <i class="fa-solid fa-chevron-down text-xs opacity-50 transition-all duration-300 group-hover:rotate-180 group-hover:opacity-100"></i>
</a>


    <div class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-md shadow-lg
                opacity-0 invisible scale-95 -translate-y-2
                group-hover:opacity-100 group-hover:visible group-hover:scale-100 group-hover:translate-y-0
                transition-all duration-300 ease-out z-50">

        <a href="{{ route('staffkependidikan') }}"
           class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 hover:translate-x-1 transition-all duration-200">
            Staff Kependidikan
        </a>

        <a href="{{ route('organisasi') }}"
           class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 hover:translate-x-1 transition-all duration-200">
            Organisasi
        </a>

        <a href="{{ route('tenagapengajar') }}"
           class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 hover:translate-x-1 transition-all duration-200">
            Tenaga Pengajar
        </a>
    </div>
</div>


            <!-- Ganti bagian dropdown jurusan dengan kode berikut -->

<div class="relative group desktop-dropdown">
    <a href="{{ route('jurusan') }}"
    class="flex items-center gap-1 hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105 cursor-pointer">
        Jurusan
        <i class="fa-solid fa-chevron-down text-xs opacity-50 transition-all duration-300 group-hover:rotate-180 group-hover:opacity-100"></i>
    </a>

    <!-- Desktop Dropdown dengan Animasi -->
    <div
        class="absolute left-0 mt-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg
               opacity-0 invisible scale-95 -translate-y-2
               group-hover:opacity-100 group-hover:visible group-hover:scale-100 group-hover:translate-y-0
               transition-all duration-300 ease-out z-50"
        style="min-width: 380px; width: max-content;">

         <a href="{{ route('dpib') }}"
           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 hover:translate-x-1 transition-all duration-200 whitespace-nowrap">
            Desain Permodelan Infrastruktur dan Bangunan
        </a>
         <a href="{{ route('tjkt') }}"
           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 hover:translate-x-1 transition-all duration-200 whitespace-nowrap">
            Teknik Jaringan Komputer dan Telekomunikasi
        </a>

        <a href="{{ route('pplg') }}"
           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 hover:translate-x-1 transition-all duration-200 whitespace-nowrap">
            Pengembangan Perangkat Lunak Dan Game
        </a>
       
        <a href="{{ route('akl') }}"
           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 hover:translate-x-1 transition-all duration-200 whitespace-nowrap">
            Akuntansi Keuangan Lembaga
        </a>

        <a href="{{ route('mp') }}"
           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 hover:translate-x-1 transition-all duration-200 whitespace-nowrap">
            Manajemen Perkantoran
        </a>

        <a href="{{ route('sk') }}"
           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 hover:translate-x-1 transition-all duration-200 whitespace-nowrap">
            Seni Pertunjukan
        </a>

        <a href="{{ route('tkr') }}"
           class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 hover:translate-x-1 transition-all duration-200 whitespace-nowrap">
            Teknik Otomotif
        </a>   
    </div>
</div>
                    <a class="hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105" href="{{ route('artikel.index') }}">Artikel</a>
                    <a class="hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105" href="{{ route('galeri') }}">Galeri</a>
                    <a class="hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105" href="{{ route('prestasi') }}">Prestasi</a>
                    <a class="hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105" href="{{ route('link') }}">Link</a>
                    <a class="hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105" href="{{ route('fasilitas') }}">Fasilitas</a>
                    <a class="hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105" href="{{ route('akreditasi') }}">Akreditasi</a>
                    <a class="hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105"
                        href="{{ route('ekstrakulikuler') }}">Ekstrakulikuler</a>
<<<<<<< Updated upstream
                    <a class="hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105" href="{{ route('agenda') }}">Agenda</a>
                    <a class="hover:text-blue-600 transition-all duration-300 transform hover:-translate-y-0.5 hover:scale-105" href="{{ route('marketplace') }}">Marketplace</a>
=======
                    <a class="hover:text-primary transition-colors" href="{{ route('agenda') }}">Agenda</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('marketplace') }}">Marketplace</a>
>>>>>>> Stashed changes
                </div>

                <a class="px-6 py-2 rounded-full bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 hover:scale-105 hover:shadow-lg transition-all duration-300 ease-out relative overflow-hidden group"
                    href="{{ route('login') }}">
                    <span class="relative z-10">Login</span>
                    <div class="absolute inset-0 bg-blue-700 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                </a>

            </div>
        </div>
        
        <!-- Mobile menu dengan Animasi -->
        <div id="mobile-menu" class="md:hidden bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 transition-all duration-300 ease-in-out overflow-hidden" style="max-height: 0px;">
            <div class="px-4 py-2 space-y-1">
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('beranda') }}">Beranda</a>
                
                <!-- Mobile Profil Dropdown -->
                <div class="mobile-dropdown">
                    <button id="profil-dropdown-btn" class="mobile-dropdown-btn flex items-center justify-between w-full py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 focus:outline-none transition-all duration-200">
                        <span>Profil</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-all duration-300"></i>
                    </button>
                    <div id="profil-dropdown" class="hidden pl-4 pb-2 space-y-1 overflow-hidden transition-all duration-300" style="max-height: 0px;">
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('profil') }}">Profil</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('staffkependidikan') }}">Staf Pengajar</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('organisasi') }}">Organisasi</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('tenagapengajar') }}">Tenaga Pengajar</a>
                    </div>
                </div>
                
                <!-- Mobile Jurusan Dropdown -->
                <div class="mobile-dropdown">
                    <button id="jurusan-dropdown-btn" class="mobile-dropdown-btn flex items-center justify-between w-full py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 focus:outline-none transition-all duration-200">
                        <span>Jurusan</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-all duration-300"></i>
                    </button>
                    <div id="jurusan-dropdown" class="hidden pl-4 pb-2 space-y-1 overflow-hidden transition-all duration-300" style="max-height: 0px;">
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('pplg') }}">PPLG</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('tjkt') }}">TJKT</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('akl') }}">AKL</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('tkr') }}">TKR</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('mp') }}">MP</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('dpib') }}">DPIB</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('sk') }}">SK</a>
                    </div>
                </div>
                
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('artikel.index') }}">Artikel</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('galeri') }}">Galeri</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('prestasi') }}">Prestasi</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('link') }}">Link</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('fasilitas') }}">Fasilitas</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('akreditasi') }}">Akreditasi</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('ekstrakulikuler') }}">Ekstrakulikuler</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md px-2 transition-all duration-200" href="{{ route('agenda') }}">Agenda</a>
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
</body>