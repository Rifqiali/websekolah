<nav class="navbar navbar-expand-lg fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">SMAN Rancakalong</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-targe="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php
                include "./koneksi.php";
                $query = mysqli_query($mysqli, "SELECT * FROM tb_menu");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <li class="nav-link">
                        <a class="nav-item " aria-current="page" href="<?= $row['url']; ?>"><?= $row['nama_menu'] ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>

    </div>
</nav>

<script src="./assets/js/navbar.js"></script>   