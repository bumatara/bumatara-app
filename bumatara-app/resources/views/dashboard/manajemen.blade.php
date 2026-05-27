@extends('dashboard.main')
@section('main-panel')
<div class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom border-secondary">
    <div>
        <h1 class="h2 fw-bold m-0">Management Data</h1>
        <p class="small text-light">Kelola seluruh aset konten, berkas model AI, serta kontrol hak akses pengguna.</p>
    </div>
</div>

<ul class="nav nav-pills mb-4" id="uploadTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="video-tab" data-bs-toggle="pill" data-bs-target="#panel-video" type="button"
            role="tab">
            <i class="bi bi-youtube me-2"></i>Manajemen Konten
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="system-tab" data-bs-toggle="pill" data-bs-target="#panel-system" type="button"
            role="tab">
            <i class="bi bi-code-square me-2"></i>Manajemen system
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="code-tab" data-bs-toggle="pill" data-bs-target="#acces-user" type="button"
            role="tab">
            <i class="bi bi-shield-check me-2"></i>Kontrol Acces Pengguna
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="product-tab" data-bs-toggle="pill" data-bs-target="#panel-product" type="button"
            role="tab">
            <i class="bi bi-images me-2"></i>Manajement Foto Produk
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="category-tab" data-bs-toggle="pill" data-bs-target="#panel-category" type="button"
            role="tab">
            <i class="bi bi-tags me-2"></i>Manajement Kategori
        </button>
    </li>
</ul>

