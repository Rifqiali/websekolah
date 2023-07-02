<?php
// include config connection file
include "../../koneksi.php";

// Get id from URL to delete that user
$id_ruangan = $_GET['id_ruangan'];
// Delete user row from table based on given id

$hasil = mysqli_query($mysqli, "DELETE FROM tb_ruangan WHERE id_ruangan = $id_ruangan");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../dashboard.php?page=ruangan");
