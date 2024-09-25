<?php
$sesi = $_SESSION['MEMBER'];
?>

<div class="top-bar bg-dark py-2 py-md-0" id="top-bar">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6">
        <div class="top-bar-left text-white text-md-left text-sm-center">
          <i class="fas fa-map-marker-alt"></i>
          <span class="ml-2">Jalan Inajadulu, 14252</span>
        </div>
      </div>

      <div class="col-lg-4 ml-lg-auto col-md-6">
        <ul class="list-inline list-unstyled header-socials text-md-right text-sm-center">
          <li class="list-inline-item"><a href="#!"> <i class="fab fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#!"> <i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#!"> <i class="fab fa-pinterest-p"></i></a></li>
          <li class="list-inline-item"><a href="#!"> <i class="fab fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="logo-bar d-none d-md-block d-lg-block bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div class="logo d-none d-lg-block">
          <!-- Brand -->
          <a class="navbar-brand js-scroll-trigger" href="index.php?hal=home">
            <h2 class="mb-0">Penerimaan Mahasiswa Baru</h2>
          </a>
        </div>
      </div>

      <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12 col-md-12 justify-content-md-center">
        <div class="top-info-block d-inline-flex">
          <div class="icon-block">
            <i class="ti-mobile"></i>
          </div>
          <div class="info-block">
            <h5 class="font-weight-500">+6285743695282</h5>
            <p>Call Free</p>
          </div>
        </div>

        <div class="top-info-block d-inline-flex">
          <div class="icon-block">
            <i class="ti-email"></i>
          </div>
          <div class="info-block">
            <h5 class="font-weight-500">farisghina51@gmail.com</h5>
            <p>Email Us</p>
          </div>
        </div>
        <div class="top-info-block d-inline-flex">
          <div class="icon-block">
            <i class="ti-time"></i>
          </div>
          <div class="info-block">
            <h5 class="font-weight-500">Senin-Jumat 8:00-14.00 </h5>
            <p>Sabtu Minggu Tutup</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main-navigation" id="mainmenu-area">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable rounded-radius">

      <a class="navbar-brand d-lg-none d-block" href="index.php?hal=home">
        <h4 class="h3 mb-0">Penerimaan Mahasiswa Baru</h4>
      </a>
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>

      <!-- Collapse -->
      <div class="collapse navbar-collapse has-dropdown" id="navbarCollapse">
        <!-- Links -->
        <ul class="navbar-nav ">
            <a class="nav-link" href="index.php?hal=home" id="navbarWelcome" role="button"
              aria-haspopup="true" aria-expanded="false">
              Home
            </a>
          <li class="nav-item ">
            <a href="index.php?hal=about" class="nav-link js-scroll-trigger">
              About
            </a>
          </li>
          <li class="nav-item ">
            <a href="index.php?hal=jurusan" class="nav-link js-scroll-trigger">
              Program Studi
            </a>
          </li>
          <li class="nav-item ">
            <a href="index.php?hal=daya_tampung" class="nav-link js-scroll-trigger">
              Informasi Program Studi
            </a>
          </li>
          <?php
            if(!isset($sesi)){?>
            <li class="nav-item ">
              <a href="index.php?hal=siswa" class="nav-link js-scroll-trigger">
                Jurnal Pendaftaran
              </a>
            </li>
            <li><a href="index.php?hal=siswa_form" class="btn btn-white btn-circled" style="margin-right: 15px;">Daftar</a></li>
            <li><a href="login_form.php" class="btn btn-white btn-circled">Login</a></li>
            <?php } 
            else {?> 
                <li class="nav-item ">
                    <a href="index.php?hal=siswa_form" class="nav-link js-scroll-trigger">
                    Pendaftaran
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#!" id="navbarWelcome" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Informasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarWelcome">
                    <li><a class="dropdown-item" href="index.php?hal=siswa">Jurnal Pendaftaran</a></li>
                    <li><a class="dropdown-item" href="index.php?hal=panitia">Panitia Pendaftaran</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#!" data-toggle="dropdown"><?= $sesi['fullname'] ?> <i
                            class="fa fa-angle-down"></i></a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?hal=member_profile">Profile</a></li>
                        <?php
                        if($sesi['role'] == 'admin'){ //---------hanya untuk admin----------
                        ?>
                        <li><a class="dropdown-item" href="index.php?hal=member">Kelola User</a></li>
                        <?php } ?>

                        <li><a class="dropdown-item" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
        </ul>
      </div> <!-- / .navbar-collapse -->
    </nav>
  </div> <!-- / .container -->
</div>