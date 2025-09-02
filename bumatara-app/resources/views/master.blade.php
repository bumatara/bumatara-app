<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bumatara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .bg-color-1 {
        background-color: #4a2d65;
    }

    .card.soft-shadow {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .bumatara-logo {
        width: 50px;
        height: 25px;
        background-color: #8a2be2;
    }

    .placeholder-box {
        background-color: #e9ecef;
        min-height: 200px;
    }

    .feature-card {
        background-color: #ffffff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 11px rgba(0, 0, 0, 0.2);
    }

    .feature-icon {
        background-color: #007bff;
        width: 40px;
        height: 40px;
        border-radius: 5px;
    }

    .ocr-section {
        background-color: #f1f3f5;
    }

    .ocr-content-box {
        background-color: white;
        border-radius: 8px;
        padding: 20px;
        border: 1px solid #dee2e6;
    }

    .ocr-placeholder {
        background-color: #e9ecef;
        min-height: 150px;
    }

    .video-box {
        background-color: #6c757d;
        color: white;
        padding: 100px 20px;
        text-align: center;
    }

    .footer-bg {
        background-color: #f8f9fa;
    }

    .footer-logo {
        width: 50px;
        height: 25px;
        background-color: #8a2be2;
    }

    .footer-social {
        background-color: #8a2be2;
        width: 20px;
        height: 20px;
        margin-right: 5px;
    }

    .live-question-box {
        background-color: #f1f3f5;
        padding: 20px;
        border-radius: 8px;
    }
    </style>
    <style>
    .card-upload-area {
        width: 100%;
        max-width: 400px;
        /* Lebar maksimal */
        margin: auto;
        aspect-ratio: 1.58 / 1;
        /* Rasio aspek standar kartu identitas (misal: 85.6mm x 53.98mm) */
        border: 2px dashed #ced4da;
        border-radius: 8px;
        background-color: #f8f9fa;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .card-upload-area:hover {
        border-color: #007bff;
        background-color: #e9ecef;
    }
    </style>
</head>

<body>

    <div class="bg-color-1">
        <div class="container ">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-light text-decoration-none">
                    <div class="bumatara-logo me-2"></div>
                    <span class="fs-4 fw-bold">Bumatara</span>
                </a>
                <ul class="nav nav-pills text-light">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            style="color: #e9ecef;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('product') }}"
                            class="nav-link {{ request()->routeIs('product') ? 'active' : '' }}"
                            style="color: #e9ecef;">Product</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('about') }}"
                            class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            style="color: #e9ecef;">About</a>
                    </li>
                </ul>

            </header>
        </div>
    </div>
    @yield('main-panel')
    <footer class="bg-color-1 py-5 mt-5 text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center mb-2">
                        <div class="footer-logo me-2"></div>
                        <span class="fs-4 fw-bold">Bumatara</span>
                    </div>
                    <p class="mb-0">Solusi ai berkelanjutan untuk perusahaan.</p>
                </div>
                <div class="col-lg-6 text-white">
                    <h5 class="fw-bold">Our Social Media</h5>

                    <div class="d-flex align-items-center mt-3">
                        <div class="footer-social">
                            <i class="bi bi-facebook fs-4 text-primary"></i>
                        </div>
                        <p class="mb-0 ms-2">
                            <a href="https://facebook.com/bumatara" target="_blank"
                                class="text-decoration-none text-white">
                                Facebook / Bumatara
                            </a>
                        </p>
                    </div>

                    <div class="d-flex align-items-center mt-2">
                        <div class="footer-social">
                            <i class="bi bi-twitter-x fs-4 text-white"></i>
                        </div>
                        <p class="mb-0 ms-2">
                            <a href="https://twitter.com/bumatara" target="_blank"
                                class="text-decoration-none text-white">
                                Twitter / X
                            </a>
                        </p>
                    </div>

                    <div class="d-flex align-items-center mt-2">
                        <div class="footer-social">
                            <i class="bi bi-instagram fs-4 text-danger"></i>
                        </div>
                        <p class="mb-0 ms-2">
                            <a href="https://instagram.com/bumatara" target="_blank"
                                class="text-decoration-none text-white">
                                Instagram / @bumatara
                            </a>
                        </p>
                    </div>

                    <div class="d-flex align-items-center mt-2">
                        <div class="footer-social">
                            <i class="bi bi-linkedin fs-4 text-primary"></i>
                        </div>
                        <p class="mb-0 ms-2">
                            <a href="https://linkedin.com/company/bumatara" target="_blank"
                                class="text-decoration-none text-white">
                                LinkedIn / Bumatara
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>