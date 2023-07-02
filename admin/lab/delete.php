<?php
// include config connection file
include "../../koneksi.php";

// Get id from URL to delete that user
$id_lab = $_GET['id_lab'];
// Delete user row from table based on given id

$hasil = mysqli_query($mysqli, "DELETE FROM tb_lab WHERE id_lab = $id_lab");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../dashboard.php?page=ruangan");
