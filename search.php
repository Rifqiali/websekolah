<?php
include 'koneksi.php';

$searchInput = $_GET['searchInput'];
$query = "SELECT * FROM tb_artikel WHERE judul_artikel LIKE '%$searchInput%'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<h3>" . $row['judul_artikel'] . "</h3>";
    echo "<p>" . $row['content'] . "</p>";
    echo "<hr>";
  }
} else {
  echo "Tidak ada hasil ditemukan.";
}

// Tutup koneksi ke database
$mysqli->close();
