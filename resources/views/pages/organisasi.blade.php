<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Organisasi Siswa SMKN 1 Kawali</title>

<!-- Tailwind CDN -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

<style>
/* --- Perbaikan Utama: Tambahkan padding-top pada body --- */
/* Nilai 80px disesuaikan dengan tinggi navbar */
body {
  background:#f3f4f6;
  padding-top: 80px; 
}

.tab-btn{
  padding:10px 22px;
  border-radius:12px;
  background:#e5e7eb;
  font-weight:600;
  transition:.3s;
}

.tab-btn:hover{
  background:#c7d2fe;
}

.tab-active{
  background:#4f46e5;
  color:white;
}

.hidden{
  display:none;
}

.profile-image{
  width:70px;
  height:70px;
  border-radius:50%;
  object-fit:cover;
  margin: 0 auto 8px auto;
  border:3px solid white;
  display:block;
}

.structure-card {
  background:white;
  padding:12px;
  border-radius:12px;
  text-align:center;
  box-shadow:0 4px 12px rgba(0,0,0,.1);
  position: relative;
  min-width: 140px;
  display: inline-block;
  vertical-align: top;
}

.structure-card h4 {
  font-size: 0.85rem;
  font-weight: 600;
  margin: 0;
}

.structure-card p {
  font-size: 0.75rem;
  color: #4b5563;
  margin-top: 4px;
}

/* --- Vertically Symmetrical Tree Structure (No Scroll) --- */
.tree-container {
    padding: 40px 0;
    text-align: center;
}

.tree ul {
    position: relative;
    padding: 40px 0 0 0;
    margin: 0;
    display: flex;
    justify-content: center;
    list-style: none;
}

.tree li {
    position: relative;
    padding: 0 5px;
    text-align: center;
    list-style-type: none;
}

/* --- Garis Penghubung --- */
.tree li > ul::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    border-left: 2px solid #ccc;
    width: 0;
    height: 40px;
    transform: translateX(-50%);
}
.tree li > ul::after {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    border-top: 2px solid #ccc;
    width: calc(100% - 10px);
}
.tree li > ul > li::before {
    content: '';
    position: absolute;
    top: -40px;
    left: 50%;
    border-left: 2px solid #ccc;
    width: 0;
    height: 40px;
    transform: translateX(-50%);
}

/* --- Penanganan Khusus --- */
.tree > ul {
    padding-top: 0;
}
.tree > ul::before,
.tree > ul::after {
    display: none;
}
.tree li > ul:only-child::after {
    display: none;
}
.tree li > ul:only-child > li::before {
    top: -80px;
    height: 80px;
}

.gallery img{
  width:100%;
  height:200px;
  object-fit:cover;
  border-radius:12px;
  cursor:pointer;
  transition:.3s;
}
.gallery img:hover{
  transform:scale(1.05);
}
.lightbox{
  position:fixed;
  inset:0;
  background:rgba(0,0,0,.85);
  display:none;
  justify-content:center;
  align-items:center;
  z-index:999;
}
.lightbox img{
  max-width:90%;
  max-height:90%;
  border-radius:12px;
}
.vision-mission-card {
  background: white;
  border-radius: 16px;
  padding: 25px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  margin-bottom: 30px;
}
.vision-mission-title {
  color: #4f46e5;
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}
.vision-mission-title i {
  margin-right: 10px;
}
.vision-mission-content {
  line-height: 1.6;
}
.vision-mission-list {
  list-style-type: none;
  padding-left: 0;
}
.vision-mission-list li {
  padding: 8px 0;
  border-bottom: 1px solid #f3f4f6;
  display: flex;
  align-items: flex-start;
}
.vision-mission-list li:last-child {
  border-bottom: none;
}
.vision-mission-list li i {
  color: #4f46e5;
  margin-right: 10px;
  margin-top: 3px;
}
.supervisor-card {
  background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
  color: white;
  padding: 20px;
  border-radius: 16px;
  margin-bottom: 30px;
  text-align: center;
}
.supervisor-card h3 {
  font-size: 1.2rem;
  margin-bottom: 5px;
}
.supervisor-card p {
  font-size: 1.1rem;
  font-weight: 600;
}
</style>
</head>

