<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Kependidikan - SMK Negeri 1 Kawali</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#6b7280",
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
        .staff-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .staff-card:hover {
            transform: translateY(-8px);
        }
        .overlay {
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 60%);
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
                Staff Kependidikan
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Daftar tenaga kependidikan profesional SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

    <!-- INFO -->
    <div class="flex justify-end mb-8 text-sm text-gray-500 dark:text-gray-400">
        Menampilkan 1 – 4 dari 12 Staff Kependidikan
    </div>

    <!-- GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">

        <!-- CARD -->
        <div
            class="staff-card bg-card-light dark:bg-card-dark
                   rounded-2xl shadow-lg border border-border-light dark:border-border-dark
                   overflow-hidden animate-fade-in group">

            <!-- FOTO -->
            <div class="aspect-[3/4] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                <img
                    src="https://via.placeholder.com/400x600"
                    alt="Nama Staff"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                <!-- OVERLAY -->
                <div
                    class="overlay absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                    <div class="text-white">
                        <p class="font-semibold">Nama Staff</p>
                        <p class="text-sm opacity-90">Jabatan Staff</p>
                    </div>
                </div>
            </div>

            <!-- BODY -->
            <div class="p-5 text-center">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">
                    Nama Staff
                </h3>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Jabatan Staff
                </p>
            </div>
        </div>

        <!-- DUPLIKASI CARD (CONTOH 2) -->
        <div
            class="staff-card bg-card-light dark:bg-card-dark
                   rounded-2xl shadow-lg border border-border-light dark:border-border-dark
                   overflow-hidden animate-fade-in group">

            <div class="aspect-[3/4] bg-gray-300 dark:bg-gray-700 flex items-center justify-center">
                <span class="material-icons text-6xl text-gray-400">person</span>
            </div>

            <div class="p-5 text-center">
                <h3 class="text-lg font-bold">Nama Staff</h3>
                <p class="text-sm text-gray-500">Jabatan Staff</p>
            </div>
        </div>

    </div>

    <!-- PAGINATION (DUMMY) -->
    <div class="flex justify-center mt-10">
        <nav class="flex items-center gap-2 text-sm">
            <span class="px-3 py-2 border rounded-lg text-gray-400">‹</span>
            <span class="px-3 py-2 border rounded-lg bg-primary text-white">1</span>
            <span class="px-3 py-2 border rounded-lg">2</span>
            <span class="px-3 py-2 border rounded-lg">3</span>
            <span class="px-3 py-2 border rounded-lg">›</span>
        </nav>
    </div>

</main>


    @include('layouts.footer')

</body>
</html>