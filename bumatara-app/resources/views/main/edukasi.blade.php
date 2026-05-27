   @extends('master')
   @section('main-panel')
   <?php
    // var_dump($video);
    ?>

   <main>

       <div class="container">
           <div class="row">
               <div class="col-lg-3 col-md-4 border-end" style="max-height: 90vh; overflow-y: auto;">
                   <h6 class="fw-bold mb-3">📚 Kategori</h6>
                   <input type="text" id="searchKategori" class="form-control form-control-sm mb-3"
                       placeholder="Cari kategori...">

                   <ul class="list-group list-group-flush small" id="wrapperKategori">
                       <a href="{{ request()->fullUrlWithQuery(['kategori' => '', 'page' => 1]) }}"
                           class="list-group-item list-group-item-action {{ request('kategori') == '' ? 'active' : '' }}">
                           Semua Video
                       </a>
                       @foreach ($video_kategori as $row)
                       <a href="{{ request()->fullUrlWithQuery(['kategori' => $row->value_kategori, 'page' => 1]) }}"
                           class="list-group-item list-group-item-action item-kategori {{ request('kategori') == $row->value_kategori ? 'active' : '' }}">
                           {{ $row->kategori }}
                       </a>
                       @endforeach
                   </ul>
               </div>

               <div class="col-lg-9 col-md-8">
                   <div class="d-flex flex-wrap gap-2 mb-3 align-items-center">
                       <form action="{{ url()->current() }}" method="GET" class="w-100 d-flex gap-2">
                           @if(request('kategori'))
                           <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                           @endif
                           <input type="text" name="cari" class="form-control form-control-sm"
                               placeholder="Cari judul video..." value="{{ request('cari') }}">
                           <button type="submit" class="btn btn-sm btn-primary px-3">Cari</button>
                           @if(request('cari') || request('kategori'))
                           <a href="{{ url()->current() }}" class="btn btn-sm btn-outline-secondary">Reset</a>
                           @endif
                       </form>
                   </div>

                   <div class="row g-4">
                       @forelse ($video as $row)
                       <div class="col-xl-3 col-lg-4 col-md-6">
                           <div class="card h-100 border-0 shadow-sm"
                               style="background-color: #ffffff; border: 1px solid #dee2e6; border-radius: 12px; overflow: hidden;">
                               <div class="position-relative  ratio-16x9">
                                   <img src="{{ $row->thumbnail }}" class="card-img-top" alt="Thumbnail"
                                       style="object-fit: cover; width: 100%; height: 100%;">
                                   <a href="{{ $row->link }}" target="_blank"
                                       class="position-absolute d-flex align-items-center justify-content-center top-0 start-0 w-100 h-100 text-decoration-none"
                                       style="background: rgba(0, 0, 0, 0.2);">
                                       <div class="d-flex align-items-center justify-content-center bg-dark bg-opacity-75 rounded-circle text-white shadow"
                                           style="width: 45px; height: 45px;">
                                           <i class="bi bi-play-fill fs-4"></i>
                                       </div>
                                   </a>
                                   <span
                                       class="position-absolute bottom-0 end-0 px-2 py-0.5 m-2 rounded small fw-semibold text-white"
                                       style="font-size: 0.75rem; background-color: rgba(0, 0, 0, 0.8) !important;">12:16</span>
                               </div>
                               <div class="card-body p-3 d-flex flex-column justify-content-between">
                                   <div>
                                       <h6 class="card-title fw-bold text-dark text-truncate mb-2"
                                           title="{{ $row->judul }}">{{ $row->judul }}</h6>
                                       <span class="badge bg-warning text-dark px-2 py-1"
                                           style="font-size: 0.7rem;">{{ $row->kategori }}</span>
                                   </div>
                                   <div
                                       class="pt-3 border-top border-light mt-3 d-flex justify-content-between align-items-center">
                                       <span class="small text-muted text-truncate" style="max-width: 120px;"><i
                                               class="bi bi-collection-play me-1"></i>{{ $row->kategori }}</span>
                                       <a href="{{ $row->link }}" target="_blank"
                                           class="text-primary text-decoration-none small fw-medium"
                                           style="font-size: 0.8rem;">Tonton <i class="bi bi-arrow-right small"></i></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                       @empty
                       <div class="col-100 text-center py-5">
                           <i class="bi bi-video-off text-muted fs-1 mb-2 d-block"></i>
                           <p class="text-muted">Tidak ada video ditemukan.</p>
                       </div>
                       @endforelse
                   </div>

                   <div class="mt-4 d-flex justify-content-center">
                       {{ $video->appends(request()->query())->links('pagination::bootstrap-5') }}
                   </div>
               </div>
           </div>

           <script>
           document.getElementById('searchKategori').addEventListener('input', function() {
               let filter = this.value.toLowerCase();
               let items = document.querySelectorAll('.item-kategori');

               items.forEach(function(item) {
                   let text = item.textContent.toLowerCase();
                   if (text.includes(filter)) {
                       item.style.setProperty('display', 'block', 'important');
                   } else {
                       item.style.setProperty('display', 'none', 'important');
                   }
               });
           });
           </script>
       </div>


   </main>
   @endsection