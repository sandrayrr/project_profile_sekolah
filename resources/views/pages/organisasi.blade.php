<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Organisasi - SMK Negeri 1 Kawali</title>

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
            primary: "#2563eb", // Warna biru
            "primary-light": "#dbeafe",
            "primary-dark": "#1e40af",
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
            'float': 'float 3s ease-in-out infinite',
            'zoom-in': 'zoomIn 0.3s ease-out',
            'slide-up': 'slideUp 0.5s ease-out',
            'bounce-in': 'bounceIn 0.6s ease-out',
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: '0', transform: 'translateY(10px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
            float: {
              '0%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-10px)' },
              '100%': { transform: 'translateY(0px)' },
            },
            zoomIn: {
              '0%': { opacity: '0', transform: 'scale(0.8)' },
              '100%': { opacity: '1', transform: 'scale(1)' },
            },
            slideUp: {
              '0%': { opacity: '0', transform: 'translateY(30px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
            bounceIn: {
              '0%': { opacity: '0', transform: 'scale(0.3)' },
              '50%': { opacity: '1', transform: 'scale(1.05)' },
              '70%': { transform: 'scale(0.9)' },
              '100%': { opacity: '1', transform: 'scale(1)' },
            }
          }
        },
      },
    };
  </script>
  <style>
    /* Header pattern overlay */
    .header-pattern {
      background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    /* Card hover effect */
    .org-card {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .org-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    /* Profile hover effect */
    .profile-card {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .profile-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    /* Smooth scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }

    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    .dark ::-webkit-scrollbar-track {
      background: #374151;
    }

    .dark ::-webkit-scrollbar-thumb {
      background: #6b7280;
    }

    /* Custom styles for better organization display */
    .org-section {
      scroll-margin-top: 100px;
    }

    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 1.5rem;
    }

    @media (max-width: 640px) {
      .team-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    
    /* Badge animation */
    .badge-pulse {
      animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
      0% {
        box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7);
      }
      70% {
        box-shadow: 0 0 0 10px rgba(59, 130, 246, 0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(59, 130, 246, 0);
      }
    }
    
    /* Gradient text */
    .gradient-text {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
  </style>
</head>

<body
  class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-100 font-body transition-colors duration-300">

 @include ('layouts.navbar')

  <!-- HEADER ORGANISASI -->
  <div class="relative bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 border-b border-blue-100 dark:border-gray-700 pb-20 pt-20 overflow-hidden">
    <!-- Background Decor (Blue blobs) -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
      <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-100/50 dark:bg-blue-900/20 rounded-full blur-3xl"></div>
      <div class="absolute top-1/2 -left-24 w-72 h-72 bg-cyan-100/50 dark:bg-cyan-900/20 rounded-full blur-3xl"></div>
      <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-purple-100/30 dark:bg-purple-900/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative container mx-auto px-4 z-10 text-center">
      <div
        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white dark:bg-gray-800 text-primary text-xs font-bold mb-6 border border-blue-200 dark:border-blue-800 badge-pulse">
        <i class="fa-solid fa-users"></i> Kegiatan Siswa
      </div>
      <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 dark:text-white mb-6 tracking-tight">
        Organisasi <span class="gradient-text">Siswa</span>
      </h1>
      <p class="text-slate-600 dark:text-slate-300 text-lg max-w-2xl mx-auto mb-10">
        Struktur dan kegiatan organisasi siswa SMK Negeri 1 Kawali.
      </p>

      <!-- Search Bar -->
      <div class="max-w-xl mx-auto relative group">
        <form action="#" method="GET" class="relative">
          <input
            name="cari"
            value=""
            type="text" 
            placeholder="Cari organisasi atau anggota..."
            class="w-full pl-12 pr-4 py-4 rounded-xl border border-blue-200 dark:border-gray-600 bg-white dark:bg-gray-800 text-slate-900 dark:text-white focus:ring-2 focus:ring-primary focus:border-transparent outline-none shadow-lg transition group-hover:shadow-xl">
          <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
        </form>
      </div>
    </div>
  </div>

  <!-- CONTENT -->
  <main class="container mx-auto px-4 py-12 lg:py-16 space-y-24 min-h-screen">

    <!-- ================= MPK ================= -->
    <section id="mpk" class="space-y-16 org-section">

      <!-- DESKRIPSI -->
       <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center animate-fade-in" style="animation-delay: 0.3s">
        <div class="flex justify-center">
          <div class="w-64 h-64 bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark flex items-center justify-center org-card overflow-hidden">
            <img src="logo_mpk-removebg-preview.png" alt="Logo MPK"class="w-full h-full object-contain p-6">
          </div>
        </div>

  <div class="md:col-span-2">
    <h2 class="text-3xl font-bold mb-4 text-gray-900 dark:text-white">MPK</h2>
    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
      Majelis Perwakilan Kelas (MPK) bertugas mengawasi kinerja OSIS serta menampung aspirasi siswa.
    </p>
  </div>

</div>

      <!-- VISI MISI -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div
          class="org-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-8 text-center animate-fade-in"
          style="animation-delay: 0.4s">
          <div
            class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center">
            <i class="fas fa-eye text-primary text-2xl"></i>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Visi</h3>
          <p class="text-gray-600 dark:text-gray-300">
            Mewujudkan MPK yang aktif, aspiratif, dan bertanggung jawab dalam menjembatani suara siswa demi terciptanya
            lingkungan sekolah yang harmonis, demokratis, dan berprestasi.
          </p>
        </div>
        <div
          class="org-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-8 text-center animate-fade-in"
          style="animation-delay: 0.5s">
          <div
            class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center">
            <i class="fas fa-rocket text-primary text-2xl"></i>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Misi</h3>
          <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-left">
            <li>1. Mendorong siswa untuk aktif dalam kegiatan akademik maupun non-akademik, demi peningkatan prestasi
              dan citra sekolah.</li>
            <li>2. Menumbuhkan semangat partisipatif dan kepedulian siswa terhadap kegiatan sekolah melalui diskusi
              terbuka dan musyawarah kelas.</li>
            <li>3. Menjalin hubungan yang harmonis antara MPK, OSIS, guru, dan seluruh warga sekolah melalui komunikasi
              yang efektif dan etis.</li>
            <li>4. Mengembangkan sikap kepemimpinan, tanggung jawab, dan kedisiplinan anggota MPK sebagai teladan bagi
              seluruh siswa SMK Negeri 1 Kawali.</li>
          </ul>
        </div>
      </div>

      <!-- STRUKTUR -->
     <!-- STRUKTUR -->
<div class="space-y-10 animate-fade-in" style="animation-delay: 0.6s">
    <h3 class="text-4xl font-bold text-center text-gray-900 dark:text-white mb-8">Struktur MPK</h3>

    <!-- Pembina Section -->
    <div class="flex justify-center">
        <div class="text-center p-8 rounded-2xl bg-white dark:bg-gray-800 shadow-xl max-w-sm transform transition-all duration-300 hover:scale-105">
            <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-primary/20 mx-auto mb-6 shadow-lg">
                <img src="dede hernadi M.Pd.jpeg" alt="Dede Hernadi M.Pd" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
            </div>
            <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Dede Hernadi M.Pd</h4>
            <span class="text-base text-primary font-medium">Pembina MPK</span>
        </div>
    </div>

    <!-- Pengurus Inti Section -->
    <div class="mt-12">
        <h4 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-200 mb-8">Pengurus Inti</h4>
        <div class="team-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <!-- Ketua -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 0.7s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="ketua mpk.jpeg" alt="Fahri Nururrohman" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Ketua</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Fahri Nururrohman</div>
            </div>
            
            <!-- Wakil -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 0.8s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="wakil ketua mpk.jpeg" alt="Rahma Zahratunisa" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Wakil Ketua</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Rahma Zahratunisa</div>
            </div>
            
            <!-- Sekretaris 1 -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 0.9s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="sek1.jpeg" alt="Lisna Sifa nura'eni" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Sekretaris 1</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Lisna Sifa Nura'eni</div>
            </div>
            
            <!-- Sekretaris 2 -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 1.0s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="sek2.jpeg" alt="Selly lailasari" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Sekretaris 2</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Selly lailasari</div>
            </div>
            
            <!-- Bendahara 1 -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 1.1s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="ben1.jpeg" alt="Mutiara Anggraeni" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Bendahara 1</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Mutiara Anggraeni</div>
            </div>
            
            <!-- Bendahara 2 -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 1.2s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="ben2.jpeg" alt="Puput Rizkia Rahayu" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Bendahara 2</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Puput Rizkia Rahayu</div>
            </div>
            
            <!-- Penanggung Jawab Komisi -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 1.3s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="pj mpk.jpeg" alt="Asep Ramdanhi" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Penanggung Jawab Komisi</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Asep Ramdanhi</div>
            </div>
        </div>
    </div>
</div>


    </section>
     <!-- GALLERY -->
    <section class="py-12 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 text-gray-900 dark:text-white">
                Dokumentasi Kegiatan MPK
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="mpk1.jpeg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="mpk2.jpeg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="mpk3.jpeg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="mpk4.jpeg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= OSIS ================= -->
    <section id="osis" class="space-y-16 org-section">

    <!-- DESKRIPSI -->
       <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center animate-fade-in" style="animation-delay: 0.3s">
        <div class="flex justify-center">
          <div class="w-64 h-64 bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark flex items-center justify-center org-card overflow-hidden">
            <img src="osis.jpg" alt="Logo MPK"class="w-full h-full object-contain p-6">
          </div>
        </div>

  <div class="md:col-span-2">
    <h2 class="text-3xl font-bold mb-4 text-gray-900 dark:text-white">OSiS</h2>
    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
      Organisasi adalah tempat  siswa belajar berorganisasi, mmimpin, dan berkontribusi aktif di sekolah.
    </p>
  </div>

</div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div
          class="org-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-8 text-center animate-fade-in"
          style="animation-delay: 0.9s">
          <div
            class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center">
            <i class="fas fa-eye text-primary text-2xl"></i>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Visi</h3>
          <p class="text-gray-600 dark:text-gray-300">
            Menjadikan murid SMKN 1 Kawali yang peduli lingkungan, menghargai budaya, kreatif dan berprestasi.
          </p>
        </div>
        <div
          class="org-card bg-card-light dark:bg-card-dark rounded-2xl border border-border-light dark:border-border-dark p-8 text-center animate-fade-in"
          style="animation-delay: 1.0s">
          <div
            class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary/10 dark:bg-primary/20 flex items-center justify-center">
            <i class="fas fa-rocket text-primary text-2xl"></i>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Misi</h3>
          <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-left">
            <li>1. Meningkatkan keimanan dan ketakwaan terhadap Tuhan Yang Maha Esa.</li>
            <li>2. Meningkatkan kepedulian murid terhadap kebersihan dan lingkungan sekolah.</li>
            <li>3. Mengoptimalkan kembali kedisiplinan dan partisipasi murid di setiap kegiatan sekolah.</li>
            <li>4. Meningkatkan komunikasi anggota dalam setiap kegiatan sekolah.</li>
            <li>5. Mendorong murid untuk lebih menghargai budaya dan sejarah.</li>
          </ul>
        </div>
      </div>

      <!-- STRUKTUR -->
      <div class="space-y-8 animate-fade-in" style="animation-delay: 1.1s">
        <h3 class="text-3xl font-bold text-center text-gray-900 dark:text-white">Struktur OSIS</h3>

      
    <!-- STRUKTUR -->


    <!-- Pembina Section -->
    <div class="flex justify-center">
        <div class="text-center p-8 rounded-2xl bg-white dark:bg-gray-800 shadow-xl max-w-sm transform transition-all duration-300 hover:scale-105">
            <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-primary/20 mx-auto mb-6 shadow-lg">
                <img src="default.png" alt="Gissa Firda Hasbia, S,Pd." class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
            </div>
            <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Gissa Firda Hasbia, S,Pd.</h4>
            <span class="text-base text-primary font-medium">Pembina OSIS</span>
        </div>
    </div

    <!-- Pengurus Inti Section -->
    <div class="mt-12">
        <h4 class="text-2xl font-semibold text-center text-gray-800 dark:text-gray-200 mb-8">Pengurus Inti</h4>
        <div class="team-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            <!-- Ketua -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 0.7s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="ketos.jpeg" alt="Fahri Nururrohman" class="w-fketosh-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Ketua</div>
                <div class="text-sm text-gray-600 dark:text-gray-400"> Fakih Sabikul Hoer </div>
            </div>
            
            <!-- Wakil -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 0.8s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="waketos.jpeg" alt="Rahma Zahratunisa" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Wakil Ketua</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Maheswari Rihadatul Aisy</div>
            </div>
            
            <!-- Sekretaris 1 -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 0.9s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="seksi1.jpeg" alt="Lisna Sifa nura'eni" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Sekretaris 1</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Deria Septiani</div>
            </div>
            
            <!-- Sekretaris 2 -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 1.0s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="default.png" alt="Selly lailasari" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Sekretaris 2</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Santi Rahman</div>
            </div>
            
            <!-- Bendahara 1 -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 1.1s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="default.png" alt="Mutiara Anggraeni" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Bendahara 1</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Alya Yusrin Hamidah</div>
            </div>
            
            <!-- Bendahara 2 -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 1.2s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="default.png" alt="Puput Rizkia Rahayu" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Bendahara 2</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Siti Nurwahidah</div>
            </div>
            
            <!-- Penanggung Jawab Komisi -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 1.3s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="korlap1.jpeg" alt="Asep Ramdanhi" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Koordinator Lapangan 1</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Tatang Hidayat </div>
            </div>

            <!-- Penanggung Jawab Komisi -->
            <div class="text-center animate-fade-in p-6 rounded-xl bg-white dark:bg-gray-800 shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2" style="animation-delay: 1.3s">
                <div class="w-36 h-36 rounded-full overflow-hidden border-3 border-gray-200 dark:border-gray-600 mx-auto mb-4">
                    <img src="korlap2.jpeg" alt="Asep Ramdanhi" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="font-bold text-base text-gray-900 dark:text-white mb-1">Koordinator Lapangan 2</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Gilang Febriansyaht </div>
            </div>
        </div>
    </div>
</div>
<!-- GALLERY -->
    <section class="py-12 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 text-gray-900 dark:text-white">
                Dokumentasi Kegiatan OSIS
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="11.jpeg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="22.jpeg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="33.jpeg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-lg group">
                    <img src="44.jpeg" alt="Kegiatan PPLG"
                        class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 flex items-center justify-center">
                        <span
                            class="material-icons text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">zoom_in</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

      </div>
    </section>

  </main>

 @include('layouts.footer')

  <!-- DARK MODE BUTTON -->
  <button id="darkToggle"
    class="fixed bottom-6 right-6 bg-primary hover:bg-primary-dark text-white p-3 rounded-full shadow-lg z-40 transition-all duration-300 hover:scale-110">
    <i class="fa-solid fa-moon dark:hidden"></i>
    <i class="fa-solid fa-sun hidden dark:block"></i>
  </button>

  <script>
    // Dark mode toggle
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

  Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  </script>

</body>

</html>