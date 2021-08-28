<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">

    <!-- CSS Assets  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css') ?>/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css') ?>/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <link rel="shortcut icon" href="<?= base_url('assets/img') ?>/favicon.png" type="image/x-icon">

</head>

<body>

    <div class="container-fluid px-0 sticky-top portal-header">
        <nav class="navbar navbar-expand-md navbar-light bg-light" aria-label="Fourth navbar example">
            <div class="container-fluid mx-5">
                <div class="row" style="text-align: center;">
                    <div class="logo-brand col-sm-2">
                        <a class="navbar-brand me-0 home-button" href="<?= base_url('user/dashboard') ?>">
                            <img src="<?= base_url('assets/img') ?>/logo.png" width="40" height="40" alt="" class="logo-verval">
                        </a>
                    </div>
                    <div class="brand col-sm-10 d-flex align-items-center">
                        <a class="navbar-brand me-0" href="#">
                            SMA Negeri 1 Rawamerta
                        </a>
                    </div>
                </div>
                <div class="ham-btn">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>


                <div class="collapse navbar-collapse navbar-menu" id="navbarsExample04">
                    <ul class="navbar-nav menu-bar mb-2 me-2 mb-md-0">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                <?= $_SESSION['nama'] . ' [' . $_SESSION['kelas'] . ']' ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link profile" href="<?= base_url('user/profile') ?>">
                                <i class="uil uil-user"></i> Profil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link data-ponsel" aria-current="page" href="<?= base_url('user/data-ponsel') ?>">
                                <i class="uil uil-mobile-android-alt"></i> Data Ponsel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link data-ponsel" aria-current="page" href="<?= base_url('user/change-password') ?>">
                                <i class="uil uil-key-skeleton-alt"></i> Ganti Kata Sandi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('user/logout') ?>">
                                <i class="uil uil-signout"></i> Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <?= $this->renderSection('content') ?>

    <div class="container-fluid">
        <div class="container">
            <footer class="py-3 my-4 border-top">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="text-muted">&copy; <?= date('Y') ?> SMA Negeri 1 Rawamerta. </span>
                    </div>
                    <div class="col-lg-6">
                        <ul class="justify-content-end list-unstyled d-flex">
                            <li class="ms-3 text-muted">Made with
                                <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                </svg> by Asal Ngoding.
                            </li>
                            <li class="ms-3">
                                <a href="https://facebook.com/muhamadramdanihidayatullah" target="_blank" class="text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="ms-3">
                                <a href="https://github.com/muhamadramdani275" target="_blank" class="text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="ms-3">
                                <a class="text-muted" target="_blank" href="https://instagram.com/muhamadramdani275">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js') ?>/jquery.min.js"></script>
    <script src="<?= base_url('assets/js') ?>/sweetalert2.all.min.js"></script>

    <script>
        function getProfile() {
            $.ajax({
                url: '<?= base_url('user/getProfile') ?>',
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
                        tanggalLahir.value = response.data.tanggal_lahir;
                        email.value = response.data.email;
                        alamat.innerHTML = response.data.alamat;
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        }

        function getDataPonsel() {
            $.ajax({
                url: '<?= base_url('user/getPonsel') ?>',
                dataType: "json",
                success: function(response) {
                    if (response.data) {
                        let nama = document.querySelector('#nama-ponsel');
                        let kelas = document.querySelector('#kelas-ponsel');
                        let nomorHp = document.querySelector('#nomor-hp');
                        let isActive = document.querySelector('#is-active');
                        let kepemilikan = document.querySelector('#kepemilikan');

                        nama.value = response.data.nama;
                        kelas.value = response.data.kelas;
                        nomorHp.value = response.data.nomor_hp;
                        isActive.value = response.data.is_active;
                        kepemilikan.value = response.data.kepemilikan;
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        }

        $(document).ready(function() {
            if (window.location.href == 'https://vervalponsel.sman1rawamerta.sch.id/user/profile') {
                getProfile()
            }

            if (window.location.href == 'https://vervalponsel.sman1rawamerta.sch.id/user/data-ponsel') {
                getDataPonsel()
            }

            $('form.form-edit-profile').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.error) {
                            let nama = document.querySelector('#nama');
                            let errorNama = document.querySelector('.errorNama');
                            let tempatLahir = document.querySelector('#tempat-lahir');
                            let errorTempatLahir = document.querySelector('.errorTempatLahir');
                            let tanggalLahir = document.querySelector('#tanggal-lahir');
                            let errorTanggalLahir = document.querySelector('.errorTanggalLahir');
                            let email = document.querySelector('#email');
                            let errorEmail = document.querySelector('.errorEmail');
                            let alamat = document.querySelector('#alamat');
                            let errorAlamat = document.querySelector('.errorAlamat');

                            if (response.error.nama) {
                                nama.classList.add('is-invalid');
                                errorNama.innerHTML = response.error.nama;
                            } else {
                                nama.classList.remove('is-invalid');
                                errorNama.innerHTML = '';
                            }

                            if (response.error.tmptLahir) {
                                tempatLahir.classList.add('is-invalid');
                                errorTempatLahir.innerHTML = response.error.tmptLahir;
                            } else {
                                tempatLahir.classList.remove('is-invalid');
                                errorTempatLahir.innerHTML = '';
                            }

                            if (response.error.tglLahir) {
                                tanggalLahir.classList.add('is-invalid');
                                errorTanggalLahir.innerHTML = response.error.tglLahir;
                            } else {
                                tanggalLahir.classList.remove('is-invalid');
                                errorTanggalLahir.innerHTML = '';
                            }

                            if (response.error.email) {
                                email.classList.add('is-invalid');
                                errorEmail.innerHTML = response.error.email;
                            } else {
                                email.classList.remove('is-invalid');
                                errorEmail.innerHTML = '';
                            }

                            if (response.error.alamat) {
                                alamat.classList.add('is-invalid');
                                errorAlamat.innerHTML = response.error.alamat;
                            } else {
                                alamat.classList.remove('is-invalid');
                                errorAlamat.innerHTML = '';
                            }

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
                                        title: 'Data berhasil diubah!',
                                        text: 'Data profil kamu sudah dirubah..',
                                        timer: 1000,
                                        showConfirmButton: false
                                    }).then(
                                        (dismiss) => {
                                            window.location.href = '<?= base_url('user/profile') ?>'
                                        }
                                    )
                                }
                            )
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });
            })

            $('form.form-edit-ponsel').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.error) {
                            let nama = document.querySelector('#nama-ponsel');
                            let errorNama = document.querySelector('.errorNama');
                            let nomorHP = document.querySelector('#nomor-hp');
                            let errorNomorHP = document.querySelector('.errorNoHP');
                            let isActive = document.querySelector('#is-active');
                            let errorIsActive = document.querySelector('.errorIsActive');
                            let kepemilikan = document.querySelector('#kepemilikan');
                            let errorKepemilikan = document.querySelector('.errorKepemilikan');

                            if (response.error.nama) {
                                nama.classList.add('is-invalid');
                                errorNama.innerHTML = response.error.nama;
                            } else {
                                nama.classList.remove('is-invalid');
                                errorNama.innerHTML = '';
                            }

                            if (response.error.nomorHP) {
                                nomorHP.classList.add('is-invalid');
                                errorNomorHP.innerHTML = response.error.nomorHP;
                            } else {
                                nomorHP.classList.remove('is-invalid');
                                errorNomorHP.innerHTML = '';
                            }

                            if (response.error.isActive) {
                                isActive.classList.add('is-invalid');
                                errorIsActive.innerHTML = response.error.isActive;
                            } else {
                                isActive.classList.remove('is-invalid');
                                errorIsActive.innerHTML = '';
                            }

                            if (response.error.kepemilikan) {
                                kepemilikan.classList.add('is-invalid');
                                errorKepemilikan.innerHTML = response.error.kepemilikan;
                            } else {
                                kepemilikan.classList.remove('is-invalid');
                                errorKepemilikan.innerHTML = '';
                            }

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
                                        title: 'Data berhasil diubah!',
                                        text: 'Data ponsel kamu sudah dirubah.',
                                        timer: 1000,
                                        showConfirmButton: false
                                    }).then(
                                        (dismiss) => {
                                            window.location.href = '<?= base_url('user/data-ponsel') ?>'
                                        }
                                    )
                                }
                            )
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });
            })

            $('form.form-ganti-sandi').submit(function(e) {
                e.preventDefault();
                let str = document.querySelector('#password1').value;
                if (/\d/.test(str) == true) {
                    if (str.includes('_') || str.includes('@') || str.includes('-') || str.includes('.') || str.includes('#')) {
                        $.ajax({
                            type: 'post',
                            url: $(this).attr('action'),
                            data: $(this).serialize(),
                            dataType: "json",
                            success: function(response) {
                                if (response.error) {
                                    let password1 = document.querySelector('#password1');
                                    let errorPassword1 = document.querySelector('.errorPassword1');
                                    let password2 = document.querySelector('#password2');
                                    let errorPassword2 = document.querySelector('.errorPassword2');

                                    if (response.error.password1) {
                                        password1.classList.add('is-invalid');
                                        errorPassword1.innerHTML = response.error.password1;
                                    } else {
                                        password1.classList.remove('is-invalid');
                                        errorPassword1.innerHTML = '';
                                    }

                                    if (response.error.password2) {
                                        password2.classList.add('is-invalid');
                                        errorPassword2.innerHTML = response.error.password2;
                                    } else {
                                        password2.classList.remove('is-invalid');
                                        errorPassword2.innerHTML = '';
                                    }

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
                                                title: 'Password berhasil diubah!',
                                                text: 'Kata sandi kamu berhasil dirubah.',
                                                showConfirmButton: true,
                                                confirmButtonText: 'Tutup'
                                            }).then(
                                                (dismiss) => {
                                                    window.location.href = '<?= base_url('user/dashboard') ?>'
                                                }
                                            )
                                        }
                                    )
                                }


                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                            }
                        });
                    } else {
                        let password1 = document.querySelector('#password1');
                        let errorPassword1 = document.querySelector('.errorPassword1');

                        password1.classList.add('is-invalid');
                        errorPassword1.innerHTML = 'Kata sandi harus gabungan dari huruf, angka dan salah satu dari simbol <span class="fw-bold">@ - _ . #</span>';
                    }
                } else {
                    let password1 = document.querySelector('#password1');
                    let errorPassword1 = document.querySelector('.errorPassword1');

                    password1.classList.add('is-invalid');
                    errorPassword1.innerHTML = 'Kata sandi harus gabungan dari huruf, angka dan salah satu dari simbol <span class="fw-bold">@ - _ . #</span>';
                }



            })
        })
    </script>

</body>

</html>