<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <!-- <?php if (session()->get('message')) :  ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data bantuan berhasil<strong><?= session()->getFlashdata('message'); ?></strong>
        </div>

    <?php endif; ?> -->

    <div class="swal" data-swal="<?= session()->get('message'); ?>"></div>

    <div class="row">
        <div class="col-md-4">
            <?php
            if (session()->get('err')) {
                echo "<div class='alert alert-danger' role='alert'>" . session()->get('err') . "</div>";
                session()->remove('err');
            }

            ?>

        </div>

    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltambah">
                        <i class="fa fa-plus"> Tambah Data</i>
                    </button>
                </div>
                <div class="col-md">
                    <button onclick="window.print()" class="btn btn-outline-secondary shadow float-right ml-2">Print <i class="fa fa-print"> </i></button>
                    <a href="/bantuan/excel" class="btn btn-outline-success shadow float-right">Excel <i class="fa fa-file-excel"></i></a>
                </div>
            </div>
        </div>
        <div class="card=body">

            <table class="table table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Nama Bantuan</th>
                        <th>Jumlah Bantuan</th>
                        <th>Satuan</th>
                        <th>Jenis</th>
                        <th>Opsi</th>
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

                            <td>
                                <button type="button" data-toggle="modal" data-target="#modalubah" class="btn btn-sm btn-warning" id="btn-edit" data-id="<?= $row['id']; ?>" data-tahun=" <?= $row['tahun']; ?>" data-nama bantuan="<?= $row['nama bantuan']; ?>" data-jumlah bantuan="<?= $row['jumlah bantuan']; ?>" data-satuan="<?= $row['satuan']; ?>" data-jenis="<?= $row['jenis']; ?>"><i class=" fa fa-edit"></i></button>
                                <!-- <button type="button" data-toggle="modal" data-target="#modalhapus" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button> -->

                                <a href="/bantuan/hapus/<?= $row['id']; ?>" class="btn btn-sm btn-danger btn-hapus"><i class="fa fa-trash-alt"></i></a>
                            </td>

                        </tr>


                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>


            </table>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->


<!-- Button trigger modal -->

<!-- Modal tambah -->
<div class="modal fade" id="modaltambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('bantuan/tambah'); ?>" method="post">
                    <div class="form-group mb-0">
                        <label for="tahun"></label>
                        <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Masukan tahun">
                    </div>

                    <div class="form-group mb-0">
                        <label for="nama bantuan"></label>
                        <input type="text" name="nama bantuan" id="nama bantuan" class="form-control" placeholder="Masukan Nama bantuan">
                    </div>

                    <div class=" form-group mb-0">
                        <label for="jumlah bantuan"></label>
                        <input type="text" name="jumlah bantuan" id="jumlah bantuan" class="form-control" placeholder="Masukan jumlah bantuan">
                    </div>

                    <div class=" form-group mb-0">
                        <label for="satuan"></label>
                        <input type="text" name="satuan" id="satuan" class="form-control" placeholder="Masukan satuan">
                    </div>

                    <div class=" form-group mb-0">
                        <label for="jenis"></label>
                        <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Masukan jenis bantuan">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Ubah -->
<div class="modal fade" id="modalubah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data bantuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('bantuan/ubah'); ?>" method="post">
                    <input type="hidden" name="id" id="id-bantuan">

                    <div class="form-group mb-0">
                        <label for="tahun"></label>
                        <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Masukan tahun" value="<?= $row['tahun'] ?>">
                    </div>

                    <div class="form-group mb-0">
                        <label for="nama bantuan"></label>
                        <input type="text" name="nama bantuan" id="nama bantuan" class="form-control" placeholder="Masukan Nik" value="<?= $row['nama bantuan'] ?>">
                    </div>

                    <div class=" form-group mb-0">
                        <label for="jumlah bantuan"></label>
                        <input type="text" name="jumlah bantuan" id="jumlah bantuan" class="form-control" placeholder="Masukan Nomor kartu bantuan" value="<?= $row['jumlah bantuan'] ?>">
                    </div>

                    <div class=" form-group mb-0">
                        <label for="satuan"></label>
                        <input type="text" name="satuan" id="satuan" class="form-control" placeholder="Masukan satuan" value="<?= $row['satuan'] ?>">
                    </div>

                    <div class=" form-group mb-0">
                        <label for="jenis"></label>
                        <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Masukan jenis bantuan" value="<?= $row['jenis'] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Hapus data bantuan -->
    <div class="modal fade" id="modalhapus">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/bantuan/hapus/<?= $row['id']; ?>" class="btn btn-primary">Yakin!</a>
                </div>
            </div>
        </div>
    </div>