<?= $this->extend('template/dashboard-admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="container py-4">
        <div class="row pt-2 pb-4">
            <div class="col-md-12">
                <h2 class="profile-head">
                    Datatable Ponsel Siswa
                </h2>
            </div>
        </div>

        <div class="row pt-2 pb-4">
            <div class="col-md-12">
                <button class="btn btn-success edit-data-ponsel" type="button" onclick="editAkun()"><i class="uil uil-edit"></i> Edit Profil</button>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container akun-siswa">
                <table id="akunsiswa" class="table table-bordered table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($akunSiswa as $data) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['kelas'] ?></td>
                                <td><?= $data['username'] ?></td>
                                <td><?= $data['password'] ?></td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<!-- Modal Edit Akun -->
<div class="modal editAkun fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Akun <span class="namasiswa"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-group form-ganti-sandi" action="<?= base_url('admin/gantiPasswordSiswa') ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nis" class="form-label">Nomor Induk Siswa</label>
                                <input type="text" name="nis" class="form-control" id="nis" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control" id="kelas">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                        </div>
                    </div>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    function editAkun() {
        let akunSelected = document.querySelector('tr.selected');
        if (!akunSelected) {
            Swal.fire({
                icon: 'warning',
                title: 'Silahkan pilih akun terlebih dahulu!',
                text: 'Jika ingin merubah data akun siswa, silahkan pilih akun terlebih dahulu.',
                showConfirmButton: true,
                confirmButtonText: 'Tutup'
            })
        } else {
            let nis = akunSelected.getElementsByTagName('td')[3].innerHTML;
            let namaSiswa = akunSelected.getElementsByTagName('td')[1].innerHTML;
            let kelas = akunSelected.getElementsByTagName('td')[2].innerHTML;
            let email = 'siswa@siswa.com';

            $('.editAkun').modal('show')
            document.querySelector('.namasiswa').innerHTML = namaSiswa;
            document.querySelector('#nis').value = nis;
            document.querySelector('#nama').value = namaSiswa;
            document.querySelector('#kelas').value = kelas;
            document.querySelector('#email').value = email;

        }
    }

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

<?= $this->endSection(); ?>