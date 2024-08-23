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
                <th>Nik</th>
                <th>No Kn</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Status Nelayan</th>
                <th>Jenis Nelayan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($nelayan->getResultArray() as $row) : ?>
                <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $row['no kk']; ?></td>
                    <td><?= $row['nik']; ?></td>
                    <td><?= $row['nik']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['tgl']; ?></td>
                    <td><?= $row['jenis kelamin']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['agama']; ?></td>
                    <td><?= $row['status nelayan']; ?></td>
                    <td><?= $row['jenis nelayan']; ?></td>


                </tr>


                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>


    </table>
</body>

</html>