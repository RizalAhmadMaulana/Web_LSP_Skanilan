
<?php
include '../koneksi.php';
error_reporting(0);
session_start();
if (isset($_SESSION['name'])) {
    header("Location: dashboard.php");
}
 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pass =$_POST['pass'];
 
    $sql = "SELECT * FROM tbadmin WHERE name='$name' AND pass='$pass'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['name'] = $row['name'];
        header("Location: dashboard.php");
    } elseif (empty($name)){
        echo "<script>alert('Tolong masukan Username Anda!')</script>";
    } else {
    	echo "<script>alert('Username atau Password Anda salah!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LSP Skanilan | Log in</title>
  <!--Logo Title-->
  <link rel="icon" type="image/x-icon" href="../gambar/logo lsp.jpg" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <p style="font-family: Clarendon Blk BT; font-weight:bold; font-size:25px;">LSP SMKN 9 Semarang</p>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan masuk untuk mengakses laman</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="name" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form><br>
      <div class="input-group mb-3">
        <button type="button" name="button" class="btn btn-block btn-outline-primary"><a href="../web profile/home.html">Kembali</a></button>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../template/dist/js/adminlte.min.js"></script>
</body>
</html>


