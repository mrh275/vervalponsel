<?= $this->extend('template/portal') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="container col-xl-10 col-xxl-8 px-4 py-3">
        <div class="row align-items-center g-lg-5 py-3">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Login Verval Ponsel SMANESTA</h1>
                <p class="col-lg-10 fs-4">
                    <img src="<?= base_url('assets/img') ?>/login.png" alt="" class="login-heroes">
                </p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">

                <form class="p-4 p-md-5 border rounded-3 bg-light form-login" method="post" action="<?= base_url('login/user') ?>" id="login-form">
                    <h4>Silahkan login!</h4>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control username" name="username" id="floatingInput" placeholder="name@example.com">
                        <div class="invalid-feedback errorUsername">
                        </div>
                        <label for="floatingInput">Nomor Induk Siswa</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control password" name="password" id="floatingPassword" placeholder="Password">
                        <div class="invalid-feedback errorPassword">
                        </div>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" class="show-password" value="show-password"> Tampilkan sandi
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector(".form-login").addEventListener('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                if (response.error) {
                    let user = document.querySelector('.username');
                    let errorUser = document.querySelector('.errorUsername');
                    let pw = document.querySelector('.password');
                    let errorPw = document.querySelector('.errorPassword');

                    if (response.error.username) {
                        user.classList.add('is-invalid');
                        errorUser.innerHTML = response.error.username;
                    } else {
                        user.classList.remove('is-invalid');
                        errorUser.innerHTML = '';
                    }

                    if (response.error.password) {
                        pw.classList.add('is-invalid');
                        errorPw.innerHTML = response.error.password;
                    } else {
                        pw.classList.remove('is-invalid');
                        errorPw.innerHTML = '';
                    }

                } else {
                    if (response.nihil) {
                        Swal.fire({
                            title: 'Sedang memeriksa data',
                            timer: 1000,
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            didOpen: function() {
                                Swal.showLoading()
                            }
                        }).then(
                            (dismiss) => {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Login Gagal!',
                                    text: 'Akun tidak ditemukan.',
                                    confirmButtonText: 'Tutup'
                                })
                            }
                        )
                    } else {
                        if (response.pwError) {
                            Swal.fire({
                                title: 'Sedang memeriksa data',
                                timer: 1000,
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                                didOpen: function() {
                                    Swal.showLoading()
                                }
                            }).then(
                                (dismiss) => {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Login Gagal!',
                                        text: 'Username/Kata sandi salah.',
                                        confirmButtonText: 'Tutup'
                                    })
                                }
                            )
                        } else {
                            Swal.fire({
                                title: 'Sedang memeriksa data',
                                timer: 1000,
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                                didOpen: function() {
                                    Swal.showLoading()
                                }
                            }).then(
                                (dismiss) => {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Login Berhasil!',
                                        text: 'Akun ditemukan.',
                                        timer: 1000,
                                        showConfirmButton: false
                                    }).then(
                                        (dismiss) => {
                                            Swal.fire({
                                                title: 'Mengalihkan halaman',
                                                timer: 1000,
                                                allowEscapeKey: false,
                                                allowOutsideClick: false,
                                                didOpen: function() {
                                                    Swal.showLoading()
                                                }
                                            }).then(
                                                (dismiss) => {
                                                    window.location.href = "<?= base_url('user/dashboard') ?>"
                                                }
                                            )
                                        }
                                    )
                                }
                            );
                        }
                    }
                }
            },
        });
    });
</script>

<?= $this->endSection() ?>