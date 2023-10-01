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
    $nama_lengkap = $_POST['NamaLengkap'];
    $email = $_POST['Email'];
    $no_hp = $_POST['NomorHP'];
    $alamat_rumah = $_POST['AlamatTinggal'];
    $kompetensi_keahlian = $_POST['KompetensiKeahlian'];
    // jika sudah njalanke query insert into dengan nilai sesuai variable
    $query = "INSERT INTO tbasesi (nama_lengkap, email, nomor_hp, alamat_rumah, kompetensi_keahlian) VALUES ('$nama_lengkap', '$email', '$no_hp', '$alamat_rumah', '$kompetensi_keahlian')";
    $sql = mysqli_query($conn, $query);
    // jika query berhasil
    if( $sql ) {
        // jika berhasil alihkan ke halaman index.php dengan status=sukses
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        header("Refresh:0; url=rekap_asesi.php");
    } else {
        // jika gagal alihkan ke halaman indek.php dengan status=gagal
        echo "<script>alert('Data gagal ditambahkan')</script>";
        header("Refresh:0; url=pendaftaran_asesi.php?status=gagal");
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LSP Skanilan | Pendaftaran Asesi</title>
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Peserta Asesi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendaftaran_asesi.php"class="nav-link active">
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
            <h1 class="m-0">Pendaftaran Asesi / Asesi Kompetensi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php" style="color: #E2E2E2;">dashboard</a></li>
              <li class="breadcrumb-item active"><a href="pendaftaran_asesi.php" style="color: #E2E2E2;">pendaftaran asesi</a></li>
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
              <img src="../gambar/asesi_1.jpg" width="500px" style="margin-left: 50px;">
            </div>
          </div>
          <div class="col-md-3 col-lg-5">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Asesi Kompetensi
                </h2><br>
              </div>
              <p style="text-align: justify; text-indent: 50px">Uji Kompetensi/Sertifikasi adalah proses penilaian baik teknis maupun 
              non teknis melalui pengumpulan bukti yang relevan untuk menentukan apakah seseorang kompeten atau belum kompeten pada 
              suatu unit kompetensi atau kualifikasi tertentu. Uji Kompetensi/Sertifikasi juga merupakan produk hukum yang menjadi legitimasi 
              (bukti pengakuan) terhadap capaian kemampuan seseorang dalam melakukan pekerjaan tertentu yang ditetapkan oleh otoritas yang 
              berwenang, berbasis pada standar kompetensi yang telah disepakati dan ditetapkan.</p>
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
              <img src="../gambar/asesi_2.jpg" width="500px" style="margin-left: 50px;">
            </div><br>
          </div>
          <div class="col-md-3 col-lg-5">
            <div class="detail-box"><br>
              <p style="text-align: justify; text-indent: 50px;">Rancangan persyaratan uji kompetensi/sertifikasi menjamin setiap 
              hasil uji dapat dibandingkan satu sama lain, baik dalam hal muatan dan tingkat kesulitan, termasuk keputusan yang 
              sah untuk kelulusan atau ketidaklulusan. LSP SMKN 9 Semarang mempunyai prosedur untuk menjamin konsistensi administrasi 
              uji kompetensi/sertifikasi. Menetapkan, mendokumentasikan dan memantau kriteria untuk kondisi administrasi uji 
              kompetensi/sertifikasi. Apabila ada peralatan teknis yang digunakan dalam proses pengujian, LSP SMKN 9 Semarang 
              menjamin bahwa peralatan tersebut telah diverifikasi atau dikalibrasi secara tepat. Metodologi dan prosedur yang tepat 
              (misalnya, mengumpulkan dan memelihara data statistik) didokumentasikan dan diterapkan dalam batasan tertentu yang 
              dibenarkan, untuk menegaskan kembali keadilan, keabsahan, keandalan, dan kinerja umum setiap ujian, dan tindakan perbaikan 
              terhadap semua kekurangan yang dapat dikenali.</p>
            </div>
          </div>
        </div>
      </div>
    </section><br><br>

    <section class="about_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="img-box">
              <img src="../gambar/asesi_3.jpg" width="500px" style="margin-left: 50px;">
            </div><br>
          </div>
          <div class="col-md-3 col-lg-5">
            <div class="detail-box">
              <p style="text-align: justify;">Proses Uji Kompetensi :</p>
              <ul style="text-align: justify;">
                  <li>Uji kompetensi dirancang untuk menilai kompetensi secara tertulis, lisan, praktek, pengamatan atau cara lain yang andal dan objektif, 
                      serta berdasarkan dan konsisten dengan skema sertifikasi. Rancangan persyaratan uji kompetensi menjamin setiap hasil uji dapat dibandingkan 
                      satu sama lain, baik dalam hal muatan dan tingkat kesulitan, termasuk keputusan yang sah untuk kelulusan atau ketidaklulusan.</li>
                  <li>LSP SMKN 9 Semarang mempunyai prosedur untuk menjamin konsistensi administrasi uji kompetensi.</li>
                  <li>LSP SMKN 9 Semarang menetapkan, mendokumentasikan dan memantau kriteria untuk kondisi administrasi uji kompetensi.</li>
                  <li>Apabila ada peralatan teknis yang digunakan dalam proses pengujian, LSP SMKN 9 Semarang menjamin bahwa peralatan 
                      tersebut telah diverifikasi atau dikalibrasi secara tepat.</li>
                  <li>Metodologi dan prosedur yang tepat (misalnya, mengumpulkan dan memelihara data statistik) didokumentasikan dan diterapkan dalam batasan 
                      tertentu yang dibenarkan, untuk menegaskan kembali keadilan, keabsahan, keandalan, dan kinerja umum setiap ujian, dan tindakan perbaikan 
                      terhadap semua kekurangan yang dapat dikenali.</li>
              </ul>
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
                <h3 class="card-title" style="color: #E2E2E2; font-family: Thinking Of Betty; font-size: 15px">Form&nbsp;&nbsp;Pendaftaran&nbsp;&nbsp;Asesi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap :</label>
                    <input type="text" class="form-control" name="NamaLengkap" required autocomplete="off" placeholder="Ketikkan Nama Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email :</label>
                    <input type="email" class="form-control" name="Email" required autocomplete="off"placeholder="Masukkan Email anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor HP/WA :</label>
                    <input type="text" class="form-control" name="NomorHP" required autocomplete="off" placeholder="Ketikkan Nomor Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Tinggal :</label>
                    <input type="text" class="form-control" name="AlamatTinggal" required autocomplete="off" placeholder="Ketikkan Alamat Tinggal Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kompetensi Keahlian/Jurusan :</label>
                    <select name="KompetensiKeahlian" class="form-control" required required autocomplete="off">
                            <option selected hidden value=""></option>Pilih Jurusan</option>
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