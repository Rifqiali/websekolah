<?php
include "koneksi.php";
$no = 1;

$allArtikel = mysqli_query( $mysqli, "SELECT tb_artikel.*, tb_users.nama FROM tb_artikel
INNER JOIN tb_users ON tb_artikel.id_users = tb_users.id_users 
ORDER BY id_artikel DESC
" );

$batas         = 6;
$halaman       = isset( $_GET[ 'halaman' ] ) ? (int) $_GET[ 'halaman' ] : 1;
$halaman_awal  = ( $halaman > 1 ) ? ( $halaman * $batas ) - $batas : 0;
$previous      = $halaman - 1;
$next          = $halaman + 1;
$jumlah_data   = $allArtikel->num_rows;
$total_halaman = ceil( $jumlah_data / $batas );

$new_artikel = mysqli_query( $mysqli, "SELECT tb_artikel.*, tb_users.nama FROM tb_artikel
INNER JOIN tb_users ON tb_artikel.id_users = tb_users.id_users 
LIMIT $halaman_awal, $batas" );


$query = mysqli_query( $mysqli, "SELECT * FROM tb_artikel ORDER BY id DESC" );
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="assets/images/fav-icon.ico">
  <link rel="stylesheet" href="assets/Scss/main.css" />
  <title>Artikel</title>
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

    <section class="artikel margin-bot ">
      <div class="container container-fluid">
        <div class="artikel-header">
          <div class="artikel-title">
            <h5>ARTIKEL</h5>
          </div>
          <div class="search-bar">
            <form action="details.php" method="GET">
              <input type="text" name="searchInput" placeholder="Cari artikel..." onkeyup="search()" id="search-item">
            </form>
          </div>
        </div>
        <div class="content-container">
          <div class="content-artikel-container">
            <?php
            while ( $data = mysqli_fetch_array( $new_artikel ) ) { ?>
              <div class="artikel-content">
                <div class="artikel-content-container line-bot-artikel " id="artikel-content-container">
                  <div class="artikel-card-image">
                    <img width="150px" src="admin/artikel/image/<?= $data[ 'cover' ] ?>" alt="gambar artikel">
                  </div>
                  <div class="artikel-card-title">
                    <h5>
                      <?= $data[ 'judul_artikel' ] ?>
                    </h5>
                  </div>
                  <div class="artikel-card-text">
                    <p>
                      <?= substr( $data[ 'content' ], 0, 100 ) . '...' ?>
                    </p>
                    <a href="detail_artikel.php?id=<?= $data[ 'id_artikel' ] ?>">Lanjutkan membaca</a>
                  </div>
                  <div class="artikel-card-time">
                    <p><i>
                        <?= date( 'd-M-Y', strtotime( $data[ 'waktu_artikel' ] ) ) ?>
                      </i></p>
                  </div>
                  <div class="artikel-card-created">
                    <p><i>
                        <?= $data[ 'nama' ] ?>
                      </i></p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <div class="container container-fluid">

      <nav class="blog-pagination">
        <ul class="pagination justify-content-center">
          <li class="page-item">
          <a class="page-link" <?php if ( $halaman > 1 ) {
            echo "href='?halaman=$previous'";
          } ?>>Sebelumnya</a>
        </li>
        <?php
        for ( $x = 1; $x <= $total_halaman; $x++ ) {
          ?>
          <li class="page-item"><a class="page-link" href="?halaman=<?= $x ?>"><?= $x; ?></a></li>
          <?php
          }
          ?>
        <li class="page-item">
          <a class="page-link" <?php if ( $halaman < $total_halaman ) {
            echo "href='?halaman=$next'";
          } ?>>Selanjutnya</a>
        </li>
      </ul>
    </nav>
    <?php include 'template-FE/button-back.php' ?>
  </div>
    <script src="search.js"></script>
  </main>
  <!--start footer-->
  <?php
  include 'template-FE/footer.php';
  ?>

  <!--end footer-->
  <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>