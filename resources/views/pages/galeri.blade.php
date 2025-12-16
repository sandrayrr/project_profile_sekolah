<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri - SMK Negeri 1 Kawali</title>

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
           font-sans transition-colors duration-200">

    <!-- NAVBAR -->
    <header class="bg-card-light dark:bg-card-dark shadow-sm border-b border-border-light dark:border-border-dark">
        @include('layouts.navbar')
    </header>

    <!-- HEADER PAGE -->
    <div class="bg-card-light dark:bg-card-dark py-14 border-b border-border-light dark:border-border-dark">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                Galeri
            </h1>
            <p class="text-gray-600 dark:text-gray-400 mt-2">
                Dokumentasi kegiatan SMK Negeri 1 Kawali
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-10 lg:py-14">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse ($galeri as $item)
            <div
                class="bg-card-light dark:bg-card-dark 
                       rounded-xl shadow-sm border border-border-light dark:border-border-dark 
                       overflow-hidden group hover:shadow-md transition-shadow">

                <!-- FOTO -->
                <div class="aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    @if ($item->foto)
                        <img
                            src="{{ asset('storage/' . $item->foto) }}"
                            alt="{{ $item->judul }}"
                            class="absolute inset-0 w-full h-full object-cover 
                                   transition-transform duration-300 group-hover:scale-105">
                    @else
                        <div class="w-full h-full flex items-center justify-center">
                            <span class="material-icons text-5xl text-gray-400 dark:text-gray-500">
                                image
                            </span>
                        </div>
                    @endif

                    <!-- OVERLAY -->
                    <div
                        class="absolute inset-0 bg-black/0 
                               group-hover:bg-black/20 
                               transition-colors duration-300 
                               flex items-center justify-center">

                        <span
                            class="text-white font-semibold opacity-0 
                                   group-hover:opacity-100 transition">
                            Lihat Foto
                        </span>
                    </div>
                </div>

                <!-- JUDUL -->
                <div class="p-4">
                    <h3
                        class="text-lg font-semibold 
                               text-gray-900 dark:text-white 
                               text-center">
                        {{ $item->judul }}
                    </h3>
                </div>

            </div>
            @empty
                <div class="col-span-3 text-center text-gray-500 dark:text-gray-400 py-16">
                    Belum ada data galeri
                </div>
            @endforelse

        </div>

        <!-- PAGINATION -->
        <div class="mt-12 flex justify-center">
            {{ $galeri->links() }}
        </div>

    </main>

    <!-- FOOTER -->
    @include('layouts.footer')

</body>

</html>
