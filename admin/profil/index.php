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
                        <h3 class="card-title">Data profil</h3>

                        <div class="card-tools">
                            <!-- This will cause the card to maximize when clicked -->
                            <a href='profil/create.php?page=profil' class="btn btn-info"><i class="fas fa-plus"></i>Tambah profil</a>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                    <div class="card-body">

                        <table width='100%' id='tabel-simpel' class="table table-bordered">

                            <tr>
                                <th>No</th>
                                <th>Nama profil</th>
                                <th>Url</th>
                                <th>Aksi</th>
                            </tr>
                            <?php
                            $no = 1;
                            $result = mysqli_query($mysqli, "SELECT * FROM tb_profil ORDER BY id_profil DESC");

                            while ($data = mysqli_fetch_array($result)) {
                            ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama_profil'] ?></td>
                                    <td><?= $data['url'] ?></td>
                                    <td>
                                        <a class="btn btn-success" href='profil/edit.php?id_profil=<?= $data['id_profil'] ?>&page=profil'>Edit</a>
                                        <a class="btn btn-danger" onclick='return confirmDelete()' href='profil/delete.php?id_profil=<?= $data['id_profil'] ?>&page=profil'>Hapus</a>
                                    </td>
                                </tr><?php } ?>
                        </table>
                    </div>
                </div><!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>