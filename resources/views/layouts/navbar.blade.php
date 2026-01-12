</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-900 dark:text-gray-100 font-sans antialiased transition-colors duration-200">
    <header class="w-full bg-surface-light dark:bg-surface-dark border-b border-gray-200 dark:border-gray-700">
        <div class="container mx-auto px-4 py-4 md:py-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-4 w-full md:w-auto justify-center md:justify-start">
                <div class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0">
                    <img alt="Logo SMK Negeri 1 Kawali" class="w-full h-full object-contain filter drop-shadow-sm"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-VV-Jjh0LnHs_AlXI2Xhj8e9gPM66vsCBQRmqxr6XayPRhZIQRDpWcXbdptxikANaYLh25kEv8qoXYeVNWoVjYIbegQW_fImKC0SXY_Qzx4rQUhvW-pm2QvKfQZZXzKhXuP3sT-w2DL8DNQ0vRjBrZc7hPWhWx7Q9DQXpb0cSraKDqnhusny8rc9Zlqw9DpbJhJUdrb1gln4hSsuoWy6ejC-SB8RnGsQHp3P11q_b5vAExPejijp0MwbYo5pMreb3MkHTAVTPKrbu" />
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
        class="w-full bg-background-light dark:bg-background-dark border-b border-gray-200 dark:border-gray-700 sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <button
                    class="md:hidden p-2 rounded-md text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
                <div class="hidden md:flex items-center space-x-8 text-sm font-medium text-gray-700 dark:text-gray-300">
                    <a class="hover:text-primary transition-colors" href="{{ route('beranda') }}">Beranda</a>

                   <div class="relative group">
                                <a class="group flex items-center gap-1 hover:text-primary transition-colors cursor-pointer">
                                    Profil
                                    <i class="fa-solid fa-chevron-down text-xs opacity-50"></i>
                                </a>

    <!-- Dropdown -->
                            <div class="absolute left-0 mt-2 w-48 bg-white border rounded-md shadow-lg
                                        opacity-0 invisible group-hover:opacity-100 group-hover:visible
                                        transition-all duration-200">
                                <a href="{{ route('profil') }}"
                                class="block px-4 py-2 hover:bg-gray-100">
                                    Profil
                                </a>
                                <a href="{{ route('tenagapengajar') }}"
                                class="block px-4 py-2 hover:bg-gray-100">
                                    Tenaga Pengajar
                                </a>
                                <a href="{{ route('organisasi') }}"
                                class="block px-4 py-2 hover:bg-gray-100">
                                    Organisasi
                                </a>
                                <a href="{{ route('staffkependidikan') }}"
                                class="block px-4 py-2 hover:bg-gray-100">
                                    Staff Kependidkan
                                </a>
                            </div>
                        </div>


                    <div class="relative group">
   <a href="{{ route('jurusan') }}"
   class="flex items-center gap-1 hover:text-primary transition-colors cursor-pointer">
    Jurusan
    <i class="fa-solid fa-chevron-down text-xs opacity-50"></i>
</a>


    <!-- Dropdown -->
    <div
        class="absolute left-0 mt-2 w-44 bg-white border border-gray-200 rounded-lg shadow-lg
               opacity-0 invisible group-hover:opacity-100 group-hover:visible
               transition-all duration-200 z-50">

        <a href="{{ route('pplg') }}"
           class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-primary transition-colors">
            PPLG
        </a>
        <a href="{{ route('tjkt') }}"
           class="block px-4 py-2 text-sm hover:bg-gray-100 hover:text-primary transition-colors">
            TJKT
        </a>

    </div>
</div>


                    <a class="hover:text-primary transition-colors" href="{{ route('artikel.index') }}">Artikel</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('galeri') }}">Galeri</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('prestasi') }}">Prestasi</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('link') }}">Link</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('fasilitas') }}">Fasilitas</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('akreditasi') }}">Akreditasi</a>
                    <a class="hover:text-primary transition-colors"
                        href="{{ route('ekstrakulikuler') }}">Ekstrakulikuler</a>
                    <a class="hover:text-primary transition-colors" href="{{ route('agenda') }}">Agenda</a>
                </div>

                <a class="px-6 py-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white text-sm font-semibold hover:bg-primary hover:text-white dark:hover:bg-primary transition-all duration-300"
                    href="{{ route('login') }}">
                    Login
                </a>

            </div>
        </div>
    </nav>