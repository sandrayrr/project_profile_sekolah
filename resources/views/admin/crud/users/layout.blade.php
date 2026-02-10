@extends('admin.layout')

@section('title', 'Manajemen User')

@section('content')
<style>
    :root {
        --sky-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --sky-secondary: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);
        --sky-soft: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
        --sky-warm: linear-gradient(135deg, #d299c2 0%, #fef9d7 100%);
        --sky-cool: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
        --sky-sunset: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        --sky-ocean: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        --sky-mint: linear-gradient(135deg, #d4fc79 0%, #96e6a1 100%);
        --white: #ffffff;
        --gray-50: #f8fafc;
        --gray-100: #f1f5f9;
        --gray-200: #e2e8f0;
        --gray-300: #cbd5e1;
        --gray-400: #94a3b8;
        --gray-500: #64748b;
        --gray-600: #475569;
        --gray-700: #334155;
        --gray-800: #1e293b;
        --gray-900: #0f172a;
        --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.05);
        --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.07);
        --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
        --shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.1);
        --shadow-sky: 0 10px 30px rgba(102, 166, 255, 0.3);
        --shadow-purple: 0 10px 30px rgba(118, 75, 162, 0.3);
        --online-green: #10b981;
        --offline-red: #ef4444;
        --offline-gray: #9ca3af;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 50%, #cbd5e1 100%);
        min-height: 100vh;
        color: var(--gray-800);
        position: relative;
        overflow-x: hidden;
    }
    
    /* Animated Sky Background */
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 20%, rgba(137, 247, 254, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(102, 166, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 50% 50%, rgba(118, 75, 162, 0.05) 0%, transparent 50%);
        z-index: -1;
        animation: skyFloat 30s ease-in-out infinite;
    }
    
    @keyframes skyFloat {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(-20px, -20px) scale(1.05); }
        66% { transform: translate(20px, -10px) scale(0.95); }
    }
    
    /* Animations */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
    
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    
    @keyframes statusPulse {
        0%, 100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); }
        50% { box-shadow: 0 0 0 8px rgba(16, 185, 129, 0); }
    }
    
    /* Centered Container */
    .centered-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }
    
    /* Symmetrical Header */
    .symmetrical-header {
        background: var(--sky-secondary);
        border-radius: 24px;
        padding: 3rem;
        margin-bottom: 3rem;
        text-align: center;
        box-shadow: var(--shadow-xl);
        position: relative;
        overflow: hidden;
        animation: fadeInDown 0.8s ease-out;
    }
    
    .symmetrical-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: rotate 40s linear infinite;
    }
    
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    .header-content {
        position: relative;
        z-index: 1;
    }
    
    .header-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: white;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }
    
    .header-subtitle {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.125rem;
        margin-bottom: 2rem;
    }
    
    .header-actions {
        display: flex;
        justify-content: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    
    .sky-btn {
        padding: 0.875rem 2rem;
        border-radius: 12px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.95rem;
    }
    
    .sky-btn-primary {
        background: white;
        color: #66a6ff;
        box-shadow: var(--shadow-lg);
    }
    
    .sky-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-xl);
    }
    
    .sky-btn-secondary {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .sky-btn-secondary:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-2px);
    }
    
    /* Symmetrical Stats Grid */
    .symmetrical-stats {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
        margin-bottom: 3rem;
        animation: scaleIn 0.8s ease-out 0.2s both;
    }
    
    .sky-stat-card {
        background: white;
        border-radius: 20px;
        padding: 2rem 1.5rem;
        text-align: center;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border: 2px solid transparent;
    }
    
    .sky-stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
    }
    
    .sky-stat-card:nth-child(1)::before { background: var(--sky-secondary); }
    .sky-stat-card:nth-child(2)::before { background: var(--sky-soft); }
    .sky-stat-card:nth-child(3)::before { background: var(--sky-warm); }
    .sky-stat-card:nth-child(4)::before { background: var(--sky-cool); }
    
    .sky-stat-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-xl);
    }
    
    .sky-stat-card:hover:nth-child(1) { border-color: #66a6ff; box-shadow: var(--shadow-sky); }
    .sky-stat-card:hover:nth-child(2) { border-color: #a8edea; box-shadow: 0 10px 30px rgba(168, 237, 234, 0.3); }
    .sky-stat-card:hover:nth-child(3) { border-color: #d299c2; box-shadow: 0 10px 30px rgba(210, 153, 194, 0.3); }
    .sky-stat-card:hover:nth-child(4) { border-color: #8ec5fc; box-shadow: 0 10px 30px rgba(142, 197, 252, 0.3); }
    
    .stat-icon-sym {
        width: 64px;
        height: 64px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: white;
        margin: 0 auto 1rem;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
    }
    
    .sky-stat-card:hover .stat-icon-sym {
        transform: scale(1.1) rotate(5deg);
    }
    
    .icon-sym-1 { background: var(--sky-secondary); }
    .icon-sym-2 { background: var(--sky-soft); }
    .icon-sym-3 { background: var(--sky-warm); }
    .icon-sym-4 { background: var(--sky-cool); }
    
    .stat-number-sym {
        font-size: 2.25rem;
        font-weight: 800;
        color: var(--gray-800);
        margin-bottom: 0.5rem;
    }
    
    .stat-label-sym {
        color: var(--gray-500);
        font-size: 0.875rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    /* Symmetrical Filter */
    .symmetrical-filter {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        margin-bottom: 3rem;
        box-shadow: var(--shadow-md);
        animation: fadeInUp 0.8s ease-out 0.4s both;
    }
    
    .filter-header-sym {
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .filter-title-sym {
        font-size: 1.5rem;
        font-weight: 700;
        background: var(--sky-secondary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 0.5rem;
    }
    
    .filter-subtitle-sym {
        color: var(--gray-500);
        font-size: 0.875rem;
    }
    
    .filter-form-sym {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        gap: 1.5rem;
        align-items: end;
    }
    
    .sym-input-group {
        position: relative;
    }
    
    .sym-input {
        width: 100%;
        padding: 1rem 1.25rem;
        border: 2px solid var(--gray-200);
        border-radius: 12px;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        background: var(--gray-50);
    }
    
    .sym-input:focus {
        outline: none;
        border-color: #66a6ff;
        background: white;
        box-shadow: 0 0 0 4px rgba(102, 166, 255, 0.1);
    }
    
    .search-sym-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--gray-400);
        pointer-events: none;
    }
    
    .search-sym-input {
        padding-left: 3rem;
    }
    
    /* Symmetrical User Grid */
    .symmetrical-users {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin-bottom: 3rem;
        animation: fadeInUp 0.8s ease-out 0.6s both;
    }
    
    .user-sym-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        text-align: center;
        box-shadow: var(--shadow-md);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .user-sym-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 80px;
        opacity: 0.1;
    }
    
    .user-sym-card:nth-child(3n+1)::before { background: var(--sky-secondary); }
    .user-sym-card:nth-child(3n+2)::before { background: var(--sky-soft); }
    .user-sym-card:nth-child(3n)::before { background: var(--sky-warm); }
    
    .user-sym-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: var(--shadow-xl);
    }
    
    .user-avatar-sym {
        width: 80px;
        height: 80px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: 700;
        color: white;
        margin: 0 auto 1.5rem;
        box-shadow: var(--shadow-lg);
        position: relative;
        z-index: 1;
    }
    
    .avatar-sym-admin { background: var(--sky-primary); }
    .avatar-sym-guru { background: var(--sky-ocean); }
    .avatar-sym-siswa { background: var(--sky-secondary); }
    
    .user-name-sym {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--gray-800);
        margin-bottom: 0.5rem;
    }
    
    .user-email-sym {
        color: var(--gray-500);
        font-size: 0.875rem;
        margin-bottom: 1.5rem;
    }
    
    .user-details-sym {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
    }
    
    .detail-sym-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem;
        background: var(--gray-50);
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .detail-sym-row:hover {
        background: var(--gray-100);
    }
    
    .detail-sym-label {
        font-size: 0.8125rem;
        color: var(--gray-500);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .detail-sym-value {
        font-size: 0.875rem;
        color: var(--gray-800);
        font-weight: 600;
    }
    
    .role-badge-sym {
        display: inline-block;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .badge-sym-admin {
        background: rgba(102, 126, 234, 0.1);
        color: #667eea;
        border: 1px solid rgba(102, 126, 234, 0.2);
    }
    
    .badge-sym-guru {
        background: rgba(79, 172, 254, 0.1);
        color: #0284c7;
        border: 1px solid rgba(79, 172, 254, 0.2);
    }
    
    .badge-sym-siswa {
        background: rgba(137, 247, 254, 0.1);
        color: #0891b2;
        border: 1px solid rgba(137, 247, 254, 0.2);
    }
    
    /* Online Status */
    .status-indicator {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.8125rem;
        font-weight: 600;
    }
    
    .status-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        position: relative;
    }
    
    .status-dot.online {
        background: var(--online-green);
        animation: statusPulse 2s infinite;
    }
    
    .status-dot.offline {
        background: var(--offline-red);
    }
    
    .status-dot.idle {
        background: var(--offline-gray);
    }
    
    .status-text {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .status-text.online {
        color: var(--online-green);
    }
    
    .status-text.offline {
        color: var(--offline-red);
    }
    
    .status-text.idle {
        color: var(--offline-gray);
    }
    
    .last-seen {
        font-size: 0.7rem;
        color: var(--gray-400);
        margin-top: 0.25rem;
    }
    
    .user-actions-sym {
        display: flex;
        gap: 0.75rem;
        justify-content: center;
    }
    
    .action-sym-btn {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        border: none;
        background: var(--gray-100);
        color: var(--gray-500);
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
    }
    
    .action-sym-btn:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
    }
    
    .action-sym-btn:hover.btn-view-sym { 
        background: var(--sky-secondary); 
        color: white; 
    }
    .action-sym-btn:hover.btn-edit-sym { 
        background: var(--sky-cool); 
        color: white; 
    }
    .action-sym-btn:hover.btn-delete-sym { 
        background: var(--sky-sunset); 
        color: white; 
    }
    
    /* Empty State */
    .empty-sym {
        grid-column: 1 / -1;
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 20px;
        box-shadow: var(--shadow-md);
    }
    
    .empty-sym-icon {
        width: 120px;
        height: 120px;
        margin: 0 auto 2rem;
        background: var(--sky-soft);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        color: var(--gray-700);
        box-shadow: var(--shadow-lg);
    }
    
    .empty-sym-title {
        font-size: 1.75rem;
        font-weight: 700;
        background: var(--sky-secondary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 1rem;
    }
    
    .empty-sym-description {
        color: var(--gray-500);
        margin-bottom: 2rem;
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
    
    /* Alert */
    .sky-alert {
        padding: 1rem 1.5rem;
        border-radius: 12px;
        margin-bottom: 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        animation: fadeInDown 0.5s ease-out;
    }
    
    .sky-alert-success {
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.1) 0%, rgba(34, 197, 94, 0.1) 100%);
        color: #059669;
        border: 1px solid rgba(16, 185, 129, 0.2);
    }
    
    .sky-alert-danger {
        background: linear-gradient(135deg, rgba(239, 68, 68, 0.1) 0%, rgba(248, 113, 113, 0.1) 100%);
        color: #dc2626;
        border: 1px solid rgba(239, 68, 68, 0.2);
    }
    
    /* Pagination */
    .sym-pagination {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
        animation: fadeInUp 0.8s ease-out 0.8s both;
    }
    
    .pagination-sym-wrapper {
        display: flex;
        gap: 0.5rem;
        background: white;
        padding: 0.75rem;
        border-radius: 16px;
        box-shadow: var(--shadow-md);
    }
    
    .page-sym-link {
        padding: 0.625rem 1rem;
        border-radius: 10px;
        background: var(--gray-50);
        color: var(--gray-700);
        text-decoration: none;
        transition: all 0.3s ease;
        font-weight: 500;
        border: 1px solid var(--gray-200);
    }
    
    .page-sym-link:hover {
        background: var(--sky-secondary);
        color: white;
        border-color: transparent;
        transform: translateY(-2px);
    }
    
    .page-sym-item.active .page-sym-link {
        background: var(--sky-secondary);
        color: white;
        border-color: transparent;
    }
    
    /* Responsive */
    @media (max-width: 1024px) {
        .symmetrical-stats { grid-template-columns: repeat(2, 1fr); }
        .symmetrical-users { grid-template-columns: repeat(2, 1fr); }
        .filter-form-sym { grid-template-columns: 1fr; }
    }
    
    @media (max-width: 768px) {
        .centered-container { padding: 1rem; }
        .symmetrical-stats { grid-template-columns: 1fr; }
        .symmetrical-users { grid-template-columns: 1fr; }
        .header-title { font-size: 2rem; }
        .header-actions { flex-direction: column; align-items: center; }
    }

   

.detail-sym-label {
    font-weight: 600;
    color: #64748b;
    letter-spacing: .5px;
}

/* ===== ROW DASAR ===== */
/* ===== BARIS DETAIL (SEMUA ITEM) ===== */
.detail-sym-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 14px;
    background: #f8fafc;
    border-radius: 10px;
    margin-bottom: 8px;
    min-height: 44px;
}

/* LABEL KIRI */
.detail-sym-label {
    font-size: 12px;
    font-weight: 600;
    color: #64748b;
}

/* VALUE KANAN */
.detail-sym-value {
    display: flex;
    align-items: center;
}

/* ===== STATUS ===== */
.status-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 4px 12px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 600;
    white-space: nowrap;
}

/* ONLINE */
.status-pill.online {
    background: #e7f9f0;
    color: #16a34a;
}

/* OFFLINE */
.status-pill.offline {
    background: #fee2e2;
    color: #dc2626;
}

/* DOT */
.status-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
}

