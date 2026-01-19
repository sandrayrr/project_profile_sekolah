</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-900 dark:text-gray-100 font-sans antialiased transition-colors duration-200">
    <header class="w-full bg-surface-light dark:bg-surface-dark border-b border-gray-200 dark:border-gray-700">
        <div class="container mx-auto px-4 py-4 md:py-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-4 w-full md:w-auto justify-center md:justify-start">
                <div class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0">
                    <img alt="Logo SMK Negeri 1 Kawali" class="w-full h-full object-contain filter drop-shadow-sm"
                   <img src="{{ asset('asset/esemkey.png') }}" alt="Logo SMK">


                </div>
                <span class="text-xl md:text-2xl font-semibold tracking-tight text-gray-800 dark:text-white">
                    SMK Negeri 1 Kawali
                </span>
            </div>
            <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8 text-sm">
                <div class="flex items-center gap-6">
                    <div class="flex items-center gap-2">
                        <div
                            class="w-8 h-8 rounded-full bg-black dark:bg-white text-white dark:text-black flex items-center justify-center">
                            <i class="fa-solid fa-phone text-xs"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase">Telepon</span>
                            <span class="font-medium text-gray-900 dark:text-gray-200">(0265) 791727</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div
                            class="w-8 h-8 rounded-full bg-black dark:bg-white text-white dark:text-black flex items-center justify-center">
                            <i class="fa-solid fa-envelope text-xs"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs text-gray-500 dark:text-gray-400 font-medium uppercase">Email</span>
                            <span class="font-medium text-gray-900 dark:text-gray-200">info@smkn1kawali.sch.id</span>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block h-10 w-px bg-gray-300 dark:bg-gray-600"></div>
                <div class="flex items-center gap-4 text-xl text-black dark:text-white">
                    <a class="hover:text-primary transition-colors" href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a class="hover:text-primary transition-colors" href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a class="hover:text-primary transition-colors" href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a class="hover:text-primary transition-colors" href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a class="hover:text-primary transition-colors" href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a class="hover:text-primary transition-colors" href="#"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </div>
    </header>
    <nav
        class="w-full bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Mobile menu button -->
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-md text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none">
                    <i id="menu-icon" class="fa-solid fa-bars text-xl transition-transform duration-300 ease-in-out"></i>
                </button>
                
                <!-- Desktop navigation -->
                <div id="desktop-menu" class="hidden md:flex items-center space-x-8 text-sm font-medium text-gray-700 dark:text-gray-300">
                    <a class="hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5" href="{{ route('beranda') }}">Beranda</a>

                  <div class="relative group desktop-dropdown">
    <a href="{{ route('profil') }}"
   class="group flex items-center gap-1 hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5 cursor-pointer">
    Profil
    <i class="fa-solid fa-chevron-down text-xs opacity-50 transition-transform duration-200 group-hover:rotate-180"></i>
</a>


    <div class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-md shadow-lg
                opacity-0 invisible scale-95 -translate-y-2
                group-hover:opacity-100 group-hover:visible group-hover:scale-100 group-hover:translate-y-0
                transition-all duration-200 ease-out z-50">

        <a href="{{ route('staffkependidikan') }}"
           class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-150">
            Staf Pengajar
        </a>

        <a href="{{ route('organisasi') }}"
           class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-150">
            Organisasi
        </a>

        <a href="{{ route('tenagapengajar') }}"
           class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-150">
            Tenaga Pengajar
        </a>
    </div>
