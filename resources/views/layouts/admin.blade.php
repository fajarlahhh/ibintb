<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IBI NTB - Admin Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="shortcut icon" href="/assets/img/logo.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets-admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/assets-admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/assets-admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets-admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/assets-admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/assets-admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/assets-admin/plugins/summernote/summernote-bs4.min.css">
    @livewireStyles
</head>

@php
$currentUrl = '/' . Request::path();
@endphp

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> --}}


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="/assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Dashboard IBI NTB</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="/admin-area" class="nav-link @if (strpos($currentUrl, '/admin-area') === 0 && strlen($currentUrl) == strlen('/admin-area')) active @endif">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin-area/agenda"
                                class="nav-link @if (strpos($currentUrl, '/admin-area/agenda') === 0) active @endif">
                                <i class="nav-icon fas fa-calendar"></i>
                                <p>
                                    Agenda
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin-area/carousel"
                                class="nav-link @if (strpos($currentUrl, '/admin-area/carousel') === 0) active @endif">
                                <i class="nav-icon fas fa-images"></i>
                                <p>
                                    Carousel
                                </p>
                            </a>
                        </li>
                        <li class="nav-item @if (strpos($currentUrl, '/admin-area/datamaster') === 0) menu-open @endif">
                            <a href="#" class="nav-link @if (strpos($currentUrl, '/admin-area/datamaster') === 0) active @endif">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Data Master
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin-area/datamaster/kategori"
                                        class="nav-link @if (strpos($currentUrl, '/admin-area/datamaster/kategori') === 0) active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kategori</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/admin-area/file" class="nav-link @if (strpos($currentUrl, '/admin-area/file') === 0) active @endif">
                                <i class="nav-icon fa fa-file"></i>
                                <p>
                                    File
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin-area/kegiatan"
                                class="nav-link @if (strpos($currentUrl, '/admin-area/kegiatan') === 0) active @endif">
                                <i class="nav-icon fa fa-rss"></i>
                                <p>
                                    Kegiatan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin-area/pengumuman"
                                class="nav-link @if (strpos($currentUrl, '/admin-area/pengumuman') === 0) active @endif">
                                <i class="nav-icon fa fa-bell"></i>
                                <p>
                                    Pengumuman
                                </p>
                            </a>
                        </li>
                        <li class="nav-item @if (strpos($currentUrl, '/admin-area/profil') === 0) menu-open @endif">
                            <a href="#" class="nav-link @if (strpos($currentUrl, '/admin-area/profil') === 0) active @endif">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p>
                                    Profil
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin-area/profil/sambutanketua"
                                        class="nav-link @if (strpos($currentUrl, '/admin-area/profil/sambutanketua') === 0) active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sambutan Ketua</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin-area/profil/pengurus"
                                        class="nav-link @if (strpos($currentUrl, '/admin-area/profil/pengurus') === 0) active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pengurus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin-area/profil/sejarahsingkat"
                                        class="nav-link @if (strpos($currentUrl, '/admin-area/profil/sejarahsingkat') === 0) active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sejarah Singkat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin-area/profil/visimisi"
                                        class="nav-link @if (strpos($currentUrl, '/admin-area/profil/visimisi') === 0) active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Visi Misi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin-area/profil/atributibi"
                                        class="nav-link @if (strpos($currentUrl, '/admin-area/profil/atributibi') === 0) active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Atribut IBI</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin-area/profil/cabang"
                                        class="nav-link @if (strpos($currentUrl, '/admin-area/profil/cabang') === 0) active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cabang</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">SESSION</li>
                        <li class="nav-item">
                            <a href="/admin-area/gantipassword"
                                class="nav-link @if (strpos($currentUrl, '/admin-area/gantipassword') === 0) active @endif">
                                <i class="nav-icon fas fa-key"></i>
                                <p>
                                    Ganti Password
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin-area/logout"
                                class="nav-link @if (strpos($currentUrl, '/admin-area/logout') === 0) active @endif">
                                <i class="nav-icon fa fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        @yield('content')
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

    </div>
    <!-- ./wrapper -->

    @livewireScripts
    <script src="/assets-admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/assets-admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/assets-admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Sparkline -->
    <script src="/assets-admin/plugins/sparklines/sparkline.js"></script>
    <!-- daterangepicker -->
    <script src="/assets-admin/plugins/moment/moment.min.js"></script>
    <script src="/assets-admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/assets-admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/assets-admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/assets-admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets-admin/dist/js/adminlte.js"></script>
    @stack('scripts')
</body>

</html>
