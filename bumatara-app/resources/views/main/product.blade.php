   @extends('master')
   @section('main-panel')
   <main>
       <!-- Our Product -->
       <section class="py-5 text-center">
           <div class="container">
               <h2 class="mb-4">Our Product</h2>
               <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                   <div class="carousel-inner">

                       <!-- Slide 1 -->
                       <div class="carousel-item active">
                           <div class="row justify-content-center">
                               <div class="col-6 col-md-3 mb-3">
                                   <div class="bg-secondary" style="height:150px;"></div>
                               </div>
                               <div class="col-6 col-md-3 mb-3">
                                   <div class="bg-secondary" style="height:150px;"></div>
                               </div>
                               <div class="col-6 col-md-3 mb-3">
                                   <div class="bg-secondary" style="height:150px;"></div>
                               </div>
                               <div class="col-6 col-md-3 mb-3">
                                   <div class="bg-secondary" style="height:150px;"></div>
                               </div>
                           </div>
                       </div>

                       <!-- Slide 2 -->
                       <div class="carousel-item">
                           <div class="row justify-content-center">
                               <div class="col-6 col-md-3 mb-3">
                                   <div class="bg-secondary" style="height:150px;"></div>
                               </div>
                               <div class="col-6 col-md-3 mb-3">
                                   <div class="bg-secondary" style="height:150px;"></div>
                               </div>
                               <div class="col-6 col-md-3 mb-3">
                                   <div class="bg-secondary" style="height:150px;"></div>
                               </div>
                               <div class="col-6 col-md-3 mb-3">
                                   <div class="bg-secondary" style="height:150px;"></div>
                               </div>
                           </div>
                       </div>


                   </div>

                   <!-- Controls -->
                   <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                       data-bs-slide="prev">
                       <span class="carousel-control-prev-icon"></span>
                   </button>
                   <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                       data-bs-slide="next">
                       <span class="carousel-control-next-icon"></span>
                   </button>
               </div>


               <!-- Button group -->
               <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                   <button class="btn btn-outline-primary">URL Checker</button>
                   <button class="btn btn-outline-primary">Scale Up Back...</button>
                   <button class="btn btn-outline-primary">OCR ID</button>
                   <button class="btn btn-outline-primary">Chat Doc (RAG)</button>
               </div>
               <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                   <button class="btn btn-outline-primary">URL Checker</button>
                   <button class="btn btn-outline-primary">Scale Up Back...</button>
               </div>
           </div>
       </section>

       <!-- How To Use -->
       <section class="py-5">
           <div class="container">
               <h2 class="text-center mb-5 fw-bold">How To Use Our Product</h2>

               <!-- Row 1 - Phishing Detection -->
               <div class="row align-items-center mb-5">
                   <div class="col-md-6">
                       <h4 class="fw-bold">Deteksi URL Phishing</h4>
                       <p>
                           Bumatara menggunakan kombinasi analisis domain, reputasi sumber data, dan machine learning
                           untuk mendeteksi potensi phishing link secara real-time. Sistem ini membantu perusahaan
                           mengurangi risiko serangan siber dan menjaga keamanan data bisnis.
                       </p>
                   </div>
                   <div class="col-md-6">
                       <div class="bg-secondary d-flex justify-content-center align-items-center text-white"
                           style="height:300px;">
                           <span>Gambar / Demo Phishing Detection</span>
                       </div>
                   </div>
               </div>

               <!-- Row 2 - Human Detection -->
               <div class="row align-items-center mb-5">
                   <div class="col-md-6 order-md-2">
                       <h4 class="fw-bold">Deteksi Kehadiran Manusia</h4>
                       <p>
                           Dengan teknologi computer vision dan deep learning, sistem kami mampu mendeteksi keberadaan
                           manusia dalam video atau gambar. Cocok untuk kebutuhan keamanan, presensi otomatis,
                           hingga pemantauan area publik.
                       </p>
                   </div>
                   <div class="col-md-6 order-md-1">
                       <div class="bg-secondary d-flex justify-content-center align-items-center text-white"
                           style="height:300px;">
                           <span>Gambar / Demo Human Detection</span>
                       </div>
                   </div>
               </div>

               <!-- Row 3 - OCR & NLP -->
               <div class="row align-items-center mb-5">
                   <div class="col-md-6">
                       <h4 class="fw-bold">Analisis Dokumen Otomatis</h4>
                       <p>
                           Menggunakan teknologi OCR (Optical Character Recognition) dipadukan dengan NLP (Natural
                           Language Processing), Bumatara membantu perusahaan mengekstrak, memahami, dan memvalidasi
                           data dari dokumen fisik maupun digital secara cepat dan akurat.
                       </p>
                   </div>
                   <div class="col-md-6">
                       <div class="bg-secondary d-flex justify-content-center align-items-center text-white"
                           style="height:300px;">
                           <span>Gambar / Demo OCR + NLP</span>
                       </div>
                   </div>
               </div>
           </div>
       </section>


       <!-- Footer Section -->
       <section class="py-5 ">
           <div class="container">
               <div class="card-body bg-info bg-opacity-25 p-5 rounded">
                   <div class="row align-items-center">
                       <!-- Text + Form -->
                       <div class="col-md-6">
                           <h4 class="fw-bold">Tingkatkan Keamanan dengan Teknologi AI Bumatara</h4>
                           <p>
                               Solusi AI kami membantu perusahaan dalam mendeteksi <strong>URL phishing</strong>,
                               mengenali <strong>aktivitas manusia</strong> dalam area terlarang,
                               serta berbagai produk <strong>AI security & monitoring</strong> lainnya.
                               Dapatkan penawaran khusus untuk mengintegrasikan teknologi ini di bisnis Anda.
                           </p>
                           <form class="d-flex mt-3">
                               <input type="email" class="form-control me-2" placeholder="yourmail@gmail.com" required>
                               <button class="btn btn-primary">Dapatkan Penawaran</button>
                           </form>
                       </div>

                       <!-- Illustration / Image -->
                       <div class="col-md-6 text-center">
                           <div
                               class="bg-white shadow-sm rounded p-4 h-100 d-flex align-items-center justify-content-center">
                               <img src="assets/images/ai-security.png" alt="AI Security" class="img-fluid"
                                   style="max-height:250px;">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>

   </main>
   @endsection