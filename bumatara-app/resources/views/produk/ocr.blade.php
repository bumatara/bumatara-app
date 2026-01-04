   @extends('master')
   @section('main-panel')

   <main>
       <div class="container py-5 bg-light rounded">

           <!-- Title -->
           <h2 class="text-center fw-bold mb-5">Trial OCR ID Card</h2>

           <!-- Form & Image -->
           <div class="row g-4 mb-5">
               <!-- Form -->
               <div class="col-lg-6">
                   <div class="card shadow-sm">
                       <div class="card-header bg-primary text-white">
                           ID Card Identification
                       </div>
                       <div class="card-body">
                           <form>
                               <div class="row g-3">
                                   <div class="col-md-6">
                                       <label class="form-label">NIK</label>
                                       <input type="text" class="form-control" placeholder="Masukkan NIK">
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Nama Lengkap</label>
                                       <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap">
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Tempat Lahir</label>
                                       <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir">
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Tanggal Lahir</label>
                                       <input type="date" class="form-control">
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Jenis Kelamin</label>
                                       <select class="form-select">
                                           <option selected disabled>Pilih Jenis Kelamin</option>
                                           <option>Laki-Laki</option>
                                           <option>Perempuan</option>
                                       </select>
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Golongan Darah</label>
                                       <select class="form-select">
                                           <option selected disabled>Pilih Golongan Darah</option>
                                           <option>A</option>
                                           <option>B</option>
                                           <option>AB</option>
                                           <option>O</option>
                                       </select>
                                   </div>
                                   <div class="col-12">
                                       <label class="form-label">Alamat</label>
                                       <input type="text" class="form-control" placeholder="Masukkan Alamat Lengkap">
                                   </div>
                                   <div class="col-md-4">
                                       <label class="form-label">RT</label>
                                       <input type="text" class="form-control" placeholder="RT">
                                   </div>
                                   <div class="col-md-4">
                                       <label class="form-label">RW</label>
                                       <input type="text" class="form-control" placeholder="RW">
                                   </div>
                                   <div class="col-md-4">
                                       <label class="form-label">Kelurahan/Desa</label>
                                       <input type="text" class="form-control" placeholder="Kelurahan/Desa">
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Kecamatan</label>
                                       <input type="text" class="form-control" placeholder="Kecamatan">
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Kabupaten/Kota</label>
                                       <input type="text" class="form-control" placeholder="Kabupaten/Kota">
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Agama</label>
                                       <select class="form-select">
                                           <option selected disabled>Pilih Agama</option>
                                           <option>Islam</option>
                                           <option>Kristen</option>
                                           <option>Katolik</option>
                                           <option>Hindu</option>
                                           <option>Buddha</option>
                                           <option>Konghucu</option>
                                       </select>
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Status Perkawinan</label>
                                       <select class="form-select">
                                           <option selected disabled>Pilih Status</option>
                                           <option>Belum Kawin</option>
                                           <option>Kawin</option>
                                           <option>Cerai Hidup</option>
                                           <option>Cerai Mati</option>
                                       </select>
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Pekerjaan</label>
                                       <input type="text" class="form-control" placeholder="Masukkan Pekerjaan">
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Kewarganegaraan</label>
                                       <input type="text" class="form-control" value="Indonesia">
                                   </div>
                                   <div class="col-md-6">
                                       <label class="form-label">Berlaku Hingga</label>
                                       <input type="text" class="form-control"
                                           placeholder="Seumur Hidup / Tanggal Berlaku">
                                   </div>
                                   <div class="col-12 text-end">
                                       <button type="submit" class="btn btn-primary">Perbarui Data</button>
                                   </div>
                               </div>
                           </form>

                           <div class="alert alert-success mt-3 p-2 mb-0" role="alert">
                               Data berhasil disimpan!
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Image -->
               <div class="col-lg-6  d-flex flex-column justify-content-center align-items-center"
                   style="min-height: 100%;">
                   <div class="text-center te">
                       <div
                           class="card-upload-area mb-3 d-flex flex-column justify-content-center align-items-center w-100 p-4">
                           <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                               class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                               <path
                                   d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                               <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
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

           <!-- Table -->
           <div class="card shadow-sm mb-5">
               <div class="card-header bg-light fw-bold">
                   Hasil Pencatatan Data
               </div>
               <div class="table-responsive">
                   <table class="table table-bordered table-hover align-middle text-center mb-0">
                       <thead class="table-light">
                           <tr>
                               <th>No</th>
                               <th>NIK</th>
                               <th>Nama</th>
                               <th>Tempat/Tgl Lahir</th>
                               <th>Jenis Kelamin</th>
                               <th>Alamat</th>
                               <th>Agama</th>
                               <th>Status</th>
                               <th>Pekerjaan</th>
                               <th>Kewarganegaraan</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td>1</td>
                               <td>1234567890123456</td>
                               <td>Joko</td>
                               <td>Jakarta, 01-01-1990</td>
                               <td>Laki-Laki</td>
                               <td>Jakarta</td>
                               <td>Islam</td>
                               <td>Kawin</td>
                               <td>Karyawan Swasta</td>
                               <td>WNI</td>
                           </tr>
                           <tr>
                               <td>2</td>
                               <td>9876543210987654</td>
                               <td>Budi</td>
                               <td>Bandung, 12-12-1992</td>
                               <td>Laki-Laki</td>
                               <td>Bandung</td>
                               <td>Kristen</td>
                               <td>Belum Kawin</td>
                               <td>Wiraswasta</td>
                               <td>WNI</td>
                           </tr>
                       </tbody>
                   </table>

               </div>
           </div>

           <!-- Accuracy Section -->
           <div class="row g-4 align-items-center mb-5">
               <div class="col-md-6">
                   <h5 class="fw-bold">Tingkat Akurasi Deteksi : 98% (300 Data)</h5>
                   <ul>
                       <li>Gunakan pencahayaan yang terang dengan kualitas cetak yang jelas.</li>
                       <li>Hindari lipatan dan goresan pada permukaan dokumen.</li>
                       <li>Posisikan ID card sejajar dengan panduan sistem.</li>
                       <li>Pastikan tidak ada objek lain yang menutupi kartu saat pemindaian.</li>
                   </ul>
               </div>
               <div class="col-md-6 text-center">
                   <div class="bg-secondary" style="height:250px;"></div>
               </div>
           </div>

           <!-- Offer Section -->
           <div class="card shadow-sm p-4 bg-info bg-opacity-25">
               <div class="row g-4 align-items-center">
                   <div class="col-md-6">
                       <h5 class="fw-bold">Dapatkan Teknologi OCR KTP</h5>
                       <p>
                           Teknologi OCR memungkinkan deteksi otomatis data identitas dengan tingkat akurasi tinggi.
                           Solusi ini dapat diintegrasikan ke berbagai sektor, mulai dari keamanan hingga verifikasi
                           dokumen finansial.
                       </p>
                       <form class="d-flex">
                           <input type="email" class="form-control me-2" placeholder="yourmail@gmail.com">
                           <button class="btn btn-primary">Dapatkan Penawaran</button>
                       </form>
                   </div>
                   <div class="col-md-6">
                       <div class="bg-secondary w-100" style="height:150px;"></div>
                   </div>
               </div>
           </div>

       </div>
   </main>

   @endsection