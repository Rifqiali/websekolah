<?php
$siswa = mysqli_query($mysqli, 'SELECT count(*) jml FROM tb_siswa');
$row_siswa = mysqli_fetch_assoc($siswa);
$guru = mysqli_query($mysqli, 'SELECT count(*) jml FROM tb_guru');
$row_guru = mysqli_fetch_assoc($guru);
$ruangan = mysqli_query($mysqli, 'SELECT count(*) jml FROM tb_ruangan');
$row_ruangan = mysqli_fetch_assoc($ruangan);
$lab = mysqli_query($mysqli, 'SELECT count(*) jml FROM tb_lab');
$row_lab = mysqli_fetch_assoc($lab); ?>
<div class="banners">
    <div class="banner-container">
        <div class="banner">
            <div class="banner-title">
                <h5>Jumlah Siswa:</h5>
            </div>
            <div class="banner-count">
                <h5><?= $row_siswa['jml'] ?></h5>
            </div>
        </div>
        <div class="banner">
            <div class="banner-title">
                <h5>Jumlah Guru:</h5>
            </div>
            <div class="banner-count">
                <h5><?= $row_guru['jml'] ?></h5>
            </div>
        </div>
        <div class="banner">
            <div class="banner-title">
                <h5>Jumlah Ruangan:</h5>
            </div>
            <div class="banner-count">
                <h5><?= $row_ruangan['jml'] ?></h5>
            </div>
        </div>
        <div class="banner">
            <div class="banner-title">
                <h5>Jumlah Lab:</h5>
            </div>
            <div class="banner-count">
                <h5><?= $row_lab['jml'] ?></h5>
            </div>
        </div>
    </div>
</div>