<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prestasi - SMK Negeri 1 Kawali</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#1d4ed8",
                        "background-light": "#f8fafc",
                        "background-dark": "#0f172a",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1e293b",
                        "border-light": "#e2e8f0",
                        "border-dark": "#334155",
                    },
                    fontFamily: {
                        body: ["Inter", "sans-serif"],
                    },
                },
            },
        };
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200 font-body">

    @include('layouts.navbar')

    {{-- HEADER --}}
    <div class="bg-slate-200 dark:bg-slate-800 py-12 px-6">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">
                Prestasi
            </h1>
        </div>
    </div>

    {{-- SEARCH --}}
    <div class="max-w-4xl mx-auto mt-10 px-4">
        <form action="{{ route('prestasi') }}" method="GET"
            class="flex shadow-md rounded-lg overflow-hidden">
            <input
                name="cari"
                value="{{ request('cari') }}"
                class="flex-grow px-6 py-4 bg-slate-50 dark:bg-slate-800 border-none focus:ring-2 focus:ring-primary"
                placeholder="Cari Prestasi..."
                type="text">
            <button
                class="bg-slate-300 dark:bg-slate-700 px-8 py-4 font-medium hover:bg-slate-400 dark:hover:bg-slate-600">
                Cari
            </button>
        </form>
    </div>

    {{-- CONTENT --}}
    <main class="max-w-7xl mx-auto px-4 py-12 min-h-screen">

        {{-- GRID CARD --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">

            @forelse ($prestasi as $item)
                <div
                    class="group bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-border-light dark:border-border-dark overflow-hidden flex flex-col hover:-translate-y-1 transition">

                    {{-- FOTO --}}
                    <div class="aspect-[4/3] overflow-hidden bg-slate-200 dark:bg-slate-800">
                        @if ($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}"
                                alt="{{ $item->judul }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-500">
                                <i class="fa-regular fa-image text-4xl opacity-50"></i>
                            </div>
                        @endif
                    </div>

                    {{-- BODY --}}
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex justify-end mb-3">
                            <span class="text-xs bg-slate-100 dark:bg-slate-800 px-3 py-1 rounded-full">
                                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                            </span>
                        </div>

                        <div class="border-t pt-4 flex-grow">
                            <h3 class="text-lg font-bold mb-1">
                                {{ $item->judul }}
                            </h3>
                            <p class="text-primary text-sm">{{ $item->kelas }}</p>
                        </div>

                        <div class="mt-auto flex justify-end">
                            <a href="#"
                                class="inline-flex items-center gap-2 bg-slate-200 dark:bg-slate-700 text-xs font-semibold py-2 px-4 rounded-full">
                                Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center text-slate-500">
                    Belum ada data prestasi
                </div>
            @endforelse

        </div>

        {{-- PAGINATION (DI LUAR LOOP & GRID) --}}
        <div class="flex justify-center mt-10">
            {{ $prestasi->links() }}
        </div>

    </main>

    @include('layouts.footer')

    {{-- DARK MODE BUTTON --}}
    <button
        id="darkToggle"
        class="fixed bottom-6 right-6 bg-primary text-white p-3 rounded-full shadow-lg z-50">
        <i class="fa-solid fa-moon dark:hidden"></i>
        <i class="fa-solid fa-sun hidden dark:block"></i>
    </button>

    <script>
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
    </script>

</body>
</html>
