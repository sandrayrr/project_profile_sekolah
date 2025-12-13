<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register – Admin Panel</title>

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
    .register-card {
        background: rgba(255,255,255,0.15);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        padding: 40px;
        width: 380px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        color: #fff;
    }
    .register-card h3 {
        font-weight: 700;
        margin-bottom: 25px;
    }
    .form-control, .form-select {
        border-radius: 12px;
        border: none;
        padding: 12px;
        background: rgba(255,255,255,0.3);
        color: #fff;
    }
    .form-control::placeholder {
        color: #e5e5e5;
    }
    .form-select option {
        color: #000;
    }
    .btn-gradient {
        border: none;
        border-radius: 12px;
        padding: 12px;
        width: 100%;
        font-weight: 600;
        background: linear-gradient(90deg, #10B981, #059669);
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

<div class="register-card">

    <h3 class="text-center">
        <i class="bi bi-person-plus-fill"></i> Registrasi Akun
    </h3>

    @if($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
    @endif

    <form action="{{ url('/register') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="fw-semibold">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" placeholder="Masukkan nama lengkap..." required>
        </div>

        <div class="mb-3">
            <label class="fw-semibold">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email aktif..." required>
        </div>

        <div class="mb-3">
            <label class="fw-semibold">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password..." required>
        </div>

        <div class="mb-3">
            <label class="fw-semibold">Role</label>
            <select name="role" class="form-select" required>
                <option value="" disabled selected>Pilih Role...</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <button type="submit" class="btn-gradient">Buat Akun</button>
    </form>

    <p class="text-center mt-3">
        Sudah punya akun? <a href="{{ url('/login') }}">Login</a>
    </p>

</div>

</body>
</html>
