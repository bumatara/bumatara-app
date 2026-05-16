@extends('dashboard.main')
@section('main-panel')
<div class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom border-secondary">
    <div>
        <h1 class="h2 fw-bold m-0">Management Data</h1>
        <p class="text-muted small">Kelola seluruh aset konten, berkas model AI, serta kontrol hak akses
            pengguna.</p>
    </div>
</div>

<div class="data-card mb-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
        <h5 class="fw-bold m-0 text-white"><i class="bi bi-folder2-open text-info me-2"></i> Daftar Konten &
            Asset Repository</h5>
        <div class="d-flex gap-2">
            <input type="text" class="form-control search-box form-control-sm" placeholder="Cari aset...">
            <select class="form-select form-select-sm search-box" style="width: 160px;">
                <option value="">Semua Tipe</option>
                <option value="video">Video Edukasi</option>
                <option value="code">Source Code / Model</option>
                <option value="product">Foto Produk</option>
            </select>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-custom align-middle">
            <thead>
                <tr>
                    <th>Nama / Judul Aset</th>
                    <th>Tipe Konten</th>
                    <th>Kategori / Keterangan File</th>
                    <th>Tanggal Upload</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="fw-semibold text-white">Implementasi Real-Time Video Detection</div>
                        <small class="text-muted">https://youtube.com/watch?v=...</small>
                    </td>
                    <td><span
                            class="badge bg-danger bg-opacity-20 text-danger border border-danger border-opacity-20 px-2 py-1">Video
                            Edukasi</span></td>
                    <td><span class="text-info small">Computer Vision</span></td>
                    <td>15 Mei 2026</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-light btn-action me-1"><i
                                class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger btn-action"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="fw-semibold text-white">OCR KTP Parser Engine</div>
                        <small class="text-muted">main_processor.py &bull; yolov5_ktp.pt</small>
                    </td>
                    <td><span
                            class="badge bg-warning bg-opacity-20 text-warning border border-warning border-opacity-20 px-2 py-1">Source
                            & Model AI</span></td>
                    <td><span class="text-secondary small">OCR System</span></td>
                    <td>12 Mei 2026</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-light btn-action me-1"><i
                                class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger btn-action"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="fw-semibold text-white">Mockup Dashboard Absensi SaaS</div>
                        <small class="text-muted">ui-presence-v1.png</small>
                    </td>
                    <td><span
                            class="badge bg-success bg-opacity-20 text-success border border-success border-opacity-20 px-2 py-1">Foto
                            Produk</span></td>
                    <td><span class="text-secondary small">Image Asset</span></td>
                    <td>10 Mei 2026</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-light btn-action me-1"><i
                                class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger btn-action"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="data-card">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="fw-bold m-0 text-white"><i class="bi bi-shield-check text-warning me-2"></i> Kontrol
            Akses Pengguna Aplikasi</h5>
        <button class="btn btn-sm btn-primary rounded-pill px-3"
            style="background-color: var(--turquoise-light); border:none;"><i class="bi bi-person-plus me-1"></i> Tambah
            User</button>
    </div>

    <div class="table-responsive">
        <table class="table table-custom align-middle">
            <thead>
                <tr>
                    <th>Nama Pengguna</th>
                    <th>Email</th>
                    <th>Tingkat Akses (Role)</th>
                    <th>Status Akun</th>
                    <th class="text-center">Aksi Manajemen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fw-semibold text-white">Rizki Abdillah</td>
                    <td>rizki@bumatara.com</td>
                    <td><span class="badge bg-info text-dark">Super Admin</span></td>
                    <td><span class="text-success small"><i class="bi bi-circle-fill me-1"
                                style="font-size: 0.5rem;"></i> Aktif</span></td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-secondary btn-action" disabled>Sistem</button>
                    </td>
                </tr>
                <tr>
                    <td class="fw-semibold text-white">Hendra Wijaya</td>
                    <td>hendra.client@example.com</td>
                    <td><span class="badge bg-secondary text-light">Premium Member</span></td>
                    <td><span class="text-success small"><i class="bi bi-circle-fill me-1"
                                style="font-size: 0.5rem;"></i> Aktif</span></td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-outline-light btn-action me-1">Ubah Akses</button>
                        <button class="btn btn-sm btn-outline-danger btn-action">Suspend</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection