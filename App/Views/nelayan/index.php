<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <!-- <?php if (session()->get('message')) :  ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data nelayan berhasil<strong><?= session()->getFlashdata('message'); ?></strong>
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
                    <a href="/nelayan/excel" class="btn btn-outline-success shadow float-right">Excel <i class="fa fa-file-excel"></i></a>
                </div>
            </div>
        </div>
        <div class="card=body">

            <table class="table table-bordered" cellspacing="0" width="100%">
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
                        <th>Opsi</th>
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
                            <td>
                                <button type="button" data-toggle="modal" data-target="#modalubah" class="btn btn-sm btn-warning" id="btn-edit" data-id="<?= $row['id']; ?>" data-no kk=" <?= $row['no kk']; ?>" data-nik="<?= $row['nik']; ?>" data-no kn="<?= $row['no kn']; ?>" data-nama="<?= $row['nama']; ?>" data-tgl="<?= $row['tgl']; ?>" data-jenis kelamin="<?= $row['jenis kelamin']; ?>" data-alamat="<?= $row['alamat']; ?>" data-agama="<?= $row['agama']; ?>" data-status nelayan="<?= $row['status nelayan']; ?>" data-jenis nelayan="<?= $row['status nelayan']; ?>" data-jenis nelayan="<?= $row['jenis nelayan']; ?>"><i class=" fa fa-edit"></i></button>
                                <!-- <button type="button" data-toggle="modal" data-target="#modalhapus" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button> -->

                                <a href="/nelayan/hapus/<?= $row['id']; ?>" class="btn btn-sm btn-danger btn-hapus"><i class="fa fa-trash-alt"></i></a>
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


<!-- Modal Ubah -->
<div class="modal fade" id="modalubah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Nelayan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('nelayan/ubah'); ?>" method="post">
                    <input type="hidden" name="id" id="id-nelayan">

                    <div class="form-group mb-0">
                        <label for="no kk"></label>
                        <input type="text" name="no kk" id="no kk" class="form-control" placeholder="Masukan No kk" value="<?= $row['no kk'] ?>">
                    </div>

                    <div class="form-group mb-0">
                        <label for="nik"></label>
                        <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Nik" value="<?= $row['nik'] ?>">
                    </div>

                    <div class=" form-group mb-0">
                        <label for="no kn"></label>
                        <input type="text" name="no kn" id="no kn" class="form-control" placeholder="Masukan Nomor kartu nelayan" value="<?= $row['no kn'] ?>">
                    </div>

                    <div class=" form-group mb-0">
                        <label for="nama"></label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Nelayan" value="<?= $row['nama'] ?>">
                    </div>

                    <div class=" form-group mb-0">
                        <label for="tgl"></label>
                        <input type="text" name="tgl" id="tgl" class="form-control" placeholder="Masukan tanggal lahir" value="<?= $row['tgl'] ?>">
                    </div>

                    <div class="form-group mb-0">
                        <label for="jenis kelamin"></label>
                        <input type="text" name="jenis kelamin" id="jenis kelamin" class="form-control" placeholder="Masukan Jenis Kelamin" value="<?= $row['jenis kelamin'] ?>">
                    </div>

                    <div class="form-group mb-0">
                        <label for="alamat"></label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat" value="<?= $row['alamat'] ?>">
                    </div>

                    <div class="form-group mb-0">
                        <label for="agama"></label>
                        <input type="text" name="agama" id="agama" class="form-control" placeholder="Masukan Agama" value="<?= $row['agama'] ?>">
                    </div>

                    <div class="form-group mb-0">
                        <label for="status nelayan"></label>
                        <input type="text" name="status nelayan" id="status nelayan" class="form-control" placeholder="Masukan Status Nelayan" value="<?= $row['status nelayan'] ?>">
                    </div>

                    <div class="form-group mb-0">
                        <label for="jenis nelayan"></label>
                        <input type="text" name="jenis nelayan" id="jenis nelayan" class="form-control" placeholder="Masukan Jenis Nelayan" value="<?= $row['jenis nelayan'] ?>">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal Tambah -->
<div class="modal fade" id="modaltambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('nelayan/tambah'); ?>" method="post">

                    <div class="form-group mb-0">
                        <label for="no kk"></label>
                        <input type="text" name="no kk" id="no kk" class="form-control" placeholder="Masukan No kk">
                    </div>

                    <div class="form-group mb-0">
                        <label for="nik"></label>
                        <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan Nik">
                    </div>

                    <div class="form-group mb-0">
                        <label for="no kn"></label>
                        <input type="text" name="no kn" id="no kn" class="form-control" placeholder="Masukan No kn">
                    </div>

                    <div class="form-group mb-0">
                        <label for="nama"></label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Nelayan">
                    </div>

                    <div class="form-group mb-0">
                        <label for="tgl"></label>
                        <input type="text" name="tgl" id="tgl" class="form-control" placeholder="Masukan tanggal lahir">
                    </div>

                    <div class="form-group mb-0">
                        <label for="jenis kelamin"></label>
                        <input type="text" name="jenis kelamin" id="jenis kelamin" class="form-control" placeholder="Masukan Jenis Kelamin">
                    </div>

                    <div class="form-group mb-0">
                        <label for="alamat"></label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat">
                    </div>

                    <div class="form-group mb-0">
                        <label for="agama"></label>
                        <input type="text" name="agama" id="agama" class="form-control" placeholder="Masukan Agama">
                    </div>

                    <div class="form-group mb-0">
                        <label for="status nelayan"></label>
                        <input type="text" name="status nelayan" id="status nelayan" class="form-control" placeholder="Masukan Status Nelayan">
                    </div>

                    <div class="form-group mb-0">
                        <label for="jenis nelayan"></label>
                        <input type="text" name="jenis nelayan" id="jenis nelayan" class="form-control" placeholder="Masukan Jenis Nelayan">
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



<!-- Modal Hapus data nelayan -->
<div class="modal fade" id="modalhapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/nelayan/hapus/<?= $row['id']; ?>" class="btn btn-primary">Yakin!</a>
            </div>
        </div>
    </div>
</div>