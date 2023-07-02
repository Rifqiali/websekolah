    <!-- FOOTER -->

    <footer class="w-100 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5 gap-1">
                <div class="col-lg-4 col-md-6 gap-2">
                    <?php 
                        include "./koneksi.php";
                        $footer = mysqli_query($mysqli, "SELECT * FROM tb_footer");
                         while ($row = mysqli_fetch_array($footer)) { 
                        ?>
                    <h5 class="h1 text-white footer-brand"><?=$row['judul_footer']?></h5>
                    <p class="small mb-0"><?=$row['konten_footer']?></p>
                    <p class="h6 mt-1 text-brand"><?=$row['copyright']?></p>
                    <?php } ?>
                </div>

                <div class="col-lg-2 col-md-6 ">
                    <h5 class="text-white mb-3">JELAJAH</h5>
                    <ul class="list-unstyled footer-items">
                    <?php
                    include "./koneksi.php";
                    $query = mysqli_query($mysqli, "SELECT * FROM tb_menu");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <li class="nav-link mb-2">
                        <a class="nav-item text-capitalize" aria-current="page" href="<?= $row['url']; ?>"><?= $row['nama_menu'] ?></a>
                    </li>
                    <?php } ?>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                  <h5 class="h1 text-white footer-brand mb-3">AGENDA</h5>
                        <?php 
                        include "./koneksi.php";
                        $agenda = mysqli_query($mysqli, "SELECT * FROM tb_agenda");
                         while ($row = mysqli_fetch_array($agenda)) { 
                        ?>
                  <ul class="list-unstyled footer-items list-group list-group-numbered">
                        <li class="nav-link">
                        <a class="nav-item "><?= $row['nama_acara'] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                  <h5 class="h1 text-white footer-brand mb-3">ARTIKEL</h5>
                  <ul class="list-unstyled footer-items">
                        <?php 
                        include "./koneksi.php";
                        $artikel = mysqli_query($mysqli, "SELECT * FROM tb_artikel LIMIT 2");
                         while ($row = mysqli_fetch_array($artikel)) { 
                        ?>
                        <li class="nav-link">
                        <a class="nav-item hover-text-footer" href="./detail_artikel.php?id=<?=$row['id_artikel']?>" ><?= $row['judul_artikel'] ?></a>
                        </li>
                        <li>
                        <p><?= substr($row['content'], 0, 50) . '...' ?></p><br>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                
            </div>
        </div>
            
    </footer>