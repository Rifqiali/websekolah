<?php
include_once("../../koneksi.php");
include('session.php');

// Display selected user data based on id
// Getting id from url
$id_profil = @$_GET['id_profil'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_profil WHERE 
id_profil=$id_profil");

while ($data = mysqli_fetch_array($result)) {
    $row_nama_profil = $data['nama_profil'];
    $row_url = $data['url'];
}
?>
<?php
// include config connection file
// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id_profil = $_POST['id_profil'];
    $nama_profil = @$_POST['nama_profil'];
    $url = @$_POST['url'];
    $result = mysqli_query($mysqli, "UPDATE tb_profil SET nama_profil='$nama_profil',url='$url' WHERE id_profil=$id_profil");
    // update user data

    // Redirect to homepage to display updated user in list
    header("Location:../dashboard.php?page=profil");
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
                                    <h3 class="card-title">Data profil</h3>

                                    <div class="card-tools">
                                        <!-- This will cause the card to maximize when clicked -->
                                        <a href="<?= $base_url_admin ?>/dashboard.php?page=profil" class="btn btn-info">Kembali</a>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>

                                <div class="card-body">

                                    <form action="../../admin/profil/edit.php" method="post">
                                        <input type="hidden" name="id_profil" value="<?= $id_profil ?>">
                                        <div class="form-group">
                                            <label for="nama_profil">Nama profil</label>
                                            <input type="text" class="form-control" value="<?= $row_nama_profil ?>" name="nama_profil" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="url">url</label>
                                            <input type="text" class="form-control" value="<?= $row_url ?>" name="url" required>
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