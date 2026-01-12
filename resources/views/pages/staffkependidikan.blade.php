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

    <!-- Tailwind Config -->
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

    <!-- Custom Style -->
    <style>
        .staff-card {
            transition: all .3s cubic-bezier(.4, 0, .2, 1);
        }

        .staff-card:hover {
            transform: translateY(-8px);
        }

        .overlay {
            background: linear-gradient(
                to top,
                rgba(0, 0, 0, .7) 0%,
                rgba(0, 0, 0, 0) 60%
            );
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark
           text-gray-800 dark:text-gray-100
           font-body transition-colors duration-300">

    {{-- NAVBAR --}}
    @include('layouts.navbar')

    {{-- HEADER --}}
    <section
        class="relative bg-gradient-to-br from-primary to-gray-600
               dark:from-gray-700 dark:to-gray-900 py-20">
        <div class="absolute inset-0 bg-black/10"></div>

        <div class="relative container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3">
                Staff Kependidikan
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Daftar tenaga kependidikan profesional SMK Negeri 1 Kawali.
            </p>
        </div>
    </section>

    {{-- CONTENT --}}
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        {{-- GRID --}}
        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4
                   gap-8 mb-12">

            @forelse ($staff as $item)
                <div
                    class="staff-card bg-card-light dark:bg-card-dark
                           rounded-2xl shadow-lg
                           border border-border-light dark:border-border-dark
                           overflow-hidden group animate-fade-in">

                    {{-- FOTO --}}
                    <div
                        class="aspect-[3/4] bg-gray-200 dark:bg-gray-700
                               relative overflow-hidden">

                        <img
                            src="{{ $item->foto
                                ? asset('storage/' . $item->foto)
                                : asset('storage/beranda/default-staff.jpg') }}"
                            alt="{{ $item->nama }}"
                            class="w-full h-full object-cover
                                   transition-transform duration-500
                                   group-hover:scale-110">

                        {{-- OVERLAY --}}
                        <div
                            class="overlay absolute inset-0
                                   opacity-0 group-hover:opacity-100
                                   transition-opacity duration-300
                                   flex items-end p-4">
                            <div class="text-white">
                                <p class="font-semibold">{{ $item->nama }}</p>
                                <p class="text-sm opacity-90">
                                    {{ $item->jabatan }}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- BODY --}}
                    <div class="p-5 text-center">
                        <h3
                            class="text-lg font-bold
                                   text-gray-900 dark:text-white mb-1">
                            {{ $item->nama }}
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            {{ $item->jabatan }}
                        </p>
                    </div>
                </div>
            @empty
                <div
                    class="col-span-full text-center py-20
                           text-gray-500 dark:text-gray-400">
                    Belum ada data Staff Kependidikan
                </div>
            @endforelse

        </div>

        {{-- PAGINATION --}}
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

    {{-- FOOTER --}}
    @include('layouts.footer')

</body>
</html>
