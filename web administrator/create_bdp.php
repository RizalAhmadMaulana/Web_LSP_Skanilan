<?php 
// sesi login dimulai
include '../koneksi.php';
session_start();
// jika session bukan dari ruser maka dialihkan ke login page
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
}
// mulai insert data
// cek tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])) {
    // jika ya 
    // tampung value dari input ke variable dengan post
    $kode_unit = $_POST['KodeUnit'];
    $judul_unit = $_POST['JudulUnit'];
    // jika sudah njalanke query insert into dengan nilai sesuai variable
    $query = "INSERT INTO tbbdp (kode_unit, judul_unit) VALUES ('$kode_unit', '$judul_unit')";
    $sql = mysqli_query($conn, $query);
    // jika query berhasil
    if( $sql ) {
        // jika berhasil alihkan ke halaman index.php dengan status=sukses
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        header("Refresh:0; url=bdp.php");
    } else {
        // jika gagal alihkan ke halaman indek.php dengan status=gagal
        echo "<script>alert('Data gagal ditambahkan')</script>";
        header("Refresh:0; url=create_bdp.php?status=gagal");
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LSP Skanilan | Skema BDP</title>
  <!--Logo Title-->
  <link rel="icon" type="image/x-icon" href="../gambar/logo lsp.jpg" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template/dist/css/adminlte.min.css">
  <!-- data tables -->
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>

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
                Asesor Kompetensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendaftaran_asesor.php"class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftaran Asesor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="rekap_asesor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekap Asesor</p>
                </a>
              </li>
            </ul>
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
            <a href="peserta_asesi.php" class="nav-link">
              <img src="../gambar/phone.png" width="23px" height="23px">&nbsp;&nbsp;&nbsp;
              <p>
                Peserta Asesi
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Skema BDP</h1><br><br><br><br>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php" style="color: #E2E2E2;">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="skema_kompetensi.php" style="color: #E2E2E2;">Skema Kompetensi</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col" style="margin-left: 50px; margin-right:100px;">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" style="color: #E2E2E2; font-family: Thinking Of Betty; font-size: 15px">Form&nbsp;&nbsp;Create&nbsp;&nbsp;Skema</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Unit :</label>
                    <input type="text" class="form-control" name="KodeUnit" required autocomplete="off" placeholder="Ketikkan Kode Unit">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Unit:</label>
                    <input type="text" class="form-control" name="JudulUnit" required autocomplete="off" placeholder="Ketikkan Judul Unit">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;
                  <a class="btn btn-primary" href="bdp.php" role="button">Batal</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

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
<!-- jQuery UI -->
<script src="../template/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="../template/dist/js/adminlte.min.js"></script>
</body>
</html>