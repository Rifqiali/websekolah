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
                        <h3 class="card-title">Data Guru</h3>

                        <div class="card-tools">
                            <!-- link yang akan menghubungkan dengan file create.php -->
                            <a href='guru/create.php?page=guru' class="btn btn-info"><i class="fas fa-plus"></i>Tambah guru</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <!-- membuat table -->
                        <table width='100%' id='tabel-simpel' class="table table-bordered">
                            <!--  table head -->
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Guru</th>
                                    <th>Jabatan</th>
                                    <th>Mapel</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <!--  table body -->
                            <tbody>
                                <?php
                                $no = 1;
                                $result = mysqli_query($mysqli, "SELECT tb_guru.* FROM tb_guru ORDER BY id_guru DESC");
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_guru'] ?></td>
                                        <td><?= $data['jabatan'] ?></td>
                                        <td><?= $data['mapel'] ?></td>
                                        <td>
                                            <!--membuat button edit dan delete-->
                                            <a class="btn btn-success" href='guru/edit.php?id_guru=<?= $data['id_guru'] ?>&page=guru'>Edit</a>
                                            <a class="btn btn-danger" onclick='return confirmDelete()' href='guru/delete.php?id_guru=<?= $data['id_guru'] ?>&page=guru'>Hapus</a>
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