<div class="tab-content" id="uploadTabContent">
    <div class="tab-pane fade show active" id="panel-video" role="tabpanel">
        <div class="data-card mb-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
                <h5 class="fw-bold m-0 text-white"><i class="bi bi-folder2-open text-info me-2"></i> Daftar Konten &
                    Asset Repository</h5>
                <div class="d-flex gap-2">
                    <input type="text" class="form-control search-box form-control-sm text-white"
                        placeholder="Cari aset...">
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
                            <th class="fw-bold" style="color: #ffffff !important; width: 80px;">Preview</th>
                            <th class="fw-bold" style="color: #ffffff !important;">Nama / Judul Aset</th>
                            <th class="fw-bold" style="color: #ffffff !important;">Tipe Konten</th>
                            <th class="fw-bold" style="color: #ffffff !important;">Kategori / Keterangan File</th>
                            <th class="fw-bold" style="color: #ffffff !important;">Tanggal Upload</th>
                            <th class="fw-bold text-center" style="color: #ffffff !important;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="position-relative ratio ratio-16x9 rounded-2 overflow-hidden border border-secondary border-opacity-20"
                                    style="width: 80px; height: 45px;">
                                    <img src="https://img.youtube.com/vi/07TK9Qsps5U/maxresdefault.jpg" alt="Thumbnail"
                                        style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                            </td>
                            <td>
                                <div class="fw-semibold text-white">Implementasi Real-Time Video Detection</div>
                                <small class="text-muted">https://youtube.com/watch?v=07TK9Qsps5U</small>
                            </td>
                            <td>
                                <span
                                    class="badge bg-danger bg-opacity-20 text-danger border border-danger border-opacity-20 px-2 py-1">
                                    Video Edukasi
                                </span>
                            </td>
                            <td><span class="text-info small">Computer Vision</span></td>
                            <td>15 Mei 2026</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-light btn-action me-1" data-bs-toggle="modal"
                                    data-bs-target="#modalEditAset" data-id="1"
                                    data-judul="Implementasi Real-Time Video Detection"
                                    data-link="https://youtube.com/watch?v=07TK9Qsps5U" data-tipe="Video Edukasi"
                                    data-kategori="Computer Vision">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm btn-outline-danger btn-action" data-bs-toggle="modal"
                                    data-bs-target="#modalHapusAset" data-id="1">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="tab-pane fade show" id="panel-system" role="tabpanel">
        <div class="data-card mb-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
                <h5 class="fw-bold m-0 text-white"><i class="bi bi-folder2-open text-info me-2"></i> Daftar Code System
                </h5>
                <div class="d-flex gap-2">
                    <input type="text" class="form-control search-box form-control-sm text-white"
                        placeholder="Cari aset...">
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
                            <thead>
                                <tr>
                                    <th class="fw-bold" style="color: #ffffff !important;">Nama / Judul Aset</th>
                                    <th class="fw-bold" style="color: #ffffff !important;">Tipe Konten</th>
                                    <th class="fw-bold" style="color: #ffffff !important;">Kategori / Keterangan File
                                    </th>
                                    <th class="fw-bold" style="color: #ffffff !important;">Tanggal Upload</th>
                                    <th class="fw-bold text-center" style="color: #ffffff !important;">Aksi</th>
                                </tr>
                            </thead>
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
                                <button class="btn btn-sm btn-outline-danger btn-action"><i
                                        class="bi bi-trash"></i></button>
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
                                <button class="btn btn-sm btn-outline-danger btn-action"><i
                                        class="bi bi-trash"></i></button>
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
                                <button class="btn btn-sm btn-outline-danger btn-action"><i
                                        class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="acces-user" role="tabpanel">
        <div class="data-card">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold m-0 text-white"><i class="bi bi-shield-check text-warning me-2"></i> Kontrol Akses
                    Pengguna Aplikasi</h5>
                <button class="btn btn-sm btn-primary rounded-pill px-3"
                    style="background-color: var(--turquoise-light); border:none;">
                    <i class="bi bi-person-plus me-1"></i> Tambah User
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-custom align-middle">
                    <thead>
                        <tr>
                            <th class="fw-bold" style="color: #ffffff !important;">Nama Pengguna</th>
                            <th class="fw-bold" style="color: #ffffff !important;">Email</th>
                            <th class="fw-bold" style="color: #ffffff !important;">Tingkat Akses (Role)</th>
                            <th class="fw-bold" style="color: #ffffff !important;">Status Akun</th>
                            <th class="fw-bold text-center" style="color: #ffffff !important;">Aksi Manajemen</th>
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
    </div>

    <div class="tab-pane fade" id="panel-product" role="tabpanel">
        <div class="data-card mb-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
                <h5 class="fw-bold m-0 text-white"><i class="bi bi-images text-success me-2"></i> Repository Foto Produk
                    & Mockup SaaS</h5>
                <div class="d-flex gap-2">
                    <input type="text" class="form-control search-box form-control-sm text-white"
                        placeholder="Cari foto produk...">
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-custom align-middle">
                    <thead>
                        <tr>
                            <th class="fw-bold" style="color: #ffffff !important;">Preview</th>
                            <th class="fw-bold" style="color: #ffffff !important;">Nama / Fitur Produk</th>
                            <th class="fw-bold" style="color: #ffffff !important;">Nama File</th>
                            <th class="fw-bold" style="color: #ffffff !important;">Tanggal Rilis</th>
                            <th class="fw-bold text-center" style="color: #ffffff !important;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 80px;">
                                <div class="rounded border border-secondary overflow-hidden bg-black d-flex align-items-center justify-content-center"
                                    style="height: 50px;">
                                    <i class="bi bi-image text-muted"></i>
                                </div>
                            </td>
                            <td>
                                <div class="fw-semibold text-white">Interface Absensi Face Recognition</div>
                                <small class="text-muted">Modul kehadiran karyawan PT Abdigital Innovation</small>
                            </td>
                            <td><code class="text-info small">ui-presence-v1.png</code></td>
                            <td>10 Mei 2026</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-light btn-action me-1"><i
                                        class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-outline-danger btn-action"><i
                                        class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="panel-category" role="tabpanel">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="data-card h-100">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold m-0 text-white"><i class="bi bi-collection-play text-danger me-2"></i>
                            Kategori Video Edukasi</h5>
                        <button class="btn btn-sm btn-outline-danger rounded-pill px-3" style="font-size: 0.8rem;"><i
                                class="bi bi-plus-lg me-1"></i> Tambah</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom align-middle">
                            <thead>
                                <tr>
                                    <th class="fw-bold" style="color: #ffffff !important;">Nama Kategori</th>
                                    <th class="fw-bold" style="color: #ffffff !important;">Slug</th>
                                    <th class="fw-bold text-center" style="color: #ffffff !important;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori_video as $row)
                                <tr>
                                    <td class="text-white fw-medium">{{ $row->content }}</td>
                                    <td><code class="text-white small">{{ $row->parameter }}</code></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-light btn-action me-1"
                                            data-bs-toggle="modal" data-bs-target="#modalEditData"
                                            data-id="{{ $row->id }}" data-content="{{ $row->content }}"
                                            data-parameter="{{ $row->parameter }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button class="btn btn-sm btn-outline-danger btn-action" data-bs-toggle="modal"
                                            data-bs-target="#modalKonfirmasiDelete" data-id="{{ $row->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="data-card h-100">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold m-0 text-white"><i class="bi bi-code-square text-warning me-2"></i> Kategori
                            Pustaka Kode</h5>
                        <button class="btn btn-sm btn-outline-warning rounded-pill px-3" style="font-size: 0.8rem;"><i
                                class="bi bi-plus-lg me-1"></i> Tambah</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom align-middle">
                            <thead>
                                <tr>
                                    <th class="fw-bold" style="color: #ffffff !important;">Nama Kategori</th>
                                    <th class="fw-bold" style="color: #ffffff !important;">Slug</th>
                                    <th class="fw-bold text-center" style="color: #ffffff !important;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori_system as $row)
                                <tr>
                                    <td class="text-white fw-medium">{{ $row->content }}</td>
                                    <td><code class="text-white small">{{ $row->parameter }}</code></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-light btn-action me-1"
                                            data-bs-toggle="modal" data-bs-target="#modalEditData"
                                            data-id="{{ $row->id }}" data-content="{{ $row->content }}"
                                            data-parameter="{{ $row->parameter }}">
                                            <i class="bi bi-pencil"></i>
                                        </button>

                                        <button class="btn btn-sm btn-outline-danger btn-action" data-bs-toggle="modal"
                                            data-bs-target="#modalKonfirmasiDelete" data-id="{{ $row->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.modal')


@push('scripts')
<script src="{{ asset('js/manajemen.js') }}"></script>


@endpush
@endsection