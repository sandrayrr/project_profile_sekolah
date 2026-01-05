<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Tenaga Pengajar - SMK Negeri 1 Kawali</title>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Playfair+Display:wght@700&amp;display=swap"
    rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#1a56db", // Using a professional blue often seen in education
            secondary: "#f3f4f6",
            "background-light": "#ffffff",
            "background-dark": "#111827",
            "surface-light": "#f9fafb",
            "surface-dark": "#1f2937",
            "text-light": "#1f2937",
            "text-dark": "#f9fafb",
            "border-light": "#e5e7eb",
            "border-dark": "#374151",
          },
          fontFamily: {
            sans: ["Inter", "sans-serif"],
            display: ["Playfair Display", "serif"],
          },
          borderRadius: {
            DEFAULT: "0.5rem",
            lg: "0.75rem",
            xl: "1rem",
          },
        },
      },
    };
  </script>
</head>

<body
  class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark font-sans transition-colors duration-300">
  @include('layouts.navbar')

  <div class="bg-gray-100 dark:bg-gray-800 py-12 border-b border-border-light dark:border-border-dark">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold font-display text-gray-800 dark:text-white">Tenaga Pengajar</h2>
      <nav aria-label="Breadcrumb" class="flex mt-2 text-sm text-gray-500 dark:text-gray-400">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center">
            <a class="inline-flex items-center hover:text-primary dark:hover:text-white" href="#">
              Beranda
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <i class="fas fa-chevron-right text-xs mx-2"></i>
              <span class="ml-1 text-gray-700 dark:text-gray-200 md:ml-2">Tenaga Pengajar</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <main class="container mx-auto px-4 py-10 min-h-screen">
    <div class="flex justify-between items-center mb-8">
      <button
        class="flex items-center gap-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 px-4 py-2 rounded-lg transition-colors shadow-sm">
        <i class="fas fa-sliders-h"></i>
        <span>Filter</span>
      </button>
      <div class="text-sm text-gray-500 dark:text-gray-400">
        Menampilkan {{ $tenaga->firstItem() ?? 0 }}-{{ $tenaga->lastItem() ?? 0 }} dari
        {{ $tenaga->total() }} Tenaga Kependidikan
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
      @forelse($tenaga as $person)
        <div
          class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 border border-gray-200 group">
          <div class="bg-gray-200 h-64 w-full flex items-center justify-center relative overflow-hidden">
            @if($person->foto)
              <img src="{{ asset('storage/' . $person->foto) }}" alt="{{ $person->nama }}" class="w-full h-full object-cover">
            @else
              <span class="text-gray-400 font-medium z-10">Foto</span>
              <div
                class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent">
              </div>
            @endif
          </div>
          <div class="p-5 text-center">
            <h3 class="font-bold text-lg text-gray-900 mb-1 group-hover:text-primary transition-colors">
              {{ $person->nama }}
            </h3>
            <p class="text-sm text-gray-500">{{ $person->jabatan }}</p>
          </div>
        </div>
      @empty
        <div class="col-span-full text-center py-12">
          <p class="text-gray-500">Belum ada data tenaga kependidikan.</p>
        </div>
      @endforelse
    </div>
    <div class="flex justify-center mt-12">
      {{ $tenaga->links() }}
    </div>
  </main>
  @include('layouts.footer')
</body>

</html>