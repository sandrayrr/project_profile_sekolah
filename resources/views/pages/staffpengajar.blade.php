<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Staff Pengajar - SMK Negeri 1 Kawali</title>
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
<<<<<<< Updated upstream

<body
  class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark font-sans transition-colors duration-300">
  @include('layouts.navbar')
 
  <div class="bg-gray-100 dark:bg-gray-800 py-12 border-b border-border-light dark:border-border-dark">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold font-display text-gray-800 dark:text-white">Staff Pengajar</h2>
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
              <span class="ml-1 text-gray-700 dark:text-gray-200 md:ml-2">Staff Pengajar</span>
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
        Menampilkan {{ $staffPengajars->firstItem() ?? 0 }}-{{ $staffPengajars->lastItem() ?? 0 }} dari {{ $staffPengajars->total() }} Pengajar
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
      @forelse($staffPengajars as $staff)
      <div
        class="bg-white dark:bg-surface-dark rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 border border-border-light dark:border-border-dark group">
        <div class="bg-gray-200 dark:bg-gray-700 h-64 w-full flex items-center justify-center relative overflow-hidden">
          @if($staff->foto)
          <img src="{{ asset('storage/' . $staff->foto) }}" alt="{{ $staff->nama }}" class="w-full h-full object-cover">
          @else
          <span class="text-gray-400 dark:text-gray-500 font-medium z-10">Foto</span>
          <div
            class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent">
          </div>
          @endif
        </div>
        <div class="p-5 text-center">
          <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-1 group-hover:text-primary transition-colors">
            {{ $staff->nama }}</h3>
          <p class="text-sm text-gray-500 dark:text-gray-400">{{ $staff->mata_pelajaran }}</p>
        </div>
      </div>
      @empty
      <div class="col-span-full text-center py-12">
        <p class="text-gray-500 dark:text-gray-400">Belum ada data staff pengajar.</p>
      </div>
      @endforelse
    </div>
    <div class="flex justify-center mt-12">
      {{ $staffPengajars->links() }}
    </div>
  </main>
  @include('layouts.footer')
</body>

</html>
=======
<body class="bg-background-light bg-background-dark text-text-light text-text-dark font-sans transition-colors duration-300">
<header class="border-b border-border-light border-border-dark bg-white bg-gray-900">
<div class="container mx-auto px-4 py-4">
<div class="flex flex-col md:flex-row justify-between items-center gap-4">
<div class="flex items-center gap-3">
<img alt="Logo SMK Negeri 1 Kawali" class="h-12 w-12 object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0aPzUwDyS0w52glyFESrA_OEpB_wdftu2gGw-cuQ1ZXjkpTwmmdYrdK6pyhOi51mwm_U6hRdLiAbrHh2owpg59tTzslQ5wQTmAwNptA31zpNgEb9UvsjEneYAmcnKZKfZ1CPgYP6zmiop_KNRJjBEiKfHZtYHU2AKcrb4GB3o8K_1HIO0p5gn-gJ32jj9q3t_cQIS4QPmW2Jl_k29LghICQ9Qt7RxmCpMAzkwB2qRoY5lfspsKzsEpKB94-k1PasiNbsWTzWOUCLG"/>
<h1 class="text-xl md:text-2xl font-bold font-display text-gray-900 text-white">SMK Negeri 1 Kawali</h1>
</div>
<div class="flex flex-col sm:flex-row items-center gap-6 text-sm text-gray-600 text-gray-300">
<div class="flex items-center gap-2">
<div class="bg-gray-100 bg-gray-800 p-2 rounded-full">
<i class="fas fa-phone-alt text-primary"></i>
</div>
<div class="flex flex-col">
<span class="text-xs font-semibold uppercase text-gray-400 text-gray-500">Telepon</span>
<span>(0265) 791727</span>
</div>
</div>
<div class="flex items-center gap-2">
<div class="bg-gray-100 bg-gray-800 p-2 rounded-full">
<i class="fas fa-envelope text-primary"></i>
</div>
<div class="flex flex-col">
<span class="text-xs font-semibold uppercase text-gray-400 text-gray-500">Email</span>
<span>info@smkn1kawali.sch.id</span>
</div>
</div>
</div>
<div class="hidden lg:flex items-center gap-3 border-l pl-6 border-border-light border-border-dark">
<a class="text-gray-500 hover:text-[#25D366] text-gray-400 hover:text-[#25D366] transition-colors" href="#"><i class="fab fa-whatsapp text-lg"></i></a>
<a class="text-gray-500 hover:text-[#1877F2] text-gray-400 hover:text-[#1877F2] transition-colors" href="#"><i class="fab fa-facebook text-lg"></i></a>
<a class="text-gray-500 hover:text-[#1DA1F2] text-gray-400 hover:text-[#1DA1F2] transition-colors" href="#"><i class="fab fa-twitter text-lg"></i></a>
<a class="text-gray-500 hover:text-[#E1306C] text-gray-400 hover:text-[#E1306C] transition-colors" href="#"><i class="fab fa-instagram text-lg"></i></a>
<a class="text-gray-500 hover:text-[#FF0000] text-gray-400 hover:text-[#FF0000] transition-colors" href="#"><i class="fab fa-youtube text-lg"></i></a>
<a class="text-gray-500 hover:text-black text-gray-400 hover:text-white transition-colors" href="#"><i class="fab fa-tiktok text-lg"></i></a>
</div>
</div>
</div>
</header>
<nav class="bg-surface-light bg-surface-dark border-b border-border-light border-border-dark sticky top-0 z-50">
<div class="container mx-auto px-4">
<div class="flex flex-wrap justify-between items-center">
<ul class="hidden md:flex flex-wrap items-center gap-6 text-sm font-medium py-3 text-gray-700 text-gray-200">
<li><a class="hover:text-primary transition-colors" href="#">Beranda</a></li>
<li class="group relative cursor-pointer">
<span class="flex items-center hover:text-primary transition-colors">Profil <i class="fas fa-chevron-down ml-1 text-xs"></i></span>
</li>
<li class="group relative cursor-pointer">
<span class="flex items-center hover:text-primary transition-colors">Jurusan <i class="fas fa-chevron-down ml-1 text-xs"></i></span>
</li>
<li><a class="hover:text-primary transition-colors" href="#">Artikel</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Galeri</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Prestasi</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Link</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Fasilitas</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Akreditas</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Ekstrakurikuler</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Agenda</a></li>
</ul>
<button class="md:hidden p-2 text-gray-600 text-gray-300">
<i class="fas fa-bars text-xl"></i>
</button>
<a class="bg-primary hover:bg-blue-700 text-white px-5 py-2 rounded-full text-sm font-medium transition-colors my-2 md:my-0" href="#">Login</a>
</div>
</div>
</nav>
<div class="bg-gray-100 bg-gray-800 py-12 border-b border-border-light border-border-dark">
<div class="container mx-auto px-4">
<h2 class="text-3xl font-bold font-display text-gray-800 text-white">Staff Pengajar</h2>
<nav aria-label="Breadcrumb" class="flex mt-2 text-sm text-gray-500 text-gray-400">
<ol class="inline-flex items-center space-x-1 md:space-x-3">
<li class="inline-flex items-center">
<a class="inline-flex items-center hover:text-primary hover:text-white" href="#">
                            Beranda
                        </a>
