<?php 
session_start();
include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Sipenap</title>
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/css/custom.css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <style>
  body {
    background-image: url("../images/wallpaper.jpg");
  }
  h2,
  h5 {
    color: white;
  }
  a:hover {
    text-decoration: none;
  }
  </style>

</head>

<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
        <br /><br />
        <h2> Sipenap : Login</h2>
        <h5>Sistem Informasi Penggolongan Napza</h5>
        <br />
      </div>
    </div>
    <div class="row ">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong>Silahkan login!</strong>
          </div>
          <div class="panel-body">
            <form role="form" method="post">
              <br />
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input type="text" class="form-control" name="user" placeholder="Masukkan username" autocomplete="off"
                  autofocus required />
              </div>
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="pass" placeholder="Masukkan password"
                  autocomplete="off" required />
              </div>
              <button class="btn btn-primary" style="width: 100%;" name="login">Login</button>
            </form>

            <?php
            if (isset($_POST['login'])) 
            {
              $ambil = $koneksi->query("SELECT * FROM admin WHERE username_admin='$_POST[user]' AND password_admin='$_POST[pass]'");
              $yangcocok = $ambil->num_rows;
              if ($yangcocok == 1) 
              {
                $_SESSION['admin'] = $ambil->fetch_assoc();
                echo "<div class='alert alert-info'>login sukses!</div>";
                echo "<meta http-equiv='refresh' content='1;url=index.php'>";
              }
              else
              {
                echo "<div class='alert alert-danger'>login gagal!</div>";
                echo "<meta http-equiv='refresh' content='1;url=login.php'>"; 
              }
            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Jquery Scrips -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- Bootstrap Scripts -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Metismenu Scrpts -->
  <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- Custom Scripts -->
  <script src="assets/js/custom.js"></script>

</body>

</html>