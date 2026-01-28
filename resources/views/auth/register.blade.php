<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin - SMKN 1 Kawali</title>
    
    <!-- External CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* ================= ROOT ================= */
        :root {
            --blue-dark: #0A2540;
            --blue-main: #0D6EFD;
            --blue-soft: #3B82F6;
            --blue-light: #E8F1FF;
            --yellow-accent: #FFC107;
            --red-accent: #DC3545;
        }

        /* ================= BODY ================= */
        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, var(--blue-dark), var(--blue-main), #38BDF8);
            background-size: 300% 300%;
            animation: oceanMove 12s ease infinite;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
            position: relative;
            padding: 20px 0;
        }

        /* Background pattern */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(255,255,255,0.05) 0%, transparent 8%),
                radial-gradient(circle at 80% 50%, rgba(255,255,255,0.07) 0%, transparent 8%),
                radial-gradient(circle at 40% 80%, rgba(255,255,255,0.05) 0%, transparent 8%);
            z-index: 1;
        }

        /* Gradient movement */
        @keyframes oceanMove {
            0% { background-position: 0% 50% }
            50% { background-position: 100% 50% }
            100% { background-position: 0% 50% }
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
            animation: fadeUp .9s ease;
        }

        /* Card animation */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px) }
            to { opacity: 1; transform: translateY(0) }
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
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .school-location {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .school-motto {
            margin-top: 15px;
            font-style: italic;
            opacity: 0.8;
            font-size: 0.95rem;
            line-height: 1.3;
        }

        /* ================= REGISTER CARD ================= */
        .register-card {
            flex: 1;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(18px);
            padding: 50px 45px;
            color: #fff;
            border-left: 1px solid rgba(255,255,255,0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

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
        .register-card h3 {
            font-weight: 700;
            margin-bottom: 10px;
            text-align: center;
            font-size: 1.3rem;
        }

        .register-subtitle {
            text-align: center;
            font-size: 0.9rem;
            margin-bottom: 30px;
            font-weight: 500;
            opacity: 0.9;
        }

        /* ================= FORM ================= */
        .form-label {
            font-weight: 600;
            font-size: .8rem;
            margin-bottom: 4px;
        }

        .form-control, .form-select {
            border-radius: 10px;
            padding: 8px 10px;
            border: none;
            background: rgba(255,255,255,.25);
            color: #fff;
            transition: .3s;
            font-size: 0.85rem;
            height: auto;
        }

        .form-control::placeholder {
            color: #e5e7eb;
        }

        .form-control:focus, .form-select:focus {
            background: rgba(255,255,255,.35);
            box-shadow: 0 0 0 3px rgba(59,130,246,.4);
            color: #fff;
        }

        .form-select option {
            color: #000;
        }

        .mb-3 {
            margin-bottom: 0.8rem !important;
        }

        .mb-4 {
            margin-bottom: 1.2rem !important;
        }

        .input-group {
            margin-bottom: 16px;
        }

        .input-group-text {
            padding: 8px 10px;
            font-size: 0.85rem;
            border-radius: 10px 0 0 10px;
            background: rgba(255,255,255,0.25);
            border: none;
            color: white;
        }

        .form-control, .form-select {
            border-radius: 0 10px 10px 0;
        }

        /* ================= BUTTON ================= */
        .btn-register {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: none;
            font-weight: 600;
            color: #fff;
            background: linear-gradient(90deg, var(--blue-main), #38BDF8);
            transition: .4s;
            position: relative;
            overflow: hidden;
            margin-top: 12px;
            font-size: 0.9rem;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,.35);
        }

        /* Loading effect */
        .btn-register.loading {
            pointer-events: none;
            opacity: .8;
            color: transparent;
        }

        .btn-register.loading::after {
            content: '';
            width: 18px;
            height: 18px;
            border: 3px solid #fff;
            border-top-color: transparent;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg) translate(-50%,-50%) }
        }

        /* ================= ALERT ================= */
        .alert {
            border-radius: 10px;
            border: none;
            margin-bottom: 18px;
            font-size: 0.8rem;
            padding: 10px 15px;
        }

        .alert-danger {
            background-color: rgba(220, 53, 69, 0.2);
            color: #fff;
        }

        /* ================= FOOTER ================= */
        .register-footer {
            text-align: center;
            margin-top: 25px;
            font-size: .85rem;
        }

        .register-footer a {
            color: #E0F2FE;
            font-weight: 600;
            text-decoration: none;
        }

        .register-footer a:hover {
            text-decoration: underline;
        }

        /* ================= DECORATIVE ELEMENTS ================= */
        .decorative-element {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05));
            z-index: 1;
        }

        .decorative-element-1 {
            width: 280px;
            height: 280px;
            top: -140px;
            right: -120px;
        }

        .decorative-element-2 {
            width: 200px;
            height: 200px;
            bottom: -90px;
            left: -90px;
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 992px) {
            .register-container {
                flex-direction: column;
                width: 90%;
                height: auto;
                max-height: 90vh;
            }
            
            .school-image {
                min-height: 220px;
            }
            
            .register-card {
                border-left: none;
                border-top: 1px solid rgba(255,255,255,0.1);
                padding: 35px 30px;
            }
            
            .school-name {
                font-size: 1.8rem;
            }
            
            .school-logo {
                width: 55px;
                height: 55px;
            }
        }

        @media (max-width: 480px) {
            .register-container {
                width: 95%;
            }
            
            .school-image {
                min-height: 200px;
                padding: 20px;
            }
            
            .school-name {
                font-size: 1.5rem;
            }
            
            .register-card {
                padding: 30px 20px;
            }
            
            .school-logo {
                width: 50px;
                height: 50px;
            }
            
            .register-card h3 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Decorative elements -->
    <div class="decorative-element decorative-element-1"></div>
    <div class="decorative-element decorative-element-2"></div>

    <div class="register-container">
        <!-- School Image Section -->
        <div class="school-image">
            <div class="school-info">
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
            
            <h3 class="text-center">
                <i class="bi bi-person-plus-fill me-1"></i>
                Registrasi Akun
            </h3>
            
            <p class="register-subtitle">Buat akun baru untuk mengakses sistem</p>

            @if($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form id="registerForm" action="{{ url('/register') }}" method="POST">
                @csrf

                <div class="mb-3">
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

                <div class="mb-3">
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

                <div class="mb-3">
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

                <div class="mb-4">
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

                <button type="submit" class="btn-register">
                    Buat Akun
                </button>
            </form>

            <div class="register-footer">
                Sudah punya akun?
                <a href="{{ url('/login') }}">Login</a>
            </div>
        </div>
    </div>

    <script>
        /* ================= SMOOTH JS ================= */
        const form = document.getElementById('registerForm');
        const button = form.querySelector('button');

        form.addEventListener('submit', () => {
            button.classList.add('loading');
            button.innerText = '';
        });

        // Add focus effect to form inputs
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