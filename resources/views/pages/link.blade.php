<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Link - SMK Negeri 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#6b7280", // Warna abu-abu
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
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                },
            },
        };
    </script>
    <style>
        /* Custom styles for visual enhancement */
        .link-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .link-card:hover {
            transform: translateY(-8px);
        }
        .link-image-container .overlay {
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 60%);
        }
        .link-card:hover .overlay {
            opacity: 1;
        }
        .link-card:hover .overlay-text {
            transform: translateY(0);
        }
        .overlay-text {
            transform: translateY(10px);
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-gray-600 dark:from-gray-700 dark:to-gray-900 py-20">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3">
                Link
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Akses cepat ke berbagai layanan dan platform terkait SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- SEARCH -->
    

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- NOTIFIKASI HASIL PENCARIAN (Contoh, bisa dihilangkan jika tidak dinamis) -->
        @if(request('cari'))
        <div class="mb-6 bg-gray-50 dark:bg-gray-900/20 border-l-4 border-gray-500 p-4 rounded">
            <p class="text-sm">
                Menampilkan hasil pencarian untuk: <strong>{{ request('cari') }}</strong>
            </p>
        </div>
        @endif

        <!-- GRID CARD -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">

            <!-- CARD 1: LMS -->
            <div
                class="link-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- FOTO / IKON -->
                <div class="link-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                        <i class="fas fa-graduation-cap text-6xl"></i>
                    </div>

                    <!-- OVERLAY -->
                    <div
                        class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                        <div class="overlay-text text-white">
                            <p class="font-semibold text-lg">Kunjungi LMS</p>
                            <p class="text-sm opacity-90">platform.belajarajar.id</p>
                        </div>
                    </div>
                </div>

                <!-- BODY -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-end mb-3">
                        <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
                            Akademik
                        </span>
                    </div>

                    <div class="border-t pt-4 flex-grow">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                            LMS SMK Negeri 1 Kawali
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <i class="fas fa-link mr-2"></i>
                            <span>Learning Management System</span>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-end">
                        <a href="https://lms.smkn1kawali.sch.id" target="_blank"
                            class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white text-gray-700 dark:text-gray-300 text-sm font-semibold py-2 px-4 rounded-full transition-colors">
                            Buka <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 2: E-RAPOR -->
            <div
                class="link-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- FOTO / IKON -->
                <div class="link-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                        <i class="fas fa-file-alt text-6xl"></i>
                    </div>

                    <!-- OVERLAY -->
                    <div
                        class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                        <div class="overlay-text text-white">
                            <p class="font-semibold text-lg">Buka E-Rapor</p>
                            <p class="text-sm opacity-90">erapor.smkn1kawali.sch.id</p>
                        </div>
                    </div>
                </div>

                <!-- BODY -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-end mb-3">
                        <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
                            Layanan Siswa
                        </span>
                    </div>

                    <div class="border-t pt-4 flex-grow">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                            E-Rapor SMK Negeri 1 Kawali
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <i class="fas fa-link mr-2"></i>
                            <span>Rapor Digital Siswa</span>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-end">
                        <a href="https://erapor.smkn1kawali.sch.id" target="_blank"
                            class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white text-gray-700 dark:text-gray-300 text-sm font-semibold py-2 px-4 rounded-full transition-colors">
                            Buka <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contoh tambahan jika diperlukan -->
            <!-- <div> ... card lainnya ... </div> -->

        </div>

        <!-- Pagination tidak diperlukan untuk link statis -->
        <!-- <div class="flex justify-center mt-10"> ... </div> -->

    </main>

    @include('layouts.footer')

    <!-- DARK MODE BUTTON -->
    <button
        id="darkToggle"
        class="fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg z-50 hover:bg-gray-600 transition-colors">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
    </button>

    <script>
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

        // Search functionality (opsional, jika link-nya dinamis)
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    // Logika pencarian bisa ditambahkan di sini
                    console.log('Mencari:', searchInput.value);
                }
            });
        });
    </script>

</body>

</html>