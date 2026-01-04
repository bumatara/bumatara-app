<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Konten Video Edukasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f6f8;
        }

        .sidebar {
            height: calc(100vh - 56px);
            overflow-y: auto;
        }

        iframe {
            border-radius: 6px;
        }
    </style>
</head>

<body>

    <!-- HEADER / NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-play-btn-fill"></i> Bumatara Edu
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="bi bi-speedometer2"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-collection-play"></i> Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-tags"></i> Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-music-note-list"></i> Playlist</a>
                    </li>
                </ul>

                <div class="dropdown">
                    <a class="text-white dropdown-toggle text-decoration-none" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle"></i> Admin
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container-fluid mt-3">
        <div class="row">

            <!-- SIDEBAR -->
            <div class="col-md-3 col-lg-2 sidebar bg-white border-end p-3">
                <h6 class="fw-bold mb-3">📂 Menu</h6>
                <input type="text" class="form-control form-control-sm mb-3" placeholder="Cari kategori">

                <ul class="list-group list-group-flush small">
                    <li class="list-group-item active">Manajemen Video</li>
                    <li class="list-group-item">Matematika AI</li>
                    <li class="list-group-item">Ekonomi AI</li>
                    <li class="list-group-item">AI untuk Guru</li>
                    <li class="list-group-item">Computer Vision</li>
                    <li class="list-group-item">NLP</li>
                </ul>
            </div>

            <!-- CONTENT -->
            <div class="col-md-9 col-lg-10">

                <!-- STAT -->
                <div class="row g-3 mb-3">
                    <div class="col-md-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <small class="text-muted">Total Video</small>
                                <h4 class="fw-bold">128</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <small class="text-muted">Kategori</small>
                                <h4 class="fw-bold">12</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <small class="text-muted">Playlist</small>
                                <h4 class="fw-bold">24</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <small class="text-muted">Video Aktif</small>
                                <h4 class="fw-bold text-success">120</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FILTER -->
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <div class="row g-2 align-items-end">
                            <div class="col-md-4">
                                <label class="form-label small fw-bold">Cari Judul</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label small fw-bold">Playlist</label>
                                <select class="form-select form-select-sm">
                                    <option>Semua</option>
                                    <option>Kelas 10</option>
                                    <option>Kelas 11</option>
                                    <option>Guru</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label small fw-bold">Status</label>
                                <select class="form-select form-select-sm">
                                    <option>Semua</option>
                                    <option>Aktif</option>
                                    <option>Nonaktif</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary btn-sm w-100">
                                    <i class="bi bi-search"></i> Filter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TABLE -->
                <div class="card shadow-sm">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0 align-middle small">
                            <thead class="table-light text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Thumbnail</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori</th>
                                    <th>Playlist</th>
                                    <th>Status</th>
                                    <th width="120">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <img src="https://img.youtube.com/vi/07TK9Qsps5U/mqdefault.jpg" width="120">
                                    </td>
                                    <td>AI untuk Prediksi Nilai</td>
                                    <td>Ini untuk mewadahi deskripsi AI untuk Prediksi Nilai</td>
                                    <td><span class="badge bg-primary">Matematika AI</span></td>
                                    <td>Kelas 11</td>
                                    <td class="text-center"><span class="badge bg-success">Aktif</span></td>
                                    <td class="text-center">
                                        <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>