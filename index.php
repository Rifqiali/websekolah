<?php
include "koneksi.php";

$artikel = mysqli_query($mysqli, "SELECT tb_artikel.*, tb_users.nama FROM tb_artikel
INNER JOIN tb_users ON tb_artikel.id_users = tb_users.id_users 
ORDER BY id_artikel DESC");

$agenda = mysqli_query($mysqli, "SELECT * FROM tb_agenda
ORDER BY id_agenda DESC");

$allGallery = mysqli_query($mysqli, "SELECT * FROM tb_gallery");

$batas = 12;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
$previous = $halaman - 1;
$next = $halaman + 1;
$jumlah_data = $allGallery->num_rows;
$total_halaman = ceil($jumlah_data / $batas);

$new_gallery = mysqli_query($mysqli, "SELECT * FROM tb_gallery
LIMIT $halaman_awal, $batas");

$query    = mysqli_query($mysqli, "SELECT * FROM tb_gallery ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="assets/images/fav-icon.ico">
  <link rel="stylesheet" href="./assets/Scss/main.css" />
  <title>SMAN RANCAKALONG</title>
</head>

<body>
  <!--start head-->
  <header>

    <?php include 'template-FE/navbar.php' ?>
    <!--navbar end-->

    <!--jumbotron start-->
    <section class="section-jumbotron">
      <div class="jumbotron" loading="lazy">
        <div class="container container-fluid">
          <div class="wrapper">
            <div class="wrapper-title">
              <h1 class="display-4">Selamat Datang di <span>SMAN Rancakalong</span></h1>
              <p class="lead">
                <a class="btn btn-primary btn-lg button" href="app/about/index.html" role="button">Contact Us</a>
              </p>
            </div>
            <div class="collage">
              <img src="assets/images/collage.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--jumbotron end-->
  </header>
  <!--end head-->

  <!--start main-->
  <main class="main-wrapper">

    <!--banner start-->
    <?php include 'template-FE/banner.php' ?>
    <!--banner end-->


    <!--profile card start-->
    <section class="card-profile">
      <div class="container">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="assets/images/profil.jpg" class="img-fluid " alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h2 class="card-title">Sekolah Kita</h2>
                <p class="card-text">Di Sekolah Kita, kami percaya bahwa setiap anak memiliki potensi tak terbatas. Kami
                  berdedikasi untuk merangsang kreativitas, penemuan, dan kepemimpinan melalui pendekatan pembelajaran
                  yang holistik. Kurikulum kami mencakup mata pelajaran yang luas, mulai dari ilmu pengetahuan hingga
                  seni, serta program pengembangan karakter yang kuat.</p>
                <div class="button-more">
                  <a class="btn btn-primary button" href="app/profile/index.html">
                    <p>More</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--profile card end-->

    <!--profile table start-->
    <section class="table-profile">
      <div class="container container-fluid">
        <div class="table-container" loading="lazy">
          <div class="table-main-container">
            <div class="table-main-title">
              <h1>Profile Sekolah Kita</h1>
            </div>
            <div class="table-main-text">
              <p>Di samping adalah profil sekolah kami secara
                keseluruhan dari mulai bagian depan hingga seluruh
                fasilitas yang terdapat disekolah kami.</p>
            </div>
            <div class="button-table-profile">
              <a class="btn btn-primary button button-table" href="profil.php">
                <p>More</p>
              </a>
            </div>
          </div>
          <div class="table-submain-container">
            <div class="table-feature-content">
              <div class="feature-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                </svg>
              </div>
              <div class="feature-title">
                <h3>Fasilitas</h3>
              </div>
              <div class="feature-text">
                <p>Lorem ipsum dolor sit amet adipcing
                  aqua lorem ipsum.</p>
              </div>
            </div>
            <a class="table-feature-content" href="profil.php#map">
              <div class="feature-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>

              </div>
              <div class="feature-title" href="profil.php">
                <h3>Lokasi</h3>
              </div>
              <div class="feature-text">
                <p>Lokasi Sekolah Kita.</p>
              </div>
            </a>
            <a class="table-feature-content" href="profil.php#sejarah">
              <div class=" feature-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                </svg>
              </div>
              <div class="feature-title">
                <h3>Sejarah</h3>
              </div>
              <div class="feature-text">
                <p>Sejarah Sekolah Kita </p>
              </div>
            </a>
            <div class="table-feature-content">
              <div class="feature-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>
              </div>
              <div class="feature-title">
                <h3>Prestasi</h3>
              </div>
              <div class="feature-text">
                <p>Lorem ipsum dolor sit amet adipcing
                  aqua lorem ipsum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--profile table end-->


    <!--artikel start-->
    <section class="artikel">
      <div class="container container-fluid">
        <div class="artikel-header">
          <div class="artikel-title">
            <h5>ARTIKEL</h5>
          </div>
          <div class="search-bar">
            <form action="index.php" method="GET">
              <input type="text" name="searchInput" placeholder="Cari artikel..." onkeyup="search()" id="search-item">
            </form>
          </div>
        </div>
        <div class="content-container">
          <div class="content-artikel-container ">
            <?php
            while ($data = mysqli_fetch_array($artikel)) { ?>
              <div class="artikel-content">
                <div class="artikel-content-container" id="artikel-content-container">
                  <div class="artikel-card-image">
                    <img width="150px" src="admin/artikel/image/<?= $data['cover'] ?>" alt="gambar artikel">
                  </div>
                  <div class="artikel-card-title">
                    <h5>
                      <?= $data['judul_artikel'] ?>
                    </h5>
                  </div>
                  <div class="artikel-card-text">
                    <p>
                      <?= substr($data['content'], 0, 75) . '...' ?>
                    </p>
                    <a href="detail_artikel.php?id=<?= $data['id_artikel'] ?>">Lanjutkan membaca</a>
                  </div>
                  <div class="artikel-card-time">
                    <p><i>
                        <?= date('d-M-Y', strtotime($data['waktu_artikel'])) ?>
                      </i></p>
                  </div>
                  <div class="artikel-card-created">
                    <p><i>
                        <?= $data['nama'] ?>
                      </i></p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>

          <div class="agenda-container">
            <h5>AGENDA</h5>
            <?php while ($data = mysqli_fetch_array($agenda)) { ?>
              <div class="agenda-content-container">
                <div class="agenda-card-image">
                  <img width="150px" src="admin/agenda/image/<?= $data['gambar'] ?>" alt="gambar artikel">
                </div>
                <div class="agenda-content">
                  <div class="agenda-card-time">
                    <p><i>
                        <?= date('d-M-Y', strtotime($data['waktu'])) ?>
                      </i></p>
                  </div>
                  <div class="agenda-card-title">
                    <h5>
                      <?= $data['nama_acara'] ?>
                    </h5>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>

    </section>

    <script src="search.js"></script>

    <!--artikel end-->

    <section class="gallery" id="galleryy">
      <div class="container container-fluid">
        <h1>Gallery</h1>
        <div class="gallery-container" id="gallery-container">
          <?php while ($gallery = mysqli_fetch_array($new_gallery)) { ?>
            <div class="gallery-item">
              <img src="admin/gallery/image/<?= $gallery['gambar'] ?> " alt="Image 1">
            </div>
          <?php } ?>
    </section>  
    <nav class="blog-pagination">
  <ul class="pagination justify-content-center">
    <?php if ($halaman > 1) { ?>
      <li class="page-item">
        <a class="page-link" href="?halaman=<?= $previous ?>#galleryy">Sebelumnya</a>
      </li>
    <?php } ?>
    <?php
    for ($x = max(1, $halaman - 2); $x <= min($halaman + 2, $total_halaman); $x++) {
      ?>
      <li class="page-item"><a class="page-link" href="?halaman=<?= $x ?>#galleryy"><?= $x; ?></a></li>
    <?php
    }
    ?>
    <?php if ($halaman < $total_halaman) { ?>
      <li class="page-item">
        <a class="page-link" href="?halaman=<?= $next ?>#galleryy">Selanjutnya</a>
      </li>
    <?php } ?>
  </ul>
</nav>

  </main>
  <!--end main-->

  <!--start footer-->
  <?php
  include 'template-FE/footer.php';
  ?>
  <!--end footer-->
  <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="../asstes/js/gallery.js"></script>
  <script src="../asstes/js/utilitas.js"></script>
  <script src="../asstes/js/.js"></script>

</body>

</html>