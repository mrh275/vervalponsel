<?= $this->extend('template/dashboard-admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid user-dashboard">
    <div class="container col-xxl-8 px-4 py-2">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?= base_url('assets/img') ?>/heroes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Dashboard Admin Verval Ponsel</h1>
                <h4>Selamat Datang</h4>
                <p class="lead" style="text-align: justify;">Ini adalah halaman dashboard dari aplikasi Verval Ponsel. Ini adalah halaman dashboard admin</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>