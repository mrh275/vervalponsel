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
                <button class="btn btn-success edit-data-ponsel" type="button" onclick="removeReadonly()"><i class="uil uil-edit"></i> Edit Profil</button>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <table id="dataponsel" class="table table-bordered table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Nomor HP</th>
                            <th>Status</th>
                            <th>Milik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dataPonsel as $data) : ?>
                            <tr>
                                <td><?= $data['nis'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['kelas'] ?></td>
                                <td><?= $data['nomor_hp'] ?></td>
                                <td><?= $data['is_active'] ?></td>
                                <td><?= $data['kepemilikan'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        //Fungsi seleksi row table
        $('#dataponsel tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected')
            }
        });
    })
</script>

<?= $this->endSection() ?>