</li>
<li>
<div class="flex items-center">
<i class="fas fa-chevron-right text-xs mx-2"></i>
<span class="ml-1 text-gray-700 text-gray-200 md:ml-2">Staff Pengajar</span>
</div>
</li>
</ol>
</nav>
</div>
</div>
<main class="container mx-auto px-4 py-10 min-h-screen">
<div class="flex justify-between items-center mb-8">
<button class="flex items-center gap-2 bg-gray-200 bg-gray-700 hover:bg-gray-300 hover:bg-gray-600 text-gray-700 text-gray-200 px-4 py-2 rounded-lg transition-colors shadow-sm">
<i class="fas fa-sliders-h"></i>
<span>Filter</span>
</button>
<div class="text-sm text-gray-500 text-gray-400">
                Menampilkan 1-12 dari 48 Pengajar
            </div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
<div class="bg-white bg-surface-dark rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 border border-border-light border-border-dark group">
<div class="bg-gray-200 bg-gray-700 h-64 w-full flex items-center justify-center relative overflow-hidden">
<span class="text-gray-400 text-gray-500 font-medium z-10">Foto</span>
<div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent"></div>
</div>
<div class="p-5 text-center">
<h3 class="font-bold text-lg text-gray-900 text-white mb-1 group-hover:text-primary transition-colors">Drs. H. Budi Santoso</h3>
<p class="text-sm text-gray-500 text-gray-400">Bahasa Indonesia</p>
</div>
</div>
<div class="bg-white bg-surface-dark rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 border border-border-light border-border-dark group">
<div class="bg-gray-200 bg-gray-700 h-64 w-full flex items-center justify-center relative overflow-hidden">
<span class="text-gray-400 text-gray-500 font-medium z-10">Foto</span>
<div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent"></div>
</div>
<div class="p-5 text-center">
<h3 class="font-bold text-lg text-gray-900 text-white mb-1 group-hover:text-primary transition-colors">Siti Aminah, S.Pd</h3>
<p class="text-sm text-gray-500 text-gray-400">Matematika</p>
</div>
</div>
<div class="bg-white bg-surface-dark rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 border border-border-light border-border-dark group">
<div class="bg-gray-200 bg-gray-700 h-64 w-full flex items-center justify-center relative overflow-hidden">
<span class="text-gray-400 text-gray-500 font-medium z-10">Foto</span>
<div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent"></div>
</div>
<div class="p-5 text-center">
<h3 class="font-bold text-lg text-gray-900 text-white mb-1 group-hover:text-primary transition-colors">Rahmat Hidayat, M.Kom</h3>
<p class="text-sm text-gray-500 text-gray-400">Teknik Komputer &amp; Jaringan</p>
</div>
</div>
<div class="bg-white bg-surface-dark rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 border border-border-light border-border-dark group">
<div class="bg-gray-200 bg-gray-700 h-64 w-full flex items-center justify-center relative overflow-hidden">
<span class="text-gray-400 text-gray-500 font-medium z-10">Foto</span>
<div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent"></div>
</div>
<div class="p-5 text-center">
<h3 class="font-bold text-lg text-gray-900 text-white mb-1 group-hover:text-primary transition-colors">Dewi Sartika, S.Pd</h3>
<p class="text-sm text-gray-500 text-gray-400">Bahasa Inggris</p>
</div>
</div>
<div class="bg-white bg-surface-dark rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 border border-border-light border-border-dark group">
<div class="bg-gray-200 bg-gray-700 h-64 w-full flex items-center justify-center relative overflow-hidden">
<span class="text-gray-400 text-gray-500 font-medium z-10">Foto</span>
<div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent"></div>
</div>
<div class="p-5 text-center">
<h3 class="font-bold text-lg text-gray-900 text-white mb-1 group-hover:text-primary transition-colors">Ahmad Fauzi, S.T</h3>
<p class="text-sm text-gray-500 text-gray-400">Teknik Kendaraan Ringan</p>
</div>
</div>
<div class="bg-white bg-surface-dark rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 border border-border-light border-border-dark group">
<div class="bg-gray-200 bg-gray-700 h-64 w-full flex items-center justify-center relative overflow-hidden">
<span class="text-gray-400 text-gray-500 font-medium z-10">Foto</span>
<div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent"></div>
</div>
<div class="p-5 text-center">
<h3 class="font-bold text-lg text-gray-900 text-white mb-1 group-hover:text-primary transition-colors">Linda Kusuma, S.Pd</h3>
<p class="text-sm text-gray-500 text-gray-400">Seni Budaya</p>
</div>
</div>
<div class="bg-white bg-surface-dark rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 border border-border-light border-border-dark group">
<div class="bg-gray-200 bg-gray-700 h-64 w-full flex items-center justify-center relative overflow-hidden">
<span class="text-gray-400 text-gray-500 font-medium z-10">Foto</span>
<div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent"></div>
</div>
<div class="p-5 text-center">
<h3 class="font-bold text-lg text-gray-900 text-white mb-1 group-hover:text-primary transition-colors">Ir. Bambang Wijaya</h3>
<p class="text-sm text-gray-500 text-gray-400">Fisika</p>
</div>
</div>
<div class="bg-white bg-surface-dark rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 border border-border-light border-border-dark group">
<div class="bg-gray-200 bg-gray-700 h-64 w-full flex items-center justify-center relative overflow-hidden">
<span class="text-gray-400 text-gray-500 font-medium z-10">Foto</span>
<div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-400 via-gray-100 to-transparent"></div>
</div>
<div class="p-5 text-center">
<h3 class="font-bold text-lg text-gray-900 text-white mb-1 group-hover:text-primary transition-colors">Nurul Hidayati, S.Ag</h3>
<p class="text-sm text-gray-500 text-gray-400">Pendidikan Agama Islam</p>
</div>
</div>
</div>
<div class="flex justify-center mt-12">
<nav class="inline-flex rounded-md shadow-sm">
<a class="px-4 py-2 text-sm font-medium text-gray-500 bg-white bg-gray-800 border border-gray-300 border-gray-600 rounded-l-lg hover:bg-gray-100 hover:bg-gray-700" href="#">
                   Previous
                </a>
