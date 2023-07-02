<?php
include_once("../../koneksi.php");
include('session.php');
define('SITE_ROOT', realpath(dirname(__FILE__)));
// Display selected user data based on id
// Getting id from url
$id_footer = @$_GET['id_footer'];

// Fetech user data based on id
$res_footer = mysqli_query($mysqli, "SELECT * FROM tb_footer WHERE 
id_footer=$id_footer");

while ($footer = mysqli_fetch_array($res_footer)) {
    $row_judul_footer = $footer['judul_footer'];
    $row_konten_footer = $footer['konten_footer'];
    $row_copyright = $footer['copyright'];
}
?>
<?php
// include config connection file
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id_footer = $_POST['id_footer'];
    $judul_footer = @$_POST['judul_footer'];
    $konten_footer = @$_POST['konten_footer'];
    $copyright = @$_POST['copyright'];
    $result = mysqli_query($mysqli, "UPDATE tb_footer SET
     judul_footer='$judul_footer',
     konten_footer='$konten_footer',
     copyright='$copyright'
    WHERE id_footer=$id_footer");
    // update user data

    // Redirect to homepage to display updated user in list
    header("Location:../dashboard.php?page=footer");
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
                                    <h3 class="card-title">Data Footer</h3>

                                    <div class="card-tools">
                                        <!-- This will cause the card to maximize when clicked -->
                                        <a href="../dashboard.php?page=footer" class="btn btn-info">Kembali</a>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>

                                <div class="card-body">

                                    <form action="../../admin/footer/edit.php?page=footer" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_footer" value="<?= $id_footer ?>">
                                        <div class="form-group">
                                            <label for="judul_footer">judul_footer</label>
                                            <input type="text" class="form-control" value="<?= $row_judul_footer ?>" name="judul_footer" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="konten_footer">konten_footer</label>
                                            <input type="text" class="form-control" value="<?= $row_konten_footer ?>" name="konten_footer" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="copyright">copyright</label>
                                            <input type="text" class="form-control" value="<?= $row_copyright ?>" name="copyright" required>
                                        </div>
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