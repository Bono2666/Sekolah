<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="{{ asset('dist/favicon.png') }}"/>
  <title>Alia Islamic School | Sistem Informasi</title>

  <!-- Google Font: Montserrat -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed" style="background-image: url">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
      <img src="{{ asset('dist/img/preloader.gif') }}">
  </div>
  
  <!-- Navbar -->
  <nav class="main-header border-bottom-0" style="height: 72px">
    <!-- Left navbar links -->
    <div class="navbar navbar-expand navbar-white navbar-light elevation-2" style="background-color: #fff;margin: 1.6% 2.8%; border-radius: 10px;" >
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <div class="user-panel d-flex" style="top: -20%;">
            <div class="info" style="font-size: 0.875rem; font-weight: 700;">
              {{ Auth::user()->name }}
            </div>
            <div class="image">
              <img class="img-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <x-jet-dropdown-link class="dropdown-item" href="">Ubah Profil</x-jet-dropdown-link>
          <div class="dropdown-divider" style="margin: 0 10px"></div>
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                            this.closest('form').submit();">
                {{ __('Keluar') }}
            </x-jet-dropdown-link>
          </form>
        </div>
      </li>
    </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-0">
    <!-- Brand Logo -->
    <a href="/beranda" class="brand-link" style="border-bottom: none;">
      <img src="{{ asset('dist/img/logo.png') }}" alt="Logo" class="brand-image" style="opacity: .8; margin: auto auto auto -2px;">
      <span class="brand-text font-weight-light">          </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="top: 24px;">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="top: 6px;">
          @yield('content-menu')
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top: 72px">
    <div class="row">
      @yield('content')
    </div>    
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer" style="font-size: 0.875rem">
    &copy;<script>document.write(new Date().getFullYear())</script>
    <a color="#008D48" href="https://www.aliaislamicschool.sch.id/">Alia Islamic School</a> | Sistem Informasi
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- Ion Icon  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>