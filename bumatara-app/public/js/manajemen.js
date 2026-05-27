

// Js untuk Manajement Kategori

// 1. Handler saat Modal Edit Terbuka
const modalEdit = document.getElementById('modalEditData');
if (modalEdit) {
    modalEdit.addEventListener('show.bs.modal', function(event) {
        // Tombol yang memicu modal
        const button = event.relatedTarget;

        // Ambil data dari atribut data-*
        const id = button.getAttribute('data-id');
        const content = button.getAttribute('data-content');
        const parameter = button.getAttribute('data-parameter');

        // Isi nilai ke dalam input modal
        document.getElementById('edit-id').value = id;
        document.getElementById('edit-content').value = content;
        document.getElementById('edit-parameter').value = parameter;
    });
}

// 2. Handler saat Modal Konfirmasi Delete Terbuka
const modalDelete = document.getElementById('modalKonfirmasiDelete');
let idDataYangAkanDihapus = null;

if (modalDelete) {
    modalDelete.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        // Ambil ID dari tombol hapus di tabel
        idDataYangAkanDihapus = button.getAttribute('data-id');
    });
}

// Fungsi Eksekusi Submit Edit Akhir
function executeEdit() {
    const id = document.getElementById('edit-id').value;
    const content = document.getElementById('edit-content').value;
    const parameter = document.getElementById('edit-parameter').value;

    // Jalankan AJAX atau Submit Form di sini menggunakan ID tersebut
    console.log("Mengirim perubahan untuk ID:", id);

    // Menutup modal konfirmasi setelah selesai
    bootstrap.Modal.getInstance(document.getElementById('modalKonfirmasiEdit')).hide();
}

// Fungsi Eksekusi Delete Akhir
function executeDelete() {
    if (idDataYangAkanDihapus) {
        // Jalankan proses hapus/routing ke Laravel backend menggunakan idDataYangAkanDihapus
        console.log("Menghapus data dengan ID:", idDataYangAkanDihapus);

        // Contoh redirect Laravel: window.location.href = "/dashboard/kategori/delete/" + idDataYangAkanDihapus;
    }
    bootstrap.Modal.getInstance(document.getElementById('modalKonfirmasiDelete')).hide();
}


// Js Untuk Manajemen Konten
// Handler Pasing Data ke Form Edit saat Modal Terbuka
    const modalEdit = document.getElementById('modalEditAset');
    if (modalEdit) {
        modalEdit.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            
            document.getElementById('edit-id').value = button.getAttribute('data-id');
            document.getElementById('edit-judul').value = button.getAttribute('data-judul');
            document.getElementById('edit-link').value = button.getAttribute('data-link');
            document.getElementById('edit-tipe').value = button.getAttribute('data-tipe');
            document.getElementById('edit-kategori').value = button.getAttribute('data-kategori');
        });
    }

    // Handler Pasing ID ke Form Hapus saat Modal Terbuka
    const modalHapus = document.getElementById('modalHapusAset');
    if (modalHapus) {
        modalHapus.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            document.getElementById('delete-id').value = button.getAttribute('data-id');
            
            // Opsional jika action URL laravel dinamis:
            // document.getElementById('formHapusAset').setAttribute('action', '/dashboard/aset/delete/' + button.getAttribute('data-id'));
        });
    }

    // Fungsi Trigger Submit Form Utama via Modal Konfirmasi Sekunder
    function submitFormEdit() {
        document.getElementById('formEditAset').submit();
    }