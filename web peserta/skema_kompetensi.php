<?php 
// sesi login dimulai
include '../koneksi.php';
session_start();
// jika session bukan nama dari ruser maka dialihkan ke login page
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LSP Skanilan | Skema Kompetensi</title>
  <!--Logo Title-->
  <link rel="icon" type="image/x-icon" href="../gambar/logo lsp.jpg" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../template/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template/dist/css/adminlte.min.css">
  <!-- data tables -->
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../template/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="kontak.php" class="nav-link">Contact</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../gambar/logo lsp.jpg" alt="Logo LSP Skanilan" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size: 18px;">LSP SMKN 9 Semarang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../gambar/person.png" width="23px" height="23px" alt="User Image">
        </div>
        <div class="info">
          <span>
            <?php echo $_SESSION['name']; ?>
          </span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Peserta Asesi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendaftaran_asesi.php"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftaran Asesi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rekap_asesi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekap Asesi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="data_asesor.php" class="nav-link">
              <img src="../gambar/phone.png" width="23px" height="23px">&nbsp;&nbsp;&nbsp;
              <p>
                Data Asesor
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="skema_kompetensi.php" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Skema Kompetensi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="jadwal_kegiatan.php" class="nav-link">
              <img src="../gambar/pengaturan.png" width="23px" height="23px">&nbsp;&nbsp;&nbsp;
              <p>
                Jadwal Kegiatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <img src="../gambar/SignOut.png" width="23px" height="23px">&nbsp;&nbsp;&nbsp;
              <p>
                Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Skema Kompetensi</h1><br><br>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php" style="color: #E2E2E2;">dashboard</a></li>
              <li class="breadcrumb-item active"><a href="skema_kompetensi.php" style="color: #E2E2E2;">skema kompetensi</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p style="font-size: 22px;">Skema RPL</p>

                <h3>
                  <?php
                    $query = "SELECT * FROM tbrpl";
                    $sql = mysqli_query($conn, $query);

                    $count = mysqli_num_rows($sql);
                    echo "$count <br>";
                  ?>
                </h3> 
              </div>
              <div class="icon">
                <i class="fas fa-file-invoice-dollar"></i>
              </div>
              <a href="rpl.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p style="font-size: 22px;">Skema AKL</p>

                <h3>
                <?php
                    $query = "SELECT * FROM tbakl";
                    $sql = mysqli_query($conn, $query);

                    $count = mysqli_num_rows($sql);
                    echo "$count <br>";
                  ?>
                </h3>  
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="akl.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p style="font-size: 22px;">Skema BDP</p>

                <h3>
                <?php
                    $query = "SELECT * FROM tbbdp";
                    $sql = mysqli_query($conn, $query);

                    $count = mysqli_num_rows($sql);
                    echo "$count <br>";
                  ?>
                </h3>  
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="bdp.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p style="font-size: 22px;">Skema OTKP</p>

                <h3>
                <?php
                    $query = "SELECT * FROM tbotkp";
                    $sql = mysqli_query($conn, $query);

                    $count = mysqli_num_rows($sql);
                    echo "$count <br>";
                  ?>
                </h3>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="otkp.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </div><!--/. container-fluid -->
    </section><br><br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col" style="margin-left: 50px; margin-right:100px;">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" style="color: #E2E2E2; font-family: Thinking Of Betty; font-size: 15px">Kompetensi&nbsp;&nbsp;Keahlian</h3>
              </div>
              <!-- /.card-header -->
                <div class="row mt-5" style="margin-left: 140px;">
                  <div class="col-sm-5">
                    <div class="position-relative">
                        <a href="rpl.php"><img src="../gambar/rpl.jpg" alt="profil RPL" class="img-fluid"></a>
                        <center><a href="rpl.php" style="color: white; font-family:Jokerman;">Skema Rekayasa Perangkat Lunak</a></center>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="position-relative">
                        <a href="otkp.php"><img src="../gambar/otkp.jpg" alt="Profil OTKP" class="img-fluid"></a>
                        <center><a href="otkp.php" style="color: white; font-family:Jokerman;">Skema Otomatisasi & Tata Kelola Perkantoran</a></center>
                    </div>
                  </div>
                </div>
                <div class="row mt-5" style="margin-left: 140px;">
                  <div class="col-sm-5">
                    <div class="position-relative">
                        <a href="bdp.php"><img src="../gambar/bdp.jpg" alt="Profil BDP" class="img-fluid"></a>
                        <center><a href="bdp.php" style="color: white; font-family:Jokerman;">Skema Bisnis Daring dan Pemasaran</a></center>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="position-relative">
                        <a href="akl.php"><img src="../gambar/akl.jpg" alt="Profil AKL" class="img-fluid"></a>
                        <center><a href="akl.php" style="color: white; font-family:Jokerman;">Skema Akuntansi dan Keuangan Lembaga</a></center><br><br>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022</strong> <strong style="color: blue;">Rizal Ahmad Maulana</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../template/dist/js/adminlte.js"></script>
<!--DataTables-->
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../sekrip.js"></script>
</body>
</html>