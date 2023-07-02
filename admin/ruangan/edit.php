<?php
include_once("../../koneksi.php");
include('session.php');

// Display selected user data based on id
// Getting id from url
$id_ruangan = @$_GET['id_ruangan'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_ruangan WHERE id_ruangan=$id_ruangan");

while ($user_data = mysqli_fetch_array($result)) {
    $row_ruangan = $user_data['nama_ruangan'];
}
?>
<?php
// include config connection file
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id_ruangan = @$_POST['id_ruangan'];
    $ruangan = @$_POST['nama_ruangan'];

    $result = mysqli_query($mysqli, "UPDATE tb_ruangan SET nama_ruangan='$ruangan' WHERE id_ruangan=$id_ruangan");
    // update user data

    // Redirect to homepage to display updated user in list
    header("Location:../dashboard.php?page=ruangan");
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
                                    <h3 class="card-title">Data Ruangan</h3>

                                    <div class="card-tools">
                                        <!-- This will cause the card to maximize when clicked -->
                                        <a href="../../admin/ruangan/edit.php?page=ruangan" class="btn btn-info">Kembali</a>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>

                                <div class="card-body">

                                    <form action="../../admin/ruangan/edit.php" method="post">
                                        <input type="hidden" name="id_ruangan" value="<?= $id_ruangan ?>">
                                        <div class="form-group">
                                            <label for="nama_ruangan">nama ruangan</label>
                                            <input type="text" class="form-control" value="<?= $row_ruangan ?>" name="nama_ruangan" required>
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