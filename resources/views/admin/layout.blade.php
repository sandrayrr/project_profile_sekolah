<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: #f5f7fb;
            font-family: 'Segoe UI', sans-serif;
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            height: 100vh;
            background: #ffffff;
            position: fixed;
            border-right: 1px solid #e5e7eb;
            padding: 20px;
            overflow-y: auto;
            box-shadow: 2px 0 5px rgba(0,0,0,0.05);
        }

        .sidebar .title {
            font-size: 22px;
            font-weight: 800;
            margin-bottom: 20px;
            color: #111827;
        }

        .sidebar .menu-title {
            font-size: 12px;
            font-weight: 700;
            color: #6b7280;
            margin-top: 25px;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .sidebar a {
            text-decoration: none;
            color: #374151;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            border-radius: 10px;
            transition: .25s ease;
            font-size: 15px;
            font-weight: 500;
        }

        .sidebar a:hover {
            background: #eef2ff;
            color: #4f46e5;
            transform: translateX(4px);
        }

        .sidebar i {
            margin-right: 12px;
            font-size: 18px;
        }

        .logout-btn {
            color: #dc2626 !important;
            font-weight: 600;
            margin-top: 20px;
            padding: 10px 15px;
            border-radius: 10px;
            display: block;
        }

        .logout-btn:hover {
            background: #ffe4e6;
            transform: translateX(4px);
            color: #b91c1c !important;
        }

        /* CONTENT AREA */
        .content {
            margin-left: 260px;
            padding: 35px 40px;
        }

        /* STAT CARDS (sinkron dengan dashboard) */
        .card-stat {
            border-radius: 16px;
            padding: 22px;
            transition: .25s ease;
            background: #ffffff;
            border-left: 6px solid #4f46e5;
        }

        .card-stat:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }

        .stat-title {
            font-size: 15px;
            font-weight: 600;
            color: #6b7280;
        }

        .stat-value {
            font-size: 32px;
            font-weight: 800;
            margin-top: 6px;
            color: #111827;
        }

        .big-card {
            height: 160px;
            border-radius: 18px;
            background: white;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: .3s ease;
        }

        .big-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }
    </style>
</head>
<body>

    @include('admin.partials.sidebar')

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
