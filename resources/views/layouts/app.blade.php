<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="html 5 template">
  <meta name="author" content="">
  <title>IBI NTB</title>

  <link rel="shortcut icon" href="../assets/img/logo.png">
  <link rel="stylesheet" href="../assets/css/plugins.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/colors/purple.css">
  <link rel="preload" href="../assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
  @livewireStyles
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="/">
              <img class="logo-light" src="../assets/img/logo-text.png" alt="" style="height:70px" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">IBI NTB</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link " href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="/profil/sambutan">Sambutan Ketua</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="/profil/pengurus">Pengurus</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="/profil/sejarah">Sejarah Singkat</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="/profil/visimisi">Visi Misi</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="/profil/atribut">Atribut IBI</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="/profil/cabang">Cabang</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/kegiatan">Kegiatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-red" href="/pengumuman">Pengumuman</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/download">Download</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/kontak">Kontak</a>
                </li>
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
        </div>
        <!-- /.container -->
      </nav>
    </header>
    <!-- /header -->
    @yield('content')

  </div>
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-4">
          <div class="widget">
            <img class="mb-4" src="../assets/img/logo.png" style="height: 150px" alt="" />
            <p class="mb-4">© 2022 IBI NTB. <br class="d-none d-lg-block" />All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="https://www.instagram.com/ibi_ntb/" target="_blank"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-4">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Lokasi & Kontak</h4>
            <address class="pe-xl-15 pe-xxl-17">Jl. Kesra Raya No.82, Tj. Karang Permai, Kec. Sekarbela, Kota
              Mataram, NTB</address>
            <a href="mailto:ibintb@gmail.com">ibintb@gmail.com</a><br /> 081999923568
          </div>
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Link Terkait</h4>
            <div class="row">
              <div class="col-md-12">
                <ul class="list-unstyled  mb-0">
                  <li><a href="https://ibi.or.id/id/" target="_blank" data-hover="Bidan Delima">IBI
                      Indonesia</a></li>
                  <li><a href="https://www.internationalmidwives.org/" target="_blank" data-hover="ICM Website">ICM
                      Website</a></li>
                  <li><a href="https://www.kemkes.go.id/" target="_blank"
                      data-hover="Kementerian Kesehatan">Kementerian
                      Kesehatan</a></li>
                  <li><a href="https://www.bkkbn.go.id/ target="_blank" data-hover="BKKBN">BKKBN</a></li>
                  <li><a href="http://www.bidan-delima.org/" target="_blank" data-hover="Bidan Delima">Bidan
                      Delima</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  @livewireScripts
  <script src="../assets/js/plugins.js"></script>
  <script src="../assets/js/theme.js"></script>
</body>

</html>
