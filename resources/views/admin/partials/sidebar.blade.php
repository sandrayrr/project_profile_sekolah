<style>
    :root {
        /* Warna yang terinspirasi dari logo SMKN 1 Kawali */
        --primary-blue: #0056b3;
        --primary-yellow: #ffc107;
        --primary-red: #dc3545;
        --primary-soft: #eef2ff;
        --text-main: #0f172a;
        --text-muted: #64748b;
        --bg: #ffffff;
        --gradient-primary: linear-gradient(135deg, var(--primary-blue) 0%, #0040a0 100%);
        --gradient-accent: linear-gradient(135deg, var(--primary-yellow) 0%, #ff9800 100%);
        --gradient-danger: linear-gradient(135deg, var(--primary-red) 0%, #c62828 100%);
        --gradient-sidebar: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);
        --shadow-sm: 0 2px 4px rgba(0,0,0,0.05);
        --shadow-md: 0 4px 6px rgba(0,0,0,0.07);
        --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
        --shadow-xl: 0 20px 25px rgba(0,0,0,0.1);
        --shadow-glow: 0 0 20px rgba(0, 86, 179, 0.2);
    }

    /* SIDEBAR */
    .sidebar {
        position: fixed;
        top: 16px;
        left: 16px;
        width: 260px;
        height: calc(100vh - 32px);
        background: var(--gradient-sidebar);
        border-radius: 20px;
        padding: 18px;
        display: flex;
        flex-direction: column;
        box-shadow: var(--shadow-xl);
        overflow: hidden;
        z-index: 1000;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.8);
    }

    /* Logo Sekolah */
    .sidebar-logo {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        position: relative;
        padding: 15px 0;
    }

    .logo-container {
        width: 80px;
        height: 80px;
        background-image: url('https://z-cdn-media.chatglm.cn/files/87692716-b454-4f10-975a-68b6e0678b15.png?auth_key=1867942909-fa1d2338d8714febac500b8f54a413df-0-48e85327eb38ab7c1cb8680e2576aa2d');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        margin-bottom: 10px;
        transition: all 0.3s ease;
    }

    .logo-container:hover {
        transform: scale(1.05);
    }

    .school-name {
        font-weight: 700;
        font-size: 1rem;
        color: var(--primary-blue);
        text-align: center;
        margin-top: 5px;
        letter-spacing: -0.02em;
    }

    .school-location {
        font-size: 0.75rem;
        color: var(--text-muted);
        text-align: center;
        margin-top: 2px;
    }

    /* USER */
    .sidebar-user {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.7);
        margin-bottom: 24px;
        position: relative;
        overflow: hidden;
        backdrop-filter: blur(5px);
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
    }

    .sidebar-user:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .sidebar-user::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--gradient-primary);
        border-radius: 4px 0 0 4px;
    }

    .sidebar-user img {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--bg);
        box-shadow: var(--shadow-sm);
        transition: all 0.3s ease;
    }

    .sidebar-user:hover img {
        transform: scale(1.05);
        border-color: var(--primary-blue);
    }

    .user-info {
        line-height: 1.2;
    }

    .user-name {
        font-weight: 600;
        font-size: 0.95rem;
        color: var(--text-main);
    }

    .user-role {
        font-size: 0.75rem;
        color: var(--text-muted);
    }

    /* NAV */
    .sidebar-nav {
        flex: 1;
        overflow-y: auto;
        padding-right: 5px;
    }

    .sidebar-nav::-webkit-scrollbar {
        width: 4px;
    }

    .sidebar-nav::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.3);
        border-radius: 10px;
    }

    .sidebar-nav::-webkit-scrollbar-thumb {
        background: var(--primary-blue);
        border-radius: 10px;
    }

    .nav-title {
        font-size: 0.7rem;
        font-weight: 700;
        color: var(--text-muted);
        margin: 20px 8px 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        position: relative;
    }

    .nav-title::before {
        content: '';
        display: inline-block;
        width: 12px;
        height: 2px;
        background: var(--gradient-primary);
        margin-right: 8px;
        border-radius: 1px;
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 12px 14px;
        margin-bottom: 6px;
        border-radius: 14px;
        text-decoration: none;
        color: var(--text-main);
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: var(--gradient-primary);
        opacity: 0.1;
        transition: width 0.3s ease;
        z-index: 0;
    }

    .nav-link i {
        font-size: 1.1rem;
        color: var(--text-muted);
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .nav-link span {
        position: relative;
        z-index: 1;
    }

    /* ACTIVE */
    .nav-link.active {
        background: rgba(0, 86, 179, 0.1);
        color: var(--primary-blue);
        font-weight: 600;
        box-shadow: var(--shadow-sm);
    }

    .nav-link.active::before {
        width: 4px;
    }

    .nav-link.active i {
        color: var(--primary-blue);
    }

    .nav-link:hover {
        background: rgba(255, 255, 255, 0.7);
        transform: translateX(4px);
        box-shadow: var(--shadow-sm);
    }

    .nav-link:hover::before {
        width: 100%;
    }

    .nav-link:hover i {
        color: var(--primary-blue);
    }

    /* BOTTOM */
    .sidebar-bottom {
        margin-top: auto;
        padding-top: 15px;
        border-top: 1px solid rgba(226, 232, 240, 0.7);
    }

    .logout-btn {
        color: var(--primary-red);
    }

    .logout-btn:hover {
        background: rgba(220, 53, 69, 0.1);
    }

    /* Watermark SMKN di background sidebar */
    .sidebar::after {
        content: '';
        position: absolute;
        bottom: 20px;
        right: 20px;
        width: 100px;
        height: 100px;
        background-image: url('https://z-cdn-media.chatglm.cn/files/87692716-b454-4f10-975a-68b6e0678b15.png?auth_key=1867942909-fa1d2338d8714febac500b8f54a413df-0-48e85327eb38ab7c1cb8680e2576aa2d');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.05;
        pointer-events: none;
        z-index: 0;
    }

    /* Badge untuk menu baru/notifikasi */
    .nav-badge {
        position: absolute;
        top: 8px;
        right: 8px;
        background: var(--gradient-danger);
        color: white;
        font-size: 0.6rem;
        font-weight: 600;
        padding: 2px 6px;
        border-radius: 10px;
        min-width: 18px;
        text-align: center;
        box-shadow: var(--shadow-sm);
        animation: pulse 2s infinite;
    }

    /* Animasi untuk menu */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    .nav-link {
        animation: slideIn 0.3s ease-out forwards;
        opacity: 0;
    }

    .nav-link:nth-child(1) { animation-delay: 0.1s; }
    .nav-link:nth-child(2) { animation-delay: 0.2s; }
    .nav-link:nth-child(3) { animation-delay: 0.3s; }
    .nav-link:nth-child(4) { animation-delay: 0.4s; }
    .nav-link:nth-child(5) { animation-delay: 0.5s; }
    .nav-link:nth-child(6) { animation-delay: 0.6s; }
    .nav-link:nth-child(7) { animation-delay: 0.7s; }
    .nav-link:nth-child(8) { animation-delay: 0.8s; }
    .nav-link:nth-child(9) { animation-delay: 0.9s; }
    .nav-link:nth-child(10) { animation-delay: 1.0s; }
    .nav-link:nth-child(11) { animation-delay: 1.1s; }
    .nav-link:nth-child(12) { animation-delay: 1.2s; }
    .nav-link:nth-child(13) { animation-delay: 1.3s; }
    .nav-link:nth-child(14) { animation-delay: 1.4s; }
</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

<div class="sidebar">

    <!-- LOGO SEKOLAH -->
    <div class="sidebar-logo">
        <div class="logo-container"></div>
        <div class="school-name">SMKN 1 Kawali</div>
        <div class="school-location">Kab. Ciamis</div>
    </div>

    <!-- USER -->
    <div class="sidebar-user">
        <img src="{{ asset('storage/dashboard/Admin PP.png') }}">
        <div class="user-info">
            <div class="user-name">{{ Auth::user()->name }}</div>
            <div class="user-role">{{ ucfirst(Auth::user()->role) }}</div>
        </div>
    </div>

    <!-- NAV -->
    <nav class="sidebar-nav">

        <div class="nav-title">Main</div>
        <a href="{{ route('admin.dashboard') }}"
            class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>

        <div class="nav-title">Content</div>
        <a href="{{ route('admin.artikel.index') }}"
            class="nav-link {{ request()->routeIs('admin.artikel*') ? 'active' : '' }}">
            <i class="bi bi-file-text"></i>
            <span>Artikel</span>
        </a>

        <a href="{{ route('admin.galeri.index') }}"
            class="nav-link {{ request()->routeIs('admin.galeri*') ? 'active' : '' }}">
            <i class="bi bi-image"></i>
            <span>Galeri</span>
        </a>

        <a href="{{ route('admin.beranda.index') }}"
            class="nav-link {{ request()->routeIs('admin.beranda*') ? 'active' : '' }}">
            <i class="material-icons">summarize</i>
            <span>Beranda</span>
        </a>

        <a href="{{ route('admin.prestasi.index') }}"
            class="nav-link {{ request()->routeIs('admin.prestasi*') ? 'active' : '' }}">
            <i class="bi bi-award"></i>
            <span>Prestasi</span>
        </a>

        <a href="{{ route('admin.agenda.index') }}"
            class="nav-link {{ request()->routeIs('admin.agenda*') ? 'active' : '' }}">
            <i class="bi bi-calendar"></i>
            <span>Agenda</span>
        </a>

        <a href="{{ route('admin.fasilitas.index') }}"
            class="nav-link {{ request()->routeIs('admin.fasilitas*') ? 'active' : '' }}">
            <i class="material-icons">business</i>
            <span>Fasilitas</span>
        </a>

        <a href="{{ route('admin.tenagapengajar.index') }}"
            class="nav-link {{ request()->routeIs('admin.tenagapengajar*') ? 'active' : '' }}">
            <i class="material-icons">groups</i>
            <span>Tenaga Pengajar</span>
        </a>

        <a href="{{ route('admin.staffkependidikan.index') }}"
            class="nav-link {{ request()->routeIs('admin.staffkependidikan*') ? 'active' : '' }}">
            <i class="material-icons">badge</i>
            <span>Staff Kependidikan</span>
        </a>

        <a href="{{ route('admin.ekstrakulikuler.index') }}"
            class="nav-link {{ request()->routeIs('admin.ekstrakulikuler*') ? 'active' : '' }}">
            <i class="material-icons">diversity_3</i>
            <span>Ekstrakurikuler</span>
        </a>

        <a href="{{ route('admin.marketplace.index') }}"
            class="nav-link {{ request()->routeIs('admin.marketplace*') ? 'active' : '' }}">
            <i class="material-icons">storefront</i>
            <span>Marketplace</span>
        </a>

        <div class="nav-title">User</div>
        <a href="{{ route('admin.users.index') }}"
            class="nav-link {{ request()->routeIs('admin.users*') ? 'active' : '' }}">
            <i class="bi bi-people"></i>
            <span>Kelola User</span>
            
        </a>

    </nav>

    <!-- LOGOUT -->
    <div class="sidebar-bottom">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
        <a href="#" class="nav-link logout-btn"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>
    </div>

</div>

{{-- --- PENTING --- --}}
{{-- Pastikan Anda menyesuaikan wrapper konten utama Anda agar tidak tertutup sidebar. --}}
{{-- Cari elemen utama yang membungkus @yield('content') dan tambahkan style margin-left: 260px; --}}

{{-- Contoh: <div class="content-wrapper p-4" style="margin-left: 260px;"> @yield('content') </div> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Get all navigation links
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Object to store scroll positions for each page
    const scrollPositions = {};
    
    // Get current page URL to use as key
    function getCurrentPageKey() {
        return window.location.pathname + window.location.search;
    }
    
    // Save current scroll position
    function saveScrollPosition() {
        scrollPositions[getCurrentPageKey()] = {
            x: window.pageXOffset || document.documentElement.scrollLeft,
            y: window.pageYOffset || document.documentElement.scrollTop
        };
    }
    
    // Restore scroll position for a specific page
    function restoreScrollPosition(pageKey) {
        const position = scrollPositions[pageKey];
        if (position) {
            setTimeout(() => {
                window.scrollTo(position.x, position.y);
            }, 50); // Small delay to ensure content is loaded
        }
    }
    
    // Save scroll position when user scrolls
    let scrollTimeout;
    window.addEventListener('scroll', function() {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(saveScrollPosition, 100);
    });
    
    // Add click event listener to each navigation link
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Skip if it's the logout link
            if (this.classList.contains('logout-btn')) return;
            
            // Update the active state immediately for better UX
            navLinks.forEach(navLink => {
                navLink.classList.remove('active');
            });
            this.classList.add('active');
            
            // Skip the rest if it's a regular link (not AJAX)
            if (!this.getAttribute('data-url')) {
                // Save current scroll position before leaving
                saveScrollPosition();
                return;
            }
            
            e.preventDefault();
            
            // Save current scroll position before navigation
            saveScrollPosition();
            
            // Get the URL from the data-url attribute
            const url = this.getAttribute('data-url');
            const targetPageKey = new URL(url, window.location.origin).pathname + 
                                 new URL(url, window.location.origin).search;
            
            // Make AJAX request to get the page content
            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'text/html',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(html => {
                // Create a temporary DOM element to parse the response
                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = html;
                
                // Extract the main content from the response
                const newContent = tempDiv.querySelector('.content-wrapper') || 
                                 tempDiv.querySelector('main') || 
                                 tempDiv.querySelector('#pageContent') ||
                                 tempDiv.querySelector('.container') ||
                                 tempDiv.querySelector('body');
                
                if (newContent) {
                    const mainContent = document.querySelector('.content-wrapper') || 
                                       document.querySelector('main');
                    
                    if (mainContent) {
                        // Replace the current content with the new content
                        mainContent.innerHTML = newContent.innerHTML;
                        
                        // Update the URL in the browser's history
                        history.pushState({url: url}, '', url);
                        
                        // Restore scroll position for the target page
                        restoreScrollPosition(targetPageKey);
                        
                        // Reinitialize any JavaScript that might be needed for the new content
                        initializePageScripts();
                    }
                }
            })
            .catch(error => {
                console.error('Error loading page:', error);
                
                // Show error message
                const mainContent = document.querySelector('.content-wrapper') || 
                                   document.querySelector('main');
                                   
                if (mainContent) {
                    mainContent.innerHTML = '<div class="alert alert-danger" style="padding: 15px; background-color: #f8d7da; border: 1px solid #f5c6cb; border-radius: 4px; color: #721c24;"><strong>Error:</strong> Failed to load page. Please try again.<br><small>' + error.message + '</small></div>';
                }
            });
        });
    });
    
    // Handle browser back/forward buttons
    window.addEventListener('popstate', function(e) {
        if (e.state && e.state.url) {
            // Save current scroll position
            saveScrollPosition();
            
            // Get the target page key
            const targetPageKey = new URL(e.state.url, window.location.origin).pathname + 
                                 new URL(e.state.url, window.location.origin).search;
            
            // Reload the page when using browser back/forward buttons
            window.location.href = e.state.url;
            
            // Restore scroll position after page loads
            setTimeout(() => {
                restoreScrollPosition(targetPageKey);
            }, 100);
        }
    });
    
    // Function to initialize page-specific scripts
    function initializePageScripts() {
        // Reinitialize tab functionality
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabPanes = document.querySelectorAll('.tab-pane');
        
        if (tabBtns.length > 0 && tabPanes.length > 0) {
            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');
                    
                    // Remove active class from all tabs and panes
                    tabBtns.forEach(tab => tab.classList.remove('tab-active'));
                    tabPanes.forEach(pane => pane.classList.add('hidden'));
                    
                    // Add active class to clicked tab and show corresponding pane
                    this.classList.add('tab-active');
                    document.getElementById(tabId).classList.remove('hidden');
                });
            });
        }
        
        // Reinitialize form submissions
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            // Skip the logout form
            if (form.id === 'logout-form') return;
            
            form.addEventListener('submit', function(e) {
                // Let forms submit normally for now
                // You can add AJAX form handling here if needed
            });
        });
        
        // Reinitialize modal functionality if you have modals
        const modalTriggers = document.querySelectorAll('[data-bs-toggle="modal"]');
        modalTriggers.forEach(trigger => {
            // Reinitialize Bootstrap modals or your custom modal logic
        });
        
        // Reinitialize data tables if you use them
        if (typeof $ !== 'undefined' && typeof $.fn.DataTable !== 'undefined') {
            $('.datatable').DataTable();
        }
        
        // Add any other page-specific initializations here
    }
    
    // Initialize page scripts on initial load
    initializePageScripts();
    
    // Restore scroll position for current page on load
    restoreScrollPosition(getCurrentPageKey());
});
</script>