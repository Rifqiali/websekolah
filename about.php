<?php
include "koneksi.php";
$about = mysqli_query($mysqli, "SELECT * FROM tb_about ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="assets/images/fav-icon.ico">
  <link rel="stylesheet" href="assets/Scss/main.css" />
  <title>About</title>
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
    <main class="container container-fluid btn-mid">
      <div class="about-title">
        <h1>FOUNDER</h1>
      </div>
      <div class="about">
      <?php while ($data = mysqli_fetch_array($about)) { ?>
      <div class="about-card">
        <div class="about-container">
          <div class="about-card-img">
            <img src="./admin/about/image/<?= $data['gambar'] ?>" alt="">
          </div>
          <div class="about-card-content">
              <h2>
                <?= $data['nama'] ?>
              </h2>
              <a href="#" class="button-about">
                <span class="about-material-symbols-outlined">
                  <?= $data['nim'] ?><br>
                  <?= $data['job'] ?>
                </span>
              </a>
            </div>
          </div>
          </div>
          <?php } ?>
        </div>
        
        <?php include 'template-FE/button-back.php'?>
      </main>
  <!--start footer-->
  <?php
  include 'template-FE/footer.php';
  ?>

  <!--end footer-->
  <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>