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

        <div class="row pt-2 pb-4">
            <div class="col-md-12">
                <button class="btn btn-success edit-data-ponsel" type="button" onclick="removeReadonly()"><i class="uil uil-edit"></i> Edit Profil</button>
            </div>
        </div>

        <form class="form-group form-edit-ponsel" action="<?= base_url('user/editPonsel') ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama-ponsel" readonly>
                        <div class="invalid-feedback errorNama">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="kelas-ponsel" readonly>
                        <div class="invalid-feedback errorKelas">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="nomor-hp" class="form-label">Nomor Handphone</label>
                        <input type="text" name="noHP" class="form-control" id="nomor-hp" readonly>
                        <div class="invalid-feedback errorNoHP">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="is-active" class="form-label">Apakah No HP Aktif?</label>
                        <select name="isActive" id="is-active" class="form-control" disabled>
                            <option value="">Pilih :</option>
                            <option value="1">Aktif</option>
                            <option value="2">Tidak Aktif</option>
                        </select>
                        <div class="invalid-feedback errorIsActive">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="kepemilikan" class="form-label">Kepemilikan No HP</label>
                        <select name="kepemilikan" id="kepemilikan" class="form-control" disabled>
                            <option value="">Pilih :</option>
                            <option value="Milik Sendiri">Milik Sendiri</option>
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Saudara">Saudara</option>
                            <option value="Kerabat Keluarga">Kerabat Keluarga</option>
                        </select>
                        <div class="invalid-feedback errorKepemilikan">
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
        document.querySelector('input#nama-ponsel').removeAttribute('readonly')
        document.querySelector('input#nomor-hp').removeAttribute('readonly')
        document.querySelector('select#is-active').removeAttribute('disabled')
        document.querySelector('select#kepemilikan').removeAttribute('disabled')
        document.querySelector('button.simpan-profil').style.display = 'block'
    }
</script>

<?= $this->endSection() ?>