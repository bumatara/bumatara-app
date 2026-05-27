
<div class="modal fade" id="modalEditData" tabindex="-1" aria-labelledby="modalEditKategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"
            style="background-color: var(--card-dark); border: 1px solid rgba(0, 229, 255, 0.2); border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">

            <div class="modal-header border-bottom border-secondary">
                <h5 class="modal-title fw-bold text-white" id="modalEditKategoriLabel">
                    <i class="bi bi-tags text-info me-2"></i>Edit Kategori
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body py-4">
                <form id="formEditKategori">
                    @csrf
                    <input type="hidden" id="edit-id" name="id">

                    <div class="mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control text-white" id="edit-content" name="content"
                            placeholder="Masukkan nama kategori..." required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Parameter / Slug</label>
                        <input type="text" class="form-control text-white" id="edit-parameter" name="parameter"
                            placeholder="contoh: computer-vision" required>
                        <div class="form-text text-white-50" style="font-size: 0.75rem;">
                            *Gunakan huruf kecil, angka, dan tanda hubung (-)
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer border-top border-secondary">
                <button type="button" class="btn btn-sm btn-outline-light rounded-pill px-3"
                    data-bs-dismiss="modal">Batal</button>

                <button type="button" class="btn btn-sm btn-info text-dark fw-bold rounded-pill px-4"
                    data-bs-toggle="modal" data-bs-target="#modalKonfirmasiEdit">
                    <i class="bi bi-check-lg me-1"></i>Simpan Perubahan
                </button>
            </div>

        </div>
    </div>
</div>

<!--modal konfrimasi edit-->
<div class="modal fade" id="modalKonfirmasiEdit" tabindex="-1" aria-hidden="true" style="z-index: 1060;">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content"
            style="background-color: #0a1f29; border: 1px solid var(--turquoise-light); border-radius: 12px;">
            <div class="modal-body text-center p-4">
                <i class="bi bi-question-circle text-info fs-1 mb-3 d-block"></i>
                <h6 class="fw-bold text-white mb-2">Simpan Perubahan?</h6>
                <p class="text-muted small mb-4">Pastikan data kategori dan parameter sudah sesuai.</p>

                <div class="d-flex gap-2 justify-content-center">
                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3"
                        data-bs-toggle="modal" data-bs-target="#modalEditData">Kembali</button>

                    <button type="button" class="btn btn-sm btn-info text-dark fw-bold rounded-pill px-3"
                        onclick="executeSubmit()">Ya, Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--modal konfrimasi delete-->
<div class="modal fade" id="modalKonfirmasiDelete" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content" style="background-color: #0a1f29; border: 1px solid rgba(239, 68, 68, 0.4); border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
            
            <div class="modal-body text-center p-4">
                <i class="bi bi-exclamation-triangle text-danger fs-1 mb-3 d-block"></i>
                
                <h6 class="fw-bold text-white mb-2" id="modalHapusLabel">Hapus Kategori Ini?</h6>
                <p class="text-muted small mb-4">Tindakan ini tidak dapat dibatalkan. Data kategori yang dipilih akan dihapus permanen dari sistem.</p>
                
                <form id="formDeleteKategori" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="delete-id" name="id">
                    
                    <div class="d-flex gap-2 justify-content-center">
                        <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3" data-bs-dismiss="modal">Batal</button>
                        
                        <button type="submit" class="btn btn-sm btn-danger fw-bold rounded-pill px-3" onclick="executeDelete(event)">
                            Ya, Hapus
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
