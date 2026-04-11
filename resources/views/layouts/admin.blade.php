<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard') - Sai Ram Insurer</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #3b82f6;
            --primary-dark: #2563eb;
            --secondary-color: #64748b;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --warning-color: #f59e0b;
            --bg-color: #f1f5f9;
            --sidebar-bg: #ffffff;
            --sidebar-width: 280px;
            --sidebar-collapsed-width: 80px;
            --header-height: 75px;
            --card-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-color);
            color: #1e293b;
            overflow-x: hidden;
            margin: 0;
        }

        /* --- Sidebar Styles --- */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--sidebar-bg);
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1050;
            border-right: 1px solid #e2e8f0;
            display: flex;
            flex-direction: column;
            transition: var(--transition);
        }

        .sidebar-brand {
            height: var(--header-height);
            display: flex;
            align-items: center;
            padding: 0 1.5rem;
            border-bottom: 1px solid #f1f5f9;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 20px;
            box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
        }

        .brand-text {
            font-weight: 800;
            font-size: 20px;
            color: #1e3a8a;
            white-space: nowrap;
            overflow: hidden;
            transition: var(--transition);
        }

        .sidebar-menu {
            padding: 1.5rem 0.75rem;
            flex-grow: 1;
            overflow-y: auto;
        }

        .menu-label {
            font-size: 11px;
            font-weight: 700;
            color: #94a3b8;
            padding: 0 1.25rem;
            margin-bottom: 0.75rem;
            letter-spacing: 1px;
        }

        .nav-link {
            padding: 12px 1.25rem;
            color: var(--secondary-color);
            display: flex;
            align-items: center;
            gap: 15px;
            font-weight: 500;
            border-radius: 12px;
            margin-bottom: 5px;
            transition: var(--transition);
            text-decoration: none;
        }

        .nav-link i {
            font-size: 18px;
            width: 24px;
            text-align: center;
        }

        .nav-link:hover {
            color: var(--primary-color);
            background: #f8fafc;
        }

        .nav-link.active {
            color: white;
            background: var(--primary-color);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.25);
        }

        .nav-text {
            white-space: nowrap;
            transition: var(--transition);
        }

        .sidebar-footer {
            padding: 1.5rem;
            border-top: 1px solid #f1f5f9;
        }

        .logout-btn {
            width: 100%;
            padding: 12px;
            background: #fff1f2;
            color: #be123c;
            border: none;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 600;
            transition: var(--transition);
        }

        .logout-btn:hover {
            background: #ffe4e6;
            color: #9f1239;
        }

        /* --- Header Styles --- */
        .top-header {
            height: var(--header-height);
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            position: fixed;
            top: 0;
            right: 0;
            left: var(--sidebar-width);
            z-index: 1000;
            border-bottom: 1px solid #e2e8f0;
            transition: var(--transition);
        }

        .sidebar-toggle {
            background: none;
            border: none;
            color: var(--secondary-color);
            font-size: 20px;
            cursor: pointer;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .sidebar-toggle:hover {
            color: var(--primary-color);
        }

        .breadcrumb-nav {
            margin-left: 20px;
            align-items: center;
            gap: 10px;
            font-size: 14px;
        }

        .breadcrumb-item {
            color: #94a3b8;
        }

        .breadcrumb-item.active {
            color: #1e293b;
            font-weight: 600;
        }

        .separator {
            font-size: 10px;
            color: #cbd5e1;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .icon-badge {
            position: relative;
            font-size: 20px;
            color: var(--secondary-color);
            cursor: pointer;
        }

        .badge-dot {
            position: absolute;
            top: 2px;
            right: 2px;
            width: 8px;
            height: 8px;
            background: var(--danger-color);
            border-radius: 50%;
            border: 2px solid white;
        }

        /* --- Profile Dropdown --- */
        .user-profile-dropdown {
            position: relative;
        }

        .profile-info {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 5px;
            border-radius: 50px;
            transition: var(--transition);
        }

        .profile-info:hover {
            background: #f1f5f9;
        }

        .user-name {
            font-weight: 600;
            font-size: 14px;
            color: #1e293b;
            line-height: 1.2;
        }

        .user-role {
            font-size: 12px;
            color: #94a3b8;
        }

        .avatar-wrapper img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .profile-menu {
            position: absolute;
            top: 60px;
            right: 0;
            width: 240px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            border: 1px solid #e2e8f0;
            display: none;
            padding: 10px;
            z-index: 1001;
        }

        .profile-menu.show {
            display: block;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .menu-header {
            padding: 15px;
            border-bottom: 1px solid #f1f5f9;
            margin-bottom: 10px;
        }

        .menu-header h6 {
            margin: 0;
            font-weight: 700;
        }

        .menu-header span {
            font-size: 12px;
            color: #94a3b8;
        }

        .menu-items a, .logout-link {
            padding: 10px 15px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #475569;
            text-decoration: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            transition: var(--transition);
            width: 100%;
            border: none;
            background: none;
            text-align: left;
        }

        .menu-items a:hover, .logout-link:hover {
            background: #f8fafc;
            color: var(--primary-color);
        }

        .logout-link {
            color: var(--danger-color);
        }

        .logout-link:hover {
            background: #fff1f2;
            color: #be123c;
        }

        /* --- Main Content --- */
        .main-wrapper {
            margin-left: var(--sidebar-width);
            padding-top: var(--header-height);
            min-height: 100vh;
            transition: var(--transition);
        }

        .content-body {
            padding: 2rem;
        }

        /* --- Toggled State (Desktop) --- */
        body.sidebar-collapsed .sidebar {
            width: var(--sidebar-collapsed-width);
        }

        body.sidebar-collapsed .sidebar .brand-text,
        body.sidebar-collapsed .sidebar .nav-text,
        body.sidebar-collapsed .sidebar .menu-label,
        body.sidebar-collapsed .sidebar .logout-btn span {
            display: none;
        }

        body.sidebar-collapsed .sidebar .nav-link {
            justify-content: center;
            padding: 12px 0;
        }

        body.sidebar-collapsed .sidebar .logout-btn {
            justify-content: center;
            padding: 12px 0;
        }

        body.sidebar-collapsed .top-header {
            left: var(--sidebar-collapsed-width);
        }

        body.sidebar-collapsed .main-wrapper {
            margin-left: var(--sidebar-collapsed-width);
        }

        /* --- Mobile Styles --- */
        @media (max-width: 991.98px) {
            .sidebar {
                left: calc(-1 * var(--sidebar-width));
            }

            .top-header {
                left: 0;
            }

            .main-wrapper {
                margin-left: 0;
            }

            body.sidebar-open .sidebar {
                left: 0;
                box-shadow: 20px 0 50px rgba(0,0,0,0.1);
            }

            .sidebar-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background: rgba(0,0,0,0.4);
                backdrop-filter: blur(4px);
                z-index: 1040;
                display: none;
            }

            body.sidebar-open .sidebar-overlay {
                display: block;
            }
        }

        /* --- Utility Classes --- */
        .card {
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -6px rgba(0, 0, 0, 0.1);
        }

        .badge-pending { background: #fef3c7; color: #d97706; }
        .badge-read { background: #d1fae5; color: #059669; }
        .badge-unread { background: #fee2e2; color: #dc2626; }
        
        .stats-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .bg-primary-light { background-color: #eff6ff; }
        .bg-danger-light { background-color: #fff1f2; }
        .bg-info-light { background-color: #f0f9ff; }
        .bg-success-light { background-color: #ecfdf5; }
        
        .table thead th {
            background: #f8fafc;
            color: #64748b;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 1px;
            border-top: none;
            padding: 15px;
        }
        
        .table tbody td {
            padding: 15px;
            border-bottom: 1px solid #f1f5f9;
        }
    </style>
    @stack('styles')
</head>
<body class="">
    <!-- Mobile Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    @include('layouts.partials.admin-sidebar')

    <!-- Main Content Area -->
    <div class="main-container">
        <!-- Header -->
        @include('layouts.partials.admin-header')

        <!-- Main Content -->
        <main class="main-wrapper">
            <div class="content-body">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const body = document.body;
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebarOverlay = document.getElementById('sidebarOverlay');
            const profileToggle = document.getElementById('profileToggle');
            const profileMenu = document.getElementById('profileMenu');

            // Sidebar Toggle
            sidebarToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                if (window.innerWidth >= 992) {
                    body.classList.toggle('sidebar-collapsed');
                } else {
                    body.classList.toggle('sidebar-open');
                }
            });

            // Close sidebar on mobile when clicking overlay
            sidebarOverlay.addEventListener('click', function() {
                body.classList.remove('sidebar-open');
            });

            // Profile Dropdown Toggle
            profileToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                profileMenu.classList.toggle('show');
            });

            // Close dropdowns on outside click
            window.addEventListener('click', function(event) {
                if (!event.target.closest('.user-profile-dropdown')) {
                    profileMenu.classList.remove('show');
                }
                
                // On mobile, clicking outside sidebar should close it
                if (window.innerWidth < 992 && !event.target.closest('.sidebar') && !event.target.closest('#sidebarToggle')) {
                    body.classList.remove('sidebar-open');
                }
            });

            // Responsive handling
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 992) {
                    body.classList.remove('sidebar-open');
                }
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
