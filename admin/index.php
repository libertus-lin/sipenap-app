<!-- script untuk php mysql -->
<?php 
  session_start();
  include 'config/koneksi.php';

  if (!isset($_SESSION['admin'])) 
  {
    echo "<script>alert('Anda harus login!')</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
  }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Website SIPENAP</title>
   <!-- BOOTSTRAP STYLES-->
   <link href="assets/css/bootstrap.css" rel="stylesheet" />
   <!-- FONTAWESOME STYLES-->
   <link href="assets/css/font-awesome.css" rel="stylesheet" />
   <!-- MORRIS CHART STYLES-->
   <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
   <!-- CUSTOM STYLES-->
   <link href="assets/css/custom.css" rel="stylesheet" />
   <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
   <div id="wrapper">
      <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i> SIPENAP
            </a>
         </div>
         <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
            <!-- waktu saat ini -->
            <?php
          date_default_timezone_set("Asia/Jakarta");
          echo date("l, d-M-Y / H:i");
        ?>
            <a href="index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a>
         </div>
      </nav>

      <!-- Navigasi Atas  -->
      <nav class="navbar-default navbar-side" role="navigation">
         <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
               <li class="text-center">
                  <img src="assets/img/find_user.png" class="user-image img-responsive" />
               </li>
               <li><a href="index.php"><i class="fa fa-dashboard fa-2x"></i>Home</a></li>
               <li><a href="index.php?halaman=administrator"><i class="fa fa-user fa-2x"></i>Administator</a></li>
               <li><a href="index.php?halaman=narkotika"><i class="fa fa-exclamation fa-2x"></i>Narkotika</a></li>
               <li><a href="index.php?halaman=psikotropika"><i class="fa fa-bell-o fa-2x"></i>Psikotropika</a></li>
               <li><a href="index.php?halaman=zat_adiktif"><i class="fa fa-book fa-2x"></i>Zat-Adiktif</a></li>
               <li><a href="index.php?halaman=laporan"><i class="fa fa-book fa-2x"></i>Laporan</a></li>
               <li><a href="index.php?halaman=golongan"><i class="fa fa-trash fa-2x"></i>Gologan</a></li>
               <li><a href="index.php?halaman=berita"><i class="fa fa-info fa-2x"></i>Berita</a></li>
               <li><a href="index.php?halaman=logout"><i class="fa fa-sign-out fa-2x"></i>Logout</a></li>
            </ul>
         </div>
      </nav>
      <!-- Navigasi atas -->

      <!-- Navigasi Sidebar -->
      <div id="page-wrapper">
         <div id="page-inner">
            <?php 
          if(isset($_GET['halaman']))
          {
            // script untuk menampilkan seluruh data pada masing-masing tabel
            if ($_GET['halaman'] == 'administrator') {
              include 'admin/administrator.php';
            }
            if ($_GET['halaman'] == 'laporan' )
            {
              include 'laporan/laporan.php';
            }
            elseif ($_GET['halaman'] == "narkotika")
            {
              include 'narkotika/narkotika.php';
            }
            elseif ($_GET['halaman'] == "psikotropika")
            {
              include 'psikotropika/psikotropika.php';
            }
            elseif ($_GET['halaman'] == "zat_adiktif")
            {
              include 'zat adiktif/zat_adiktif.php';
            }
            elseif ($_GET['halaman'] == "kasus")
            {
              include 'kasus/kasus.php';
            }
            elseif ($_GET['halaman'] == "export_data")
            {
              include 'kasus/export_data.php';
            }
            elseif ($_GET['halaman'] == "golongan")
            {
              include 'golongan/golongan.php';
            }
            elseif ($_GET['halaman'] == "berita")
            {
              include 'berita/berita.php';
            }
            elseif ($_GET['halaman'] == 'logout') 
            { 
              include 'logout.php';
            }

            // script untuk tambah data
            elseif ($_GET['halaman'] == "tambah_admin")
            {
              include 'admin/tambah_admin.php';
            }
            elseif ($_GET['halaman'] == "tambah_golongan")
            {
              include 'golongan/tambah_golongan.php';
            }
            elseif ($_GET['halaman'] == "tambah_narkotika")
            {
              include 'narkotika/tambah_narkotika.php';
            }
            elseif ($_GET['halaman'] == "tambah_psikotropika")
            {
              include 'psikotropika/tambah_psikotropika.php';
            }
            elseif ($_GET['halaman'] == "tambah_zat_adiktif")
            {
              include 'zat adiktif/tambah_zat_adiktif.php';
            }
            elseif ($_GET['halaman'] == "tambah_kasus")
            {
              include 'kasus/tambah_kasus.php';
            }
            elseif ($_GET['halaman'] == 'tambah_golongan' )
            {
              include 'golongan/tambah_golongan.php';
            }
            elseif ($_GET['halaman'] == 'tambah_berita' )
            {
              include 'berita/tambah_berita.php';
            }

            // script untuk hapus data
            elseif ($_GET['halaman'] == 'hapus_admin') 
            {
              include 'admin/hapus_admin.php';
            }
            elseif ($_GET['halaman'] == 'hapus_narkotika') 
            {
              include 'narkotika/hapus_narkotika.php'; 
            }
            elseif ($_GET['halaman'] == 'hapus_psikotropika') 
            {
              include 'psikotropika/hapus_psikotropika.php';
            }
            elseif ($_GET['halaman'] == 'hapus_zat_adiktif') 
            {
              include 'zat adiktif/hapus_zat_adiktif.php';
            }
            elseif ($_GET['halaman'] == 'hapus_kasus') 
            {
              include 'kasus/hapus_kasus.php';
            }
            elseif ($_GET['halaman'] == 'hapus_golongan')
            {
              include 'golongan/hapus_golongan.php';
            }
            elseif ($_GET['halaman'] == 'hapus_berita')
            {
              include 'berita/hapus_berita.php';
            }

            // script untuk ubah data masing-masing tabel
            elseif ($_GET['halaman'] == 'ubah_admin') 
            {
              include 'admin/ubah_admin.php';
            }
            elseif ($_GET['halaman'] == 'ubah_narkotika') 
            {
              include 'narkotika/ubah_narkotika.php';
            }
            elseif ($_GET['halaman'] == 'ubah_psikotropika') 
            {
              include 'psikotropika/ubah_psikotropika.php';
            }
            elseif ($_GET['halaman'] == 'ubah_zat_adiktif') 
            {
              include 'zat adiktif/ubah_zat_adiktif.php';
            }
            elseif ($_GET['halaman'] == 'ubah_kasus') 
            {
              include 'kasus/ubah_kasus.php';
            }
            elseif ($_GET['halaman'] == 'ubah_golongan')
            {
              include 'golongan/ubah_golongan.php';
            }
            elseif ($_GET['halaman'] == 'ubah_berita') 
            {
              include 'berita/ubah_berita.php';
            }
          }
          else {
            include 'home.php';
          }
        ?>
         </div>
      </div>
   </div>
   <!-- Navigasi sidebar -->

   <!-- script javascript -->
   <!-- javascript => sebuah bahan coding yang difungsikan sebagai suatu responsive layar sebuah website maupun aplikasi lain -->
   <script src="assets/js/jquery-1.10.2.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/jquery.metisMenu.js"></script>
   <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
   <script src="assets/js/morris/morris.js"></script>
   <script src="assets/js/custom.js"></script>

</body>

</html>