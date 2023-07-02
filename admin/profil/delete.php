<?php
// include config connection file
include_once("../../koneksi.php");
include('session.php');

// Get id from URL to delete that user
$id_profil = @$_GET['id_profil'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM tb_profil WHERE id_profil=$id_profil");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../dashboard.php?page=profil");
