<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Prestasi - SMK Negeri 1 Kawali</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#1d4ed8", // Using a solid blue as primary
                        secondary: "#64748b",
                        "background-light": "#f8fafc",
                        "background-dark": "#0f172a",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1e293b",
                        "border-light": "#e2e8f0",
                        "border-dark": "#334155",
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"],
                        body: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                    },
                },
            },
        };
    </script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 20px;
        }

        .dark ::-webkit-scrollbar-thumb {
            background-color: #475569;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200 font-body antialiased transition-colors duration-200">
    @include('layouts.navbar')
    <div class="bg-slate-200 dark:bg-slate-800 py-12 px-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">Prestasi</h1>
        </div>
    </div>
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 min-h-screen">
        <div class="max-w-4xl mx-auto mb-16">
            <div class="flex shadow-md rounded-lg overflow-hidden">
                <input
                    class="flex-grow px-6 py-4 bg-slate-50 dark:bg-slate-800 border-none text-slate-700 dark:text-slate-200 focus:ring-2 focus:ring-inset focus:ring-primary placeholder-slate-400"
                    placeholder="Cari Prestasi" type="text" />
                <button
                    class="bg-slate-300 dark:bg-slate-700 hover:bg-slate-400 dark:hover:bg-slate-600 text-slate-800 dark:text-white font-medium px-8 py-4 transition-colors">
                    Cari
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <div
                class="group bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-border-light dark:border-border-dark overflow-hidden flex flex-col hover:-translate-y-1 transition-transform duration-300">
                <div
                    class="aspect-[4/3] bg-slate-200 dark:bg-slate-800 flex flex-col items-center justify-center p-6 text-center text-slate-500 dark:text-slate-400 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                    <i class="fa-regular fa-image text-4xl mb-3 opacity-50"></i>
                    <p class="text-sm font-medium z-10">Dokumentasi saat meraih prestasi<br />(slide)</p>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-end mb-4">
                        <span
                            class="text-xs font-semibold text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full">12
                            Mei 2023</span>
                    </div>
                    <div class="border-t border-border-light dark:border-border-dark pt-4 mb-4 flex-grow">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1 line-clamp-2">Juara 1 Lomba Web
                            Design Tingkat Provinsi</h3>
                        <p class="text-primary font-medium text-sm">Kelas XI RPL 1</p>
                    </div>
                    <div class="mt-auto flex justify-end">
                        <a class="inline-flex items-center gap-2 bg-slate-200 dark:bg-slate-700 hover:bg-slate-300 dark:hover:bg-slate-600 text-slate-800 dark:text-white text-xs font-semibold py-2 px-4 rounded-full transition-colors"
                            href="#">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-border-light dark:border-border-dark overflow-hidden flex flex-col hover:-translate-y-1 transition-transform duration-300">
                <div
                    class="aspect-[4/3] bg-slate-200 dark:bg-slate-800 flex flex-col items-center justify-center p-6 text-center text-slate-500 dark:text-slate-400 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                    <i class="fa-regular fa-image text-4xl mb-3 opacity-50"></i>
                    <p class="text-sm font-medium z-10">Dokumentasi saat meraih prestasi<br />(slide)</p>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-end mb-4">
                        <span
                            class="text-xs font-semibold text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full">10
                            April 2023</span>
                    </div>
                    <div class="border-t border-border-light dark:border-border-dark pt-4 mb-4 flex-grow">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1 line-clamp-2">Medali Emas
                            Pencak Silat Nasional</h3>
                        <p class="text-primary font-medium text-sm">Kelas X TKJ 2</p>
                    </div>
                    <div class="mt-auto flex justify-end">
                        <a class="inline-flex items-center gap-2 bg-slate-200 dark:bg-slate-700 hover:bg-slate-300 dark:hover:bg-slate-600 text-slate-800 dark:text-white text-xs font-semibold py-2 px-4 rounded-full transition-colors"
                            href="#">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-border-light dark:border-border-dark overflow-hidden flex flex-col hover:-translate-y-1 transition-transform duration-300">
                <div
                    class="aspect-[4/3] bg-slate-200 dark:bg-slate-800 flex flex-col items-center justify-center p-6 text-center text-slate-500 dark:text-slate-400 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                    <i class="fa-regular fa-image text-4xl mb-3 opacity-50"></i>
                    <p class="text-sm font-medium z-10">Dokumentasi saat meraih prestasi<br />(slide)</p>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-end mb-4">
                        <span
                            class="text-xs font-semibold text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full">05
                            Maret 2023</span>
                    </div>
                    <div class="border-t border-border-light dark:border-border-dark pt-4 mb-4 flex-grow">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1 line-clamp-2">Juara Harapan 1
                            Lomba Pidato Bahasa Inggris</h3>
                        <p class="text-primary font-medium text-sm">Kelas XII AKL 3</p>
                    </div>
                    <div class="mt-auto flex justify-end">
                        <a class="inline-flex items-center gap-2 bg-slate-200 dark:bg-slate-700 hover:bg-slate-300 dark:hover:bg-slate-600 text-slate-800 dark:text-white text-xs font-semibold py-2 px-4 rounded-full transition-colors"
                            href="#">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-border-light dark:border-border-dark overflow-hidden flex flex-col hover:-translate-y-1 transition-transform duration-300">
                <div
                    class="aspect-[4/3] bg-slate-200 dark:bg-slate-800 flex flex-col items-center justify-center p-6 text-center text-slate-500 dark:text-slate-400 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                    <i class="fa-regular fa-image text-4xl mb-3 opacity-50"></i>
                    <p class="text-sm font-medium z-10">Dokumentasi saat meraih prestasi<br />(slide)</p>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-end mb-4">
                        <span
                            class="text-xs font-semibold text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full">28
                            Feb 2023</span>
                    </div>
                    <div class="border-t border-border-light dark:border-border-dark pt-4 mb-4 flex-grow">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1 line-clamp-2">Juara 2 Futsal
                            Antar Pelajar Se-Kabupaten</h3>
                        <p class="text-primary font-medium text-sm">Tim Futsal Sekolah</p>
                    </div>
                    <div class="mt-auto flex justify-end">
                        <a class="inline-flex items-center gap-2 bg-slate-200 dark:bg-slate-700 hover:bg-slate-300 dark:hover:bg-slate-600 text-slate-800 dark:text-white text-xs font-semibold py-2 px-4 rounded-full transition-colors"
                            href="#">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-border-light dark:border-border-dark overflow-hidden flex flex-col hover:-translate-y-1 transition-transform duration-300">
                <div
                    class="aspect-[4/3] bg-slate-200 dark:bg-slate-800 flex flex-col items-center justify-center p-6 text-center text-slate-500 dark:text-slate-400 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                    <i class="fa-regular fa-image text-4xl mb-3 opacity-50"></i>
                    <p class="text-sm font-medium z-10">Dokumentasi saat meraih prestasi<br />(slide)</p>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-end mb-4">
                        <span
                            class="text-xs font-semibold text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full">15
                            Jan 2023</span>
                    </div>
                    <div class="border-t border-border-light dark:border-border-dark pt-4 mb-4 flex-grow">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1 line-clamp-2">Juara Umum LKS
                            Tingkat Kabupaten</h3>
                        <p class="text-primary font-medium text-sm">Tim LKS Sekolah</p>
                    </div>
                    <div class="mt-auto flex justify-end">
                        <a class="inline-flex items-center gap-2 bg-slate-200 dark:bg-slate-700 hover:bg-slate-300 dark:hover:bg-slate-600 text-slate-800 dark:text-white text-xs font-semibold py-2 px-4 rounded-full transition-colors"
                            href="#">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="group bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-border-light dark:border-border-dark overflow-hidden flex flex-col hover:-translate-y-1 transition-transform duration-300">
                <div
                    class="aspect-[4/3] bg-slate-200 dark:bg-slate-800 flex flex-col items-center justify-center p-6 text-center text-slate-500 dark:text-slate-400 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent"></div>
                    <i class="fa-regular fa-image text-4xl mb-3 opacity-50"></i>
                    <p class="text-sm font-medium z-10">Dokumentasi saat meraih prestasi<br />(slide)</p>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-end mb-4">
                        <span
                            class="text-xs font-semibold text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full">20
                            Des 2022</span>
                    </div>
                    <div class="border-t border-border-light dark:border-border-dark pt-4 mb-4 flex-grow">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1 line-clamp-2">Juara Favorit
                            Lomba Film Pendek</h3>
                        <p class="text-primary font-medium text-sm">Ekskul Sinematografi</p>
                    </div>
                    <div class="mt-auto flex justify-end">
                        <a class="inline-flex items-center gap-2 bg-slate-200 dark:bg-slate-700 hover:bg-slate-300 dark:hover:bg-slate-600 text-slate-800 dark:text-white text-xs font-semibold py-2 px-4 rounded-full transition-colors"
                            href="#">
                            Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <nav aria-label="Pagination" class="isolate inline-flex -space-x-px rounded-md shadow-sm">
                <a class="relative inline-flex items-center rounded-l-md px-2 py-2 text-slate-400 ring-1 ring-inset ring-slate-300 dark:ring-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 focus:z-20 focus:outline-offset-0"
                    href="#">
                    <span class="sr-only">Previous</span>
                    <i class="fa-solid fa-chevron-left h-5 w-5"></i>
                </a>
                <a aria-current="page"
                    class="relative z-10 inline-flex items-center bg-primary px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                    href="#">1</a>
                <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-slate-900 dark:text-slate-200 ring-1 ring-inset ring-slate-300 dark:ring-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 focus:z-20 focus:outline-offset-0"
                    href="#">2</a>
                <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-slate-900 dark:text-slate-200 ring-1 ring-inset ring-slate-300 dark:ring-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 focus:z-20 focus:outline-offset-0"
                    href="#">3</a>
                <a class="relative inline-flex items-center rounded-r-md px-2 py-2 text-slate-400 ring-1 ring-inset ring-slate-300 dark:ring-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 focus:z-20 focus:outline-offset-0"
                    href="#">
                    <span class="sr-only">Next</span>
                    <i class="fa-solid fa-chevron-right h-5 w-5"></i>
                </a>
            </nav>
        </div>
    </main>
    @include('layouts.footer')
    <button
        class="fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition-colors z-50"
        onclick="document.documentElement.classList.toggle('dark')" title="Toggle Dark Mode">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
    </button>

</body>

</html>