<?php
// include config connection file
include "../../koneksi.php";

// Get id from URL to delete that user
$id_footer = $_GET['id_footer'];
// Delete user row from table based on given id

$hasil = mysqli_query($mysqli, "DELETE FROM tb_footer WHERE id_footer = $id_footer");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../dashboard.php?page=footer");
