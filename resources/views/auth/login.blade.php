<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login – Admin Panel</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
    body {
        height: 100vh;
        margin: 0;
        background: linear-gradient(135deg, #6366F1, #8B5CF6, #EC4899);
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Poppins', sans-serif;
        background-size: 300% 300%;
        animation: gradientMove 12s ease infinite;
    }

    @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .login-card {
        background: rgba(255,255,255,0.15);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        padding: 40px;
        width: 380px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        color: #fff;
    }

    .login-card h3 {
        font-weight: 700;
        margin-bottom: 25px;
    }

    .form-control {
        border-radius: 12px;
        border: none;
        padding: 12px;
        background: rgba(255,255,255,0.3);
        color: #fff;
    }

    .form-control::placeholder {
        color: #e5e5e5;
    }

    .btn-gradient {
        border: none;
        border-radius: 12px;
        padding: 12px;
        width: 100%;
        font-weight: 600;
        background: linear-gradient(90deg, #4F46E5, #9333EA);
        transition: 0.3s;
        color: #fff;
    }

    .btn-gradient:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(0,0,0,0.25);
    }

    a {
        color: #fff;
        font-weight: 500;
        text-decoration: underline;
    }

    .alert {
        border-radius: 12px;
    }
</style>

</head>
<body>

<div class="login-card">

    <h3 class="text-center">
        <i class="bi bi-shield-lock-fill"></i> Login Admin
    </h3>

    @if($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
    @endif

    <form action="{{ url('/login') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="fw-semibold">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email..." required>
        </div>

        <div class="mb-3">
            <label class="fw-semibold">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password..." required>
        </div>

        <button type="submit" class="btn-gradient">Masuk Sekarang</button>
    </form>

    <p class="text-center mt-3">
        Belum punya akun? <a href="{{ url('/register') }}">Daftar</a>
    </p>
</div>

</body>
</html>