<a class="px-4 py-2 text-sm font-medium text-white bg-primary border border-primary hover:bg-blue-700" href="#">
                    1
                </a>
<a class="px-4 py-2 text-sm font-medium text-gray-700 text-gray-200 bg-white bg-gray-800 border-t border-b border-r border-gray-300 border-gray-600 hover:bg-gray-100 hover:bg-gray-700" href="#">
                    2
                </a>
<a class="px-4 py-2 text-sm font-medium text-gray-700 text-gray-200 bg-white bg-gray-800 border-t border-b border-r border-gray-300 border-gray-600 hover:bg-gray-100 hover:bg-gray-700" href="#">
                    3
                </a>
<span class="px-4 py-2 text-sm font-medium text-gray-700 text-gray-200 bg-white bg-gray-800 border-t border-b border-r border-gray-300 border-gray-600">
                    ...
                </span>
<a class="px-4 py-2 text-sm font-medium text-gray-700 text-gray-200 bg-white bg-gray-800 border-t border-b border-r border-gray-300 border-gray-600 rounded-r-lg hover:bg-gray-100 hover:bg-gray-700" href="#">
                    Next
                </a>
</nav>
</div>
</main>
<footer class="bg-gray-100 bg-gray-900 pt-16 pb-8 border-t border-border-light border-border-dark">
<div class="container mx-auto px-4">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
<div class="lg:col-span-1">
<div class="flex items-center gap-3 mb-4">
<img alt="Logo Footer" class="h-12 w-12 object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOpVIpJLA41wUU-1s445Nj1nndZSwSgPPmcYGB30u_N8Ss2kK_ldQcNTXZK5fD2Vpk0FE2LUgrsTiaxKdvDeB_HhKzRbjkexJtyEFEfNMEDsLhW9arQTXgomv6eMmBhUb0poW9_PBoPSq5jXIKjIt3zRWyC2DkFUA-0zeE4BJbRUJcoRelTd48--9RbuGSXWNa4sWDTqcowP9ELl2BacqLHRbxrhWXk5zwcbfvlKxJk4qiQ2adhxi9gN2HCSOZ2capUa9qXK4ETl92"/>
<h3 class="text-lg font-bold font-display text-gray-900 text-white">SMK Negeri 1 Kawali</h3>
</div>
<p class="text-gray-600 text-gray-400 text-sm leading-relaxed mb-6">
                        Mewujudkan lulusan yang berakhlak mulia, kompeten, dan siap bersaing di dunia kerja maupun wirausaha.
                    </p>
