<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Pengajar - SMK Negeri 1 Kawali</title>

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
                Staff Pengajar
            </h1>
            <p class="text-gray-100 text-lg md:text-xl max-w-2xl">
                Daftar tenaga pendidik profesional SMK Negeri 1 Kawali.
            </p>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-12 lg:py-16 min-h-screen">

        <!-- INFO -->
        <div class="flex justify-end mb-8 text-sm text-gray-500 dark:text-gray-400">
            Menampilkan {{ $staffPengajars->firstItem() ?? 0 }} –
            {{ $staffPengajars->lastItem() ?? 0 }}
            dari {{ $staffPengajars->total() }} Pengajar
        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">

            @forelse($staffPengajars as $staff)
            <div
                class="staff-card bg-card-light dark:bg-card-dark
                       rounded-2xl shadow-lg border border-border-light dark:border-border-dark
                       overflow-hidden animate-fade-in group">

                <!-- FOTO -->
                <div class="aspect-[3/4] bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
                    @if($staff->foto)
                        <img
                            src="{{ asset('storage/' . $staff->foto) }}"
                            alt="{{ $staff->nama }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                            <span class="material-icons text-6xl">person</span>
                        </div>
                    @endif

                    <!-- OVERLAY -->
                    <div class="overlay absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                        <div class="text-white">
                            <p class="font-semibold">{{ $staff->nama }}</p>
                            <p class="text-sm opacity-90">{{ $staff->mata_pelajaran }}</p>
                        </div>
                    </div>
                </div>

                <!-- BODY -->
                <div class="p-5 text-center">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1">
                        {{ $staff->nama }}
                    </h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $staff->mata_pelajaran }}
                    </p>
                </div>

            </div>
            @empty
            <div class="col-span-full flex flex-col items-center justify-center text-center py-20">
                <div class="w-24 h-24 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mb-6">
                    <i class="material-icons text-5xl text-gray-400">groups</i>
                </div>
                <h3 class="text-2xl font-bold text-gray-700 dark:text-gray-300 mb-2">
                    Belum Ada Data Pengajar
                </h3>
                <p class="text-gray-500 dark:text-gray-400 max-w-md">
                    Data staff pengajar belum tersedia saat ini.
                </p>
            </div>
            @endforelse

        </div>

        <!-- PAGINATION -->
        @if($staffPengajars->hasPages())
        <div class="flex justify-center mt-10">
            {{ $staffPengajars->links() }}
        </div>
        @endif

    </main>

    @include('layouts.footer')

</body>
</html>
