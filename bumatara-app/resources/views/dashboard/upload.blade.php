@extends('dashboard.main')
@section('main-panel')
            <div
                class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-4 border-bottom border-secondary">
                <div>
                    <h1 class="h2 fw-bold m-0">Management Upload</h1>
                    <p class="text-muted small">Unggah dan distribusikan materi edukasi, model AI, dan produk startup
                        Anda.</p>
                </div>
            </div>

            <ul class="nav nav-pills mb-4" id="uploadTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="video-tab" data-bs-toggle="pill" data-bs-target="#panel-video"
                        type="button" role="tab"><i class="bi bi-youtube me-2"></i>Video Edukasi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="code-tab" data-bs-toggle="pill" data-bs-target="#panel-code"
                        type="button" role="tab"><i class="bi bi-file-earmark-code me-2"></i>Source Code & Model
                        AI</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="product-tab" data-bs-toggle="pill" data-bs-target="#panel-product"
                        type="button" role="tab"><i class="bi bi-images me-2"></i>Foto Produk</button>
                </li>
            </ul>

            <div class="tab-content" id="uploadTabContent">

                <div class="tab-pane fade show active" id="panel-video" role="tabpanel">
                    <div class="upload-card p-4">
                        <h5 class="fw-bold text-white mb-4">Form Upload Video Edukasi</h5>
                        <form action="#" method="POST">
                            <div class="row g-3">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label">Judul Video</label>
                                        <input type="text" class="form-control"
                                            placeholder="Contoh: Implementasi Real-Time Video Detection YOLOv5"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Link YouTube URL</label>
                                        <input type="url" class="form-control text-white-50"
                                            placeholder="https://www.youtube.com/watch?v=..." required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Kategori Video</label>
                                        <select class="form-select" required>
                                            <option value="" selected disabled>Pilih Kategori</option>
                                            <option value="cv">Computer Vision</option>
                                            <option value="ocr">OCR System</option>
                                            <option value="rag">Document Analysis (RAG)</option>
                                            <option value="trading">Quantitative Trading</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Deskripsi Video</label>
                                        <textarea class="form-control" rows="4"
                                            placeholder="Jelaskan detail pembahasan materi video di sini..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-submit"><i class="bi bi-send me-2"></i>Publish
                                        Video</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="panel-code" role="tabpanel">
                    <div class="upload-card p-4">
                        <h5 class="fw-bold text-white mb-4">Form Upload Script & Model AI</h5>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Project / Judul Kode</label>
                                        <input type="text" class="form-control"
                                            placeholder="Contoh: Plat Nomor Detection System" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Kategori Sistem AI</label>
                                        <select class="form-select" required>
                                            <option value="" selected disabled>Pilih Kategori</option>
                                            <option value="ocr-ktp">OCR KTP</option>
                                            <option value="human-count">Human Count</option>
                                            <option value="fire-detection">Fire Detection</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Upload File Script (.py / .ipynb)</label>
                                        <div class="drag-drop-zone">
                                            <i class="bi bi-filetype-py fs-2 text-info mb-2"></i>
                                            <p class="small text-muted mb-0">Klik atau seret berkas Python script ke
                                                sini</p>
                                            <input type="file" class="d-none" id="scriptFile">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Upload File Model Weights AI (.pt / .weights /
                                            .onnx)</label>
                                        <div class="drag-drop-zone">
                                            <i class="bi bi-box-seam fs-2 text-warning mb-2"></i>
                                            <p class="small text-muted mb-0">Klik atau seret berkas bobot model AI Anda
                                                ke sini</p>
                                            <input type="file" class="d-none" id="modelFile">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-submit"><i
                                            class="bi bi-cloud-arrow-up me-2"></i>Upload Aset AI</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade" id="panel-product" role="tabpanel">
                    <div class="upload-card p-4">
                        <h5 class="fw-bold text-white mb-4">Form Upload Foto & Desain Produk SaaS</h5>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Produk / Fitur</label>
                                        <input type="text" class="form-control"
                                            placeholder="Contoh: Interface Absensi Face Recognition" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Keterangan Produk</label>
                                        <textarea class="form-control" rows="4"
                                            placeholder="Deskripsikan fitur atau tampilan aset produk startup ini..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Pilih Gambar / Mockup Produk</label>
                                        <div class="drag-drop-zone" style="padding: 4.2rem 2.5rem;">
                                            <i class="bi bi-image fs-2 text-success mb-2"></i>
                                            <p class="small text-muted mb-0">Mendukung format PNG, JPG, atau WebP</p>
                                            <input type="file" class="d-none" id="productImage" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-submit mt-2"><i
                                            class="bi bi-image-fill me-2"></i>Simpan Gambar Produk</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
       
@endsection