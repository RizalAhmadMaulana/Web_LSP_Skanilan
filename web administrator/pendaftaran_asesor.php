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
    $nomor_registrasi = $_POST['NomorRegistrasi'];
    $nama_lengkap = $_POST['NamaLengkap'];
    $unit_kompetensi = $_POST['UnitKompetensi'];
    // jika sudah njalanke query insert into dengan nilai sesuai variable
    $query = "INSERT INTO tbasesor (nomor_registrasi, nama_lengkap, unit_kompetensi) VALUES ('$nomor_registrasi', '$nama_lengkap', '$unit_kompetensi')";
    $sql = mysqli_query($conn, $query);
    // jika query berhasil
    if( $sql ) {
        // jika berhasil alihkan ke halaman index.php dengan status=sukses
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        header("Refresh:0; url=rekap_asesor.php");
    } else {
        // jika gagal alihkan ke halaman indek.php dengan status=gagal
        echo "<script>alert('Data gagal ditambahkan')</script>";
        header("Refresh:0; url=pendaftaran_asesor.php?status=gagal");
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LSP Skanilan | Pendaftaran Asesor</title>
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Asesor Kompetensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendaftaran_asesor.php"class="nav-link active">
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Menjadi Penguji / Asesor Kompetensi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php" style="color: #E2E2E2;">dashboard</a></li>
              <li class="breadcrumb-item active"><a href="pendaftaran_asesor.php" style="color: #E2E2E2;">pendaftaran asesor</a></li>
            </ol>
          </div>
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><br><br>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="about_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6"><br>
            <div class="img-box">
              <img src="../gambar/rapat1.jpg" style="margin-left: 50px;">
            </div>
          </div>
          <div class="col-md-3 col-lg-5">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Asesor Kompetensi
                </h2><br>
              </div>
              <p style="text-align: justify; text-indent: 50px">
                Asesor merupakan orang atau seseorang yang memiliki hak untuk melakukan assessment atau asesmen terhadap suatu kompetensi teknis. Dalam definisi lain,
                asesor juga bisa diartikan sebagai seseorang yang memiliki kualifikasi untuk melaksanakan asesmen (penilaian) dalam rangka menilai mutu seseorang sesuai 
                dengan sistem lisensi dari Lembaga Sertifikasi Profesi. Sehingga untuk memberikan suatu sertifikasi profesi pada seseorang, maka asesor perlu melakukan pengecekan atau penilaian.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><br>

    <section class="about_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6"><br>
            <div class="img-box">
              <img src="../gambar/rapat2.jpg" style="margin-left: 50px;">
            </div><br>
          </div>
          <div class="col-md-3 col-lg-5">
            <div class="detail-box">
              <p style="text-align: justify; text-indent: 50px;">
                Proses ini bertujuan untuk memastikan bahwa orang yang mengikuti suatu pelatihan memang layak dan berhak mendapatkan sertifikasi. Sertifikasi ini disahkan oleh asesor, yang kemudian oleh lembaga pelatihan atau lembaga sertifikasi akan menerbitkan sertifikasi tersebut.
                Seseorang yang dinyatakan lolos uji atau lolos tes oleh tim asesor maka akan menerima sertifikasi. Sertifikasi ini kemudian menjadi jembatan bagi orang 
                tersebut untuk mendapatkan karir yang lebih baik dan kesempatan yang lebih luas. Saat melakukan pengujian sertifikasi, maka lembaga sertifikasi umumnya 
                membutuhkan banyak sekali asesor. Maka setiap asesor tersebut wajib memenuhi semua syarat menjadi asesor yang sudah ditetapkan oleh lembaga yang bersangkutan. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><br>

    <section class="about_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="img-box">
              <img src="../gambar/rapat3.jpg" style="margin-left: 50px;">
            </div><br>
          </div>
          <div class="col-md-3 col-lg-5">
            <div class="detail-box">
              <p style="text-align: justify; text-indent: 50px;">Syarat ini ternyata beragam dan tentunya semua asesor wajib memenuhi semua syarat tersebut. Adapun syarat asesor kompetensi secara umum yakni:</p>
              <ol type="a">
                <li>Memenuhi kualifikasi akademik</li>
                <li>Paham persyaratan dan prosedur melakukan sertifikas</li>
                <li>Memahami persyaratan dan prossedur dalam hal lisensi</li>
                <li>Mampu berkomunikasi dengan baik.</li>
              </ol>
              <p style="text-align: justify;">Semua syarat ini dinyatakan terpenuhi ketika dinyatakan kompeten pada saat sertifikasi asesor kompetensi.</p>
            </div>
          </div>
        </div>
      </div>
    </section><br><br>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col" style="margin-left: 50px; margin-right:100px;">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title" style="color: #E2E2E2; font-family: Thinking Of Betty; font-size: 15px">Form&nbsp;&nbsp;Pendaftaran&nbsp;&nbsp;Asesor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Registrasi :</label>
                    <input type="text" class="form-control" name="NomorRegistrasi" required autocomplete="off" placeholder="Masukkan No Reg Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap :</label>
                    <input type="text" class="form-control" name="NamaLengkap" required autocomplete="off" placeholder="Ketikkan Nama Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Unit Kompetensi :</label>
                    <select name="UnitKompetensi" class="form-control" required required autocomplete="off">
                            <option selected hidden value=""></option>Pilih Kompetensi Anda</option>
                            <option>Rekayasa Perangkat Lunak (RPL)</option>
                            <option>Akuntasi dan Keuangan Lembaga (AKL)</option>
                            <option>Bisnis Daring dan Pemasaran (BDP)</option>
                            <option>Otomasi Tata Kelola Perkantoran (OTKP)</option> 
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
</body>
</html>