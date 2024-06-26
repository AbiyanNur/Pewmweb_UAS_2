<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/v4-shims.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="/plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="/plugins/codemirror/theme/monokai.css">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="/plugins/simplemde/simplemde.min.css">
  <link rel="icon" type="png" href="https://upload.wikimedia.org/wikipedia/commons/7/74/Seal_of_Jombang_Regency.svg">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="https://upload.wikimedia.org/wikipedia/commons/7/74/Seal_of_Jombang_Regency.svg" alt="AdminLTELogo" height="60%" width="60%">
    </div> -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <!-- <a href="/admin/logout" class="nav-link" onclick="return confirm('Apakah Anda Yakin Akan Logout.??')"><i class="fas fa-key"></i>Logout</a> -->
        </li>
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class=" far fa-user"></i>
            <?= $session->get('user_name') ?>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header"> <img src="/file/user/<?= $session->get('user_img') ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            </span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-user mr-2"></i> <?= $session->get('user_name') ?>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> <?= $session->get('user_email') ?>
            </a>
            <div class="dropdown-divider"></div>
            <a href="/admin/profil/<?= $session->get('user_id') ?>" class="dropdown-item dropdown-footer"><i class="fa fa-gear"></i> Profile</a>
            <div class="dropdown-divider"></div>
            <a href="/admin/logout" class="dropdown-item dropdown-footer" onclick="return confirm('Apakah Anda Yakin, Logout.??')"><i class="fas fa-key"></i> Logout</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" role="button">
            <!-- <i class="fas fa-expand-arrows-alt"></i> -->
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Halaman Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/admin/dashboard" class="nav-link <?= ($menu == 'DashboardKu' ? 'active' : '') ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">POSTING</li>
            <li class="nav-item">
              <a href="/admin/beranda" class="nav-link <?= ($menu == 'beranda' ? 'active' : '') ?>">
                <i class="nav-icon fa fa-newspaper-o"></i>
                <p>
                  Beranda
                </p>
              </a>
            </li>
            <?php
            if ($session->get('user_level') == 'Admin') {
            ?>
              <li class="nav-item">
                <a href="/admin/galeri" class="nav-link <?= ($menu == 'galeri' ? 'active' : '') ?>">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Gallery
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/about" class="nav-link <?= ($menu == 'about' ? 'active' : '') ?>">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/struktur" class="nav-link <?= ($menu == 'struktur' ? 'active' : '') ?>">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Struktur Organisasi
                  </p>
                </a>
              </li>

              <li class="nav-header">SETTINGS</li>
              <li class="nav-item">
                <a href="/admin/user" class="nav-link <?= ($menu == 'user' ? 'active' : '') ?>">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Users
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/kategori" class="nav-link <?= ($menu == 'kategori' ? 'active' : '') ?>">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Kategori
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/setting" class="nav-link <?= ($menu == 'setting' ? 'active' : '') ?>">
                  <i class="nav-icon fa fa-gears"></i>
                  <p>
                    Settings
                  </p>
                </a>
              </li>
            <?php
            }
            ?>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= strtoupper($menu) ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $menu ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <?= $this->renderSection('content'); ?>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="/plugins/jszip/jszip.min.js"></script>
  <script src="/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="/dist/js/demo.js"></script> -->
  <!-- Summernote -->
  <script src="/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
  <!-- Page specific script -->
  <script>
    $(function() {
      // Summernote
      $('#summernote').summernote()
    })
  </script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>