<?php
include "koneksi.php";
$id_artikel = $_GET["id"];
$artikel = mysqli_query($mysqli, "SELECT tb_artikel.*, tb_users.nama FROM tb_artikel
INNER JOIN tb_users ON tb_artikel.id_users = tb_users.id_users 
WHERE tb_artikel.id_artikel = $id_artikel");

if (mysqli_num_rows($artikel) > 0) {
  $data = mysqli_fetch_assoc($artikel);
  $judul = $data["judul_artikel"];
  $tanggal = $data["waktu_artikel"];
  $penulis = $data["nama"];
  $content = $data["content"];
  $cover = $data["cover"];

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="assets/images/fav-icon.ico">
    <link rel="stylesheet" href="assets/Scss/main.css" />
    <title>Details</title>
  </head>

  <body>
    <!--start head-->
    <!--start main-->
    <main>
      <div class="container container-fluid btn-mid">
        <div class="section-artikel-content-container">
          <div class="section-artikel-content">
            <div class="section-artikel-card-image">
              <img src="admin/artikel/image/<?= $cover ?>" alt="gambar artikel"><br>
            </div>
            <div class="section-artikel-card-title">
              <h1><?= $judul ?></h1>
            </div>
            <div class="section-artikel-card-time">
              <p><i><?= date('d-M-Y', strtotime($tanggal)) ?></i></p>
            </div>
            <div class="section-artikel-card-created">
              <p><i>- <?= $penulis ?> -</i></p><br>
            </div>
            <div class="section-artikel-card-text">
              <p><?= $content ?></p>
            </div>
          </div>
        </div>
        <a class="btn btn-primary btn-back-artikel" href="./details.php">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
    </svg>
</a>
      </div>
      </div>
    </main>

    <!--start footer-->
    <?php
    include 'template-FE/footer.php';
    ?>

    <!--end footer-->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>

  </html>
<?php
} ?>