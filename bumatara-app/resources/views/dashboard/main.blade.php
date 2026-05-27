<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bumatara AI - Content Management Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
    :root {
        /* Tema Warna Turkois / Firu (Startup AI) */
        --bg-sidebar: #0a1f29;
        --bg-main: #0f2735;
        --card-dark: #143242;
        --turquoise-glow: #175158ff;
        --turquoise-light: #008fa8;
        --turquoise-base: #004d61;
        --text-white: #94a3b8;

        /* Tema Pustaka Kode Elegan */
        --primary-blue: #004aad;
        --soft-bg: #0f1f2fff;
    }

    /* --- Global & Typography Styles --- */
    body {
        font-family: 'Inter', 'Segoe UI', Roboto, sans-serif;
        background-color: var(--bg-main);
        /* Pastikan ini mengarah ke navy gelap */
        color: #ffffff;
        /* Ubah teks global menjadi putih agar kontras */
    }

    code,
    pre {
        font-family: 'Fira Code', monospace !important;
    }

    /* Override Browser Autofill untuk Form Gelap */
    .form-control:-webkit-autofill,
    .form-control:-webkit-autofill:hover,
    .form-control:-webkit-autofill:focus {
        -webkit-text-fill-color: #ffffff;
        -webkit-box-shadow: 0 0 0px 1000px #0b222e inset;
        transition: background-color 5000s ease-in-out 0s;
    }


    /* --- 1. Layout & Sidebar Styles --- */
    .sidebar {
        background-color: var(--bg-sidebar);
        min-height: 100vh;
        border-right: 1px solid rgba(0, 143, 168, 0.2);
    }

    .sidebar-brand {
        padding: 2rem 1.5rem;
        color: var(--turquoise-glow);
        font-weight: 700;
        letter-spacing: 1px;
    }

    .sidebar .nav-link {
        color: var(--text-white);
        padding: 0.8rem 1.5rem;
        border-radius: 10px;
        margin: 0.2rem 1rem;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
        color: #ffffff;
        background-color: rgba(0, 229, 255, 0.1);
        border-left: 4px solid var(--turquoise-glow);
    }

    .main-content {
        padding: 2rem;
    }


    /* --- 2. Card, Stats, & Badges Styles --- */
    .card-stat {
        background-color: var(--card-dark);
        border: 1px solid rgba(0, 143, 168, 0.15);
        border-radius: 16px;
        transition: transform 0.3s ease, border-color 0.3s ease;
    }

    .card-stat:hover {
        transform: translateY(-3px);
        border-color: var(--turquoise-glow);
    }

    .icon-box {
        width: 48px;
        height: 48px;
        background-color: rgba(0, 143, 168, 0.15);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--turquoise-glow);
    }

    .badge-live {
        background-color: rgba(239, 68, 68, 0.2);
        color: #ef4444;
        border: 1px solid #ef4444;
    }


    /* --- 3. Form, Input, & Upload Area Styles --- */
    .upload-card {
        background-color: var(--card-dark);
        border: 1px solid rgba(0, 143, 168, 0.15);
        border-radius: 16px;
    }

    .form-label {
        color: #e2e8f0;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .form-control,
    .form-select {
        background-color: rgba(10, 31, 41, 0.6);
        border: 1px solid rgba(0, 143, 168, 0.3);
        color: #ffffff;
        border-radius: 10px;
        padding: 0.65rem 1rem;
    }

    .form-control:focus,
    .form-select:focus {
        background-color: rgba(10, 31, 41, 0.8);
        border-color: var(--turquoise-glow);
        box-shadow: 0 0 10px rgba(0, 229, 255, 0.15);
        color: #ffffff;
    }

    .drag-drop-zone {
        border: 2px dashed rgba(0, 143, 168, 0.4);
        background-color: rgba(10, 31, 41, 0.3);
        border-radius: 12px;
        padding: 2.5rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .drag-drop-zone:hover {
        border-color: var(--turquoise-glow);
        background-color: rgba(0, 229, 255, 0.02);
    }

    .nav-pills .nav-link {
        color: var(--text-white);
        background-color: rgba(10, 31, 41, 0.4);
        border: 1px solid rgba(0, 143, 168, 0.1);
        margin-right: 0.5rem;
        border-radius: 10px;
        font-weight: 500;
    }

    .nav-pills .nav-link.active {
        background-color: var(--turquoise-light);
        color: #ffffff;
        border-color: var(--turquoise-glow);
        box-shadow: 0 4px 12px rgba(0, 143, 168, 0.3);
    }


    /* --- 4. Table & Data Management Styles --- */
    .data-card {
        background-color: var(--card-dark);
        border: 1px solid rgba(0, 143, 168, 0.15);
        border-radius: 16px;
        padding: 1.5rem;
    }

    .table-custom {
        background-color: transparent;
        color: #ffffff;
        margin-bottom: 0;
    }

    .table-custom th {
        background-color: rgba(10, 31, 41, 0.6) !important;
        color: var(--turquoise-glow) !important;
        font-weight: 600;
        border-bottom: 1px solid rgba(0, 143, 168, 0.3) !important;
        padding: 1rem;
    }

    .table-custom td {
        background-color: transparent !important;
        color: #e2e8f0 !important;
        border-bottom: 1px solid rgba(0, 143, 168, 0.1) !important;
        padding: 1rem;
        vertical-align: middle;
    }

    .search-box {
        background-color: rgba(10, 31, 41, 0.5);
        border: 1px solid rgba(0, 143, 168, 0.3);
        color: white;
        border-radius: 8px;
    }

    .search-box:focus {
        background-color: rgba(10, 31, 41, 0.8);
        border-color: var(--turquoise-glow);
        box-shadow: none;
        color: white;
    }


    /* --- 5. Buttons Styles --- */
    .btn-submit {
        background: linear-gradient(135deg, var(--turquoise-base), var(--turquoise-light));
        color: white;
        border: none;
        padding: 0.75rem 2rem;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        background: linear-gradient(135deg, var(--turquoise-light), var(--turquoise-glow));
        color: #0a1f29;
        transform: translateY(-1px);
    }

    .btn-action {
        padding: 0.35rem 0.6rem;
        border-radius: 6px;
        font-size: 0.85rem;
    }

    .btn-category {
        background-color: var(--primary-blue);
        color: white;
        border: none;
        padding: 8px 24px;
        transition: all 0.3s ease;
        font-size: 0.85rem;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn-category:hover {
        background-color: #003580;
        transform: translateY(-2px);
        color: white;
        box-shadow: 0 4px 12px rgba(0, 74, 173, 0.2);
    }


    /* --- 6. Pustaka Kode & Code Showcase Styles --- */
    /* --- Cari style ini dan ubah warnanya --- */
    .code-preview-wrapper {
        border: 1px solid rgba(0, 143, 168, 0.3);
        /* Ubah border abu-abu menjadi turkois transparan */
        border-radius: 12px;
        overflow: hidden;
        background: var(--card-dark);
        /* UBAH DARI #ffffff MENJADI NAVY GELAP */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .code-header {
        background: rgba(10, 31, 41, 0.6);
        /* UBAH DARI #f1f3f5 MENJADI NAVY LEBIH GELAP */
        padding: 12px 20px;
        border-bottom: 1px solid rgba(0, 143, 168, 0.2);
    }

    /* Pastikan juga teks judul di luar code box berwarna terang */
    .text-dark {
        color: #ffffff !important;
    }

    .code-body {
        padding: 20px;
        background: #282c34;
        color: #abb2bf;
        min-height: 350px;
    }

    .custom-hr {
        height: 3px;
        background: linear-gradient(to right, #333, transparent);
        border: none;
        opacity: 1;
        margin: 30px 0;
    }

    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.5) !important;
        /* Membuat placeholder putih samar */
    }


    th {
        color: #ffffff !important;
    }
    </style>
</head>

<body>

    <div class="container-fluid p-0 d-flex">
        <nav class="sidebar col-md-3 col-lg-2 d-md-block collapse">
            <div class="sidebar-brand d-flex align-items-center gap-2 text-white">
                <i class="bi bi-cpu fs-3"></i>
                <span>BUMATARA AI</span>
            </div>
            <div class="small px-4 text-uppercase tracking-wider text-white mb-3" style="font-size: 0.7rem;">Menu</div>
            <ul class="nav flex-column ">
                <li class="nav-item ">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }} text-white"
                        href="{{ route('dashboard') }}"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('upload') ? 'active' : '' }} text-white"
                        href="{{ route('upload') }}"><i class="bi bi-cloud-upload me-2"></i> Management Upload</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('manajemen') ? 'active' : '' }} text-white"
                        href="{{ route('manajemen') }}"><i class="bi bi-database me-2"></i> Management Data</a>
                </li>
            </ul>
        </nav>

        <main class="main-content col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('main-panel')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>