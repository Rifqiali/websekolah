 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">
         <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'users':
                        include "users/index.php";
                        break;
                    case 'artikel':
                        include "artikel/index.php";
                        break;
                    case 'about':
                        include "about/index.php";
                        break;
                    case 'menu':
                        include "menu/index.php";
                        break;
                    case 'home':
                        include "home/index.php";
                        break;
                    case 'gallery':
                        include "gallery/index.php";
                        break;
                    case 'agenda':
                        include "agenda/index.php";
                        break;
                    case 'siswa':
                        include "siswa/index.php";
                        break;
                    case 'profil':
                        include "profil/index.php";
                        break;
                    case 'fasilitas':
                        include "fasilitas/index.php";
                        break;
                    case 'prestasi':
                        include "prestasi/index.php";
                        break;
                    case 'guru':
                        include "guru/index.php";
                        break;
                    case 'ruangan':
                        include "ruangan/index.php";
                        break;
                    case 'lab':
                        include "lab/index.php";
                        break;
                    case 'footer':
                        include "footer/index.php";
                        break;
                    case 'sejarah':
                        include "sejarah/index.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else {
                include "home/index.php";
            }

            ?>
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->