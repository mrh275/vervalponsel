<?= $this->extend('template/dashboard') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="container py-4">
        <div class="row pt-2 pb-4">
            <div class="col-md-12">
                <h2 class="profile-head">
                    Profil Siswa
                </h2>
            </div>
        </div>

        <div class="row pt-2 pb-4">
            <div class="col-md-12">
                <button class="btn btn-success edit-profil" type="button" onclick="removeReadonly()"><i class="uil uil-edit"></i> Edit Profil</button>
            </div>
        </div>

        <form class="form-group form-edit-profile" action="<?= base_url('user/editProfile') ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" readonly>
                        <div class="invalid-feedback errorNama">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="kelas" readonly>
                        <div class="invalid-feedback errorKelas">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempatLahir" class="form-control" id="tempat-lahir" readonly>
                        <div class="invalid-feedback errorTempatLahir">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggalLahir" class="form-control" id="tanggal-lahir" readonly>
                        <div class="invalid-feedback errorTanggalLahir">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" readonly>
                    <div class="invalid-feedback errorEmail">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea type="text" name="alamat" class="form-control" id="alamat" readonly></textarea>
                        <div class="invalid-feedback errorAlamat">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <button class="btn btn-primary simpan-profil" style="display: none;" type="submit"><i class="uil uil-save"></i> Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function removeReadonly() {
        document.querySelector('input#nama').removeAttribute('readonly')
        document.querySelector('input#tempat-lahir').removeAttribute('readonly')
        document.querySelector('input#tanggal-lahir').removeAttribute('readonly')
        document.querySelector('input#email').removeAttribute('readonly')
        document.querySelector('textarea#alamat').removeAttribute('readonly')
        document.querySelector('button.simpan-profil').style.display = 'block'
    }
</script>

<?= $this->endSection() ?>