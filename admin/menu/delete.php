<?php
// include config connection file
include_once("../../koneksi.php");
include('session.php');

// Get id from URL to delete that user
$id_menu = @$_GET['id_menu'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM tb_menu WHERE id_menu=$id_menu");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../dashboard.php?page=menu");
