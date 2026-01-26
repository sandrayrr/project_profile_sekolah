<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register Admin - SMKN 1 Kawali</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
/* ================= ROOT ================= */
:root{
    --blue-dark:#0A2540;
    --blue-main:#0D6EFD;
    --blue-soft:#3B82F6;
    --blue-light:#E8F1FF;
    --yellow-accent:#FFC107;
    --red-accent:#DC3545;
}

/* ================= BODY & PRELOADER ================= */
body{
    min-height:100vh;
    margin:0;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(135deg,var(--blue-dark),var(--blue-main),#38BDF8);
    background-size:300% 300%;
    animation: oceanMove 12s ease infinite;
    font-family:'Poppins',sans-serif;
    overflow:hidden;
    position:relative;
    padding: 20px 0;
}

/* Background pattern & Floating Bubbles */
body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(circle at 10% 20%, rgba(255,255,255,0.05) 0%, transparent 8%),
                      radial-gradient(circle at 80% 50%, rgba(255,255,255,0.07) 0%, transparent 8%),
                      radial-gradient(circle at 40% 80%, rgba(255,255,255,0.05) 0%, transparent 8%);
    z-index: 1;
}

/* Preloader Animation */
#preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: var(--blue-dark);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.5s ease, visibility 0.5s;
}

.loader-spinner {
    width: 50px;
    height: 50px;
    border: 4px solid rgba(255,255,255,0.1);
    border-left-color: var(--blue-soft);
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

/* Gradient movement */
@keyframes oceanMove{
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}

@keyframes spin{
    to{transform:rotate(360deg)}
}

/* ================= KEYFRAMES ANIMATIONS ================= */
@keyframes slideInLeft{
    from{opacity:0;transform:translateX(-50px)}
    to{opacity:1;transform:translateX(0)}
}

@keyframes slideInRight{
    from{opacity:0;transform:translateX(50px)}
    to{opacity:1;transform:translateX(0)}
}

@keyframes fadeInUp{
    from{opacity:0;transform:translateY(20px)}
    to{opacity:1;transform:translateY(0)}
}

@keyframes popIn{
    0%{opacity:0;transform:scale(0.5)}
    80%{transform:scale(1.1)}
    100%{opacity:1;transform:scale(1)}
}

@keyframes floatContainer{
    0%{transform:translateY(0px)}
    50%{transform:translateY(-10px)}
    100%{transform:translateY(0px)}
}

/* ================= REGISTER CONTAINER ================= */
.register-container {
    display: flex;
    width: 92%;
    max-width: 1200px;
    height: 620px;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 25px 60px rgba(0,0,0,.25);
    position: relative;
    z-index: 2;
    /* Efek Melayang Halus */
    animation: floatContainer 6s ease-in-out infinite;
    opacity: 0; /* Start hidden for JS reveal */
}

/* ================= SCHOOL IMAGE ================= */
.school-image {
    flex: 1;
    background: url('https://z-cdn-media.chatglm.cn/files/a3138309-f1d8-4017-8871-48d8c97bd14a.jpeg?auth_key=1868372262-99c3c818409344548dbe31f25c13b161-0-b77510b789dc65a02bd755a119e8c9b4') center center/cover no-repeat;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 35px;
    color: white;
    opacity: 0; /* Hidden initially */
    animation: slideInLeft 1s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
    animation-delay: 0.5s;
}

.school-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(10,37,64,0.8), rgba(10,37,64,0.4));
    z-index: 1;
}

.school-info {
    position: relative;
    z-index: 2;
}

.school-name { font-size: 2rem; font-weight: 700; margin-bottom: 10px; }
.school-location { font-size: 1.2rem; opacity: 0.9; }
.school-motto { margin-top: 15px; font-style: italic; opacity: 0.8; font-size: 0.95rem; line-height: 1.3; }

/* ================= REGISTER CARD ================= */
.register-card {
    flex: 1;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(18px);
    padding:50px 45px;
    color:#fff;
    border-left: 1px solid rgba(255,255,255,0.1);
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    opacity: 0; /* Hidden initially */
    animation: slideInRight 1s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
    animation-delay: 0.7s;
}

/* ================= ELEMENT ANIMATIONS (STAGGER) ================= */
.anim-fade-up {
    opacity: 0;
    animation: fadeInUp 0.6s ease forwards;
}

