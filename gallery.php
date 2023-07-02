<?php
include "koneksi.php";

$gallery = mysqli_query($mysqli, "SELECT * FROM tb_gallery ");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/Scss/main.css" />
  
  <title>Gallery</title>
</head>

<body>
  <!--start head-->
  <header>
    <?php include 'template-FE/navbar.php' ?>
    <!--navbar end-->
    <!--jumbotron start-->
    <?php include 'template-FE/jumbotron.php' ?>
    <!--jumbotron end-->
  </header>
  <!--end head-->
  <!--start main-->
  <main>
    <div class="container container-fluid">
      <h1>Gallery</h1>
      <div class="gallery-container" id="gallery-container">
        <?php while ($data = mysqli_fetch_array($gallery)) { ?>
          <div class="gallery-item">
            <img src="admin/gallery/image/<?= $data['gambar'] ?> " alt="Image 1">
          </div>
        <?php } ?>
      </div><br>
      <?php include 'template-FE/button-back.php'?>
  </main>
  <!--start footer-->
  <?php
  include 'template-FE/footer.php';
  ?>

  <!--end footer-->
  <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="../asstes/js/gallery.js"></script>
</body>

</html>