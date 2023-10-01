<?php 
include '../koneksi.php';
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LSP Skanilan | Dashboard</title>
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

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../gambar/logo lsp.jpg" alt="Logo lsp smkn 9 semarang" height="100" width="100">
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
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active">
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
          <li class="nav-item">
            <a href="skema_kompetensi.php" class="nav-link">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right" style="color: #C8C8C8;">
              <li><i class="nav-icon fas fa-tachometer-alt"></i></li>&nbsp;&nbsp;
              <li><a href="dashboard.php" style="color: #C8C8C8;">Dashboard</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p style="font-size: 22px;">Penguji Asesor</p>

                <h3>
                  <?php
                    $query = "SELECT * FROM tbasesor";
                    $sql = mysqli_query($conn, $query);

                    $count = mysqli_num_rows($sql);
                    echo "$count <br>";
                  ?>
                </h3> 
              </div>
              <div class="icon">
                <i class="fas fa-file-invoice-dollar"></i>
              </div>
              <a href="rekap_asesor.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <p style="font-size: 22px;">Peserta Asesi</p>

                <h3>
                <?php
                    $query = "SELECT * FROM tbasesi";
                    $sql = mysqli_query($conn, $query);

                    $count = mysqli_num_rows($sql);
                    echo "$count <br>";
                  ?>
                </h3>  
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="peserta_asesi.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p style="font-size: 22px;">Jadwal Kegiatan</p>

                <h3>
                <?php
                    $query = "SELECT * FROM tbjadwal";
                    $sql = mysqli_query($conn, $query);

                    $count = mysqli_num_rows($sql);
                    echo "$count <br>";
                  ?>
                </h3>  
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="jadwal_kegiatan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
          <div class="col-md-6">
            <!-- /.card -->

            <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Donut Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->

          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- /.card -->
            <!-- PIE CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Pie Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
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


<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../template/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../template/plugins/raphael/raphael.min.js"></script>
<script src="../template/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../template/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../template/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="../template/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../template/dist/js/pages/dashboard2.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Penguji Asesor',
          'Peserta Asesi',
          'Jadwal Kegiatan',
      ],
      datasets: [
        {
          data: [<?php $asesor = mysqli_query($conn, "SELECT * FROM tbasesor");
                  echo mysqli_num_rows($asesor);?>,
                  <?php $asesi = mysqli_query($conn, "SELECT * FROM tbasesi");
                  echo mysqli_num_rows($asesi);?>,
                  <?php $jadwal = mysqli_query($conn, "SELECT * FROM tbjadwal");
                  echo mysqli_num_rows($jadwal);?>,],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })
  })
</script>
</body>
</html>