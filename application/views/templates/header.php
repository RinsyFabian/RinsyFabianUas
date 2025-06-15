<!-- Pastikan file ini berekstensi .php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pasien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


  <!-- Asset CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/jqvmap/jqvmap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/summernote/summernote-bs4.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    .main-sidebar {
      background-color: #e91e63 !important;
      font-family: 'Times New Roman', Times, serif !important;
    }
    .main-sidebar .nav-link,
    .main-sidebar .brand-link,
    .main-sidebar .nav-header {
      color: white !important;
      font-family: 'Times New Roman', Times, serif !important;
    }
    .main-sidebar .nav-icon,
    .main-sidebar .brand-link .fas {
      color: white !important;
    }
    .main-sidebar .nav-link:hover,
    .main-sidebar .nav-link.active {
      background-color: #c2185b !important;
      color: white !important;
    }
    .brand-link {
      background-color: #d81b60 !important;
      color: white !important;
      font-family: 'Times New Roman', Times, serif !important;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Ganti logo dengan foto -->
    <a href="#" class="brand-link d-flex flex-column align-items-center justify-content-center" style="text-align: center;">
      <img src="<?= base_url('assets/images/rinci.jpg'); ?>" alt="Suster Cantik" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;">
      <span class="brand-text font-weight-light" style="font-size: 1.2rem;">
        <?= $this->session->userdata('username'); ?>
      </span>
    </a>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <?php $level = $this->session->userdata('role'); ?>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

        <!-- Menu untuk Admin -->
        <?php if ($level == 'admin'): ?>
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('pasien'); ?>" class="nav-link">
                <i class="fas fa-users nav-icon"></i>
                <p>Data Pasien</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('dokter'); ?>" class="nav-link">
                <i class="fas fa-user-md nav-icon"></i>
                <p>Dokter Spesialis</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('kategori'); ?>" class="nav-link">
                <i class="fas fa-layer-group nav-icon"></i>
                <p>Status</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('pasien/laporan'); ?>" class="nav-link">
                <i class="fas fa-file-alt nav-icon"></i>
                <p>Laporan</p>
              </a>
            </li>
          </ul>
        </li>
        <?php endif; ?>

        <!-- Menu untuk User -->
        <?php if ($level == 'user'): ?>
        <li class="nav-item">
          <a href="<?= base_url('pasien'); ?>" class="nav-link active">
            <i class="fas fa-users nav-icon"></i>
            <p>Daftar Pasien</p>
          </a>
        </li>
        <?php endif; ?>

        <!-- Logout -->
        <li class="nav-item">
          <a href="<?= base_url('auth/logout'); ?>" class="nav-link" onclick="return confirm('Anda yakin mau keluar?');">
            <i class="fas fa-sign-out-alt nav-icon"></i>
            <p>Logout</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </aside>

</div>
</body>
</html>
