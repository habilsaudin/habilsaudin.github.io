<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attacment; filename= Data nelayan.xls");

?>

<html>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>No Kk</th>
                <th>Nama Kepala Keluarga</th>
                <th>Nik</th>
                <th>No Kartu Nelayan</th>
                <th>Alamat</th>
                <th>Status Nelayan</th>
                <th>Pekrjaan Istri</th>
                <th>Jumlah Anggota Keluarga</th>
                <th>Penghasilan Perbulan/Perhari</th>
                <th>Jenis Nelayan</th>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($parameter->getResultArray() as $row) : ?>
                <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $row['no kk']; ?></td>
                    <td><?= $row['nama kepala keluarga']; ?></td>
                    <td><?= $row['nik']; ?></td>
                    <td><?= $row['no kn']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['status nelayan']; ?></td>
                    <td><?= $row['pekerjaan istri']; ?></td>
                    <td><?= $row['jumlah anggota keluarga']; ?></td>
                    <td><?= $row['penghasilan perbulan/perhari']; ?></td>
                    <td><?= $row['jenis nelayan']; ?></td>


                </tr>


                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>


    </table>
</body>

</html>