<body>

<!-- ========== NAVBAR ========== -->
<!-- Diletakkan di luar main, di bagian paling atas body -->
<header class="bg-indigo-600 text-white p-4 fixed top-0 left-0 w-full z-50 shadow-lg">
  <nav class="max-w-6xl mx-auto flex justify-between items-center">
    <div class="flex items-center space-x-4">
      <!-- Ganti dengan logo sekolah jika ada -->
      <i class="fas fa-school text-2xl"></i>
      <span class="font-bold text-xl">SMKN 1 Kawali</span>
    </div>
    <div class="space-x-6">
      <a href="#mpk" class="hover:text-indigo-200 transition">Struktur</a>
      <a href="#visi-misi" class="hover:text-indigo-200 transition">Visi & Misi</a>
      <a href="#dokumentasi" class="hover:text-indigo-200 transition">Dokumentasi</a>
    </div>
  </nav>
</header>

<!-- HEADER KONTEN UTAMA -->
<section class="bg-indigo-600 text-white py-20 text-center">
  <h1 class="text-4xl md:text-5xl font-bold">Organisasi Siswa</h1>
  <p class="mt-2 text-indigo-200">MPK & OSIS SMKN 1 Kawali</p>
</section>

<!-- CONTENT -->
<main class="max-w-6xl mx-auto px-4 py-16">

<!-- TAB -->
<div id="mpk" class="flex justify-center gap-4 mb-12">
  <button class="tab-btn tab-active" data-tab="mpk-content">MPK</button>
  <button class="tab-btn" data-tab="osis-content">OSIS</button>
</div>

<!-- MPK -->
<div id="mpk-content" class="tab-pane">

<!-- Pembina MPK -->
<div class="supervisor-card">
  <h3><i class="fas fa-user-tie mr-2"></i>Pembina MPK</h3>
  <p>Dede Hernadi, M.P.D</p>
</div>

<h2 class="text-3xl font-bold mb-4 text-center">Struktur MPK</h2>

<div class="tree-container">
  <ul class="tree">
    <li>
      <div class="structure-card">
        <img src="https://i.pravatar.cc/150?img=10" class="profile-image">
        <h4>Ketua MPK</h4>
        <p>Fahri Nururrohman</p>
      </div>
      <ul>
        <li>
          <div class="structure-card">
            <img src="https://i.pravatar.cc/150?img=20" class="profile-image">
            <h4>Wakil Ketua</h4>
            <p>Rahma Zahratunisa</p>
          </div>
        </li>
        <li>
          <div class="structure-card">
            <h4><i class="fas fa-file-alt"></i></h4>
            <h4>Sekretaris</h4>
          </div>
          <ul>
            <li>
              <div class="structure-card">
                <h4>Sekretaris 1</h4>
                <p>Lisna Sifa Nura'eni</p>
              </div>
            </li>
            <li>
              <div class="structure-card">
                <h4>Sekretaris 2</h4>
                <p>Selly Lailasari</p>
              </div>
            </li>
          </ul>
        </li>
        <li>
          <div class="structure-card">
            <h4><i class="fas fa-wallet"></i></h4>
            <h4>Bendahara</h4>
          </div>
          <ul>
            <li>
              <div class="structure-card">
                <h4>Bendahara 1</h4>
                <p>Mutiara Anggraeni</p>
              </div>
            </li>
            <li>
              <div class="structure-card">
                <h4>Bendahara 2</h4>
                <p>Puput Rizkia Rahayu</p>
              </div>
            </li>
          </ul>
        </li>
        <li>
          <div class="structure-card">
            <img src="https://i.pravatar.cc/150?img=70" class="profile-image">
            <h4>Penanggung Jawab Komisi</h4>
            <p>Asep Ramdanhi</p>
          </div>
        </li>
      </ul>
    </li>
  </ul>
</div>

