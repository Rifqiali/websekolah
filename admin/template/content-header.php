  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'home':
                        include "home/content-header.php";
                        break;
                    case 'users':
                        include "users/content-header.php";
                        break;
                    case 'artikel':
                        include "artikel/content-header.php";
                        break;
                    case 'about':
                        include "about/content-header.php";
                        break;
                    case 'menu':
                        include "menu/content-header.php";
                        break;
                    case 'gallery':
                        include "gallery/content-header.php";
                        break;
                    case 'agenda':
                        include "agenda/content-header.php";
                        break;
                    case 'siswa':
                        include "siswa/content-header.php";
                        break;
                    case 'profil':
                        include "profil/content-header.php";
                        break;
                    case 'fasilitas':
                        include "fasilitas/content-header.php";
                        break;
                    case 'prestasi':
                        include "prestasi/content-header.php";
                        break;
                    case 'guru':
                        include "guru/content-header.php";
                        break;
                    case 'ruangan':
                        include "ruangan/content-header.php";
                        break;
                    case 'lab':
                        include "lab/content-header.php";
                        break;
                    case 'footer':
                        include "footer/content-header.php";
                        break;
                    case 'sejarah':
                        include "sejarah/content-header.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else {
                include "home.php";
            }

            ?>

      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->