</div>


                    <div class="relative group desktop-dropdown">
                        <a href="{{ route('jurusan') }}"
                        class="flex items-center gap-1 hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5 cursor-pointer">
                            Jurusan
                            <i class="fa-solid fa-chevron-down text-xs opacity-50 transition-transform duration-200 group-hover:rotate-180"></i>
                        </a>

                        <!-- Desktop Dropdown dengan Animasi -->
                        <div
                            class="absolute left-0 mt-2 w-44 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg
                                   opacity-0 invisible scale-95 -translate-y-2
                                   group-hover:opacity-100 group-hover:visible group-hover:scale-100 group-hover:translate-y-0
                                   transition-all duration-200 ease-out z-50">

                            <a href="{{ route('pplg') }}"
                               class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-150">
                                PPLG
                            </a>
                            <a href="{{ route('tjkt') }}"
                               class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-150">
                                TJKT
                            </a>
                            <a href="{{ route('akl') }}"
                               class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-150">
                                AKL
                            </a>
                            <a href="{{ route('tkr') }}"
                               class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-150">
                                TKR
                            </a>
                            <a href="{{ route('mp') }}"
                               class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-150">
                                MP
                            </a>
                            <a href="{{ route('dpib') }}"
                               class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-150">
                                DPIB
                            </a>
                            <a href="{{ route('sk') }}"
                               class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-150">
                                SK
                            </a>

                        </div>
                    </div>

                    <a class="hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5" href="{{ route('artikel.index') }}">Artikel</a>
                    <a class="hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5" href="{{ route('galeri') }}">Galeri</a>
                    <a class="hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5" href="{{ route('prestasi') }}">Prestasi</a>
                    <a class="hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5" href="{{ route('link') }}">Link</a>
                    <a class="hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5" href="{{ route('fasilitas') }}">Fasilitas</a>
                    <a class="hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5" href="{{ route('akreditasi') }}">Akreditasi</a>
                    <a class="hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5"
                        href="{{ route('ekstrakulikuler') }}">Ekstrakulikuler</a>
                    <a class="hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5" href="{{ route('agenda') }}">Agenda</a>
                    <a class="hover:text-blue-600 transition-all duration-200 transform hover:-translate-y-0.5" href="{{ route('marketplace') }}">Marketplace</a>
                </div>

                <a class="px-6 py-2 rounded-full bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 hover:scale-105 hover:shadow-lg transition-all duration-300 ease-out"
                    href="{{ route('login') }}">
                    Login
                </a>

            </div>
        </div>
        
        <!-- Mobile menu dengan Animasi -->
        <div id="mobile-menu" class="md:hidden bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 transition-all duration-300 ease-in-out overflow-hidden" style="max-height: 0px;">
            <div class="px-4 py-2 space-y-1">
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('beranda') }}">Beranda</a>
                
                <!-- Mobile Profil Dropdown -->
                <div class="mobile-dropdown">
                    <button id="profil-dropdown-btn" class="mobile-dropdown-btn flex items-center justify-between w-full py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 focus:outline-none transition-colors duration-150">
                        <span>Profil</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200"></i>
                    </button>
                    <div id="profil-dropdown" class="hidden pl-4 pb-2 space-y-1">
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('profil') }}">Profil</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('staffkependidikan') }}">Staf Pengajar</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('organisasi') }}">Organisasi</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('tenagapengajar') }}">Tenaga Pengajar</a>
                    </div>
                </div>
                
                <!-- Mobile Jurusan Dropdown -->
                <div class="mobile-dropdown">
                    <button id="jurusan-dropdown-btn" class="mobile-dropdown-btn flex items-center justify-between w-full py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 focus:outline-none transition-colors duration-150">
                        <span>Jurusan</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-transform duration-200"></i>
                    </button>
                    <div id="jurusan-dropdown" class="hidden pl-4 pb-2 space-y-1">
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('pplg') }}">PPLG</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('tjkt') }}">TJKT</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('akl') }}">AKL</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('tkr') }}">TKR</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('mp') }}">MP</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('dpib') }}">DPIB</a>
                        <a class="block py-1 text-sm text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('sk') }}">SK</a>
                    </div>
                </div>
                
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('artikel.index') }}">Artikel</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('galeri') }}">Galeri</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('prestasi') }}">Prestasi</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('link') }}">Link</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('fasilitas') }}">Fasilitas</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('akreditasi') }}">Akreditasi</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('ekstrakulikuler') }}">Ekstrakulikuler</a>
                <a class="block py-2 text-base font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-150" href="{{ route('agenda') }}">Agenda</a>
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
                    dropdown.classList.toggle('hidden');
                    
                    // Rotate chevron
                    if (dropdown.classList.contains('hidden')) {
                        chevron.style.transform = 'rotate(0deg)';
                    } else {
                        chevron.style.transform = 'rotate(180deg)';
                    }
                });
            });
        });
    </script>
</body>