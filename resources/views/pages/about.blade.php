<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Tim Kreatif Kami</title>
    
    <!-- Link ke Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Link ke Google Fonts (Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    
    <!-- Link ke Library AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- --- SEMUA CSS DI DALAM SINI --- -->
    <style>
        /* --- Gaya Umum & Variabel --- */
        :root {
            --primary-color: #23a6d5;
            --secondary-color: #e73c7e;
            --accent-color: #23d5ab;
            --text-color: #f0f0f0;
            --dark-bg: #1a1a2e;
            --card-bg: rgba(255, 255, 255, 0.1);
            --card-border: rgba(255, 255, 255, 0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark-bg);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* --- Hero Section dengan Gradien Animasi --- */
        .hero-section {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }

        .animated-gradient {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: -1;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: 1.4rem;
            max-width: 700px;
            margin: 0 auto;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
        }

        .hero-section nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            margin: 0 15px;
            padding-bottom: 5px;
            border-bottom: 2px solid transparent;
            transition: border-color 0.3s ease;
            position: absolute;
            top: 30px;
        }
        .hero-section nav a:first-child { left: 30px; }
        .hero-section nav a:last-child { right: 30px; }

        .hero-section nav a:hover {
            border-bottom-color: white;
        }

        /* --- Wrapper Konten dengan Glassmorphism --- */
        .content-wrapper {
            position: relative;
            z-index: 1;
            margin-top: -100px;
        }

        /* --- Glass Card Effect --- */
        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid var(--card-border);
            padding: 40px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        /* --- Bagian Statistik --- */
        .stats-section {
            padding: 60px 20px;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            text-align: center;
        }
        .stat-item i {
            font-size: 3rem;
            color: var(--accent-color);
            margin-bottom: 15px;
        }
        .stat-number {
            display: block;
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .stat-item p {
            font-size: 1.1rem;
            color: #ccc;
        }

        /* --- Bagian Tim --- */
        .team-section {
            padding: 80px 20px;
            text-align: center;
        }
        .section-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .section-subtitle {
            font-size: 1.2rem;
            color: #aaa;
            max-width: 600px;
            margin: 0 auto 60px auto;
        }
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        /* --- Kartu Anggota (Gaya Premium) --- */
        .team-member-card {
            position: relative;
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid var(--card-border);
            overflow: hidden;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            text-align: left;
            color: white;
        }
        .team-member-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        }
        .member-image {
            height: 250px;
            overflow: hidden;
        }
        .member-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .team-member-card:hover .member-image img {
            transform: scale(1.1);
        }
        .member-details {
            padding: 25px;
        }
        .member-details h3 {
            font-size: 1.8rem;
            margin: 0 0 5px;
        }
        .member-details .role {
            color: var(--accent-color);
            font-weight: 600;
            margin: 0 0 15px;
        }
        .member-details .short-desc {
            color: #ddd;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }
        .social-links a {
            margin-right: 15px;
            color: #aaa;
            font-size: 1.2rem;
            transition: color 0.3s ease, transform 0.3s ease;
            display: inline-block;
        }
        .social-links a:hover {
            color: var(--primary-color);
            transform: translateY(-3px);
        }
        .view-profile-btn {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.3s ease;
        }
        .view-profile-btn:hover {
            opacity: 0.9;
        }

        /* --- Modal (Gaya Premium) --- */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.4s;
        }
        .modal-content {
            background: var(--card-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--card-border);
            margin: auto;
            padding: 40px;
            border-radius: 20px;
            width: 90%;
            max-width: 600px;
            text-align: center;
            color: white;
            position: relative;
            animation: scaleIn 0.4s;
        }
        @keyframes scaleIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .close-btn {
            color: #aaa;
            position: absolute;
            top: 15px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s;
        }
        .close-btn:hover, .close-btn:focus { color: var(--primary-color); }
        #modal-img {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid var(--card-border);
        }
        #modal-name { margin: 0; font-size: 2rem; }
        #modal-role { color: var(--accent-color); font-weight: 400; margin-top: 5px; }
        #modal-tasks { text-align: left; margin-top: 20px; }
        #modal-tasks h3 { border-bottom: 2px solid var(--card-border); padding-bottom: 10px; }
        #modal-task-list { list-style-type: '✓ '; padding-left: 20px; }
        #modal-task-list li { margin-bottom: 8px; color: var(--text-color); }

        /* --- Responsif --- */
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2.8rem; }
            .hero-content p { font-size: 1.1rem; }
            .hero-section nav a { position: static; display: inline-block; margin: 10px; }
            .content-wrapper { margin-top: -50px; }
            .stats-section { padding: 40px 15px; }
            .stat-number { font-size: 2.5rem; }
            .section-title { font-size: 2.2rem; }
            .team-section { padding: 60px 15px; }
            .modal-content { width: 95%; padding: 20px; }
        }
    </style>
