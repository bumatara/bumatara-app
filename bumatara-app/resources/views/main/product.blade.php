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

               <div class="row align-items-center mb-5">
                   <div class="col-md-6">
                       <h4 class="fw-bold">Phishing URL Detection</h4>
                       <p>
                           Bumatara uses a combination of domain analysis, data source reputation, and machine learning
                           to detect potential phishing links in real time. This system helps companies reduce the risk
                           of
                           cyber attacks and safeguard business data.
                       </p>
                   </div>
                   <div class="col-md-6">
                       <div class="bg-secondary d-flex justify-content-center align-items-center text-white"
                           style="height:300px;">
                           <span>Phishing Detection Image / Demo</span>
                       </div>
                   </div>
               </div>

               <div class="row align-items-center mb-5">
                   <div class="col-md-6 order-md-2">
                       <h4 class="fw-bold">Object Detection</h4>
                       <p>
                           Using computer vision and deep learning technology, our system can detect various objects in
                           images or videos
                           in real time. It is ideal for data analysis, process automation, security systems, and public
                           area monitoring.
                       </p>

                   </div>
                   <div class="col-md-6 order-md-1 shadow">
                       <img src="images/product/cv.jpg" style="height:300px;" alt="Object Detection">

                   </div>
               </div>

               <div class="row align-items-center mb-5">
                   <div class="col-md-6">
                       <h4 class="fw-bold">Automated Document Analysis</h4>
                       <p>
                           By combining OCR (Optical Character Recognition) with NLP (Natural Language Processing),
                           Bumatara
                           helps companies to quickly and accurately extract, understand, and validate data from both
                           physical and digital documents.
                       </p>
                   </div>
                   <div class="col-md-6">
                       <div class="bg-secondary d-flex justify-content-center align-items-center text-white"
                           style="height:300px;">
                           <span>OCR & NLP Image / Demo</span>
                       </div>
                   </div>
               </div>
           </div>
       </section>


       <!-- Footer Section -->
       <section class="py-5">
           <div class="container">
               <div class="card-body bg-info bg-opacity-25 p-5 rounded">
                   <div class="row align-items-center">
                       <div class="col-md-6">
                           <h4 class="fw-bold">Powering Tech with Bumatara's AI Solutions</h4>
                           <p>
                               Our AI solutions can help your businesses.
                               Get a special offer to integrate this technology into your business.
                           </p>
                           <form class="d-flex mt-3">
                               <input type="email" class="form-control me-2" placeholder="yourmail@gmail.com" required>
                               <button class="btn btn-primary">Get a Quote</button>
                           </form>
                       </div>

                       <div class="col-md-6 text-centre">
                           <div class="bg-white shadow-sm rounded  h-100 d-flex align-content-center">
                               <img src="images/Banner.png" alt="AI Security" style="max-height:250px;">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>

   </main>
   @endsection