<div class="flex flex-col gap-1 text-sm text-gray-600 text-gray-400">
<h4 class="font-bold text-gray-900 text-white mb-2">Sosial Media</h4>
<div class="flex gap-4">
<a class="text-gray-500 hover:text-primary text-gray-400 hover:text-white transition-colors" href="#"><i class="fab fa-whatsapp text-xl"></i></a>
<a class="text-gray-500 hover:text-primary text-gray-400 hover:text-white transition-colors" href="#"><i class="fab fa-facebook text-xl"></i></a>
<a class="text-gray-500 hover:text-primary text-gray-400 hover:text-white transition-colors" href="#"><i class="fab fa-twitter text-xl"></i></a>
<a class="text-gray-500 hover:text-primary text-gray-400 hover:text-white transition-colors" href="#"><i class="fab fa-instagram text-xl"></i></a>
<a class="text-gray-500 hover:text-primary text-gray-400 hover:text-white transition-colors" href="#"><i class="fab fa-youtube text-xl"></i></a>
<a class="text-gray-500 hover:text-primary text-gray-400 hover:text-white transition-colors" href="#"><i class="fab fa-tiktok text-xl"></i></a>
</div>
</div>
</div>
<div class="lg:col-span-2 flex flex-col sm:flex-row justify-between lg:pl-10 gap-8">
<div>
<h4 class="font-bold text-gray-900 text-white mb-4">Tautan Cepat</h4>
<ul class="space-y-2 text-sm text-gray-600 text-gray-400">
<li><a class="hover:text-primary transition-colors" href="#">Profil Sekolah</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Visi &amp; Misi</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Staff Pengajar</a></li>
<li><a class="hover:text-primary transition-colors" href="#">PPDB</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-gray-900 text-white mb-4">Akademik</h4>
<ul class="space-y-2 text-sm text-gray-600 text-gray-400">
<li><a class="hover:text-primary transition-colors" href="#">Kurikulum</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Kalender Pendidikan</a></li>
<li><a class="hover:text-primary transition-colors" href="#">E-Learning</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Jadwal Pelajaran</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-gray-900 text-white mb-4">Jurusan</h4>
<ul class="space-y-2 text-sm text-gray-600 text-gray-400">
<li><a class="hover:text-primary transition-colors" href="#">TKJ</a></li>
<li><a class="hover:text-primary transition-colors" href="#">RPL</a></li>
<li><a class="hover:text-primary transition-colors" href="#">TKR</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Akuntansi</a></li>
</ul>
</div>
</div>
<div class="lg:col-span-1 lg:text-right">
<h4 class="font-bold text-gray-900 text-white mb-4">Konten Footer</h4>
<p class="text-sm text-gray-600 text-gray-400 mb-2">
                        Jl. Talagasari No. 35<br/>
                        Kawali, Kabupaten Ciamis<br/>
                        Jawa Barat 46253
                    </p>
<p class="text-sm text-gray-600 text-gray-400">
                        © 2023 SMK Negeri 1 Kawali.<br/>All rights reserved.
                    </p>
</div>
</div>
</div>
</footer>

</body></html>
>>>>>>> Stashed changes