/* Delays */
.delay-100 { animation-delay: 0.9s; }
.delay-200 { animation-delay: 1.1s; }
.delay-300 { animation-delay: 1.3s; }
.delay-400 { animation-delay: 1.4s; }
.delay-500 { animation-delay: 1.5s; }
.delay-600 { animation-delay: 1.6s; }
.delay-700 { animation-delay: 1.7s; }

/* ================= LOGO ================= */
.school-logo {
    width: 65px;
    height: 65px;
    margin: 0 auto 25px;
    display: block;
    background-color: white;
    border-radius: 50%;
    padding: 8px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
    animation: popIn 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
    animation-delay: 0.9s;
}

.school-logo img { width: 100%; height: 100%; object-fit: contain; }

/* ================= FORM ================= */
.form-label{ font-weight:600; font-size:.8rem; margin-bottom: 4px; letter-spacing: 0.5px; }

.input-group {
    background: rgba(255,255,255,0.15);
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.1);
    transition: all 0.3s ease;
    overflow: hidden;
    margin-bottom: 16px;
}

.input-group:focus-within {
    background: rgba(255,255,255,0.25);
    border-color: rgba(255,255,255,0.4);
    transform: scale(1.02);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.input-group-text {
    border-radius: 10px 0 0 10px; 
    background: transparent; 
    border: none; 
    color: white;
    padding: 8px 10px;
}

.form-control, .form-select {
    padding:8px 10px;
    border:none;
    background:transparent;
    color:#fff;
    box-shadow: none;
    height: auto;
    font-size: 0.85rem;
}

.form-control:focus, .form-select:focus { background:transparent; color:#fff; box-shadow: none; }
.form-control::placeholder{ color:#e5e7eb; }
.form-select option { color: #000; }

/* ================= BUTTON ================= */
.btn-register{
    width:100%;
    padding:12px;
    border-radius:10px;
    border:none;
    font-weight:600;
    color:#fff;
    background:linear-gradient(90deg,var(--blue-main),#38BDF8);
    transition:.4s;
    position:relative;
    overflow:hidden;
    margin-top:12px;
    font-size: 0.9rem;
    box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
}

.btn-register:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(0,0,0,.4);
}

/* Button Ripple Effect */
.btn-register::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}
.btn-register:active::after {
    width: 300px;
    height: 300px;
}

/* Loading effect */
.btn-register.loading{
    pointer-events:none;
    opacity:.8;
    color: transparent;
}

.btn-register.loading::after{
    content:'';
    width:18px;
    height:18px;
    border:3px solid #fff;
    border-top-color:transparent;
    border-radius:50%;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    animation:spin 1s linear infinite;
    background: transparent;
}

/* ================= ALERT ================= */
.alert{
    border-radius:10px;
    border: none;
    margin-bottom: 18px;
    font-size: 0.8rem;
    padding: 10px 15px;
    backdrop-filter: blur(5px);
}

.alert-danger { background-color: rgba(220, 53, 69, 0.25); color: #fff; border: 1px solid rgba(220, 53, 69, 0.5); }

/* ================= FOOTER ================= */
.register-footer{
    text-align:center;
    margin-top:25px;
    font-size:.85rem;
    opacity: 0.8;
    transition: opacity 0.3s;
}

.register-footer a{
    color:#fff;
    font-weight:600;
    text-decoration:none;
    border-bottom: 1px dashed rgba(255,255,255,0.5);
    padding-bottom: 2px;
    transition: all 0.3s;
}

.register-footer a:hover{
    border-bottom-color: #fff;
    text-shadow: 0 0 10px rgba(255,255,255,0.5);
}

/* ================= DECORATIVE ELEMENTS ================= */
.decorative-element {
    position: absolute;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05));
    z-index: 1;
    animation: floatContainer 10s infinite ease-in-out;
}

.decorative-element-1 { width: 280px; height: 280px; top: -140px; right: -120px; }
.decorative-element-2 { width: 200px; height: 200px; bottom: -90px; left: -90px; animation-delay: -5s; }

/* ================= RESPONSIVE ================= */
@media (max-width: 992px) {
    .register-container {
        flex-direction: column;
        width: 90%;
        height: auto;
        max-height: 90vh;
        animation: fadeInUp 1s ease forwards; /* Use fade up instead of slide on mobile */
    }
    
    .school-image {
        min-height: 200px;
        animation: fadeInUp 1s ease forwards;
    }
    
    .register-card {
        border-left: none;
        border-top: 1px solid rgba(255,255,255,0.1);
        padding: 35px 30px;
        animation: fadeInUp 1s ease forwards;
    }
}

@media (max-width: 480px) {
    .register-container { width: 95%; }
    .school-image { min-height: 200px; padding: 20px; }
    .school-name { font-size: 1.5rem; }
    .register-card { padding: 30px 20px; }
    .school-logo { width: 50px; height: 50px; }
}
</style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader-spinner"></div>
    </div>

    <!-- Decorative elements -->
    <div class="decorative-element decorative-element-1"></div>
    <div class="decorative-element decorative-element-2"></div>

<div class="register-container">
    <!-- School Image Section -->
    <div class="school-image">
        <div class="school-info anim-fade-up delay-100">
            <h2 class="school-name">SMKN 1 KAWALI</h2>
            <p class="school-location">KAB. CIAMIS</p>
            <p class="school-motto">"Membangun Masa Depan Melalui Pendidikan Berkualitas"</p>
        </div>
    </div>
    
    <!-- Register Form Section -->
    <div class="register-card">
        <!-- School Logo -->
        <div class="school-logo">
            <img src="https://z-cdn-media.chatglm.cn/files/9d0ca30d-954f-4e5f-bf66-bfb4a115ecfc.png?auth_key=1868371606-21df551d97db4bbbadc671626e9e83a6-0-e0a0e057a73f58e5763d4379b39763b1" alt="Logo SMKN 1 Kawali">
        </div>
        
        <h3 class="text-center anim-fade-up delay-200" style="font-weight:700; margin-bottom:10px; font-size: 1.3rem;">
            <i class="bi bi-person-plus-fill me-1"></i>
            Registrasi Akun
        </h3>
        
        <p class="register-subtitle anim-fade-up delay-300" style="text-align: center; font-size: 0.9rem; margin-bottom: 30px; font-weight: 500; opacity: 0.9;">
            Buat akun baru untuk mengakses sistem
        </p>

        @if($errors->any())
            <div class="alert alert-danger anim-fade-up delay-200">
                {{ $errors->first() }}
            </div>
        @endif

        <form id="registerForm" action="{{ url('/register') }}" method="POST">
            @csrf

            <div class="anim-fade-up delay-300">
                <label class="form-label">Nama Lengkap</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-person-fill"></i>
                    </span>
                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Masukkan nama lengkap..."
                           required>
                </div>
            </div>

            <div class="anim-fade-up delay-400">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope-fill"></i>
                    </span>
                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Masukkan email aktif..."
                           required>
                </div>
            </div>

            <div class="anim-fade-up delay-500">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="Masukkan password..."
                           required>
                </div>
            </div>

            <div class="anim-fade-up delay-600">
                <label class="form-label">Role</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-shield-fill"></i>
                    </span>
                    <select name="role" class="form-select" required>
                        <option value="" disabled selected>Pilih Role...</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn-register anim-fade-up delay-700">
                Buat Akun
            </button>
        </form>

        <div class="register-footer anim-fade-up delay-700">
            Sudah punya akun?
            <a href="{{ url('/login') }}">Login</a>
        </div>
    </div>
</div>

<script>
// ================= PRELOADER & JS LOGIC =================
window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    const container = document.querySelector('.register-container');
    
    // Fade out preloader
    setTimeout(() => {
        preloader.style.opacity = '0';
        setTimeout(() => {
            preloader.style.visibility = 'hidden';
            // Reveal container
            container.style.opacity = '1';
        }, 500);
    }, 800); // Small delay for effect
});

const form = document.getElementById('registerForm');
const button = form.querySelector('button[type="submit"]');

form.addEventListener('submit', (e) => {
    // Prevent default is handled by form action, just animation here
    button.classList.add('loading');
    // Keep text hidden while loading
    button.innerText = '';
});

// Add visual focus effect
const inputs = document.querySelectorAll('.form-control, .form-select');
inputs.forEach(input => {
    input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'scale(1.02)';
        this.parentElement.style.boxShadow = '0 0 15px rgba(255,255,255,0.2)';
    });
    
    input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'scale(1)';
        this.parentElement.style.boxShadow = 'none';
    });
});
</script>

</body>
</html>