<?php
include_once("../koneksi.php");

?>
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data ruangan</h3>

                        <div class="card-tools">
                            <!-- This will cause the card to maximize when clicked -->
                            <a href='ruangan/create.php?page=ruangan' class="btn btn-info"><i class="fas fa-plus"></i>Tambah Data</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <div class="card-body">

                        <table width='100%' id='tabel-simpel' class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Ruangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $result = mysqli_query($mysqli, "SELECT * FROM tb_ruangan ORDER BY id_ruangan DESC");
                                while ($data = mysqli_fetch_array($result)) {
                                ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_ruangan'] ?></td>
                                        <td>
                                            <a class="btn btn-success" href='ruangan/edit.php?id_ruangan=<?= $data['id_ruangan'] ?>&page=ruangan'>Edit</a>
                                            <a class="btn btn-danger" onclick='return confirmDelete()' href='ruangan/delete.php?id_ruangan=<?= $data['id_ruangan'] ?>&page=ruangan'>Hapus</a>
                                        </td>
                                    </tr><?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>