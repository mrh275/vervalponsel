<?= $this->extend('template/dashboard') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="container py-4">
        <div class="row pt-2 pb-4">
            <div class="col-md-12">
                <h2 class="profile-head">
                    Data Ponsel Siswa
                </h2>
            </div>
        </div>

        <form class="form-group form-ganti-sandi" action="<?= base_url('user/gantiPassword') ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="password1" class="form-label">Kata Sandi Baru</label>
                        <input type="password" name="password1" class="form-control" id="password1">
                        <div class="invalid-feedback text-wrap errorPassword1">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" name="password2" class="form-control" id="password2">
                        <div class="invalid-feedback errorPassword2">
                        </div>
                    </div>
                </div>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" class="show-password" value="show-password"> Tampilkan sandi
                </label>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <button class="btn btn-primary simpan-sandi" type="submit"><i class="uil uil-save"></i> Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    let showPasswordBtn = document.querySelector('.show-password');
    let password1 = document.querySelector('#password1');
    let password2 = document.querySelector('#password2');

    showPasswordBtn.addEventListener('change', e => {
        if (e.target.checked) {
            password1.type = 'text';
            password2.type = 'text';
        } else {
            password1.type = 'password';
            password2.type = 'password';
        }
    })
</script>

<?= $this->endSection() ?>