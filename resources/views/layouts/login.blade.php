<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets-admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/assets-admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets-admin/dist/css/adminlte.min.css">
  @livewireStyles
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="/login"><b>Admin Web</b> IBI NTB</a>
    </div>
    @yield('content')
  </div>
  @livewireScripts
  <script src="/assets-admin/plugins/jquery/jquery.min.js"></script>
  <script src="/assets-admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets-admin/dist/js/adminlte.min.js"></script>
</body>

</html>
