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

<script>
    $(document).ready(function() {
        // Datatable Akun Siswa
        var akunsiswa = $('#akunsiswa').DataTable({
            "scrollX": true,
        });

        $('#akunsiswa tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                akunsiswa.$('tr.selected').removeClass('selected');
                $(this).addClass('selected')
            }
        });
    })
</script>