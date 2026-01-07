<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fasilitas - SMK Negeri 1 Kawali</title>

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
</head>

<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

@include('layouts.navbar')

<!-- HEADER -->
<div class="relative bg-gradient-to-br from-primary to-gray-600 dark:from-gray-700 dark:to-gray-900 py-20">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="relative container mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-3">
            Fasilitas
        </h1>
        <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
            Informasi lengkap mengenai fasilitas dan sarana penunjang kegiatan belajar mengajar di SMK Negeri 1 Kawali.
        </p>
    </div>
</div>

<main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

    @if(request('cari'))
        <div class="mb-6 bg-gray-50 dark:bg-gray-900/20 border-l-4 border-gray-500 p-4 rounded">
            Menampilkan hasil pencarian:
            <strong>{{ request('cari') }}</strong>
        </div>
    @endif

    <!-- GRID CARD -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">

        @forelse ($fasilitas as $item)
            <div
                class="fasilitas-card bg-card-light dark:bg-card-dark 
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark 
                       overflow-hidden animate-fade-in group">

                <!-- FOTO -->
                <div class="fasilitas-image-container aspect-[4/3] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    @if ($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}"
                             alt="{{ $item->judul }}"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                            <span class="material-icons text-6xl">meeting_room</span>
                        </div>
                    @endif
                </div>

                <!-- BODY -->
                <div class="p-5 flex flex-col flex-grow">
                    <div class="border-t pt-4 flex-grow">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white truncate">
                            {{ $item->judul }}
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <i class="fas fa-building mr-2"></i>
                            <span>Fasilitas Sekolah</span>
                        </div>
                    </div>
                </div>

            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500 dark:text-gray-400">
                    Belum ada data fasilitas yang tersedia.
                </p>
            </div>
        @endforelse

    </div>

    <!-- PAGINATION -->
    <div class="flex justify-center mt-10">
        {{ $fasilitas->links() }}
    </div>

</main>

@include('layouts.footer')

</body>
</html>
