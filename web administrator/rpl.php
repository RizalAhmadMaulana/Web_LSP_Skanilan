<?php 
// sesi login dimulai
include '../koneksi.php';
session_start();
// jika session bukan nama dari ruser maka dialihkan ke login page
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
}

// hapus data aktifitas
// ambil id pelanggan seng meh di hapus
if (isset($_GET['kode_unit'])) {
    $kode_unit = $_GET['kode_unit'];

    // query hapus 
    $query = "DELETE FROM tbrpl WHERE kode_unit=$kode_unit";
    $sql = mysqli_query($conn, $query);

    // apakah query hapus berhasil?
    // nek yo
    if ($sql) {
        echo "<script>alert('Data berhasil dihapus')</script>";
        header("Refresh:0; url=rpl.php");
	// nek rk 
    } else {
        die("gagal menghapus...");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LSP Skanilan | Skema RPL</title>
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
            <h1>Skema RPL</h1><br><br><br><br>
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
    <p style="text-align: justify; margin-left: 20px; margin-right:20px; text-indent: 50px;">Skema KKNI Level II pada kompetensi keahlian Rekayasa Perangkat Lunak dapat dicapai melalui 
    pendekatan klaster dan harus dicapai dalam 3 (tiga) tahun. Acuan-acuan yang digunakan dalam menyusun skema sertifikasi ini meliputi:</p>
    <ul style="text-align: justify; margin-left: 45px; margin-right:20px;">
        <li>Undang-undang Republik Indonesia Nomor 13 Tahun 2003 Tentang Ketenagakerjaan.</li>
        <li>Undang-undang Republik Indonesia Nomor 20 Tahun 2003 Tentang Sistem Pendidikan Nasional.</li>
        <li>Undang-undang Republik Indonesia Nomor 3 Tahun 2014 Tentang Perindustrian.</li>
        <li>Peraturan Pemerintah Republik Indonesia Nomor 23 Tahun 2004 Tentang Badan Nasional Sertifikasi Profesi.</li>
        <li>Instruksi Presiden nomor 9 Tahun 2016 Tentang Revitalisasi Sekolah Menengah Kejuruan Dalam Rangka Peningkatan 
            Kualitas dan Daya Saing Sumber Daya Manusia Indonesia.</li>
        <li>Peraturan Menteri Ketenagakerjaan Republik Indonesia Nomor 2 Tahun 2016 Tentang Sistem Standardisasi Kompetensi Kerja Nasional.</li>
        <li>Peraturan Menteri Ketenagakerjaan Republik Republik Indonesia No. 3 Tahun 2016 Tentang Tatacara Penetapan 
            Standar Kompetensi Kerja Nasional Indonesia.</li>
        <li>Keputusan Menteri Tenaga Kerja dan Transmigrasi Republik Indonesia Nomor: KEP.240/MEN/X/2004 Tentang Penetapan Standar Kompetensi Kerja
             Nasional Indonesia Sektor Logam dan Mesin.</li>
        <li>Keputusan Menteri Tenaga Kerja dan Transmigrasi Republik Indonesia Nomor KEP.94/MEN/IV/2005 Tentang Penetapan Standar Kompetensi Kerja 
            Nasional Indonesia Sektor Teknologi Informasi dan Komunikasi Sub Sektor Operator Komputer.</li>
        <li>Keputusan Menteri Ketenagakerjaan Republik Indonesia Nomor 282 Tahun 2016 Tentang Penetapan Standar Kompetensi Kerja Nasional Indonesia 
            Kategori Informasi dan Komunikasi Golongan Pokok Aktivitas Pemrograman.</li>
        <li>Surat Keputusan Direktur Jenderal Pendidikan Dasar dan Menengah No. 130/D/KEP/KR/2017 Tentang Struktur Kurikulum 
            Pendidikan Menengah Kejuruan.</li>
        <li>Peraturan Badan Nasional Sertifikasi Profesi Nomor: 1/BNSP/III/2014 Tentang Penilaian Persyaratan Umum Lembaga Sertifikasi Profesi.</li>
        <li>Peraturan Badan Nasional Sertifikasi Profesi Nomor: 4/BNSP/III/2014 Tentang Pengembangan dan Pemeliharaan skema Sertifikasi.</li>
        <li>Peraturan Badan Nasional Sertifiasi Profesi Nomor: 1/BNSP/II/2017 Tentang Pedoman Pelaksanaan Sertifikasi Kompetensi Bagi
             Lulusan Sekolah Menengah Kejuruan.</li>
    </ul><br>
    <p style="text-align: justify; margin-left: 20px; margin-right:20px;font-weight:bold;">Klaster yang digunakan adalah sebagai berikut:</p><br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"  style="color: #E2E2E2; font-family: Thinking Of Betty; font-size: 15px">Tabel&nbsp;&nbsp;Skema&nbsp;&nbsp;RPL</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatablesSimple" class="table table-bordered table-hover">
                  <thead>
                        <tr class="align-middle" style="text-align: center;">
                            <th>No</th>
                            <th>Kode Unit</th>
                            <th>Judul Unit</th>
                            <th colspan="2">Opsi</th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php
                        $no = 0;
                        $tabel = mysqli_query($conn, "SELECT * FROM tbrpl ORDER BY judul_unit asc");
                        while ($data = mysqli_fetch_array($tabel)) {
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['kode_unit']; ?></td>
                            <td><?php echo $data['judul_unit']; ?></td>
                            <td><a href='rpl.php?kode_unit="<?=$data['kode_unit']?>"' class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin untuk mengubah?')">Hapus</a></td>
                            <td><a href='edit_rpl.php?kode_unit="<?=$data['kode_unit']?>"' class="btn btn-warning btn-sm">Edit</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                        <a href='create_rpl.php' class="btn btn-secondary"><img src="../gambar/plus.png" width="18px" height="18px">&nbsp;Tambahkan Data</a>&nbsp;&nbsp;<a href='export_rpl.php' class="btn btn-success"><img src="../gambar/export.png" width="18px" height="18px">&nbsp;Export Data</a>&nbsp;&nbsp;<a href='skema_kompetensi.php' class="btn btn-primary">Kembali</a><br><br>
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