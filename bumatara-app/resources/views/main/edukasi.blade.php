   @extends('master')
   @section('main-panel')

   <main>

       <div class="container">
           <div class="row">
               <!-- SIDEBAR KATEGORI -->
               <div class="col-lg-3 col-md-4 border-end" style="max-height: 90vh; overflow-y: auto;">
                   <h6 class="fw-bold mb-3">📚 Kategori</h6>

                   <input type="text" class="form-control form-control-sm mb-3" placeholder="Cari kategori...">

                   <ul class="list-group list-group-flush small">
                       <li class="list-group-item active">Semua Video</li>
                       <li class="list-group-item">Matematika AI</li>
                       <li class="list-group-item">Ekonomi AI</li>
                       <li class="list-group-item">AI untuk Guru</li>
                       <li class="list-group-item">Machine Learning Dasar</li>
                       <li class="list-group-item">Deep Learning</li>
                       <li class="list-group-item">Computer Vision</li>
                       <li class="list-group-item">NLP Bahasa Indonesia</li>
                   </ul>
               </div>

               <!-- KONTEN VIDEO -->
               <div class="col-lg-9 col-md-8">
                   <!-- FILTER -->
                   <div class="d-flex flex-wrap gap-2 mb-3 align-items-center">
                       <input type="text" class="form-control form-control-sm w-50" placeholder="Cari judul video...">

                       <select class="form-select form-select-sm w-auto">
                           <option>Semua Playlist</option>
                           <option>Kelas 10</option>
                           <option>Kelas 11</option>
                           <option>Kelas 12</option>
                           <option>Guru</option>
                       </select>
                   </div>

                   <!-- GRID VIDEO -->
                   <div class="row g-3">

                       <!-- VIDEO CARD -->
                       <div class="col-xl-3 col-lg-4 col-md-6">
                           <div class="card h-100 shadow-sm">
                               <div class="ratio ratio-16x9">
                                   <iframe src="https://www.youtube.com/embed/VIDEO_ID_1" allowfullscreen></iframe>
                               </div>
                               <div class="card-body">
                                   <h6 class="card-title mb-1">AI untuk Prediksi Nilai</h6>
                                   <span class="badge bg-primary">Matematika AI</span>
                                   <p class="small text-muted mt-2 mb-0">
                                       Playlist: Guru
                                   </p>
                               </div>
                           </div>
                       </div>

                       <div class="col-xl-3 col-lg-4 col-md-6">
                           <div class="card h-100 shadow-sm">
                               <div class="ratio ratio-16x9">
                                   <iframe src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe>
                               </div>
                               <div class="card-body">
                                   <h6 class="card-title mb-1">AI Analisis Inflasi</h6>
                                   <span class="badge bg-success">Ekonomi AI</span>
                                   <p class="small text-muted mt-2 mb-0">
                                       Playlist: Kelas 12
                                   </p>
                               </div>
                           </div>
                       </div>

                       <div class="col-xl-3 col-lg-4 col-md-6">
                           <div class="card h-100 shadow-sm">
                               <div class="ratio ratio-16x9">
                                   <iframe src="https://www.youtube.com/embed/07TK9Qsps5U" allowfullscreen></iframe>
                               </div>
                               <div class="card-body">
                                   <h6 class="card-title mb-1">AI Membantu Guru</h6>
                                   <span class="badge bg-warning text-dark">AI untuk Guru</span>
                                   <p class="small text-muted mt-2 mb-0">
                                       Playlist: Guru
                                   </p>
                               </div>
                           </div>
                       </div>
                   </div>

                   <!-- PAGINATION -->
                   <div class="mt-4 d-flex justify-content-center">
                       <nav>
                           <ul class="pagination pagination-sm">
                               <li class="page-item disabled"><a class="page-link">«</a></li>
                               <li class="page-item active"><a class="page-link">1</a></li>
                               <li class="page-item"><a class="page-link">2</a></li>
                               <li class="page-item"><a class="page-link">3</a></li>
                               <li class="page-item"><a class="page-link">»</a></li>
                           </ul>
                       </nav>
                   </div>

               </div>
           </div>
       </div>


   </main>
   @endsection