</head>
<body>

    <!-- --- SEMUA HTML DI DALAM SINI --- -->
    <header class="hero-section" id="hero">
        <div class="animated-gradient"></div>
        <div class="hero-overlay"></div>
        <div class="container">
            <nav>
                <a href="/beranda">Beranda</a> 
                <a href="#tim">Tentang Kami</a>
            </nav>
            <div class="hero-content">
                <h1 data-aos="fade-down" data-aos-duration="1500">Tim Kreatif Kami</h1>
                <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">Kami adalah tim yang terdiri dari individu-individu berbakat dan bersemangat, yang bekerja sama untuk mencapai tujuan bersama. Kenali lebih dekat anggota tim kami di bawah ini.</p>
            </div>
        </div>
    </header>

    <main>
        <div class="content-wrapper">
            <section class="stats-section" data-aos="fade-up">
                <div class="container glass-card">
                    <div class="stats-grid">
                        <div class="stat-item">
                            <i class="fas fa-rocket"></i>
                            <span class="stat-number" data-target="150">0</span>
                            <p>Proyek Sukses</p>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-user-tie"></i>
                            <span class="stat-number" data-target="98">0</span>
                            <p>Klien Puas</p>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-code"></i>
                            <span class="stat-number" data-target="50000">0</span>
                            <p>Baris Kode</p>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-trophy"></i>
                            <span class="stat-number" data-target="15">0</span>
                            <p>Penghargaan</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tim" class="team-section">
                <div class="container">
                    <h2 class="section-title" data-aos="fade-up">Tim Hebat Kami</h2>
                    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">Berpikir di luar batas, menciptakan solusi luar biasa.</p>
                    
                    <div class="team-grid">
                        <!-- Kartu Anggota 1 -->
                        <div class="team-member-card" data-aos="flip-left" data-aos-delay="200">
                            <div class="member-image">
                                <!-- GANTI URL GAMBAR DI SINI -->
                                <img src="https://i.pravatar.cc/400?img=53" alt="Foto Andi Pratama">
                            </div>
                            <div class="member-details">
                                <h3>Andi Pratama</h3>
                                <p class="role">Project Manager</p>
                                <p class="short-desc">Memimpin tim dan memastikan semua proyek berjalan sesuai rencana.</p>
                                <div class="social-links">
                                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                </div>
                                <button class="view-profile-btn" data-id="0">Lihat Profil</button>
                            </div>
                        </div>

                        <!-- Kartu Anggota 2 -->
                        <div class="team-member-card" data-aos="flip-left" data-aos-delay="300">
                            <div class="member-image">
                                <img src="https://i.pravatar.cc/400?img=47" alt="Foto Siti Nurhaliza">
                            </div>
                            <div class="member-details">
                                <h3>Siti Nurhaliza</h3>
                                <p class="role">Lead UI/UX Designer</p>
                                <p class="short-desc">Merancang antarmuka yang menarik dan mudah digunakan oleh pengguna.</p>
                                <div class="social-links">
                                    <a href="#" aria-label="Dribbble"><i class="fab fa-dribbble"></i></a>
                                    <a href="#" aria-label="Behance"><i class="fab fa-behance"></i></a>
                                </div>
                                <button class="view-profile-btn" data-id="1">Lihat Profil</button>
                            </div>
                        </div>

                        <!-- Kartu Anggota 3 -->
                        <div class="team-member-card" data-aos="flip-left" data-aos-delay="400">
                            <div class="member-image">
                                <img src="https://i.pravatar.cc/400?img=32" alt="Foto Budi Santoso">
                            </div>
                            <div class="member-details">
                                <h3>Budi Santoso</h3>
                                <p class="role">Lead Frontend Developer</p>
                                <p class="short-desc">Mengubah desain menjadi pengalaman web yang interaktif dan responsif.</p>
                                <div class="social-links">
                                    <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <button class="view-profile-btn" data-id="2">Lihat Profil</button>
                            </div>
                        </div>

                        <!-- Kartu Anggota 4 -->
                        <div class="team-member-card" data-aos="flip-left" data-aos-delay="500">
                            <div class="member-image">
                                <img src="https://i.pravatar.cc/400?img=26" alt="Foto Dewi Lestari">
                            </div>
                            <div class="member-details">
                                <h3>Dewi Lestari</h3>
                                <p class="role">Backend Developer</p>
                                <p class="short-desc">Membangun dan menjaga stabilitas logika dan database aplikasi.</p>
                                <div class="social-links">
                                    <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                                    <a href="#" aria-label="Stack Overflow"><i class="fab fa-stack-overflow"></i></a>
                                </div>
                                <button class="view-profile-btn" data-id="3">Lihat Profil</button>
                            </div>
                        </div>

                        <!-- Kartu Anggota 5 -->
                        <div class="team-member-card" data-aos="flip-left" data-aos-delay="600">
                            <div class="member-image">
                                <img src="https://i.pravatar.cc/400?img=44" alt="Foto Rizki Ahmad">
                            </div>
                            <div class="member-details">
                                <h3>Rizki Ahmad</h3>
                                <p class="role">Digital Marketing</p>
                                <p class="short-desc">Memastikan produk kami menjangkau audiens yang tepat.</p>
                                <div class="social-links">
                                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                                <button class="view-profile-btn" data-id="4">Lihat Profil</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Modal untuk Detail Anggota -->
    <div id="member-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <img id="modal-img" src="" alt="">
            <h2 id="modal-name"></h2>
            <h4 id="modal-role"></h4>
            <div id="modal-tasks">
                <h3>Tugas & Tanggung Jawab:</h3>
                <ul id="modal-task-list"></ul>
            </div>
        </div>
    </div>

    <!-- --- SEMUA JAVASCRIPT DI DALAM SINI --- -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // --- DATA ANGGOTA TIM ---
            const teamMembers = [
                { id: 0, name: "Andi Pratama", role: "Project Manager", image: "https://i.pravatar.cc/150?img=53", tasks: ["Merencanakan dan mengelola jadwal proyek.", "Mengkoordinasikan komunikasi antar tim.", "Mengidentifikasi dan mengelola risiko proyek.", "Melaporkan perkembangan proyek kepada stakeholders."] },
                { id: 1, name: "Siti Nurhaliza", role: "Lead UI/UX Designer", image: "https://i.pravatar.cc/150?img=47", tasks: ["Melakukan riset pengguna dan analisis kebutuhan.", "Membuat wireframe, prototype, dan desain visual.", "Melakukan pengujian usability.", "Berkolaborasi dengan tim pengembang."] },
                { id: 2, name: "Budi Santoso", role: "Lead Frontend Developer", image: "https://i.pravatar.cc/150?img=32", tasks: ["Menerjemahkan desain UI menjadi kode.", "Membangun komponen web yang dapat digunakan kembali.", "Memastikan aplikasi web responsif.", "Mengoptimalkan kecepatan loading."] },
                { id: 3, name: "Dewi Lestari", role: "Backend Developer", image: "https://i.pravatar.cc/150?img=26", tasks: ["Membangun dan mengelola API.", "Mendesain dan mengelola database.", "Mengimplementasikan logika bisnis di sisi server.", "Menjamin keamanan data dan aplikasi."] },
                { id: 4, name: "Rizki Ahmad", role: "Digital Marketing", image: "https://i.pravatar.cc/150?img=44", tasks: ["Merencanakan dan mengeksekusi kampanye pemasaran.", "Mengelola media sosial perusahaan.", "Menganalisis data kampanye.", "Mengoptimalkan SEO."] }
            ];

            // --- LOGIKA MODAL ---
            const modal = document.getElementById('member-modal');
            const modalImg = document.getElementById('modal-img');
            const modalName = document.getElementById('modal-name');
            const modalRole = document.getElementById('modal-role');
            const modalTaskList = document.getElementById('modal-task-list');
            const closeBtn = document.querySelector('.close-btn');
            const profileButtons = document.querySelectorAll('.view-profile-btn');

            const openModal = (memberId) => {
                const member = teamMembers.find(m => m.id === memberId);
                if (member) {
                    modalImg.src = member.image;
                    modalImg.alt = `Foto ${member.name}`;
                    modalName.textContent = member.name;
                    modalRole.textContent = member.role;
                    modalTaskList.innerHTML = '';
                    member.tasks.forEach(task => {
                        const li = document.createElement('li');
                        li.textContent = task;
                        modalTaskList.appendChild(li);
                    });
                    modal.style.display = 'flex';
                }
            };

            const closeModal = () => modal.style.display = 'none';

            profileButtons.forEach(btn => btn.addEventListener('click', () => openModal(parseInt(btn.getAttribute('data-id')))));
            closeBtn.addEventListener('click', closeModal);
            window.addEventListener('click', (event) => { if (event.target === modal) closeModal(); });


            // --- LOGIKA COUNTER ANIMASI ---
            const counters = document.querySelectorAll('.stat-number');
            const speed = 200;

            const runCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / speed;
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(() => runCounter(counter), 10);
                } else {
                    counter.innerText = target.toLocaleString(); // Format angka dengan koma
                }
            };
            
            const observerOptions = { threshold: 0.7 };
            const counterObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        runCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            counters.forEach(counter => counterObserver.observe(counter));


            // --- INISIALISASI AOS ---
            AOS.init({
                duration: 1000,
                once: true
            });

        });
    </script>
</body>
</html>