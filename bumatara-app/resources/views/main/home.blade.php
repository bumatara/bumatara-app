   @extends('master')
   @section('main-panel')
   <main>

       <!-- @php
       var_dump($d_question);
       @endphp -->

       <section class="py-5">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col-lg-6 mb-4 mb-lg-0">
                       <div class="mb-2">
                           <h4 style="background-color: #01366e; color: #ffffff; padding: 6px; width: 250px;">
                               <strong>Bumatara.com</strong>
                           </h4>
                       </div>
                       <h1 class="display-5 fw-bold">Unlock Your Potential with AI</h1>
                       <p class="lead">
                           Belajar Mengguanakan Serta membuat AI, untuk memperluas ekosistem pengguna dan pembuatan AI
                           untuk masyarakat Indonesia.
                       </p>
                   </div>
                   <div class="col-lg-6">
                       <img alt="Logo Bumatara" src="images/Benner-home.jpg" style="height: 290px; margin-right: 10px;">
                       <!-- <div class="placeholder-box" style="height: 290px;"></div> -->
                   </div>
               </div>
           </div>
       </section>

       <section class="py-5">
           <div class="container">
               <div class="row">
                   <div class="col-12 text-center ">
                       <h2 class="fw-bold">Hal Yang Bisa Kita Buat</h2>
                   </div>
                   <div class=" text-center flex-wrap mt-4 mb-4">
                       <button class="btn btn-outline-secondary me-2 mb-2">URL Checker</button>
                       <button class="btn btn-outline-secondary me-2 mb-2">Scale Up Backgrou...</button>
                       <button class="btn btn-outline-secondary me-2 mb-2">OCR ID</button>
                       <button class="btn btn-outline-secondary mb-2">Chet Doc (RAG)</button>
                   </div>
               </div>
               <div class="container my-4">
                   <div class="d-flex flex-row flex-nowrap overflow-auto gap-3 pb-3" style="scrollbar-width: none;">
                       @foreach ($dashboard_video as $row)
                       <div class="card border-3 shadow-sm"
                           style="min-width: 280px; max-width: 280px; background-color: var(--card-dark); border: 1px solid rgba(0, 143, 168, 0.15); border-radius: 12px; overflow: hidden;">
                           <div class="position-relative">
                               <img src="{{ $row->thumbnail }}" class="card-img-top" alt="Video Thumbnail" style="height: 157px; object-fit: cover;">

                               <span
                                   class="position-absolute bottom-0 end-0 bg-dark  px-2 py-0.5 m-2 rounded small fw-semibold"
                                   style="font-size: 0.75rem; background-color: rgba(0, 0, 0, 0.75) !important;">12:16</span>
                           </div>
                           <div class="card-body px-3 pt-3 pb-3">
                               <h5 class="card-title fs-6 fw-bold text-truncate  mb-1"
                                   title="{{ $row->judul }}">
                                   {{ $row->judul }}
                               </h5>

                               <p class="card-text small mb-3  text-truncate" style="max-height: 40px;">
                                   {{ $row->deskripsi }}
                               </p>

                               <div class="d-grid">
                                   <a href="https://www.youtube.com/watch?v=07TK9Qsps5U" target="_blank"
                                       class="btn btn-sm btn-outline-info rounded-pill px-3"
                                       style="border-color: var(--turquoise-light); color: #4c0a0aff;">
                                       <i class="bi bi-play-fill me-1"></i>View
                                   </a>
                               </div>
                           </div>
                       </div>
                       @endforeach


                   </div>
               </div>
           </div>

           <div class="carousel-item">
               <div class="row justify-content-center">
                   <div class="col-lg-12">
                       <div class="p-3 m-3 card bg-light p-4 rounded-3 border-0 soft-shadow">

                           <div class="text-center mb-1">
                               <h3 class="fw-bold">QR Code Generator</h3>
                           </div>

                           <div class="row g-4">
                               <!-- Input QR Code -->
                               <div class="col-lg-6">
                                   <h5 class="fw-bold mb-3">Create QR Code</h5>
                                   <p class="lead">Enter text, URL, or any information to generate a QR Code
                                       instantly.</p>
                                   <form id="qrForm">
                                       <div class="input-group">
                                           <input type="text" id="qrInput" class="form-control"
                                               placeholder="Enter text or URL here" required>
                                           <button type="submit" class="btn btn-success">Generate</button>
                                       </div>
                                   </form>
                               </div>

                               <!-- Penjelasan -->
                               <div class="col-lg-6">
                                   <h5 class="fw-bold mb-3">What is a QR Code?</h5>
                                   <p class="text-muted mb-0">
                                       A <strong>QR Code (Quick Response Code)</strong> is a type of matrix barcode
                                       that can store
                                       information such as URLs, text, or contact data. It can be scanned by most
                                       smartphone cameras
                                       and QR reader apps, making it ideal for sharing information quickly.
                                   </p>
                               </div>
                           </div>

                           <!-- Hasil QR Code -->
                           <div class="mt-4 text-center">
                               <h5 class="fw-bold">Generated QR Code:</h5>
                               <canvas id="qrCanvas"
                                   class="border rounded-3 p-2 bg-white d-block mx-auto mt-3"></canvas>
                               <button id="downloadBtn" class="btn btn-primary mt-3" style="display:none;">
                                   <i class="bi bi-download"></i> Download QR Code
                               </button>
                           </div>
                       </div>
                   </div>

                   <script>
                   const qrForm = document.getElementById("qrForm");
                   const qrInput = document.getElementById("qrInput");
                   const qrCanvas = document.getElementById("qrCanvas");
                   const downloadBtn = document.getElementById("downloadBtn");

                   const qr = new QRious({
                       element: qrCanvas,
                       size: 200,
                       value: ''
                   });

                   qrForm.addEventListener("submit", function(e) {
                       e.preventDefault();
                       const text = qrInput.value.trim();
                       if (text) {
                           qr.value = text;
                           downloadBtn.style.display = "inline-block";
                       }
                   });

                   downloadBtn.addEventListener("click", function() {
                       const link = document.createElement("a");
                       link.href = qrCanvas.toDataURL("image/png");
                       link.download = "qrcode.png";
                       link.click();
                   });
                   </script>

               </div>
           </div>

           <!-- Script JS sederhana (dummy result) -->
           <script>
           document.getElementById('urlCheckForm').addEventListener('submit', function(e) {
               e.preventDefault();
               const url = document.getElementById('urlInput').value;
               const resultBox = document.getElementById('hasilCheck');

               // Dummy logic
               if (url.includes("https")) {
                   resultBox.value = "✅ URL valid & menggunakan HTTPS: " + url;
               } else {
                   resultBox.value = "⚠️ URL mencurigakan atau tidak menggunakan HTTPS: " + url;
               }
           });
           </script>


           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#featureCarousel" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#featureCarousel" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
           </button>
           </div>
           </div>
       </section>

       <section class="py-5">
           <div class="container">
               <div class="row">
                   <div class="col-12 text-center mb-5">
                       <h2 class="fw-bold">Mengapa Memilih Bumatara.com</h2>
                       <p class="text-muted">Jembatan antara pembelajaran teknologi masa depan dan implementasi solusi
                           AI nyata untuk bisnis Anda.</p>
                   </div>
               </div>
               <div class="row">
                   <!-- Edukasi & Praktik -->
                   <div class="col-lg-4 col-md-6 mb-4">
                       <div class="feature-card text-start h-100 p-4 shadow-sm rounded-4 border-0">
                           <div class="mb-3">
                               <i class="bi bi-book fs-1 text-primary"></i>
                           </div>
                           <h5 class="fw-bold">Pusat Belajar AI Terapan</h5>
                           <p class="text-muted">
                               Bukan sekadar teori, kami menyediakan akses ke pustaka kode dan dokumentasi pembuatan
                               tools Computer Vision untuk membantu Anda menjadi praktisi AI yang handal.
                           </p>
                       </div>
                   </div>

                   <!-- Vendor/Solusi Kustom -->
                   <div class="col-lg-4 col-md-6 mb-4">
                       <div class="feature-card text-start h-100 p-4 shadow-sm rounded-4 border-0">
                           <div class="mb-3">
                               <i class="bi bi-cpu fs-1 text-success"></i>
                           </div>
                           <h5 class="fw-bold">Vendor Aplikasi AI Kustom</h5>
                           <p class="text-muted">
                               Kami membantu perusahaan membangun sistem cerdas seperti OCR, Object Detection, hingga
                               analisis dokumen (RAG) yang dirancang khusus untuk kebutuhan spesifik bisnis Anda.
                           </p>
                       </div>
                   </div>

                   <!-- Inovasi & Dokumentasi -->
                   <div class="col-lg-4 col-md-6 mb-4">
                       <div class="feature-card text-start h-100 p-4 shadow-sm rounded-4 border-0">
                           <div class="mb-3">
                               <i class="bi bi-rocket-takeoff fs-1 text-warning"></i>
                           </div>
                           <h5 class="fw-bold">Inovasi Berkelanjutan</h5>
                           <p class="text-muted">
                               Melalui riset mendalam pada teknologi terbaru seperti YOLO dan OpenCV, kami memastikan
                               setiap solusi dan materi yang kami berikan tetap relevan dengan standar industri.
                           </p>
                       </div>
                   </div>
               </div>
           </div>
       </section>


       <section class="py-5">
           <div class="container">
               <div class="row">
                   <div class="col-12 text-center mb-4">
                       <h2 class="fw-bold">Our Vision</h2>
                   </div>
               </div>
               <div class="row">
                   <div class="col-12">
                       <div class="video-box rounded">
                           <h4 class="fw-bold">Video Narasi Kita tentang produk kita</h4>
                       </div>
                   </div>
               </div>
           </div>
       </section>

       <section class="py-5">
           <div class="container">
               <div class="row">
                   <div class="col-lg-6 mb-4 mb-lg-0">
                       <div class="shadow-sm h-100 p-3 border rounded-3 bg-light">
                           <h5 class="fw-bold mb-3">Live Q&A</h5>

                           <div style="max-height: 300px; overflow-y: auto;" class="mb-3">
                               @foreach ($d_question as $row)
                               <div class="qna-item p-3 mb-2 bg-white border rounded">
                                   <p class="fw-semibold mb-2">{{$row -> question}}</p>
                                   <p class="mb-2">
                                       {{$row -> answer}}
                                   </p>
                                   <small class="text-muted">Asked by: <strong>{{$row -> name}}</strong> •
                                       {{$row -> time_ago_day}} days ago</small>
                               </div>
                               @endforeach
                               <div class="qna-item p-3 mb-2 bg-white border rounded">
                                   <p class="fw-semibold mb-2">How can AI help B2B businesses?</p>
                                   <p class="mb-2">
                                       AI can automate processes, improve data analysis, and open up new opportunities
                                       for efficiency and innovation across various industry sectors.
                                   </p>
                                   <small class="text-muted">Asked by: <strong>Andi</strong> • 25 minutes ago</small>
                               </div>

                               <div class="qna-item p-3 mb-2 bg-white border rounded">
                                   <p class="fw-semibold mb-2">Does AI always require big data?</p>
                                   <p class="mb-2">
                                       Not always. For some cases, a small amount of data is sufficient, but deep
                                       learning models typically require larger datasets for optimal results.
                                   </p>
                                   <small class="text-muted">Asked by: <strong>Sari</strong> • 1 hour ago</small>
                               </div>
                           </div>

                           @if(session('success'))
                           <div class="alert alert-success">{{ session('success') }}</div>
                           @endif

                           <form action="{{ route('question.store') }}" method="POST">
                               @csrf
                               <div class="mb-3">
                                   <label for="name" class="form-label">Name</label>
                                   <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Enter your name" required>
                               </div>
                               <div class="mb-3">
                                   <label for="question" class="form-label">Question</label>
                                   <textarea class="form-control" id="question" name="question" rows="3"
                                       placeholder="Write your question" required></textarea>
                               </div>
                               <button type="submit" class="btn btn-primary w-100">Submit Question</button>
                           </form>

                       </div>
                   </div>

                   <div class="col-lg-6">
                       <div class="qna-box h-100 p-4 border-0 rounded-4 shadow-sm bg-white">
                           <h5 class="fw-bold mb-4">Pertanyaan yang Sering Diajukan</h5>
                           <div class="accordion" id="qnaAccordion">

                               <!-- Edukasi / Belajar AI -->
                               <div class="accordion-item border-0 mb-2 shadow-sm rounded-3 overflow-hidden">
                                   <h2 class="accordion-header" id="heading1">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                                           aria-controls="collapse1">
                                           Apa yang bisa saya pelajari di Pustaka Kode Bumatara?
                                       </button>
                                   </h2>
                                   <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body text-muted">
                                           Anda dapat mengakses dokumentasi teknis dan kode sumber untuk proyek Computer
                                           Vision seperti YOLOv5, OpenCV, hingga sistem deteksi objek real-time dengan
                                           timestamp.
                                       </div>
                                   </div>
                               </div>

                               <!-- Vendor / Solusi Bisnis -->
                               <div class="accordion-item border-0 mb-2 shadow-sm rounded-3 overflow-hidden">
                                   <h2 class="accordion-header" id="heading2">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                           aria-controls="collapse2">
                                           Bagaimana Bumatara menangani proyek custom AI untuk perusahaan?
                                       </button>
                                   </h2>
                                   <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body text-muted">
                                           Sebagai vendor, kami membangun solusi end-to-end mulai dari pengembangan
                                           model AI khusus (seperti OCR KTP atau deteksi pelanggaran) hingga integrasi
                                           ke dalam aplikasi berbasis web (Laravel/Python) atau bot perdagangan.
                                       </div>
                                   </div>
                               </div>

                               <!-- Teknis / Model AI -->
                               <div class="accordion-item border-0 mb-2 shadow-sm rounded-3 overflow-hidden">
                                   <h2 class="accordion-header" id="heading3">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                           aria-controls="collapse3">
                                           Apakah saya bisa mendownload model AI yang sudah jadi?
                                       </button>
                                   </h2>
                                   <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body text-muted">
                                           Ya, kami menyediakan fitur unduhan untuk model AI yang telah dilatih (seperti
                                           file .pt atau .weights) sehingga Anda bisa langsung mengimplementasikannya di
                                           lingkungan pengembangan Anda sendiri.
                                       </div>
                                   </div>
                               </div>

                               <!-- Optimasi / Performa -->
                               <div class="accordion-item border-0 mb-2 shadow-sm rounded-3 overflow-hidden">
                                   <h2 class="accordion-header" id="heading4">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                           aria-controls="collapse4">
                                           Bagaimana cara mengoptimalkan kecepatan deteksi AI saya?
                                       </button>
                                   </h2>
                                   <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body text-muted">
                                           Anda dapat melakukan optimasi melalui penggunaan hardware yang tepat (seperti
                                           GPU NVIDIA RTX), teknik merging model, atau menggunakan library akselerasi
                                           seperti TensorRT untuk pemrosesan GPU yang lebih cepat.
                                       </div>
                                   </div>
                               </div>

                               <!-- Startup & Kolaborasi -->
                               <div class="accordion-item border-0 mb-0 shadow-sm rounded-3 overflow-hidden">
                                   <h2 class="accordion-header" id="heading5">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                           aria-controls="collapse5">
                                           Apakah Bumatara menerima kolaborasi pembuatan produk SaaS?
                                       </button>
                                   </h2>
                                   <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body text-muted">
                                           Tentu. Melalui PT Abdigital Innovation, kami fokus pada pengembangan aplikasi
                                           kehadiran berbasis SaaS dan sistem analisis dokumen yang dapat disesuaikan
                                           dengan kebutuhan pasar Anda.
                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>

   </main>
   @endsection