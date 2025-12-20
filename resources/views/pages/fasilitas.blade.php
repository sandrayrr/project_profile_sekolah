<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Fasilitas - SMK Negeri 1 Kawali</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#2563EB", // Blue-600
                        "background-light": "#F9FAFB", // Gray-50
                        "background-dark": "#111827", // Gray-900
                        "surface-light": "#FFFFFF",
                        "surface-dark": "#1F2937", // Gray-800
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                    },
                },
            },
        };
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 font-sans transition-colors duration-300">
   @include('layouts.navbar')
    <section class="bg-gray-200 dark:bg-gray-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-2">Fasilitas</h1>
            <nav aria-label="Breadcrumb" class="flex text-sm text-gray-600 dark:text-gray-400">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a class="hover:text-primary" href="#">Beranda</a>
                    </li>
                    <li>
                        <span class="mx-1">/</span>
                    </li>
                    <li aria-current="page">
                        <span class="font-medium text-gray-800 dark:text-gray-200">Fasilitas</span>
                    </li>
                </ol>
            </nav>
        </div>
    </section>
    <main class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-2 relative inline-block">
                    Fasilitas &amp; Informasi Fasilitas
                </h2>
                <p class="text-gray-600 dark:text-gray-400 mt-2 max-w-2xl">
                    Informasi struktur dan kelengkapan fasilitas di sekolah untuk menunjang kegiatan belajar mengajar.
                </p>
            </div>
            <a class="mt-4 md:mt-0 inline-flex items-center px-6 py-2 bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-800 dark:text-gray-200 rounded-full text-sm font-medium transition group"
                href="#">
                Selengkapnya
                <span
                    class="material-icons text-sm ml-2 group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                <div class="h-64 bg-surface-light dark:bg-gray-700 flex items-center justify-center relative">
                    <div class="bg-blue-50 dark:bg-gray-600 p-6 rounded-full">
                        <span class="material-icons text-6xl text-blue-300 dark:text-blue-400">meeting_room</span>
                    </div>
                </div>
                <div class="h-40 bg-gray-200 dark:bg-gray-600 p-6 flex flex-col justify-center space-y-3">
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-3/4"></div>
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-1/2"></div>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                <div class="h-64 bg-surface-light dark:bg-gray-700 flex items-center justify-center relative">
                    <div class="bg-blue-50 dark:bg-gray-600 p-6 rounded-full">
                        <span class="material-icons text-6xl text-blue-300 dark:text-blue-400">computer</span>
                    </div>
                </div>
                <div class="h-40 bg-gray-200 dark:bg-gray-600 p-6 flex flex-col justify-center space-y-3">
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-3/4"></div>
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-1/2"></div>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                <div class="h-64 bg-surface-light dark:bg-gray-700 flex items-center justify-center relative">
                    <div class="bg-blue-50 dark:bg-gray-600 p-6 rounded-full">
                        <span class="material-icons text-6xl text-blue-300 dark:text-blue-400">menu_book</span>
                    </div>
                </div>
                <div class="h-40 bg-gray-200 dark:bg-gray-600 p-6 flex flex-col justify-center space-y-3">
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-3/4"></div>
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-1/2"></div>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                <div class="h-64 bg-surface-light dark:bg-gray-700 flex items-center justify-center relative">
                    <div class="bg-blue-50 dark:bg-gray-600 p-6 rounded-full">
                        <span class="material-icons text-6xl text-blue-300 dark:text-blue-400">sports_soccer</span>
                    </div>
                </div>
                <div class="h-40 bg-gray-200 dark:bg-gray-600 p-6 flex flex-col justify-center space-y-3">
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-3/4"></div>
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-1/2"></div>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                <div class="h-64 bg-surface-light dark:bg-gray-700 flex items-center justify-center relative">
                    <div class="bg-blue-50 dark:bg-gray-600 p-6 rounded-full">
                        <span class="material-icons text-6xl text-blue-300 dark:text-blue-400">science</span>
                    </div>
                </div>
                <div class="h-40 bg-gray-200 dark:bg-gray-600 p-6 flex flex-col justify-center space-y-3">
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-3/4"></div>
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-1/2"></div>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 group">
                <div class="h-64 bg-surface-light dark:bg-gray-700 flex items-center justify-center relative">
                    <div class="bg-blue-50 dark:bg-gray-600 p-6 rounded-full">
                        <span class="material-icons text-6xl text-blue-300 dark:text-blue-400">mosque</span>
                    </div>
                </div>
                <div class="h-40 bg-gray-200 dark:bg-gray-600 p-6 flex flex-col justify-center space-y-3">
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-3/4"></div>
                    <div class="h-4 bg-gray-300 dark:bg-gray-500 rounded w-1/2"></div>
                </div>
            </div>
        </div>
    </main>
   @include('layouts.footer')

</body>

</html>