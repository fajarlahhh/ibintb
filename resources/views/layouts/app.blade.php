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
              <h3 class="text-white fs-30 mb-0">Sandbox</h3>
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
                    <li class="nav-item"><a class="dropdown-item" href="/profil/keanggotaan">Keanggotaan</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Bidan</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="/bidan/definisi">Definisi</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="/bidan/filosofi">Filosofi</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="/bidan/pendidikan">Pendidikan</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/kegiatan">Kegiatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="/kontak">Kontak Kami</a>
                </li>
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
          <h3 class="text-white fs-30 mb-0">Sandbox</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
          <div class="widget mb-8">
            <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your
              business.</p>
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Contact Info</h4>
            <address> Moonshine St. 14/05 <br /> Light City, London </address>
            <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled">
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Follow Us</h4>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.offcanvas -->
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
          <form class="search-form w-100">
            <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
          </form>
          <!-- /.search-form -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.offcanvas -->
    </header>
    <!-- /header -->
    @yield('content')

  </div>

  <footer class="bg-dark">
    <div class="container pb-13 pb-md-15">
      <div class="text-inverse py-md-18 mx-md-5 mt-n15 mt-lg-0">
        <div class="row gy-6 gy-lg-0">
          <div class="col-md-4 col-lg-3">
            <div class="widget">
              <img class="mb-4" src="../assets/img/logo.png" style="height: 150px" alt="" />
              <p class="mb-4">© 2022 IBI NTB. <br class="d-none d-lg-block" />All rights reserved.</p>
              <nav class="nav social social-white">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
              </nav>
              <!-- /.social -->
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
          <div class="col-md-4 col-lg-3">
            <div class="widget">
              <h4 class="widget-title text-white mb-3">Lokasi & Kontak</h4>
              <address class="pe-xl-15 pe-xxl-17">Jl. Kesra Raya No.82, Tj. Karang Permai, Kec. Sekarbela, Kota
                Mataram, NTB</address>
              <a href="mailto:ibintb@gmail.com">ibintb@gmail.com</a><br /> 085847720198
            </div>
            <!-- /.widget -->
          </div>
          <!-- /column -->
          <div class="col-md-4 col-lg-6">
            <div class="widget">
              <h4 class="widget-title text-white mb-3">Link Terkait</h4>
              <hr style="margin: 0px">
              <div class="row">
                <div class="col-md-12">
                  <ul class="list-unstyled  mb-0">
                    <li><a href="https://ibi.or.id/id/" target="_blank" data-hover="Bidan Delima">IBI
                        Indonesia</a></li>
                    <li><a href="http://www.internationalmidwives.org/" target="_blank" data-hover="ICM Website">ICM
                        Website</a></li>
                    <li><a href="http://www.depkes.go.id/" target="_blank"
                        data-hover="Kementerian Kesehatan">Kementerian
                        Kesehatan</a></li>
                    <li><a href="http://www.bkkbn.go.id/" target="_blank" data-hover="BKKBN">BKKBN</a></li>
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
