<?php
// include config connection file
include_once("../../koneksi.php");
include('session.php');

// Get id from URL to delete that user
$id_agenda = @$_GET['id_agenda'];
$sql = "SELECT gambar FROM tb_agenda WHERE tb_agenda='$tb_agenda'";
$result = mysqli_query($mysqli, $sql);
if ($result->num_rows ==  0) {
    $row = mysqli_fetch_assoc($result);
    if (file_exists('uploads/' . $filename)) {
        unlink('uploads/' . $filename);
        echo 'File ' . $row['gambar'] . ' has been deleted';
    } else {
        echo 'Could not delete ' . $row['gambar'] . ', file does not exist';
    }
}
// Delete user row from table based on given id

$result = mysqli_query($mysqli, "DELETE FROM tb_agenda WHERE id_agenda=$id_agenda");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../dashboard.php?page=agenda");
