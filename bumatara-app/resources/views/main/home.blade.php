   @extends('master')
   @section('main-panel')
   <main>
       <section class="py-5">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col-lg-6 mb-4 mb-lg-0">
                       <div class="mb-2">
                           <h4 style="background-color: #01366e; color: #ffffff; padding: 6px; width: 250px;">
                               <strong>Bumatara.com</strong>
                           </h4>
                       </div>
                       <h1 class="display-5 fw-bold">Solusi AI untuk Efisiensi dan Pertumbuhan Bisnis</h1>
                       <p class="lead">
                           Bumatara.com adalah mitra strategis bisnis dalam pemanfaatan AI,
                           membantu meningkatkan produktivitas, efisiensi, dan membuka peluang inovasi pengembangan
                           teknologi perusahaan.
                       </p>

                   </div>
                   <div class="col-lg-6">
                       <div class="placeholder-box" style="height: 290px;"></div>
                   </div>
               </div>
           </div>
       </section>

       <section class="py-5">
           <div class="container">
               <div class="row">
                   <div class="col-12 text-center ">
                       <h2 class="fw-bold">Fitur Utama Kami</h2>
                   </div>
                   <div class=" text-center flex-wrap mt-4 mb-4">
                       <button class="btn btn-outline-secondary me-2 mb-2">URL Checker</button>
                       <button class="btn btn-outline-secondary me-2 mb-2">Scale Up Backgrou...</button>
                       <button class="btn btn-outline-secondary me-2 mb-2">OCR ID</button>
                       <button class="btn btn-outline-secondary mb-2">Chet Doc (RAG)</button>
                   </div>
               </div>
               <div id="featureCarousel" class="carousel slide">
                   <div class="carousel-indicators">
                       <button type="button" data-bs-target="#featureCarousel" data-bs-slide-to="0" class="active"
                           aria-current="true" aria-label="Slide 1"></button>
                       <button type="button" data-bs-target="#featureCarousel" data-bs-slide-to="1"
                           aria-label="Slide 2"></button>
                       <button type="button" data-bs-target="#featureCarousel" data-bs-slide-to="2"
                           aria-label="Slide 3"></button>
                   </div>
                   <div class="carousel-inner ">
                       <div class="carousel-item active ">
                           <div class="row justify-content-center">
                               <div class="col-lg-12">
                                   <div class="p-3 m-3 card bg-light p-4 rounded-3 border-0 soft-shadow">
                                       <div class="row">
                                           <div class="col-lg-6 order-2 order-lg-2">
                                               <h3 class="fw-bold">OCR Card Id</h3>
                                               <div class="card p-3">
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold text-decoration-underline">Result :
                                                       </div>
                                                       <div class="col-8"></div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">NIK</div>
                                                       <div class="col-8">3275012304980001</div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">Nama</div>
                                                       <div class="col-8">BUDI SANTOSO</div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">Tempat / Tgl Lahir</div>
                                                       <div class="col-8">Jakarta / 23-04-1998</div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">Jenis Kelamin</div>
                                                       <div class="col-8">Laki-laki</div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">Alamat</div>
                                                       <div class="col-8">Jalan Melati No. 45 RT 003 RW 005</div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">Kel / Desa</div>
                                                       <div class="col-8">Kebon Melati</div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">Kecamatan</div>
                                                       <div class="col-8">Tanah Abang</div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">Agama</div>
                                                       <div class="col-8">Islam</div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">Status Perkawinan</div>
                                                       <div class="col-8">Belum Kawin</div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">Pekerjaan</div>
                                                       <div class="col-8">Swasta</div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">Kewarganegaraan</div>
                                                       <div class="col-8">WNI</div>
                                                   </div>
                                                   <div class="row ">
                                                       <div class="col-4 fw-bold">Berlaku Hingga</div>
                                                       <div class="col-8">SEUMUR HIDUP</div>
                                                   </div>
                                               </div>

                                           </div>
                                           <div class="col-lg-6 order-1 order-lg-1 d-flex flex-column justify-content-center align-items-center"
                                               style="min-height: 100%;">
                                               <div class="text-center te">
                                                   <div
                                                       class="card-upload-area mb-3 d-flex flex-column justify-content-center align-items-center w-100 p-4">
                                                       <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                                           fill="currentColor" class="bi bi-person-bounding-box"
                                                           viewBox="0 0 16 16">
                                                           <path
                                                               d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                                           <path
                                                               d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                       </svg>
                                                       <p class="mt-2 mb-0 text-muted p">Drop your ID card here or
                                                           click
                                                           to upload.</p>
                                                       <input type="file" id="idCardUpload" hidden>
                                                   </div>
                                                   <div class="d-flex justify-content-center gap-2 mb-4">
                                                       <button class="btn btn-primary"
                                                           onclick="document.getElementById('idCardUpload').click()">Upload
                                                           Foto</button>
                                                       <button class="btn btn-success">Start OCR</button>
                                                   </div>
                                               </div>
                                           </div>


                                       </div>


                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="carousel-item">
                           <div class="row justify-content-center">
                               <div class="col-lg-12">
                                   <div class="card bg-light p-4 rounded-3 border-0 shadow-sm">
                                       <div class="text-center mb-1">
                                           <h3 class="fw-bold">DMARC</h3>

                                       </div>

                                       <!-- Layout 2 kolom -->
                                       <div class="row g-4">
                                           <!-- Kiri: Form Check URL -->
                                           <div class="col-lg-6">
                                               <h5 class="fw-bold mb-3">URL Checker</h5>
                                               <p class="lead">Masukkan URL untuk memverifikasi apakah aman atau
                                                   berpotensi
                                                   berbahaya.</p>
                                               <form id="urlCheckForm">
                                                   <div class="input-group">
                                                       <input type="url" id="urlInput" class="form-control"
                                                           placeholder="Masukkan URL disini" required>
                                                       <button type="submit" class="btn btn-success">Check</button>
                                                   </div>
                                               </form>
                                           </div>

                                           <!-- Kanan: Keterangan DMARC -->
                                           <div class="col-lg-6">
                                               <h5 class="fw-bold mb-3">Apa itu DMARC?</h5>
                                               <p class="text-muted mb-0">
                                                   <strong>DMARC (Domain-based Message Authentication, Reporting, and
                                                       Conformance)</strong>
                                                   adalah standar keamanan email yang digunakan untuk mencegah
                                                   pemalsuan alamat email (spoofing)
                                                   dan phishing.
                                                   <br><br>
                                                   DMARC bekerja dengan memanfaatkan dua protokol autentikasi email:
                                                   <em>SPF (Sender Policy Framework)</em> dan
                                                   <em>DKIM (DomainKeys Identified Mail)</em>.
                                                   Dengan DMARC, pemilik domain dapat menentukan kebijakan bagaimana
                                                   server penerima menangani
                                                   email yang tidak lolos autentikasi, serta mendapatkan laporan
                                                   penyalahgunaan domain mereka.
                                               </p>
                                           </div>
                                       </div>

                                       <!-- Hasil URL (Bawah penuh) -->
                                       <div class="mt-4">
                                           <h5 class="fw-bold">Hasil Pemeriksaan:</h5>
                                           <textarea id="hasilCheck" class="form-control" rows="5"
                                               readonly>Belum ada hasil. Silakan masukkan URL dan klik Check.</textarea>
                                       </div>
                                   </div>
                               </div>
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


                       <div class="carousel-item">
                           <div class="row justify-content-center">
                               <div class="col-lg-12">
                                   <div class="card bg-light p-4 rounded-3 border-0">
                                       <div class="text-center">
                                           <div class="mx-auto mb-4"
                                               style="width: 80px; height: 80px; background-color: #ffc107; border-radius: 8px;">
                                           </div>
                                           <h3 class="fw-bold">Fitur 3: Consectetur Adipiscing</h3>
                                           <p class="lead">Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                               laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                               in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                               pariatur.</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <button class="carousel-control-prev" type="button" data-bs-target="#featureCarousel"
                       data-bs-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                   </button>
                   <button class="carousel-control-next" type="button" data-bs-target="#featureCarousel"
                       data-bs-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                   </button>
               </div>
           </div>
       </section>

       <section class="py-5">
           <div class="container">
               <div class="row">
                   <div class="col-12 text-center mb-4">
                       <h2 class="fw-bold">Kenapa Harus Bumatara.com</h2>
                       <p class="text-muted">Kami membantu perusahaan menghadirkan solusi AI yang berdampak nyata pada
                           bisnis.</p>
                   </div>
               </div>
               <div class="row">
                   <div class="col-lg-4 col-md-6 mb-4">
                       <div class="feature-card text-start">
                           <div class="feature-icon mb-3">
                               <i class="bi bi-graph-up-arrow fs-1 text-primary"></i>
                           </div>
                           <h5 class="fw-bold">Meningkatkan Produktivitas</h5>
                           <p>
                               Solusi AI kami dirancang untuk mempercepat proses bisnis, mengurangi pekerjaan manual,
                               dan meningkatkan efisiensi tim Anda.
                           </p>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-6 mb-4">
                       <div class="feature-card text-start">
                           <div class="feature-icon mb-3">
                               <i class="bi bi-shield-check fs-1 text-success"></i>
                           </div>
                           <h5 class="fw-bold">Keamanan & Keandalan</h5>
                           <p>
                               Dengan infrastruktur yang aman dan terpercaya, kami memastikan data dan sistem bisnis
                               Anda
                               terlindungi setiap saat.
                           </p>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-6 mb-4">
                       <div class="feature-card text-start">
                           <div class="feature-icon mb-3">
                               <i class="bi bi-lightbulb fs-1 text-warning"></i>
                           </div>
                           <h5 class="fw-bold">Inovasi Berkelanjutan</h5>
                           <p>
                               Kami terus mengembangkan teknologi terbaru agar bisnis Anda selalu terdepan dalam
                               menghadapi perubahan era digital.
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
                           <h5 class="fw-bold mb-3">Live Question</h5>

                           <!-- Scrollable QnA -->
                           <div style="max-height: 300px; overflow-y: auto;" class="mb-3">
                               <div class="qna-item p-3 mb-2 bg-white border rounded">
                                   <p class="fw-semibold mb-2">Apa perbedaan AI, Machine Learning, dan Deep Learning?
                                   </p>
                                   <p class="mb-2">
                                       AI adalah konsep umum kecerdasan buatan, Machine Learning adalah teknik untuk
                                       membuat mesin belajar dari data, dan Deep Learning adalah cabang Machine
                                       Learning yang menggunakan jaringan saraf tiruan berlapis-lapis.
                                   </p>
                                   <small class="text-muted">Diajukan oleh: <strong>Rina</strong> • 10 menit
                                       lalu</small>
                               </div>

                               <div class="qna-item p-3 mb-2 bg-white border rounded">
                                   <p class="fw-semibold mb-2">Bagaimana AI membantu bisnis B2B?</p>
                                   <p class="mb-2">
                                       AI dapat mengotomatiskan proses, meningkatkan analisis data, serta membuka
                                       peluang
                                       efisiensi dan inovasi di berbagai sektor industri.
                                   </p>
                                   <small class="text-muted">Diajukan oleh: <strong>Andi</strong> • 25 menit
                                       lalu</small>
                               </div>

                               <div class="qna-item p-3 mb-2 bg-white border rounded">
                                   <p class="fw-semibold mb-2">Apakah AI membutuhkan data besar?</p>
                                   <p class="mb-2">
                                       Tidak selalu. Untuk beberapa kasus, data kecil cukup, tetapi model deep learning
                                       biasanya membutuhkan data yang lebih besar agar hasilnya optimal.
                                   </p>
                                   <small class="text-muted">Diajukan oleh: <strong>Sari</strong> • 1 jam lalu</small>
                               </div>
                           </div>

                           <!-- Submit Question -->
                           <form>
                               <div class="mb-3">
                                   <label for="nama" class="form-label">Nama</label>
                                   <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                               </div>
                               <div class="mb-3">
                                   <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                   <textarea class="form-control" id="pertanyaan" rows="3"
                                       placeholder="Tulis pertanyaan Anda"></textarea>
                               </div>
                               <button type="submit" class="btn btn-primary w-100">Kirim Pertanyaan</button>
                           </form>
                       </div>
                   </div>



                   <!-- QnA -->
                   <div class="col-lg-6">
                       <div class="qna-box h-100 p-4 border rounded shadow-sm bg-light">
                           <h5 class="fw-bold">QnA</h5>
                           <div class="accordion mt-4" id="qnaAccordion">
                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="heading1">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                                           aria-controls="collapse1">
                                           Bagaimana cara kerja OCR pada KTP?
                                       </button>
                                   </h2>
                                   <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body">
                                           OCR memindai teks dari gambar dan mengubahnya menjadi data digital
                                           menggunakan algoritma pengenalan pola.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="heading2">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                           aria-controls="collapse2">
                                           Apa itu API dalam pemrograman?
                                       </button>
                                   </h2>
                                   <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body">
                                           API adalah antarmuka yang memungkinkan aplikasi saling berkomunikasi dan
                                           bertukar data.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="heading3">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                           aria-controls="collapse3">
                                           Apakah semua AI menggunakan Machine Learning?
                                       </button>
                                   </h2>
                                   <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body">
                                           Tidak, beberapa AI menggunakan aturan logika tanpa Machine Learning.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="heading4">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                           aria-controls="collapse4">
                                           Bagaimana cara mengoptimalkan kecepatan deteksi AI?
                                       </button>
                                   </h2>
                                   <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body">
                                           Gunakan model yang lebih ringan, optimasi kode, dan percepat pemrosesan GPU.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="heading5">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                           aria-controls="collapse5">
                                           Apa fungsi dari JSON?
                                       </button>
                                   </h2>
                                   <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body">
                                           JSON digunakan untuk menyimpan dan bertukar data dalam format yang ringan
                                           dan mudah dibaca.
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