<footer class="bg-gray-200 dark:bg-gray-900 pt-16 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Kolom 1: Tentang Sekolah -->
            <div class="md:col-span-1">
                <div class="flex items-center gap-3 mb-6">
                    <img alt="Logo SMK" class="w-12 h-12 rounded-full"
                        src="{{ asset('beranda/logo smkn.png') }}" />
                    <span class="font-bold text-xl text-gray-900 dark:text-white">SMK Negeri 1 Kawali</span>
                </div>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    Mewujudkan generasi cerdas, berkarakter, dan siap kerja untuk masa depan Indonesia yang lebih
                    baik.
                </p>
                <div class="flex gap-4">
                    <a class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center hover:bg-primary hover:text-white dark:hover:bg-primary transition-all shadow-sm"
                        href="#" target="_blank" rel="noopener noreferrer" title="Facebook">
                        <span class="material-icons text-sm">facebook</span>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center hover:bg-primary hover:text-white dark:hover:bg-primary transition-all shadow-sm"
                        href="#" target="_blank" rel="noopener noreferrer" title="Instagram">
                        <span class="material-icons text-sm">photo_camera</span>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center hover:bg-primary hover:text-white dark:hover:bg-primary transition-all shadow-sm"
                        href="#" target="_blank" rel="noopener noreferrer" title="YouTube">
                        <span class="material-icons text-sm">play_arrow</span>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center hover:bg-primary hover:text-white dark:hover:bg-primary transition-all shadow-sm"
                        href="#" target="_blank" rel="noopener noreferrer" title="Twitter">
                        <span class="material-icons text-sm">alternate_email</span>
                    </a>
                </div>
            </div>

            <!-- Kolom 2: Tautan Cepat -->
            <div>
                <h3 class="font-bold text-lg mb-6 text-gray-900 dark:text-white">Tautan Cepat</h3>
                <ul class="space-y-3 text-gray-600 dark:text-gray-400">
                    <li><a class="hover:text-primary transition-colors" href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('profil') }}">Profil</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('organisasi') }}">Organisasi</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('akreditasi') }}">Akreditasi</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('link') }}">Tautan Terkait</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Akademik & Informasi -->
            <div>
                <h3 class="font-bold text-lg mb-6 text-gray-900 dark:text-white">Akademik & Informasi</h3>
                <ul class="space-y-3 text-gray-600 dark:text-gray-400">
                    <li><a class="hover:text-primary transition-colors" href="{{ route('jurusan') }}">Program Keahlian</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('ekstrakulikuler') }}">Ekstrakurikuler</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('fasilitas') }}">Fasilitas</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('prestasi') }}">Prestasi</a></li>
                    <li><a class="hover:text-primary transition-colors" href="{{ route('agenda') }}">Agenda</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Hubungi Kami -->
            <div>
                <h3 class="font-bold text-lg mb-6 text-gray-900 dark:text-white">Hubungi Kami</h3>
                <ul class="space-y-4 text-gray-600 dark:text-gray-400">
                    <li class="flex items-start gap-3">
                        <span class="material-icons text-primary mt-1">location_on</span>
                        <span>JL. Talagasari No. 35, Desa Kawalimukti, Kecamatan Kawali, Kabupaten Ciamis, Jawa Barat.</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-icons text-primary">phone</span>
                        <span>(0265) 791727</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-icons text-primary">email</span>
                        <span>smkn1kawali@gmail.com</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-icons text-primary">schedule</span>
                        <span>Senin - Jumat: 07:00 - 15:00</span>
                    </li>
                </ul>
            </div>
        </div>
        
    
       

        <!-- Copyright Section -->
        <div class="border-t border-gray-300 dark:border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-gray-600 dark:text-gray-400">© {{ date('Y') }} SMK Negeri 1 Kawali. All rights reserved.</p>
                <div class="flex gap-6 text-sm">
                    <a href="{{ route('about') }}" class="text-gray-600 dark:text-gray-400 hover:text-primary transition-colors">Tentang Kami</a>
                    <a href="{{ route('login') }}" class="text-gray-600 dark:text-gray-400 hover:text-primary transition-colors">Login Admin</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 w-12 h-12 bg-primary text-white rounded-full shadow-lg flex items-center justify-center opacity-0 invisible transition-all hover:bg-primary-dark z-40">
        <span class="material-icons">arrow_upward</span>
    </button>
    
    <script>
        // Back to top button functionality
        document.addEventListener('DOMContentLoaded', function() {
            const backToTopButton = document.getElementById('backToTop');
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.remove('opacity-0', 'invisible');
                    backToTopButton.classList.add('opacity-100', 'visible');
                } else {
                    backToTopButton.classList.add('opacity-0', 'invisible');
                    backToTopButton.classList.remove('opacity-100', 'visible');
                }
            });
            
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</footer>