<!-- Visi dan Misi MPK -->
<div id="visi-misi" class="vision-mission-card">
  <h3 class="vision-mission-title">
    <i class="fas fa-eye"></i> Visi MPK SMK Negeri 1 Kawali
  </h3>
  <p class="vision-mission-content">
    Mewujudkan MPK yang aktif, aspiratif, dan bertanggung jawab dalam menjembatani suara siswa demi terciptanya lingkungan sekolah yang harmonis, demokratis, dan berprestasi.
  </p>
</div>

<div class="vision-mission-card">
  <h3 class="vision-mission-title">
    <i class="fas fa-bullseye"></i> Misi MPK SMK Negeri 1 Kawali
  </h3>
  <ul class="vision-mission-list">
    <li><i class="fas fa-check-circle"></i> Mendorong siswa untuk aktif dalam kegiatan akademik maupun non-akademik, demi peningkatan prestasi dan citra sekolah.</li>
    <li><i class="fas fa-check-circle"></i> Menumbuhkan semangat partisipatif dan kepedulian siswa terhadap kegiatan sekolah melalui diskusi terbuka dan musyawarah kelas.</li>
    <li><i class="fas fa-check-circle"></i> Menjalin hubungan yang harmonis antara MPK, OSIS, guru, dan seluruh warga sekolah melalui komunikasi yang efektif dan etis.</li>
    <li><i class="fas fa-check-circle"></i> Mengembangkan sikap kepemimpinan, tanggung jawab, dan kedisiplinan anggota MPK sebagai teladan bagi seluruh siswa SMK Negeri 1 Kawali.</li>
  </ul>
</div>

<h3 id="dokumentasi" class="text-2xl font-bold text-center mb-6">Dokumentasi MPK</h3>

<div class="grid md:grid-cols-4 gap-6 gallery">
<img src="https://source.unsplash.com/400x300/?school,meeting">
<img src="https://source.unsplash.com/400x300/?students,event">
<img src="https://source.unsplash.com/400x300/?discussion">
<img src="https://source.unsplash.com/400x300/?presentation">
</div>

</div>

<!-- OSIS -->
<div id="osis-content" class="tab-pane hidden">

<!-- Pembina OSIS -->
<div class="supervisor-card">
  <h3><i class="fas fa-user-tie mr-2"></i>Pembina OSIS</h3>
  <p>Ibu Gissa Firda Hasbia, S.Pd.</p>
</div>

<h2 class="text-3xl font-bold mb-4 text-center">Struktur OSIS</h2>

<div class="tree-container">
  <ul class="tree">
    <li>
      <div class="structure-card">
        <img src="https://i.pravatar.cc/150?img=80" class="profile-image">
        <h4>Ketua OSIS</h4>
        <p>Fakih Sabikul Hoer</p>
      </div>
      <ul>
        <li>
          <div class="structure-card">
            <img src="https://i.pravatar.cc/150?img=90" class="profile-image">
            <h4>Wakil Ketua</h4>
            <p>Maheswari Rihadatul Aisy</p>
          </div>
        </li>
        <li>
          <div class="structure-card">
            <h4><i class="fas fa-file-alt"></i></h4>
            <h4>Sekretaris</h4>
          </div>
          <ul>
            <li>
              <div class="structure-card">
                <h4>Sekretaris 1</h4>
                <p>Deria Septiani</p>
              </div>
            </li>
            <li>
              <div class="structure-card">
                <h4>Sekretaris 2</h4>
                <p>Santi Rahman</p>
              </div>
            </li>
          </ul>
        </li>
        <li>
          <div class="structure-card">
            <h4><i class="fas fa-wallet"></i></h4>
            <h4>Bendahara</h4>
          </div>
          <ul>
            <li>
              <div class="structure-card">
                <h4>Bendahara 1</h4>
                <p>Alya Yusrin Hamidah</p>
              </div>
            </li>
            <li>
              <div class="structure-card">
                <h4>Bendahara 2</h4>
                <p>Siti Nurwahidah</p>
              </div>
            </li>
          </ul>
        </li>
        <li>
          <div class="structure-card">
            <h4><i class="fas fa-clipboard-list"></i></h4>
            <h4>Koordinator Lapangan</h4>
          </div>
          <ul>
            <li>
              <div class="structure-card">
                <h4>Koordinator Lapangan 1</h4>
                <p>Tatang Hidayat</p>
              </div>
            </li>
            <li>
              <div class="structure-card">
                <h4>Koordinator Lapangan 2</h4>
                <p>Gilang Febriansyah</p>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</div>

