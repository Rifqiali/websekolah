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
                        <h3 class="card-title">Data prestasi</h3>

                        <div class="card-tools">
                            <!-- link yang akan menghubungkan dengan file create.php -->
                            <a href='prestasi/create.php?page=prestasi' class="btn btn-info"><i class="fas fa-plus"></i>Tambah prestasi</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- membuat table -->
                        <table width='100%' id='tabel-simpel' class="table table-bordered">
                            <!--  table head -->
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Prestasi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <!--  table body -->
                            <tbody>
                                <?php
                                $no = 1;
                                $result = mysqli_query($mysqli, "SELECT * FROM tb_prestasi ORDER BY id_prestasi DESC");
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_gambar'] ?></td>
                                        <td><?= $data['gambar'] ?></td>
                                        <td>
                                            <!--membuat button edit dan delete-->
                                            <a class="btn btn-success" href='prestasi/edit.php?id_prestasi=<?= $data['id_prestasi'] ?>&page=prestasi'>Edit</a>
                                            <a class="btn btn-danger" onclick='return confirmDelete()' href='prestasi/delete.php?id_prestasi=<?= $data['id_prestasi'] ?>&page=prestasi'>Hapus</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>