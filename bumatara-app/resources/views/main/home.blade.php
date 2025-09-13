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
                       <h1 class="display-5 fw-bold">Unlock Your Business Potential with AI</h1>
                       <p class="lead">
                           Bumatara.com provides the AI solutions you need to boost productivity, increase efficiency,
                           and pioneer new paths for innovation and company-wide growth.
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
                       <h2 class="fw-bold">Our main features</h2>
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
                   <div class="carousel-inner " ">
                       <div class=" carousel-item active ">
                           <div class=" row justify-content-center">
                       <div class="col-lg-12">
                           <div class="p-3 m-3 card bg-light p-4 rounded-3 border-0 soft-shadow">
                               <div class="row">
                                   <div class="col-lg-6 order-2 order-lg-2">
                                       <h3 class="fw-bold">ID Card OCR</h3>
                                       <div class="card p-3">
                                           <div class="row">
                                               <div class="col-4 fw-bold text-decoration-underline">Result :
                                               </div>
                                               <div class="col-8"></div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">NIK</div>
                                               <div class="col-8">3275012304980001</div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">Name</div>
                                               <div class="col-8">BUDI SANTOSO</div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">Place / Date of Birth</div>
                                               <div class="col-8">Jakarta / 23-04-1998</div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">Gender</div>
                                               <div class="col-8">Male</div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">Address</div>
                                               <div class="col-8">Jalan Melati No. 45 RT 003 RW 005</div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">Sub-district / Village</div>
                                               <div class="col-8">Kebon Melati</div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">District</div>
                                               <div class="col-8">Tanah Abang</div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">Religion</div>
                                               <div class="col-8">Islam</div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">Marital Status</div>
                                               <div class="col-8">Single</div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">Occupation</div>
                                               <div class="col-8">Private Sector</div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">Citizenship</div>
                                               <div class="col-8">Indonesian (WNI)</div>
                                           </div>
                                           <div class="row">
                                               <div class="col-4 fw-bold">Valid Until</div>
                                               <div class="col-8">LIFETIME</div>
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
                                               <p class="mt-2 mb-0 text-muted p">Drop your ID card here or click
                                                   to upload.</p>
                                               <input type="file" id="idCardUpload" hidden>
                                           </div>
                                           <div class="d-flex justify-content-center gap-2 mb-4">
                                               <button class="btn btn-primary"
                                                   onclick="document.getElementById('idCardUpload').click()">Upload
                                                   Photo</button>
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
                           <div class="p-3 m-3 card bg-light p-4 rounded-3 border-0 soft-shadow">

                               <div class="text-center mb-1">
                                   <h3 class="fw-bold">DMARC</h3>
                               </div>

                               <div class="row g-4">
                                   <div class="col-lg-6">
                                       <h5 class="fw-bold mb-3">URL Checker</h5>
                                       <p class="lead">Enter a URL to verify if it's safe or potentially
                                           malicious.</p>
                                       <form id="urlCheckForm">
                                           <div class="input-group">
                                               <input type="url" id="urlInput" class="form-control"
                                                   placeholder="Enter URL here" required>
                                               <button type="submit" class="btn btn-success">Check</button>
                                           </div>
                                       </form>
                                   </div>

                                   <div class="col-lg-6">
                                       <h5 class="fw-bold mb-3">What is DMARC?</h5>
                                       <p class="text-muted mb-0">
                                           <strong>DMARC (Domain-based Message Authentication, Reporting, and
                                               Conformance)</strong> is an email security standard used to
                                           prevent email spoofing and phishing attacks.
                                           <br><br>
                                           DMARC leverages two existing email authentication protocols: <em>SPF
                                               (Sender Policy Framework)</em> and <em>DKIM (DomainKeys
                                               Identified Mail)</em>. It allows a domain owner to specify how a
                                           receiving server should handle emails that fail authentication and to
                                           receive reports on their domain's misuse.
                                       </p>
                                   </div>
                               </div>

                               <div class="mt-4">
                                   <h5 class="fw-bold">Scan Results:</h5>
                                   <textarea id="hasilCheck" class="form-control" rows="5"
                                       readonly>No results yet. Please enter a URL and click Check.</textarea>
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


               <!-- <div class="carousel-item">
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
                       </div> -->
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
                   <div class="col-12 text-center mb-4">
                       <h2 class="fw-bold">Why Choose Bumatara.com</h2>
                       <p class="text-muted">We help companies deliver AI solutions that make a real impact on their
                           business.</p>
                   </div>
               </div>
               <div class="row">
                   <div class="col-lg-4 col-md-6 mb-4">
                       <div class="feature-card text-start">
                           <div class="mb-3">
                               <i class="bi bi-graph-up-arrow fs-1 text-primary"></i>
                           </div>
                           <h5 class="fw-bold">Increased Productivity</h5>
                           <p>
                               Our AI solutions are designed to accelerate business processes, reduce manual tasks, and
                               significantly improve your team's overall efficiency.
                           </p>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-6 mb-4">
                       <div class="feature-card text-start">
                           <div class="mb-3">
                               <i class="bi bi-shield-check fs-1 text-success"></i>
                           </div>
                           <h5 class="fw-bold">Security & Reliability</h5>
                           <p>
                               With a secure and reliable infrastructure, we ensure your business's data and systems are
                               protected at all times, giving you peace of mind.
                           </p>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-6 mb-4">
                       <div class="feature-card text-start">
                           <div class="mb-3">
                               <i class="bi bi-lightbulb fs-1 text-warning"></i>
                           </div>
                           <h5 class="fw-bold">Continuous Innovation</h5>
                           <p>
                               We continuously develop the latest technologies to ensure your business remains at the
                               forefront of the ever-changing digital landscape.
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
                               <div class="qna-item p-3 mb-2 bg-white border rounded">
                                   <p class="fw-semibold mb-2">What is the difference between AI, Machine Learning, and
                                       Deep Learning?</p>
                                   <p class="mb-2">
                                       AI is the general concept of artificial intelligence, Machine Learning is a
                                       technique for machines to learn from data, and Deep Learning is a branch of
                                       Machine Learning that uses multi-layered neural networks.
                                   </p>
                                   <small class="text-muted">Asked by: <strong>Rina</strong> • 10 minutes ago</small>
                               </div>

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
                       <div class="qna-box h-100 p-4 border rounded shadow-sm bg-light">
                           <h5 class="fw-bold">Frequently Asked Questions</h5>
                           <div class="accordion mt-4" id="qnaAccordion">
                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="heading1">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false"
                                           aria-controls="collapse1">
                                           How does OCR work for ID cards?
                                       </button>
                                   </h2>
                                   <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body">
                                           OCR scans text from an image and converts it into digital data using pattern
                                           recognition algorithms.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="heading2">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false"
                                           aria-controls="collapse2">
                                           What is an API in programming?
                                       </button>
                                   </h2>
                                   <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body">
                                           An API is an interface that allows applications to communicate and exchange
                                           data.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="heading3">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false"
                                           aria-controls="collapse3">
                                           Do all AI systems use Machine Learning?
                                       </button>
                                   </h2>
                                   <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body">
                                           No, some AI systems use logical rules without Machine Learning.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="heading4">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                           aria-controls="collapse4">
                                           How can I optimize AI detection speed?
                                       </button>
                                   </h2>
                                   <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body">
                                           Use a lighter model, optimize the code, and accelerate GPU processing.
                                       </div>
                                   </div>
                               </div>

                               <div class="accordion-item">
                                   <h2 class="accordion-header" id="heading5">
                                       <button class="accordion-button collapsed fw-semibold" type="button"
                                           data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                           aria-controls="collapse5">
                                           What is the function of JSON?
                                       </button>
                                   </h2>
                                   <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                       data-bs-parent="#qnaAccordion">
                                       <div class="accordion-body">
                                           JSON is used to store and exchange data in a lightweight and human-readable
                                           format.
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