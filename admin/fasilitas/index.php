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
                        <h3 class="card-title">Data Fasilitas</h3>

                        <div class="card-tools">
                            <!-- link yang akan menghubungkan dengan file create.php -->
                            <a href='fasilitas/create.php?page=fasilitas' class="btn btn-info"><i class="fas fa-plus"></i>Tambah Fasilitas</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- membuat table -->
                        <table width='100%' id='tabel-simpel' class="table table-bordered">
                            <!--  table head -->
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Fasilitas</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <!--  table body -->
                            <tbody>
                                <?php
                                $no = 1;
                                $result = mysqli_query($mysqli, "SELECT * FROM tb_fasilitas ORDER BY id_fasilitas DESC");
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_gambar'] ?></td>
                                        <td><?= $data['gambar'] ?></td>
                                        <td>
                                            <!--membuat button edit dan delete-->
                                            <a class="btn btn-success" href='fasilitas/edit.php?id_fasilitas=<?= $data['id_fasilitas'] ?>&page=fasilitas'>Edit</a>
                                            <a class="btn btn-danger" onclick='return confirmDelete()' href='fasilitas/delete.php?id_fasilitas=<?= $data['id_fasilitas'] ?>&page=fasilitas'>Hapus</a>
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