<?= $this->extend('template/dashboard') ?>

<?= $this->section('content') ?>

<div class="container-fluid user-dashboard">
    <div class="container col-xxl-8 px-4 py-2">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?= base_url('assets/img') ?>/heroes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Dashboard Verval Ponsel Siswa</h1>
                <h4>Selamat Datang</h4>
                <p class="lead" style="text-align: justify;">Ini adalah halaman dashboard dari aplikasi Verval Ponsel. Silahkan lengkapi <span class="fw-bold">Profil</span> dan <span class="fw-bold">Data Ponsel</span> kalian agar dapat diajukan untuk mendapatkan <span class="fw-bold">Bantuan Kuota Kemdikbud.</span></p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function getProfile() {
        $.ajax({
            url: "<?= base_url('user/getProfile') ?>",
            dataType: "json",
            success: function(response) {
                if (response.data) {
                    let nama = document.querySelector('#nama');
                    let kelas = document.querySelector('#kelas');
                    let tempatLahir = document.querySelector('#tempat-lahir');
                    let tanggalLahir = document.querySelector('#tanggal-lahir');
                    let email = document.querySelector('#email');
                    let alamat = document.querySelector('#alamat');

                    nama.value = response.data.nama;
                    kelas.value = response.data.kelas;
                    tempatLahir.value = response.data.tempat_lahir;
                    tanggalLahir.value = response.data.tanggal_lahir
                    email.value = response.data.email;
                    alamat.innerHTML = response.data.alamat;
                }
            }
        });
    };

    $(document).ready(function() {
        getProfile();
    })
</script>

<?= $this->endSection() ?>