<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tenaga Pengajar - SMK Negeri 1 Kawali</title>

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
                },
            },
        };
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

    @include('layouts.navbar')

    <!-- HEADER -->
    <div class="relative bg-gradient-to-br from-primary to-gray-600 dark:from-gray-700 dark:to-gray-900 py-20">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3">
                Tenaga Pengajar
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Daftar tenaga pendidik dan kependidikan SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 min-h-screen">

        <!-- TOOLBAR -->
        <div class="flex justify-between items-center mb-10">
            <button
                class="flex items-center gap-2 bg-card-light dark:bg-card-dark border border-border-light dark:border-border-dark px-4 py-2 rounded-xl text-sm shadow hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                <i class="fas fa-sliders-h"></i>
                Filter
            </button>
            <span class="text-sm text-gray-500 dark:text-gray-400">
                Menampilkan 1–8 dari 24 Tenaga Pengajar
            </span>
        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach([
            ['nama'=>'Siti Nurhaliza, S.Pd','jabatan'=>'Administrasi'],
            ['nama'=>'Ahmad Rahman, A.Md','jabatan'=>'Laboran'],
            ['nama'=>'Maya Sari, S.E','jabatan'=>'Keuangan'],
            ['nama'=>'Budi Setiawan','jabatan'=>'Teknisi'],
            ['nama'=>'Rina Amelia','jabatan'=>'Perpustakaan'],
            ['nama'=>'Dedi Kurniawan','jabatan'=>'Keamanan'],
            ['nama'=>'Lina Marlina, S.Sos','jabatan'=>'Konselor'],
            ['nama'=>'Hendra Gunawan','jabatan'=>'IT Support'],
            ] as $staff)
            <div
                class="bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark shadow-sm hover:shadow-lg transition overflow-hidden group">
                <div class="h-64 bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                    <span class="text-gray-400 text-sm">Foto</span>
                </div>
                <div class="p-6 text-center">
                    <h3
                        class="font-semibold text-lg group-hover:text-primary transition">
                        {{ $staff['nama'] }}
                    </h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $staff['jabatan'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- PAGINATION -->
        <div class="flex justify-center mt-14">
            <nav class="inline-flex rounded-xl overflow-hidden shadow border border-border-light dark:border-border-dark">
                <a href="#"
                    class="px-4 py-2 text-sm bg-card-light dark:bg-card-dark text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700">
                    Prev
                </a>
                <span class="px-4 py-2 text-sm bg-primary text-white">1</span>
                <a href="#"
                    class="px-4 py-2 text-sm bg-card-light dark:bg-card-dark hover:bg-gray-100 dark:hover:bg-gray-700">
                    2
                </a>
                <a href="#"
                    class="px-4 py-2 text-sm bg-card-light dark:bg-card-dark hover:bg-gray-100 dark:hover:bg-gray-700">
                    Next
                </a>
            </nav>
        </div>

    </main>

    @include('layouts.footer')

</body>
</html>