<!-- Visi dan Misi OSIS -->
<div class="vision-mission-card">
  <h3 class="vision-mission-title">
    <i class="fas fa-eye"></i> Visi OSIS SMKN 1 Kawali T.A. 25/26
  </h3>
  <p class="vision-mission-content">
    Menjadikan murid SMKN 1 Kawali yang peduli lingkungan, menghargai budaya, kreatif dan berprestasi.
  </p>
</div>

<div class="vision-mission-card">
  <h3 class="vision-mission-title">
    <i class="fas fa-bullseye"></i> Misi OSIS SMKN 1 Kawali T.A. 25/26
  </h3>
  <ul class="vision-mission-list">
    <li><i class="fas fa-check-circle"></i> Meningkatkan keimanan dan ketakwaan terhadap Tuhan Yang Maha Esa.</li>
    <li><i class="fas fa-check-circle"></i> Meningkatkan kepedulian murid terhadap kebersihan dan lingkungan sekolah.</li>
    <li><i class="fas fa-check-circle"></i> Mengoptimalkan kembali kedisiplinan dan partisipasi murid di setiap kegiatan sekolah.</li>
    <li><i class="fas fa-check-circle"></i> Meningkatkan komunikasi anggota dalam setiap kegiatan sekolah.</li>
    <li><i class="fas fa-check-circle"></i> Mendorong murid untuk lebih menghargai budaya dan sejarah.</li>
  </ul>
</div>

<h3 class="text-2xl font-bold text-center mb-6">Dokumentasi OSIS</h3>

<div class="grid md:grid-cols-4 gap-6 gallery">
<img src="https://source.unsplash.com/400x300/?school,festival">
<img src="https://source.unsplash.com/400x300/?sports,school">
<img src="https://source.unsplash.com/400x300/?music,event">
<img src="https://source.unsplash.com/400x300/?workshop">
</div>

</div>

</main>

<!-- ========== FOOTER ========== -->
<!-- Diletakkan di luar main, di bagian paling bawah body -->
<footer class="bg-gray-800 text-white p-8 text-center mt-16">
  <div class="max-w-6xl mx-auto">
    <p>&copy; 2024 Organisasi Siswa SMKN 1 Kawali. All Rights Reserved.</p>
    <div class="mt-4 space-x-4">
      <a href="#" class="hover:text-indigo-400"><i class="fab fa-facebook"></i></a>
      <a href="#" class="hover:text-indigo-400"><i class="fab fa-instagram"></i></a>
      <a href="#" class="hover:text-indigo-400"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</footer>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
  <img id="lightbox-img">
</div>

<!-- SCRIPT -->
<script>
// Perbaiki ID tab dan pane agar tidak bentrok dengan ID lain
const tabs = document.querySelectorAll(".tab-btn");
const panes = document.querySelectorAll(".tab-pane");

tabs.forEach(btn=>{
  btn.addEventListener("click", ()=>{
    tabs.forEach(b=>b.classList.remove("tab-active"));
    panes.forEach(p=>p.classList.add("hidden"));

    btn.classList.add("tab-active");
    // Menggunakan data-tab untuk menentukan pane mana yang ditampilkan
    const targetPaneId = btn.dataset.tab + "-content";
    document.getElementById(targetPaneId).classList.remove("hidden");
  });
});

// Tampilkan MPK saat load
document.querySelector('[data-tab="mpk"]').click();

// Lightbox
const images = document.querySelectorAll(".gallery img");
const lightbox = document.getElementById("lightbox");
const lightImg = document.getElementById("lightbox-img");

images.forEach(img=>{
  img.onclick=()=>{
    lightbox.style.display="flex";
    lightImg.src=img.src;
  }
});

lightbox.onclick=()=>lightbox.style.display="none";
</script>

</body>
</html>