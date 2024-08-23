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
                <th>Tahun</th>
                <th>Nama Bantuan</th>
                <th>Jumlah Bantuan</th>
                <th>Satuan</th>
                <th>Jenis</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($bantuan->getResultArray() as $row) : ?>
                <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $row['tahun']; ?></td>
                    <td><?= $row['nama bantuan']; ?></td>
                    <td><?= $row['jumlah bantuan']; ?></td>
                    <td><?= $row['satuan']; ?></td>
                    <td><?= $row['jenis']; ?></td>


                </tr>


                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>


    </table>
</body>

</html>