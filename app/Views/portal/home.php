<?= $this->extend('template/portal'); ?>

<?= $this->section('content') ?>

<div class="container-fluid portal-header-shadow">
  <div class="container col-xxl-8 px-4 py-2">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?= base_url('assets/img') ?>/heroes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Portal Verifikasi dan Validasi Nomor Ponsel Siswa</h1>
        <h4>Selamat Datang</h4>
        <p class="lead" style="text-align: justify;">Ini adalah portal halaman depan dari aplikasi Verval Ponsel. Pada aplikasi ini kami pihak sekolah akan melakukan verifikasi nomor ponsel kalian untuk dapat diajukan agar kalian mendapatkan <span class="fw-bold">Bantuan Kuota Kemdikbud.</span></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="container-fluid text-center pt-5 mt-4">
    <h1 class="portal-kelas fw-bold">Kelas</h1>

    <div class="container card-kelas my-4 py-4 d-flex justify-content-center">
      <!-- Kelas 10 -->
      <a href="<?= base_url('login') ?>" class="text-decoration-none">
        <div class="card mx-3" style="width: 18rem;">
          <img src="<?= base_url('assets/img') ?>/logo-super.png" class="card-img-top px-5 py-5" alt="logo-kelas">
          <div class="card-body">
            <h2 class="card-text">Kelas 10</h2>
            <a href="<?= base_url('login') ?>" class="btn btn-primary">Masuk</a>
          </div>
        </div>
      </a>

      <!-- Kelas 10 -->
      <a href="<?= base_url('login') ?>" class="text-decoration-none">
        <div class="card mx-3" style="width: 18rem;">
          <img src="<?= base_url('assets/img') ?>/logo-super.png" class="card-img-top px-5 py-5" alt="logo-kelas">
          <div class="card-body">
            <h2 class="card-text">Kelas 11</h2>
            <a href="<?= base_url('login') ?>" class="btn btn-primary">Masuk</a>
          </div>
        </div>
      </a>

      <!-- Kelas 10 -->
      <a href="<?= base_url('login') ?>" class="text-decoration-none">
        <div class="card mx-3" style="width: 18rem;">
          <img src="<?= base_url('assets/img') ?>/logo-super.png" class="card-img-top px-5 py-5" alt="logo-kelas">
          <div class="card-body">
            <h2 class="card-text">Kelas 12</h2>
            <a href="<?= base_url('login') ?>" class="btn btn-primary">Masuk</a>
          </div>
        </div>
      </a>

    </div>
  </div>
</div>


<?= $this->endSection() ?>