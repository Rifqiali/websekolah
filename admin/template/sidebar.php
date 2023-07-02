<?php
if (isset($_GET['page'])) {
  $page  = $_GET['page'];
} ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="./artikel/admin/dashboard.php?page=beranda" class="brand-link">
    <span class="brand-text font-weight-light">Admin Panel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block"><?= isset($_SESSION['username']) ? $_SESSION['username'] : 'GUEST'; ?></a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="./dashboard.php?page=home" class="nav-link  <?php if ($page == 'home') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Beranda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=users" class="nav-link <?php if ($page == 'users') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Users
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=artikel" class="nav-link  <?php if ($page == 'artikel') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-pen"></i>
            <p>
              Artikel
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=about" class="nav-link  <?php if ($page == 'about') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              About
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=menu" class="nav-link  <?php if ($page == 'menu') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Menu
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=agenda" class="nav-link  <?php if ($page == 'agenda') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Agenda
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=gallery" class="nav-link  <?php if ($page == 'gallery') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-pen"></i>
            <p>
              Gallery
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=siswa" class="nav-link <?php if ($page == 'siswa') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=profil" class="nav-link <?php if ($page == 'profil') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Profil
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=fasilitas" class="nav-link <?php if ($page == 'fasilitas') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Fasilitas
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=prestasi" class="nav-link <?php if ($page == 'prestasi') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-pen"></i>
            <p>
              Prestasi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=guru" class="nav-link <?php if ($page == 'guru') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Guru
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=ruangan" class="nav-link <?php if ($page == 'ruangan') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Ruangan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=lab" class="nav-link <?php if ($page == 'lab') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Lab
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=footer" class="nav-link <?php if ($page == 'footer') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Footer
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./dashboard.php?page=sejarah" class="nav-link <?php if ($page == 'sejarah') { ?>active<?php } ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Sejarah
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="./signout.php" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
              Keluar
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>