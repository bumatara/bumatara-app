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
               <h2 class="text-center mb-5">How To Use Our Product</h2>

               <!-- Row 1 -->
               <div class="row align-items-center mb-4">
                   <div class="col-md-6">
                       <h4>How Bumatara Detect Padastian</h4>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi iste corrupti eum voluptas
                           sapiente non nobis. Molestias pariatur praesentium quo aut, ea rerum ipsum ut? Placeat
                           quibusdam
                           minima architecto odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sequi
                           sunt mollitia quibusdam a consequatur eos tempora inventore qui culpa dolores, voluptates
                           totam
                           explicabo est incidunt cupiditate unde impedit. Quaerat?</p>
                   </div>
                   <div class="col-md-6">
                       <div class="bg-secondary" style="height:300px;"></div>
                   </div>
               </div>

               <!-- Row 2 -->
               <div class="row align-items-center mb-4">
                   <div class="col-md-6 order-md-2">
                       <h4>How Bumatara Detect Padastian</h4>
                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolores architecto numquam
                           a
                           maxime sapiente, laudantium nobis dolor tempore, alias labore. Facere sed temporibus, eum
                           maxime
                           odio possimus earum sapiente..</p>
                   </div>
                   <div class="col-md-6 order-md-1">
                       <div class="bg-secondary" style="height:300px;"></div>
                   </div>
               </div>

               <!-- Row 3 -->
               <div class="row align-items-center mb-4">
                   <div class="col-md-6">
                       <h4>How Bumatara Detect Padastian</h4>
                       <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, quibusdam, natus sit in
                           officia
                           accusamus a est, temporibus cupiditate quos nemo. Ratione maxime quis officiis velit officia
                           expedita fugit magnam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas est
                           neque
                           ipsa perferendis porro numquam tempore, enim natus aliquid sint soluta culpa deleniti
                           pariatur
                           fugiat, iusto amet? Veniam, nemo veritatis.</p>
                   </div>
                   <div class="col-md-6">
                       <div class="bg-secondary" style="height:300px;"></div>
                   </div>
               </div>
           </div>
       </section>

       <!-- Footer Section -->
       <section class="py-5 ">
           <div class="container">
               <div class="card-body bg-info bg-opacity-25 p-5 rounded">
                   <div class="row align-items-center">
                       <div class="col-md-6">
                           <h4>How Bumatara Detect Padastian</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum deserunt quo odit
                               assumenda
                               sed!
                               Eaque quae iure, placeat maxime accusamus laborum quia qui quas dolor modi, illo quo ea
                               incidunt!</p>
                           <form class="d-flex">
                               <input type="email" class="form-control me-2" placeholder="yourmail@gmail.com">
                               <button class="btn btn-primary">Dapatkan Penawaran</button>
                           </form>
                       </div>
                       <div class="col-md-6">
                           <div class="bg-secondary" style="height:300px;"></div>
                       </div>
                   </div>
               </div>

           </div>
       </section>
   </main>
   @endsection