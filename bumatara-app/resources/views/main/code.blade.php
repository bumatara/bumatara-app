   @extends('master')
   @section('main-panel')

   <main>

      <div class="container py-5">
    <h1 class="fw-bold mb-4">Pustaka Kode</h1>

    <div class="d-flex flex-wrap gap-2 mb-4">
        <button class="btn btn-primary rounded-pill px-4">OCR KTP</button>
        <button class="btn btn-primary rounded-pill px-4">HUMAN DETECH</button>
        <button class="btn btn-primary rounded-pill px-4">HUMAN COUNT</button>
        <button class="btn btn-primary rounded-pill px-4">HUMANOID DETECTION SYSTEM</button>
        <button class="btn btn-primary rounded-pill px-4">CARS COUNT</button>
        <button class="btn btn-primary rounded-pill px-4">CROWDED DETECTION</button>
        <button class="btn btn-primary rounded-pill px-4">DETECTION</button>
        <button class="btn btn-primary rounded-pill px-4">FIRE DETECTION</button>
        <button class="btn btn-primary rounded-pill px-4">ISYARAT SYSTEM</button>
    </div>

    <hr class="border-dark border-2 mb-4">

    <div class="row">
        <div class="col-md-12">
            <h3 class="fw-bold">Judul Kode</h3>
            <p class="text-muted mb-1">File Kode.python</p>
            <p class="text-muted mb-4">File Kode.python</p>

            <div class="card bg-white border-secondary mb-3" style="min-height: 300px;">
                <div class="card-header bg-light d-flex justify-content-between align-items-center border-bottom border-secondary">
                    <span class="small text-secondary">Preview kode</span>
                    <button class="btn btn-sm btn-outline-secondary" onclick="copyCode()">Copy Code</button>
                </div>
                <div class="card-body">
                    <pre class="mb-0"><code># Preview code akan tampil di sini
import cv2
import torch

model = torch.hub.load('ultralytics/yolov5', 'custom', path='best.pt')
# ... rest of your code</code></pre>
                </div>
            </div>

            <div class="d-flex gap-2">
                <a href="#" class="btn btn-success">
                    <i class="bi bi-download"></i> Download Script (.py)
                </a>
                <a href="#" class="btn btn-dark">
                    <i class="bi bi-box-seam"></i> Download AI Model (.pt / .weights)
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function copyCode() {
    const code = document.querySelector('pre code').innerText;
    navigator.clipboard.writeText(code);
    alert('Kode berhasil disalin!');
}
</script>


   </main>
   @endsection