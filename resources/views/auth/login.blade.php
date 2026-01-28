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

/* ================= BODY ================= */
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

/* Background pattern */
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

/* Gradient movement */
@keyframes oceanMove{
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
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
    animation: fadeUp .9s ease;
}

/* Card animation */
@keyframes fadeUp{
    from{opacity:0;transform:translateY(30px)}
    to{opacity:1;transform:translateY(0)}
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

.school-name {
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.school-location {
    font-size: 1.3rem;
    opacity: 0.9;
}

.school-motto {
    margin-top: 20px;
    font-style: italic;
    opacity: 0.8;
    font-size: 1.1rem;
}

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
}

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
}

.school-logo:hover {
    transform: scale(1.05);
}

.school-logo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

/* ================= HEADER ================= */
.login-card h3{
    font-weight:700;
    margin-bottom:15px;
    text-align:center;
}

.login-subtitle {
    text-align: center;
    font-size: 1.1rem;
    margin-bottom: 35px;
    font-weight: 500;
    opacity: 0.9;
}

/* ================= FORM ================= */
.form-label{
    font-weight:600;
    font-size:.9rem;
}

.form-control{
    border-radius:14px;
    padding:12px 14px;
    border:none;
    background:rgba(255,255,255,.25);
    color:#fff;
    transition:.3s;
}

.form-control::placeholder{
    color:#e5e7eb;
}

.form-control:focus{
    background:rgba(255,255,255,.35);
    box-shadow:0 0 0 3px rgba(59,130,246,.4);
    color:#fff;
}

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
}

.btn-login:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 30px rgba(0,0,0,.35);
}

/* Loading effect */
.btn-login.loading{
    pointer-events:none;
    opacity:.8;
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
}

@keyframes spin{
    to{transform:rotate(360deg) translate(-50%,-50%)}
}

/* ================= ALERT ================= */
.alert{
    border-radius:14px;
    border: none;
    margin-bottom: 20px;
}

.alert-danger {
    background-color: rgba(220, 53, 69, 0.2);
    color: #fff;
}

/* ================= FOOTER ================= */
.login-footer{
    text-align:center;
    margin-top:20px;
    font-size:.9rem;
}

.login-footer a{
    color:#E0F2FE;
    font-weight:600;
    text-decoration:none;
}

.login-footer a:hover{
    text-decoration:underline;
}

/* ================= DECORATIVE ELEMENTS ================= */
.decorative-element {
    position: absolute;
    border-radius: 50%;
    background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05));
    z-index: 1;
}

.decorative-element-1 {
    width: 300px;
    height: 300px;
    top: -150px;
    right: -100px;
}

.decorative-element-2 {
    width: 200px;
    height: 200px;
    bottom: -100px;
    left: -100px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 992px) {
    .login-container {
        flex-direction: column;
        width: 90%;
        height: auto;
        max-height: 90vh;
    }
    
    .school-image {
        min-height: 250px;
    }
    
    .login-card {
        border-left: none;
        border-top: 1px solid rgba(255,255,255,0.1);
        padding: 30px 20px;
    }
    
    .school-name {
        font-size: 1.8rem;
    }
    
    .school-logo {
        width: 80px;
        height: 80px;
    }
}

@media (max-width: 480px) {
    .login-container {
        width: 95%;
    }
    
    .school-image {
        min-height: 200px;
        padding: 20px;
    }
    
    .school-name {
        font-size: 1.5rem;
    }
    
    .login-card {
        padding: 25px 15px;
    }
    
    .school-logo {
        width: 70px;
        height: 70px;
    }
}
</style>
</head>

<body>
    <!-- Decorative elements -->
    <div class="decorative-element decorative-element-1"></div>
    <div class="decorative-element decorative-element-2"></div>

<div class="login-container">
    <!-- School Image Section -->
    <div class="school-image">
        <div class="school-info">
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
        
        <h3 class="text-center">
            <i class="bi bi-shield-lock-fill me-1"></i>
            Login Admin
        </h3>
        
        <p class="login-subtitle">Selamat datang di Portal Admin SMKN 1 Kawali</p>

        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form id="loginForm" action="{{ url('/login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text" style="border-radius: 14px 0 0 14px; background: rgba(255,255,255,0.25); border: none; color: white;">
                        <i class="bi bi-envelope-fill"></i>
                    </span>
                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="admin@example.com"
                           style="border-radius: 0 14px 14px 0;"
                           required>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text" style="border-radius: 14px 0 0 14px; background: rgba(255,255,255,0.25); border: none; color: white;">
                        <i class="bi bi-lock-fill"></i>
                    </span>
                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="••••••••"
                           style="border-radius: 0 14px 14px 0;"
                           required>
                </div>
            </div>

            <button type="submit" class="btn-login">
                Masuk
            </button>
        </form>

        <div class="login-footer">
            Belum punya akun?
            <a href="{{ url('/register') }}">Daftar</a>
        </div>
    </div>
</div>

<script>
/* ================= SMOOTH JS ================= */
const form = document.getElementById('loginForm');
const button = form.querySelector('button');

form.addEventListener('submit', () => {
    button.classList.add('loading');
    button.innerText = '';
});

// Add focus effect to form inputs
const inputs = document.querySelectorAll('.form-control');
inputs.forEach(input => {
    input.addEventListener('focus', function() {
        this.parentElement.style.transform = 'scale(1.02)';
    });
    
    input.addEventListener('blur', function() {
        this.parentElement.style.transform = 'scale(1)';
    });
});
</script>

</body>
</html>