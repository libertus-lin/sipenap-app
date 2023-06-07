<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Daftar User</title>
	<!-- Bootstrap Styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- Fontawesome Styles -->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom Styles -->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <link rel="stylesheet" href="../admin/assets/css/index.css">
  <!-- Googla Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
  <!-- <style>body{background-image:url("../images/wallpaper.jpg");}h2{color:white;}a:hover{text-decoration:none;}</style> -->
</head>
<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
        <br><br>
        <h2 class="text-dark"> Halaman Daftar</h2><br>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <strong>Pendaftaran user baru</strong>  
            </div>

            <div class="panel-body">
              <form action="" method="post"><br> 
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" autocomplete="off" autofocus required/>
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                  <input type="text" name="satker" class="form-control" placeholder="Masukkan satker" autocomplete="off" required/>
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon">@</span>
                  <input type="text" name="username" class="form-control" placeholder="Masukkan username" autocomplete="off" required/>
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                  <input type="password" name="password" class="form-control" placeholder="Masukkan password anda" autocomplete="off" required/>
                </div>
                <button type="submit" name="regitrasi" class="btn btn-primary" style="width: 100%;">Register</button>
                <hr/>Already Registered ? <a href="login.php" class="btn btn-success button-login">Login here</a>
              </form>

              <?php 
                include 'config/koneksi.php';
                if (isset($_POST["regitrasi"]))
                {
                  $nama = $_POST['nama'];
                  $satker = $_POST['satker'];
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $koneksi->query("INSERT INTO admin (id_admin, nama_admin, satker_admin, username_admin, password_admin) 
                    VALUES (NULL, '$nama', '$satker', '$username', '$password')");

                  echo "<div class='alert alert-info'>Data berhasil disimpan</div>";
                  echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                }
              ?>

        </div>
      </div>
    </div>
  </div>

  <!-- Jquery Scripts -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- Bootstrap Scripts -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Metismenu Scripts -->
  <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- Custom Scripts -->
  <script src="assets/js/custom.js"></script>
   
</body>
</html>