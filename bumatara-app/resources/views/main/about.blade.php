   @extends('master')
   @section('main-panel')

   <main>

       <section class="py-5">
           <div class="container">
               <div class="row">
                   <div class="col-12 text-center mb-4">
                       <h2 class="fw-bold">About Us</h2>
                   </div>
                   <div class="col-lg-10 col-xl-8 mx-auto">
                       <p class="text-justify">
                           Bumatara was founded on July 24, 2025, with a singular focus: to accelerate AI innovation in
                           Indonesia. Beginning as a competition concept, we quickly evolved into a dynamic platform
                           showcasing groundbreaking AI projects. Our mission is to propel Indonesia's AI industry
                           forward by bridging the gap between innovative ideas and real-world application, benefiting
                           both businesses and daily life.
                       </p>
                       <p class="text-justify">
                           We're committed to our vision of a technologically advanced Indonesia. This project is in
                           active development, continually expanding to support and empower the next generation of AI
                           creators, all guided by our ambitious timeline.
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
                                           <p>Rapid technological advancements demand adjustments in every sector, from
                                               education to law. Bumatara is a startup poised to be an integral part of
                                               this change. We are dedicated to contributing to future technology
                                               solutions, ensuring our role remains relevant in the next 5 to 10 years.
                                           </p>
                                           <h4 class="fw-bold">Rizki Abdillah</h4>
                                           <h5 class="text-muted">CEO Bumatara</h5>
                                       </div>
                                       <div class="col-lg-4 text-center order-1 order-lg-2 mb-3 mb-lg-0">
                                           <img src="images/abdi.jpg" class="img-fluid rounded-circle shadow"
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
                                           <p>The development of Artificial Intelligence is not just a technological
                                               trend, but a profound journey that is transforming the way we understand
                                               the world. AI opens up opportunities for broader thinking, presents
                                               solutions we never imagined before, and leads us to a smarter and more
                                               meaningful future. I believe that with AI, we will not simply follow
                                               change, but become part of those shaping it.</p>
                                           <h4 class="fw-bold">Fariska Ratna Fauziah </h4>
                                           <h5 class="text-muted">Project Manager</h5>
                                       </div>
                                       <div class="col-lg-4 text-center order-1 order-lg-2 mb-3 mb-lg-0">
                                           <img src="images/Fariska.jpg" class="img-fluid rounded-circle shadow"
                                               alt="Siti Rahmawati">
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- Item 3 -->
                           <div class="carousel-item">
                               <div class="p-3 p-md-4">
                                   <div class="row align-items-center">
                                       <div class="col-lg-8 order-2 order-lg-1">
                                           <p>AI isn’t a trend. It’s a new way to work. We turn raw data into clear
                                               signals, automate the routine, and ship to production. We measure what
                                               matters and improve week by week. That’s how Bumatara works.</p>
                                           <h4 class="fw-bold">Malinda Ratnaduhita</h4>
                                           <h5 class="text-muted">CTO</h5>
                                       </div>
                                       <div class="col-lg-4 text-center order-1 order-lg-2 mb-3 mb-lg-0">
                                           <img src="images/Linda.jpg" class="img-fluid rounded-circle shadow"
                                               alt="Malinda Ratnaduhita">
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

       <section class="py-5">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-lg-8">
                       <div class="card shadow border-0 rounded-3">
                           <div class="card-body p-5 text-center">
                               <h3 class="fw-bold mb-3">Stay Connected with Us</h3>
                               <p class="text-muted mb-4">
                                   Receive exclusive information and updates on our innovative projects. Enter your
                                   email to get our best offers and proposals.
                               </p>
                               <form class="row g-2 justify-content-center">
                                   <div class="col-md-8">
                                       <input type="email" class="form-control form-control-lg"
                                           placeholder="Enter your email" required>
                                   </div>
                                   <div class="col-md-4">
                                       <button type="submit" class="btn btn-dark fs-5 btn-lg w-100">
                                           Get a Proposal
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