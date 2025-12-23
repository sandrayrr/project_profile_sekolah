<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agenda Sekolah - SMK Negeri 1 Kawali</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

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
                        primary: "#3b82f6",
                        "background-light": "#f3f4f6",
                        "background-dark": "#111827",
                        "card-light": "#ffffff",
                        "card-dark": "#1f2937",
                        "border-light": "#e5e7eb",
                        "border-dark": "#374151",
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                    },
                },
            },
        };
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark
           text-gray-800 dark:text-gray-100
           font-sans transition-colors duration-200 min-h-screen flex flex-col">

    {{-- NAVBAR --}}
    @include('layouts.navbar')

    {{-- HEADER --}}
    <section
        class="bg-card-light dark:bg-card-dark
               py-14 border-b
               border-border-light dark:border-border-dark">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">
                Agenda Sekolah
            </h1>
            <p class="text-gray-600 dark:text-gray-400">
                Informasi kegiatan dan jadwal penting SMK Negeri 1 Kawali
            </p>
        </div>
    </section>

    {{-- CONTENT --}}
    <main class="flex-grow max-w-6xl mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse ($agenda as $item)
                <div
                    class="bg-card-light dark:bg-card-dark
                           rounded-xl shadow-sm
                           border border-border-light dark:border-border-dark
                           hover:shadow-md transition p-6">

                    {{-- ICON + JUDUL --}}
                    <div class="flex items-center gap-3 mb-3">
                        <span class="material-icons text-primary text-3xl">
                            {{ $item->ikon ?? 'event' }}
                        </span>

                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            {{ $item->judul }}
                        </h3>
                    </div>

                    {{-- DESKRIPSI --}}
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                        {{ $item->deskripsi }}
                    </p>

                    {{-- TANGGAL & WAKTU --}}
                    <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
                        <div class="flex items-center gap-2">
                            <i class="fa-regular fa-calendar"></i>
                            {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="fa-regular fa-clock"></i>
                            {{ $item->waktu }}
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-3 text-center text-gray-500 dark:text-gray-400 py-16">
                    Belum ada agenda sekolah
                </div>
            @endforelse

        </div>
    </main>

    {{-- FOOTER --}}
    @include('layouts.footer')

</body>
</html>
