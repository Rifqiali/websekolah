<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include_once("../../koneksi.php");
include('session.php');
define('SITE_ROOT', realpath(dirname(__FILE__)));
// Display selected user data based on id
// Getting id from url
$id_guru = @$_GET['id_guru'];

// Fetech user data based on id
$res_guru = mysqli_query($mysqli, "SELECT * FROM tb_guru WHERE id_guru='$id_guru'");

while ($guru = mysqli_fetch_array($res_guru)) {
    $row_nama_guru = $guru['nama_guru'];
    $row_jabatan = $guru['jabatan'];
    $row_gambar = $guru['gambar'];
    $row_mapel = $guru['mapel'];
}


// include config connection file
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id_guru = @$_POST['id_guru'];
    $nama_guru = @$_POST['nama_guru'];
    $jabatan  = @$_POST['jabatan'];
    $mapel  = @$_POST['mapel'];
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, SITE_ROOT . '/image/' . $file_name);
    $result = mysqli_query($mysqli, "UPDATE tb_guru SET gambar='$file_name',nama_guru='$nama_guru',
    jabatan='$jabatan',mapel='$mapel'
    WHERE id_guru='$id_guru'");
    header("Location:../dashboard.php?page=guru");
}
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include_once('../template/navbar.php'); ?>
        <?php include_once('../template/sidebar.php'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include_once('content-header.php'); ?>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data guru</h3>

                                    <div class="card-tools">
                                        <!-- This will cause the card to maximize when clicked -->
                                        <a href="../dashboard.php?page=guru" class="btn btn-info">Kembali</a>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>

                                <div class="card-body">

                                    <form action="../../admin/guru/edit.php?page=guru" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_guru" value="<?= $id_guru ?>">
                                        <div class="form-group">
                                            <label for="nama_guru">Nama Guru</label>
                                            <input type="text" class="form-control" value="<?= $row_nama_guru ?>" name="nama_guru" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jabatan">Jabatan</label>
                                            <textarea type="text" class="form-control" name="jabatan" required><?= $row_jabatan ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="mapel">Mapel</label>
                                            <textarea type="text" class="form-control" name="mapel" required><?= $row_mapel ?></textarea>
                                        </div>
                                        <input type="file" name="file">
                                        <button class="btn btn-primary" type="submit" name="update">Simpan</button>

                                    </form>


                                </div>
                                <!-- /.content-wrapper -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('../template/footer.php'); ?>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <script>
        function confirmDelete() {
            if (confirm('Anda yakin menghapus data?')) {
                //action confirmed
                alert('Data berhasil dihapus');
            } else {
                //action cancelled
                alert('Data batal di hapus');
                return false;

            }
        }
    </script>
</body>

</html>