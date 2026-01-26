<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Admin - SMKN 1 Kawali</title>

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
    height:100vh;
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

@keyframes expandBorder {
    0% { width: 0%; opacity: 0; }
    100% { width: 100%; opacity: 1; }
}

/* ================= LOGIN CONTAINER ================= */
.login-container {
    display: flex;
    width: 90%;
    max-width: 1200px;
    height: 600px;
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
    background: url('https://z-cdn-media.chatglm.cn/files/4b32bc90-e636-4717-89c9-3eb55edd6d22.jpeg?auth_key=1868371325-7555fe276dad4f7f9f4a038559941fa6-0-d94ed658539c54b2930c98d45a90f965') center center/cover no-repeat;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 30px;
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

.school-name { font-size: 2.2rem; font-weight: 700; margin-bottom: 10px; }
.school-location { font-size: 1.3rem; opacity: 0.9; }
.school-motto { margin-top: 20px; font-style: italic; opacity: 0.8; font-size: 1.1rem; }

/* ================= LOGIN CARD ================= */
.login-card {
    flex: 1;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(18px);
    padding:40px;
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
.delay-400 { animation-delay: 1.5s; }
.delay-500 { animation-delay: 1.7s; }

/* ================= LOGO ================= */
.school-logo {
    width: 90px;
    height: 90px;
    margin: 0 auto 25px;
    display: block;
    background-color: white;
    border-radius: 50%;
    padding: 10px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
    animation: popIn 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
    animation-delay: 0.9s;
}

.school-logo img { width: 100%; height: 100%; object-fit: contain; }

/* ================= FORM ================= */
.form-label{ font-weight:600; font-size:.9rem; letter-spacing: 0.5px;}

.input-group {
    background: rgba(255,255,255,0.15);
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,0.1);
    transition: all 0.3s ease;
    overflow: hidden;
}

.input-group:focus-within {
    background: rgba(255,255,255,0.25);
    border-color: rgba(255,255,255,0.4);
    transform: scale(1.02);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.input-group-text {
    border-radius: 14px 0 0 14px; 
    background: transparent; 
    border: none; 
    color: white;
    padding: 12px 14px;
}

.form-control{
    padding:12px 14px;
    border:none;
    background:transparent;
    color:#fff;
    box-shadow: none;
}

.form-control:focus { background:transparent; color:#fff; box-shadow: none; }
.form-control::placeholder{ color:#e5e7eb; }

/* ================= BUTTON ================= */
.btn-login{
    width:100%;
    padding:12px;
    border-radius:14px;
    border:none;
    font-weight:600;
    color:#fff;
    background:linear-gradient(90deg,var(--blue-main),#38BDF8);
    transition:.4s;
    position:relative;
    overflow:hidden;
    margin-top:10px;
    box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
}

.btn-login:hover {
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(0,0,0,.4);
}

/* Button Ripple Effect */
.btn-login::after {
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
.btn-login:active::after {
    width: 300px;
    height: 300px;
}

/* Loading effect */
.btn-login.loading{
    pointer-events:none;
    opacity:.8;
    color: transparent;
}

.btn-login.loading::after{
    content:'';
    width:22px;
    height:22px;
    border:3px solid #fff;
    border-top-color:transparent;
    border-radius:50%;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    animation:spin 1s linear infinite;
    background: transparent; /* Override ripple */
}

/* ================= ALERT ================= */
.alert{
    border-radius:14px;
    border: none;
    margin-bottom: 20px;
    backdrop-filter: blur(5px);
}

.alert-danger { background-color: rgba(220, 53, 69, 0.25); color: #fff; border: 1px solid rgba(220, 53, 69, 0.5); }

/* ================= FOOTER ================= */
.login-footer{
    text-align:center;
    margin-top:20px;
    font-size:.9rem;
    opacity: 0.8;
    transition: opacity 0.3s;
}
.login-footer:hover { opacity: 1; }

.login-footer a{
    color:#fff;
    font-weight:600;
    text-decoration:none;
    border-bottom: 1px dashed rgba(255,255,255,0.5);
    padding-bottom: 2px;
    transition: all 0.3s;
}

.login-footer a:hover{
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

.decorative-element-1 { width: 300px; height: 300px; top: -150px; right: -100px; }
.decorative-element-2 { width: 200px; height: 200px; bottom: -100px; left: -100px; animation-delay: -5s; }

/* ================= RESPONSIVE ================= */
@media (max-width: 992px) {
    .login-container {
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
    
    .login-card {
        border-left: none;
        border-top: 1px solid rgba(255,255,255,0.1);
        padding: 30px 20px;
        animation: fadeInUp 1s ease forwards;
    }
}

@media (max-width: 480px) {
    .login-container { width: 95%; }
    .school-image { padding: 20px; }
    .school-name { font-size: 1.5rem; }
    .login-card { padding: 25px 15px; }
    .school-logo { width: 70px; height: 70px; }
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

<div class="login-container">
    <!-- School Image Section -->
    <div class="school-image">
        <div class="school-info anim-fade-up delay-100">
            <h2 class="school-name">SMKN 1 KAWALI</h2>
            <p class="school-location">KAB. CIAMIS</p>
            <p class="school-motto">"Membangun Masa Depan Melalui Pendidikan Berkualitas"</p>
        </div>
    </div>
    
    <!-- Login Form Section -->
    <div class="login-card">
        <!-- School Logo -->
        <div class="school-logo">
            <img src="https://z-cdn-media.chatglm.cn/files/9d0ca30d-954f-4e5f-bf66-bfb4a115ecfc.png?auth_key=1868371606-21df551d97db4bbbadc671626e9e83a6-0-e0a0e057a73f58e5763d4379b39763b1" alt="Logo SMKN 1 Kawali">
        </div>
        
        <h3 class="text-center anim-fade-up delay-200">
            <i class="bi bi-shield-lock-fill me-1"></i>
            Login Admin
        </h3>
        
        <p class="login-subtitle anim-fade-up delay-300" style="text-align: center; font-size: 1.1rem; margin-bottom: 35px; font-weight: 500; opacity: 0.9;">
            Selamat datang di Portal Admin SMKN 1 Kawali
        </p>

        @if($errors->any())
            <div class="alert alert-danger anim-fade-up delay-200">
                {{ $errors->first() }}
            </div>
        @endif

        <form id="loginForm" action="{{ url('/login') }}" method="POST">
            @csrf

            <div class="mb-3 anim-fade-up delay-300">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope-fill"></i>
                    </span>
                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="admin@example.com"
                           required>
                </div>
            </div>

            <div class="mb-4 anim-fade-up delay-400">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="••••••••"
                           required>
                </div>
            </div>

            <button type="submit" class="btn-login anim-fade-up delay-500">
                Masuk
            </button>
        </form>

        <div class="login-footer anim-fade-up delay-500">
            Belum punya akun?
            <a href="{{ url('/register') }}">Daftar Sekarang</a>
        </div>
    </div>
</div>

<script>
// ================= PRELOADER & JS LOGIC =================
window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    const container = document.querySelector('.login-container');
    
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

const form = document.getElementById('loginForm');
const button = form.querySelector('button[type="submit"]');

form.addEventListener('submit', (e) => {
    // Prevent default is handled by form action, just animation here
    button.classList.add('loading');
    // Keep text hidden while loading
    button.innerText = '';
});

// Add visual focus effect
const inputs = document.querySelectorAll('.form-control');
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