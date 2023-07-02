<?php
// include config connection file
include "../../koneksi.php";

// Get id from URL to delete that user
$id_sejarah = $_GET['id_sejarah'];
// Delete user row from table based on given id

$hasil = mysqli_query($mysqli, "DELETE FROM tb_sejarah WHERE id_sejarah = $id_sejarah");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../dashboard.php?page=about");
