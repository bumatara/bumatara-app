   @extends('master')
   @section('main-panel')

   <main>

       <!-- About Us -->
       <section class="py-5">
           <div class="container">
               <div class="row">
                   <div class="col-12 text-center mb-4">
                       <h2 class="fw-bold">About Us</h2>
                   </div>
                   <div class="col-lg-10 col-xl-8 mx-auto">
                       <p class="text-justify">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                           labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                           laboris
                           nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                           velit
                           esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                           sunt
                           in culpa qui officia deserunt mollit anim id est laborum.
                       </p>
                       <p class="text-justify">
                           Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                           laudantium,
                           totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                           vitae
                           dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                           fugit,
                           sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                           quisquam
                           est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                           numquam eius
                           modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                       </p>
                   </div>
               </div>
           </div>
       </section>

       <!-- Our Team -->
       <section class="py-5 bg-light">
           <div class="container">
               <div class="row">
                   <div class="col-12 text-center mb-4">
                       <h2 class="fw-bold">Our Team</h2>
                   </div>
               </div>

               <div class="container">
                   <div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
                       <!-- Indicators -->
                       <div class="carousel-indicators">
                           <button type="button" data-bs-target="#featureCarousel" data-bs-slide-to="0" class="active"
                               aria-current="true" aria-label="Slide 1"></button>
                           <button type="button" data-bs-target="#featureCarousel" data-bs-slide-to="1"
                               aria-label="Slide 2"></button>
                           <button type="button" data-bs-target="#featureCarousel" data-bs-slide-to="2"
                               aria-label="Slide 3"></button>
                       </div>

                       <!-- Carousel Items -->
                       <div class="carousel-inner col-lg-6 col-xl-8  ps-4 pe-4">
                           <!-- Item 1 -->
                           <div class="carousel-item active">
                               <div class="p-3 p-md-4">
                                   <div class="row align-items-center">
                                       <div class="col-lg-8 order-2 order-lg-1">
                                           <p>Rizki adalah seorang visioner dengan pengalaman lebih dari 10
                                               tahun dalam membangun perusahaan teknologi.
                                               Fokus utamanya adalah mengembangkan inovasi yang memberikan solusi
                                               nyata bagi masyarakat.</p>
                                           <h4 class="fw-bold">Rizki Abdillah</h4>
                                           <h5 class="text-muted">CEO Bumatara</h5>
                                       </div>
                                       <div class="col-lg-4 text-center order-1 order-lg-2 mb-3 mb-lg-0">
                                           <img src="https://placehold.co/400" class="img-fluid rounded-circle shadow"
                                               alt="Rizki Abdillah">
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- Item 2 -->
                           <div class="carousel-item">
                               <div class="p-3 p-md-4">
                                   <div class="row align-items-center">
                                       <div class="col-lg-8 order-2 order-lg-1">
                                           <p>Siti adalah seorang profesional berpengalaman dalam pengelolaan
                                               proyek teknologi.
                                               Dengan keahliannya, ia memastikan setiap proyek berjalan sesuai
                                               rencana dan mencapai target yang ditetapkan.</p>
                                           <h4 class="fw-bold">Siti Rahmawati</h4>
                                           <h5 class="text-muted">Project Manager</h5>
                                       </div>
                                       <div class="col-lg-4 text-center order-1 order-lg-2 mb-3 mb-lg-0">
                                           <img src="https://placehold.co/400/007BFF/FFFFFF"
                                               class="img-fluid rounded-circle shadow" alt="Siti Rahmawati">
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- Item 3 -->
                           <div class="carousel-item">
                               <div class="p-3 p-md-4">
                                   <div class="row align-items-center">
                                       <div class="col-lg-8 order-2 order-lg-1">
                                           <p>Andi adalah pakar teknologi dengan spesialisasi di bidang AI dan
                                               pengembangan software.
                                               Ia selalu menghadirkan ide-ide kreatif yang meningkatkan kualitas
                                               produk perusahaan.</p>
                                           <h4 class="fw-bold">Andi Pratama</h4>
                                           <h5 class="text-muted">CTO</h5>
                                       </div>
                                       <div class="col-lg-4 text-center order-1 order-lg-2 mb-3 mb-lg-0">
                                           <img src="https://placehold.co/400/28A745/FFFFFF"
                                               class="img-fluid rounded-circle shadow" alt="Andi Pratama">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <!-- Controls -->
                       <button class="carousel-control-prev" type="button" data-bs-target="#featureCarousel"
                           data-bs-slide="prev">
                           <span class="carousel-control-prev-icon  rounded-circle p-3" aria-hidden="true"></span>
                           <span class="visually-hidden">Previous</span>
                       </button>
                       <button class="carousel-control-next" type="button" data-bs-target="#featureCarousel"
                           data-bs-slide="next">
                           <span class="carousel-control-next-icon  rounded-circle p-3" aria-hidden="true"></span>
                           <span class="visually-hidden">Next</span>
                       </button>
                   </div>
               </div>

           </div>
       </section>

       <!-- Contact / CTA -->
       <section class="py-5">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-lg-8">
                       <div class="card shadow border-0 rounded-3">
                           <div class="card-body p-5 text-center">
                               <h3 class="fw-bold mb-3">Lebih Kenal Dengan Kami</h3>
                               <p class="text-muted mb-4">
                                   Dapatkan proposal penawaran terbaik dari kami. Masukkan email Anda untuk menerima
                                   informasi eksklusif.
                               </p>
                               <form class="row g-2 justify-content-center">
                                   <div class="col-md-8">
                                       <input type="email" class="form-control form-control-lg"
                                           placeholder="Masukkan email Anda" required>
                                   </div>
                                   <div class="col-md-4">
                                       <button type="submit" class="btn btn-dark fs-5 btn-lg w-100">
                                           Dapatkan Penawaran
                                       </button>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>

   </main>
   @endsection