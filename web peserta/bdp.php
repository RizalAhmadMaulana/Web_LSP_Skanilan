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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Skema BDP</h1><br><br><br><br>
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
    <!--deskripsi-->
    <p style="text-align: justify; margin-left: 20px; margin-right:20px;font-weight:bold;">KKNI Level II Bisnis Daring dan Pemasaran</p>
    <p style="text-align: justify; margin-left: 20px; margin-right:20px; text-indent: 50px;">Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Bisnis Daring dan Pemasaran merupakan skema sertifikasi KKNI yang 
    dikembangkan oleh komite skema BNSP bersama sama dengan Direktorat Pembinaan SMK. Kemasan kompetensi yang digunakan mengacu pada SKKNI yang ditetapkan berdasarkan Keputusan Menteri Tenaga Kerja dan Transmigrasi 
    Republik Indonesia Nomor 389 Tahun 2013. Skema sertifikasi ini digunakan untuk memelihara kompetensi lulusan Sekolah Menegah Kejuruan (SMK) dan sebagai acuan bagi LSP SMK dan asesor dalam pelaksanaan sertifikasi 
    kompetensi keahlian Bisnis Daring dan Pemasaran.</p>
    <p style="text-align: justify; margin-left: 20px; margin-right:20px; text-indent: 50px;">Ruang Lingkup Skema Sertifikasi : 1. Ruang Lingkup : Bisnis Daring dan Pemasaran; 2. Lingkup penggunaan sertifikat: 
      pada perusahaan, instansi, lembaga atau organisasi yang memiliki divisi atau berkaitan dengan bisnis daring dan pemasaran. Tujuan Sertifikasi: 1. Memastikan kompetensi kerja KKNI Level II kompetensi keahlian 
      Bisnis Daring dan Pemasaran; 2. Sebagai acuan dalam melaksanakan asesmen oleh LSP SMK dan asesor kompetensi. Deskripsi. Jenis kemasan ini adalah kemasan KKNI yang merupakan kualifikasi kompetensi teknis dari 
      siswa SMK. Kualifikasi ini merefleksikan peran individu dalam melaksanakan satu tugas spesifik, dengan menggunakan alat, dan informasi, dan prosedur kerja yang lazim dilakukan, serta menunjukkan kinerja dengan 
      mutu yang terukur, dibawah pengawasan langsung atasannya. Memiliki pengetahuan operasional dasar dan pengetahuan faktual bidang kerja yang spesifik, sehingga mampu memilih penyelesaian yang tersedia terhadap 
      masalah yang lazim timbul. Bertanggung jawab pada pekerjaan sendiri dan dapat diberi tanggung jawab membimbing orang lain.</p>
      <p style="text-align: justify; margin-left: 20px; margin-right:20px; text-indent: 50px;">Untuk mendapatkan KKNI Level II Bisnis Daring dan Pemasaran, kompetensi yang harus dicapai dengan total 25 ( dua puluh lima) 
      yang terdiri dari: a. 5 ( lima ) Unit Kompetensi Umum dan Inti; b. 20 ( dua puluh ) Pilihan/Fungsional. Skema ini telah diperiksa oleh Mulyanto dan Mohammad Zubair ( bnsp) di Jakarta tanggal 28 Maret 2019. dan Pada 
      hari kamis tanggal 18 April 2019 dilaksanakan acara pengesahan bersama 81 skema sertifikasi untuk LSP P1 SMK</p><br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"  style="color: #E2E2E2; font-family: Thinking Of Betty; font-size: 15px">Tabel&nbsp;&nbsp;Skema&nbsp;&nbsp;BDP</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatablesSimple" class="table table-bordered table-hover">
                  <thead>
                        <tr class="align-middle" style="text-align: center;">
                            <th>No</th>
                            <th>Kode Unit</th>
                            <th>Judul Unit</th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php
                        $no = 0;
                        $tabel = mysqli_query($conn, "SELECT * FROM tbbdp ORDER BY judul_unit asc");
                        while ($data = mysqli_fetch_array($tabel)) {
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['kode_unit']; ?></td>
                            <td><?php echo $data['judul_unit']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                        <a href='export_bdp.php' class="btn btn-success"><img src="../gambar/export.png" width="18px" height="18px">&nbsp;Export Data</a>&nbsp;&nbsp;<a href='skema_kompetensi.php' class="btn btn-primary">Kembali</a><br><br>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div><br><br>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!--DataTables-->
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../sekrip.js"></script>
</body>
</html>