.status-pill.online .status-dot {
    background: #22c55e;
}

.status-pill.offline .status-dot {
    background: #ef4444;
}


/* ===== STATUS PILL ===== */
.status-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 4px 12px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 600;
    line-height: 1;
    white-space: nowrap;
}

/* ONLINE */
.status-pill.online {
    background: #e7f9f0;
    color: #16a34a;
}

/* OFFLINE */
.status-pill.offline {
    background: #fee2e2;
    color: #dc2626;
}

/* DOT */
.status-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
}

.status-pill.online .status-dot {
    background: #22c55e;
}

.status-pill.offline .status-dot {
    background: #ef4444;
}


</style>

<div class="centered-container">
    <!-- ALERTS -->
    @if(session('success'))
    <div class="sky-alert sky-alert-success">
        <div style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
            <i class="bi bi-check-circle-fill" style="color: #10b981; font-size: 1.25rem;"></i>
        </div>
        <div>
            <strong>Success!</strong> {{ session('success') }}
        </div>
    </div>
    @endif

    @if(session('error'))
    <div class="sky-alert sky-alert-danger">
        <div style="width: 40px; height: 40px; background: rgba(239, 68, 68, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
            <i class="bi bi-exclamation-triangle-fill" style="color: #ef4444; font-size: 1.25rem;"></i>
        </div>
        <div>
            <strong>Error!</strong> {{ session('error') }}
        </div>
    </div>
    @endif

    <!-- SYMMETRICAL HEADER -->
    <header class="symmetrical-header">
        <div class="header-content">
            <h1 class="header-title">Manajemen User</h1>
            <p class="header-subtitle">Kelola pengguna sistem dengan antarmuka yang simetris dan seimbang</p>
            <div class="header-actions">
                <a href="{{ route('admin.users.create') }}" class="sky-btn sky-btn-primary">
                    <i class="bi bi-plus-circle-fill"></i>
                    Tambah User Baru
                </a>
                <div class="sky-btn sky-btn-secondary" style="cursor: default;">
                    <i class="bi bi-clock-fill"></i>
                    <span id="currentTime"></span>
                </div>
            </div>
        </div>
    </header>

    <!-- SYMMETRICAL STATS -->
    {{-- <section class="symmetrical-stats">
    <div class="sky-stat-card">
        <div class="stat-icon-sym icon-sym-2">
            <i class="bi bi-shield-fill-check"></i>
        </div>
        <div class="stat-number-sym">{{ $users->where('role', 'admin')->count() }}</div>
        <div class="stat-label-sym">Administrators</div>
    </div>
</section> --}}

    <!-- SYMMETRICAL FILTER -->
    <section class="symmetrical-filter">
        <div class="filter-header-sym">
            <h2 class="filter-title-sym">Filter & Pencarian</h2>
            <p class="filter-subtitle-sym">Temukan pengguna dengan cepat dan mudah</p>
        </div>
        <form method="GET" action="{{ route('admin.users.index') }}">
            <div class="filter-form-sym">
                <div class="sym-input-group">
                    <i class="bi bi-search search-sym-icon"></i>
                    <input type="text" name="q" value="{{ $q ?? '' }}" class="sym-input search-sym-input" placeholder="Cari nama atau email pengguna...">
                </div>
                <select name="role" class="sym-input">
                    <option value="">Semua Role</option>
                    <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Administrator</option>
                    <option value="guru" {{ request('role') == 'guru' ? 'selected' : '' }}>Guru</option>
                    <option value="siswa" {{ request('role') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                </select>
                <button type="submit" class="sky-btn sky-btn-primary" style="width: 100%; justify-content: center;">
                    <i class="bi bi-funnel-fill"></i>
                    Filter Data
                </button>
            </div>
        </form>
    </section>

    <!-- SYMMETRICAL USERS GRID -->
    <main class="symmetrical-users">
        @forelse($users as $user)
        <article class="user-sym-card" data-user-id="{{ $user->id }}">
            <div class="user-avatar-sym avatar-sym-{{ $user->role }}">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <h3 class="user-name-sym">{{ $user->name }}</h3>
            <p class="user-email-sym">{{ $user->email }}</p>
            
           <div class="user-details-sym">
    <div class="detail-sym-row">
        <span class="detail-sym-label">Role</span>
        <span class="detail-sym-value">
            <span class="role-badge-sym badge-sym-{{ $user->role }}">
                @if($user->role === 'super_admin')
                    <i class="bi bi-star-fill"></i> Super Admin
                @elseif($user->role === 'admin')
                    <i class="bi bi-shield-fill"></i> Admin
                @endif
            </span>
        </span>
    </div>
    <div class="detail-sym-row">
        <span class="detail-sym-label">Bergabung</span>
        <span class="detail-sym-value">{{ $user->created_at ? $user->created_at->format('d M Y') : '-' }}</span>
    </div>
    <div class="detail-sym-row">
        <span class="detail-sym-label">Status</span>
        <span class="detail-sym-value">
            <span class="status-pill {{ $user->isOnline() ? 'online' : 'offline' }}">
                <span class="status-dot"></span>
                @if ($user->isOnline())
                    Online
                @else
                    {{ $user->lastSeen() }}
                @endif
            </span>
        </span>
    </div>
</div>
            
            <div class="user-actions-sym">
                {{-- <a href="{{ route('admin.users.show', $user->id) }}" class="action-sym-btn btn-view-sym" title="Lihat Detail">
                    <i class="bi bi-eye-fill"></i>
                </a> --}}
                <a href="{{ route('admin.users.edit', $user->id) }}" class="action-sym-btn btn-edit-sym" title="Edit">
                    <i class="bi bi-pencil-fill"></i>
                </a>
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirmDelete('{{ $user->name }}')" style="display: contents;">
                    @csrf @method('DELETE')
                    <button type="submit" class="action-sym-btn btn-delete-sym" title="Hapus">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </form>
            </div>
        </article>
        @empty
        <div class="empty-sym">
            <div class="empty-sym-icon">
                <i class="bi bi-people"></i>
            </div>
            <h2 class="empty-sym-title">Belum Ada Pengguna</h2>
            <p class="empty-sym-description">
                Sistem belum memiliki data pengguna. Mulai dengan menambahkan pengguna pertama untuk mengelola sistem dengan baik.
            </p>
            {{-- <a href="{{ route('admin.users.create') }}" class="sky-btn sky-btn-primary">
                <i class="bi bi-plus-circle-fill"></i>
                Tambah Pengguna Pertama
            </a> --}}
        </div>
        @endforelse
    </main>

    <!-- PAGINATION -->
    @if($users->hasPages())
    <div class="sym-pagination">
        <div class="pagination-sym-wrapper">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
    @endif
</div>

<script>
// Online/Offline Status Management
class OnlineStatusManager {
    constructor() {
        this.userId = {{ auth()->check() ? auth()->user()->id : 'null' }};
        this.updateInterval = 30000; // 30 seconds
        this.checkInterval = 10000; // 10 seconds
        this.offlineThreshold = 60000; // 1 minute
        this.idleThreshold = 300000; // 5 minutes
        this.offlineRedThreshold = 900000; // 15 minutes
        
        this.init();
    }
    
    init() {
        if (this.userId) {
            // Update current user's last activity
            this.updateLastActivity();
            setInterval(() => this.updateLastActivity(), this.updateInterval);
            
            // Check other users' status
            this.checkAllUsersStatus();
            setInterval(() => this.checkAllUsersStatus(), this.checkInterval);
        }
    }
    
    async updateLastActivity() {
        try {
            await fetch('/api/user/online', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ user_id: this.userId })
            });
        } catch (error) {
            console.log('Error updating activity:', error);
        }
    }
    
    async checkAllUsersStatus() {
        const userCards = document.querySelectorAll('.user-sym-card');
        
        for (const card of userCards) {
            const userId = card.dataset.userId;
            if (userId && userId != this.userId) {
                await this.checkUserStatus(userId);
            }
        }
    }
    
    async checkUserStatus(userId) {
        try {
            const response = await fetch(`/api/user/status/${userId}`);
            const data = await response.json();
            
            this.updateStatusDisplay(userId, data);
        } catch (error) {
            console.log('Error checking user status:', error);
            this.updateStatusDisplay(userId, { online: false, last_seen: null });
        }
    }
    
    updateStatusDisplay(userId, data) {
        const dot = document.getElementById(`dot-${userId}`);
        const text = document.getElementById(`text-${userId}`);
        const lastSeen = document.getElementById(`lastseen-${userId}`);
        
        if (!dot || !text) return;
        
        if (data.online) {
            dot.className = 'status-dot online';
            text.className = 'status-text online';
            text.textContent = 'Online';
            lastSeen.textContent = '';
        } else {
            const now = new Date();
            const lastSeenDate = new Date(data.last_seen);
            const diffMs = now - lastSeenDate;
            const diffMins = Math.floor(diffMs / 60000);
            
            if (diffMins < 1) {
                dot.className = 'status-dot online';
                text.className = 'status-text online';
                text.textContent = 'Baru saja';
                lastSeen.textContent = '';
            } else if (diffMins < 5) {
                dot.className = 'status-dot idle';
                text.className = 'status-text idle';
                text.textContent = 'Idle';
                lastSeen.textContent = 'Baru saja';
            } else if (diffMins < 15) {
                dot.className = 'status-dot offline';
                text.className = 'status-text offline';
                text.textContent = 'Offline';
                lastSeen.textContent = `${diffMins} menit yang lalu`;
            } else {
                dot.className = 'status-dot offline';
                text.className = 'status-text offline';
                text.textContent = 'Offline';
                lastSeen.textContent = `${Math.floor(diffMins / 60)} jam yang lalu`;
            }
        }
    }
}

