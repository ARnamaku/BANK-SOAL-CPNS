<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BANK SOAL TIF - UAD</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets//plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets//dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Data Tables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= site_url('dashboard') ?>" class="nav-link">Home</a>
        </li>

      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="dropdown user user-menu">
          <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!-- <img src="<?= base_url() ?>assets//dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                <span class="hiden-xs"><?= $this->fungsi->user_login()->username ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a>
              </div>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= site_url('dashboard') ?>" class="brand-link">
        <img src="<?= base_url() ?>assets//dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BANK SOAL - UAD</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <!-- <div class="image">
            <img src="<?= base_url() ?>assets//dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div> -->
          <div class="info">
            <a href="#" class="d-block"><?= $this->fungsi->user_login()->nama ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
              <a href="" class="nav-link active">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Soal
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= site_url('soal') ?>"
                      <?php  if($judul == "Soal"){?>
                        class= "nav-link active"
                      <?php }else {?>
                        class= "nav-link"
                      <?php } ?>
                      >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Soal</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('kategori') ?>"
                      <?php  if($judul == "Kategori"){?>
                        class= "nav-link active"
                      <?php }else {?>
                        class= "nav-link"
                      <?php } ?>
                      >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kategori Soal</p>
                      </a>
                  </li>
                  <?php if ($this->fungsi->user_login()->level == 1){ ?>
                <li class="nav-item">
                  <a href="<?= site_url('dashboard') ?>" 
                      <?php  if($judul == "User"){?>
                        class= "nav-link active"
                      <?php }else {?>
                        class= "nav-link"
                      <?php } ?>
                      >
                    <i class="far fa-circle nav-icon"></i>
                    <p>User</p>
                    <?php } ?>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php echo $contents ?>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.5
      </div>
      <strong>Copyright &copy; Template by.<a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>assets//plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets//plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets//dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>assets//dist/js/demo.js"></script>
  <!-- data tables -->
  <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#table1').dataTable()
    })
  </script>

</body>

</html>