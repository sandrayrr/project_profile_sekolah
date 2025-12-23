<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ekstrakurikuler - SMK Negeri 1 Kawali</title>

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
        .ekstrakurikuler-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .ekstrakurikuler-card:hover {
            transform: translateY(-8px);
        }
        .ekstrakurikuler-image-container .overlay {
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 60%);
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

        /* Pagination styling */
        .pagination {
            @apply flex list-none -space-x-px;
        }
        
        .page-link {
            @apply relative block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white;
        }
        
        .page-item.active .page-link {
            @apply z-10 text-primary-600 bg-primary-50 border-primary-500 dark:text-primary-300 dark:bg-primary-900 dark:border-primary-400;
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
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-gray-600 dark:from-gray-700 dark:to-gray-900 py-20">
        <!-- Optional: Add a subtle pattern overlay -->
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3">
                Ekstrakurikuler
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Informasi lengkap mengenai kegiatan ekstrakurikuler yang tersedia di SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- SEARCH -->
    <div class="max-w-4xl mx-auto mt-10 px-4">
        <form action="#" method="GET"
            class="flex shadow-md rounded-xl overflow-hidden">
            <div class="relative flex-grow">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-search text-gray-400"></i>
                </div>
                <input
                    name="cari"
                    value="{{ request('cari') }}"
                    class="w-full pl-10 pr-3 py-4 bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary focus:outline-none"
                    placeholder="Cari Ekstrakurikuler..."
                    type="text"
                    id="searchInput">
            </div>
            <button
                type="submit"
                class="bg-primary text-white px-8 py-4 font-medium hover:bg-gray-700 transition-colors">
                Cari
            </button>
        </form>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- NOTIFIKASI HASIL PENCARIAN -->
        @if(request('cari'))
        <div class="mb-6 bg-gray-50 dark:bg-gray-900/20 border-l-4 border-gray-500 p-4 rounded">
            <p class="text-sm">
                Menampilkan hasil pencarian untuk: <strong>{{ request('cari') }}</strong>
            </p>
        </div>
        @endif

        <!-- GRID CARD -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">

            <!-- CARD 1: PRAMUKA -->
            <div
                class="ekstrakurikuler-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- FOTO -->
                <div class="ekstrakurikuler-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHGGicmXHhugl4ODSNjUJ-ZNEpZBYfWGeBx02K5BfhqJBo1o-QWWfYnP2HN8LQraK4NRRsk_Txbr77qQ2DzYZjFk7-_YI8LpVwkQSLN8uROdTKFCHkPrjYNLn6WEVRsquEvtaBjKeHYXGBAuVOzM3Z_m215C8py6xBjG-V8TnJQaHVeSDEg8c2uIL15zEZX-6gPF7llpl2jVhwnBDe0mPZ8mo31PmCQCYEM_4e1JOKXlNHkJedxCWgExyJ9LFUZCowS3YWOYas6JL5"
                        alt="Pramuka"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <!-- OVERLAY -->
                    <div
                        class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                        <div class="overlay-text text-white">
                            <p class="font-semibold text-lg">Lihat Detail</p>
                            <p class="text-sm opacity-90">Wajib bagi kelas X</p>
                        </div>
                    </div>
                </div>

                <!-- BODY -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-end mb-3">
                        <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
                            Wajib
                        </span>
                    </div>

                    <div class="border-t pt-4 flex-grow">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                            Pramuka
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <i class="fas fa-users mr-2"></i>
                            <span>Wajib bagi kelas X</span>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-end">
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white text-gray-700 dark:text-gray-300 text-sm font-semibold py-2 px-4 rounded-full transition-colors">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 2: BASKET -->
            <div
                class="ekstrakurikuler-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- FOTO -->
                <div class="ekstrakurikuler-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiLyxKQh49EJFQ9BMsJngjEj9Fcx193pjyON3j8ojvW3r-03c08lr5CYzszhHd9-qrdvnT7td9jKULJu0PWkFuD-8trP0vzpII3IuleS3oq6Z0xMuQZQNgfS7GU9uc58kBGyTLhaTZVHpYZ9Cf7FxeI7o4mH7voqhO1HN1xls5W0IzIB2XhjixkWIgUDUB2Qdw2Lf_ZkxaEvgOG4ffCiK5Sx3iTYETBAE4-14lTnn4UfyaG0e8G0hd89j2ObM06vhYatT7Eao1tZlA"
                        alt="Basket"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <!-- OVERLAY -->
                    <div
                        class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                        <div class="overlay-text text-white">
                            <p class="font-semibold text-lg">Lihat Detail</p>
                            <p class="text-sm opacity-90">Tim Putra & Putri</p>
                        </div>
                    </div>
                </div>

                <!-- BODY -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-end mb-3">
                        <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
                            Olahraga
                        </span>
                    </div>

                    <div class="border-t pt-4 flex-grow">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                            Basket
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <i class="fas fa-basketball-ball mr-2"></i>
                            <span>Tim Putra & Putri</span>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-end">
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white text-gray-700 dark:text-gray-300 text-sm font-semibold py-2 px-4 rounded-full transition-colors">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 3: PASKIBRA -->
            <div
                class="ekstrakurikuler-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- FOTO -->
                <div class="ekstrakurikuler-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZeSol81CxhE--hLHrxSR3q91IC29aQwkp3idXwTJNv6nNxutjnEV4EwK3bv709gxHE2LS-FG6d1FO3RaagBy0Ke1fXP75sTjB15VzFNteXmtw80GcZ69RCMa3i01wlWjZ4qd9Ygyl0Sz44hU2d2RU1HM3RGhBsQYNbLqKuSzQTUTrGbHtYgG5-VTdenVi1iBp7D1jInXq4FUXZGx35Ujtp3sTp5aXuQsa2ESrins-x6BhKWF_LGf9HCM1L76wveKNRL5ouB0w_KDD"
                        alt="Paskibra"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <!-- OVERLAY -->
                    <div
                        class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                        <div class="overlay-text text-white">
                            <p class="font-semibold text-lg">Lihat Detail</p>
                            <p class="text-sm opacity-90">Latihan Disiplin Baris Berbaris</p>
                        </div>
                    </div>
                </div>

                <!-- BODY -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-end mb-3">
                        <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
                            Kedisiplinan
                        </span>
                    </div>

                    <div class="border-t pt-4 flex-grow">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                            Paskibra
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <i class="fas fa-flag mr-2"></i>
                            <span>Latihan Disiplin Baris Berbaris</span>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-end">
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white text-gray-700 dark:text-gray-300 text-sm font-semibold py-2 px-4 rounded-full transition-colors">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 4: PMR -->
            <div
                class="ekstrakurikuler-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- FOTO -->
                <div class="ekstrakurikuler-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpIbxgQORTf4_dUZBy2YUOOuVVKppKgKnRDca0UFBqN0RLuZa7aaYOFba6zR4BwPCQZOkBEP4NzOULB98EcueO6J7yqCJMUpGcAZrtlFOvF016mqLcciLTfOl7q_MpjtEY4EQWoa4-Beg8uwAoW1tqqnrpD-08GyYcrrq6JECcWvd0uM55mxJRmmXuE5txBq2VhA8lBBl5LE-Cl2ktqZ-EloOTe8o3tbxspRfwM-nhjWMjv4OCWTPn5R5tBU5HzSiO75lQN_Md0oyy"
                        alt="PMR"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <!-- OVERLAY -->
                    <div
                        class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                        <div class="overlay-text text-white">
                            <p class="font-semibold text-lg">Lihat Detail</p>
                            <p class="text-sm opacity-90">Palang Merah Remaja</p>
                        </div>
                    </div>
                </div>

                <!-- BODY -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-end mb-3">
                        <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
                            Kemanusiaan
                        </span>
                    </div>

                    <div class="border-t pt-4 flex-grow">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                            PMR
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <i class="fas fa-first-aid mr-2"></i>
                            <span>Palang Merah Remaja</span>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-end">
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white text-gray-700 dark:text-gray-300 text-sm font-semibold py-2 px-4 rounded-full transition-colors">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 5: FUTSAL -->
            <div
                class="ekstrakurikuler-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- FOTO -->
                <div class="ekstrakurikuler-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuASp9fR9t5ue89KiIFawpEUoeotJT2RjQc34FRJA0hH5zMeI5kQkS5URTlIw0MnOxoogXaNkEurfeNhx8P0H-8HO9wkzXIEVIwXOZSKN4BI2aIH7fUHOWfwHCKGP65EzRJsbja7mfMcXm-SdTcYI1bwZHg17CoKqOPWAQvC8PhSIG_48ZpxmAmipqoDHv-Q0QdPT3E0bK-qkCnZ_48Da6x2Cp5dx9uqiZQJhdKpL5l0JrhlIlj1_ScUnmO-6nqd8cLH5p9VvQZfr-pp"
                        alt="Futsal"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <!-- OVERLAY -->
                    <div
                        class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                        <div class="overlay-text text-white">
                            <p class="font-semibold text-lg">Lihat Detail</p>
                            <p class="text-sm opacity-90">Kompetisi tingkat daerah</p>
                        </div>
                    </div>
                </div>

                <!-- BODY -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-end mb-3">
                        <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
                            Olahraga
                        </span>
                    </div>

                    <div class="border-t pt-4 flex-grow">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                            Futsal
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <i class="fas fa-futbol mr-2"></i>
                            <span>Kompetisi tingkat daerah</span>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-end">
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white text-gray-700 dark:text-gray-300 text-sm font-semibold py-2 px-4 rounded-full transition-colors">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CARD 6: SENI TARI -->
            <div
                class="ekstrakurikuler-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- FOTO -->
                <div class="ekstrakurikuler-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFt97btt-xwWCJGL9dD5sYzJR2ATCSzhBHV9_EHDeapoeo6gpjIAcdMiyBo7KOFOdmVGAhj69QH9KfDo2XJRm0z8zxACFGQPvJcu7a2fCTNplSMPzU-C6oPxbzjulEMlTEw2VALruKo2MTZJCh8_3cyN5P1OKuLUp6CNAfXliyKOgishBDcT0Lekk43HhclMBNtYv9KUSqFJidnBbN57UdJEt2AH-K8_ttDMbt3tDqCv0MpgzoPuGi7uhFjaynz15lF-fU2dZxEd5G"
                        alt="Seni Tari"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                    <!-- OVERLAY -->
                    <div
                        class="overlay absolute inset-0 opacity-0 transition-opacity duration-300 flex items-end p-4">
                        <div class="overlay-text text-white">
                            <p class="font-semibold text-lg">Lihat Detail</p>
                            <p class="text-sm opacity-90">Pelestarian Budaya Sunda</p>
                        </div>
                    </div>
                </div>

                <!-- BODY -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-end mb-3">
                        <span class="text-xs bg-primary/10 dark:bg-primary/20 text-primary dark:text-primary-300 px-3 py-1 rounded-full font-medium">
                            Seni & Budaya
                        </span>
                    </div>

                    <div class="border-t pt-4 flex-grow">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                            Seni Tari
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <i class="fas fa-music mr-2"></i>
                            <span>Pelestarian Budaya Sunda</span>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-end">
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-slate-100 dark:bg-slate-700 hover:bg-primary hover:text-white text-gray-700 dark:text-gray-300 text-sm font-semibold py-2 px-4 rounded-full transition-colors">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

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