// Update current time
function updateTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString('id-ID', { 
        hour: '2-digit', 
        minute: '2-digit'
    });
    const dateString = now.toLocaleDateString('id-ID', { 
        weekday: 'short', 
        day: 'numeric', 
        month: 'short' 
    });
    document.getElementById('currentTime').textContent = `${dateString} • ${timeString}`;
}
updateTime();
setInterval(updateTime, 60000);

// Custom confirm dialog
function confirmDelete(userName) {
    const modal = document.createElement('div');
    modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        animation: fadeIn 0.3s ease;
    `;
    
    modal.innerHTML = `
        <div style="background: white; padding: 2rem; border-radius: 20px; max-width: 400px; text-align: center; box-shadow: 0 20px 40px rgba(0,0,0,0.2); animation: scaleIn 0.3s ease;">
            <div style="width: 80px; height: 80px; background: var(--sky-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                <i class="bi bi-exclamation-triangle-fill" style="color: white; font-size: 2rem;"></i>
            </div>
            <h3 style="color: #1e293b; margin-bottom: 1rem;">Konfirmasi Hapus</h3>
            <p style="color: #64748b; margin-bottom: 2rem;">Apakah Anda yakin ingin menghapus pengguna <strong>${userName}</strong>? Tindakan ini tidak dapat dibatalkan.</p>
            <div style="display: flex; gap: 1rem; justify-content: center;">
                <button id="confirmYes" style="background: var(--sky-secondary); color: white; border: none; padding: 0.75rem 2rem; border-radius: 12px; cursor: pointer; font-weight: 600;">Hapus</button>
                <button id="confirmNo" style="background: #f1f5f9; color: #475569; border: none; padding: 0.75rem 2rem; border-radius: 12px; cursor: pointer; font-weight: 600;">Batal</button>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    
    return new Promise((resolve) => {
        document.getElementById('confirmYes').onclick = () => {
            document.body.removeChild(modal);
            resolve(true);
        };
        document.getElementById('confirmNo').onclick = () => {
            document.body.removeChild(modal);
            resolve(false);
        };
        modal.onclick = (e) => {
            if (e.target === modal) {
                document.body.removeChild(modal);
                resolve(false);
            }
        };
    });
}

setInterval(() => {
    fetch('/user/online', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
}, 3000); // tiap 3 detik

// Initialize online status manager
document.addEventListener('DOMContentLoaded', function() {
    new OnlineStatusManager();

    
});
</script>
@endsection