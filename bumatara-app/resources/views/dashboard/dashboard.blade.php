@extends('dashboard.main')
@section('main-panel')
<div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-4 border-bottom border-secondary">
    <div>
        <h1 class="h2 fw-bold m-0">Dashboard</h1>
        <p class="text-white small">Ringkasan performa dan manajemen konten sistem Bumatara AI</p>
    </div>
    <div class="d-flex align-items-center gap-3">
        <span class="badge badge-live px-2 py-1 rounded d-flex align-items-center gap-1">
            <span class="spinner-grow spinner-grow-sm" role="status"></span> Live QnA Active
        </span>
        <div class="text-end">
            <div class="fw-semibold small">Rizki Abdillah</div>
            <div class="text-white" style="font-size: 0.75rem;">Super Admin</div>
        </div>
    </div>
</div>

<div class="row g-3 mb-4">
    <div class="col-6 col-lg-3">
        <div class="card-stat p-3 d-flex align-items-center justify-content-between">
            <div>
                <div class="text-white small fw-medium">Video Edukasi</div>
                <h3 class="fw-bold mt-1 m-0">24</h3>
            </div>
            <div class="icon-box"><i class="bi bi-youtube fs-4 text-white"></i></div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card-stat p-3 d-flex align-items-center justify-content-between">
            <div>
                <div class="text-white small fw-medium">Model & Code</div>
                <h3 class="fw-bold mt-1 m-0">12</h3>
            </div>
            <div class="icon-box"><i class="bi bi-file-earmark-code fs-4 text-white"></i></div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card-stat p-3 d-flex align-items-center justify-content-between">
            <div>
                <div class="text-white small fw-medium">Foto Produk</div>
                <h3 class="fw-bold mt-1 m-0">8</h3>
            </div>
            <div class="icon-box"><i class="bi bi-images fs-4 text-white"></i></div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card-stat p-3 d-flex align-items-center justify-content-between">
            <div>
                <div class="text-white small fw-medium">Total User</div>
                <h3 class="fw-bold mt-1 m-0">1,240</h3>
            </div>
            <div class="icon-box"><i class="bi bi-people fs-4 text-white" ></i></div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-6">
        <div class="card border-0 p-4" style="background-color: var(--card-dark); border-radius: 16px;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold m-0 text-white"><i class="bi bi-chat-dots text-info me-2"></i> Antrean Live QnA
                    Terbaru</h5>
                <a href="#" class="btn btn-sm btn-outline-info rounded-pill px-3" style="font-size: 0.8rem;">Respons
                    Semua</a>
            </div>
            <div class="d-flex flex-column gap-2">
                <div class="p-3 rounded-3 border border-secondary" style="background-color: rgba(10, 31, 41, 0.3);">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="fw-semibold text-white small">Ahmad Fauzi</span>
                        <span class="text-white" style="font-size: 0.75rem;">2 mnt yang lalu</span>
                    </div>
                    <p class="mb-0 small text-white">"Bagaimana cara melakukan merging model YOLOv5 dengan dataset
                        custom?"</p>
                </div>
                <div class="p-3 rounded-3 border border-secondary" style="background-color: rgba(10, 31, 41, 0.3);">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <span class="fw-semibold text-white small">Siti Aminah</span>
                        <span class="text-white" style="font-size: 0.75rem;">10 mnt yang lalu</span>
                    </div>
                    <p class="mb-0 small text-white">"Apakah script OCR KTP sudah mendukung optimasi GPU RTX 3050?"</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card border-0 p-4" style="background-color: var(--card-dark); border-radius: 16px;">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold m-0 text-white"><i class="bi bi-shield-lock text-warning me-2"></i> Hak Akses User
                    Aplikasi</h5>
                <a href="#" class="btn btn-sm btn-outline-warning rounded-pill px-3" style="font-size: 0.8rem;">Kelola
                    Akses</a>
            </div>
            <div class="table-responsive">
                <table class="table table-dark table-borderless m-0 align-middle small">
                    <thead>
                        <tr class="text-white border-bottom border-secondary">
                            <th>User</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>budi.s@example.com</td>
                            <td><span class="badge bg-primary">Premium Member</span></td>
                            <td><span class="text-success"><i class="bi bi-circle-fill me-1"
                                        style="font-size: 0.5rem;"></i> Active</span></td>
                        </tr>
                        <tr>
                            <td>dev.alpha@bumatara.com</td>
                            <td><span class="badge bg-info">Content Creator</span></td>
                            <td><span class="text-success"><i class="bi bi-circle-fill me-1"
                                        style="font-size: 0.5rem;"></i> Active</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection