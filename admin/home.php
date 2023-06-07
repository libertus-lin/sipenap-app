<?php 
  /* koneksi database */
  include 'config/koneksi.php';

  /* ambil data dari database dan jumlahkan masing-masing datanya */
  $admin = mysqli_query($koneksi, "SELECT * FROM admin");
  $hitungadmin = mysqli_num_rows($admin);
  $narkotika = mysqli_query($koneksi, "SELECT * FROM narkotika");
  $hitungnarkotika = mysqli_num_rows($narkotika);
  $psikotropika = mysqli_query($koneksi, "SELECT * FROM psikotropika");
  $hitungpsiko = mysqli_num_rows($psikotropika);
  $zat = mysqli_query($koneksi, "SELECT * FROM zat_adiktif");
  $hitungZat = mysqli_num_rows($zat);
  $golongan = mysqli_query($koneksi, "SELECT * FROM golongan");
  $hitungGolongan = mysqli_num_rows($golongan);
  $laporan = mysqli_query($koneksi, "SELECT * FROM laporan");
  $hitunglaporan = mysqli_num_rows($laporan);
?>

<!-- header dasboard admin -->
<div class="row">
   <div class="col-md-12">
      <h2>Dashboard Admin!</h2>
   </div>
</div>
<!-- header dasboard admin -->
<hr />
<!-- baris untuk dashboard admin -->
<div class="row">
   <div class="col-md-4 col-sm-6 col-xs-4">
      <div class="panel panel-back noti-box">
         <div class="text-box">
            <p class="main-text">Welcome Back</p>
            <p><?php echo $_SESSION['admin']['nama_admin']; ?> !</p>
         </div>
      </div>
   </div>
   <div class="col-md-8 col-sm-6 col-xs-8">
      <div class="panel panel-back noti-box">
         <div class="text-box">
            <p class="main-text text-center">SIPENAP</p>
            <p class="text-center">Sistem Informasi Penggolongan Jenis NAPZA</p>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-4 col-sm-6 col-xs-4">
      <div class="panel panel-back noti-box">
         <span class="icon-box bg-color-green set-icon">
            <i class="fa fa-user"></i>
         </span>
         <div class="text-box">
            <p class="main-text"><?php echo $hitungadmin; ?> Administrator</p>
            <a href="index.php?halaman=administrator" class="btn btn-succes"><i class="fa fa-print"> Views Admin</i></a>
         </div>
      </div>
   </div>
   <div class="col-md-4 col-sm-6 col-xs-4">
      <div class="panel panel-back noti-box">
         <span class="icon-box bg-color-green set-icon">
            <i class="fa fa-user"></i>
         </span>
         <div class="text-box">
            <p class="main-text"><?php echo $hitungnarkotika; ?> Narkotika</p>
            <a href="index.php?halaman=narkotika" class="btn btn-succes"><i class="fa fa-print"> Views Narkotika</i></a>
         </div>
      </div>
   </div>
   <div class="col-md-4 col-sm-6 col-xs-4">
      <div class="panel panel-back noti-box">
         <span class="icon-box bg-color-green set-icon">
            <i class="fa fa-user"></i>
         </span>
         <div class="text-box">
            <p class="main-text"><?php echo $hitungpsiko; ?> Psikotropika</p>
            <a href="index.php?halaman=psikotropika" class="btn btn-succes"><i class="fa fa-print"> Views
                  Psikotropika</i></a>
         </div>
      </div>
   </div>
</div>

<!-- baris baru -->
<div class="row">
   <div class="col-md-4 col-sm-6 col-xs-4">
      <div class="panel panel-back noti-box">
         <span class="icon-box bg-color-green set-icon">
            <i class="fa fa-user"></i>
         </span>
         <div class="text-box">
            <p class="main-text"><?php echo $hitungZat; ?> Zat Adiktif</p>
            <a href="index.php?halaman=zat_adiktif" class="btn btn-succes"><i class="fa fa-print"> Views Zat
                  Adiktif</i></a>
         </div>
      </div>
   </div>
   <div class="col-md-4 col-sm-6 col-xs-4">
      <div class="panel panel-back noti-box">
         <span class="icon-box bg-color-green set-icon">
            <i class="fa fa-user"></i>
         </span>
         <div class="text-box">
            <p class="main-text"><?php echo $hitungGolongan; ?> Golongan</p>
            <a href="index.php?halaman=golongan" class="btn btn-succes"><i class="fa fa-print"> Views Golongan</i></a>
         </div>
      </div>
   </div>
   <div class="col-md-4 col-sm-6 col-xs-4">
      <div class="panel panel-back noti-box">
         <span class="icon-box bg-color-green set-icon">
            <i class="fa fa-user"></i>
         </span>
         <div class="text-box">
            <p class="main-text"><?php echo $hitunglaporan; ?> Laporan</p>
            <a href="index.php?halaman=laporan" class="btn btn-succes"><i class="fa fa-print"> Views Laporan</i></a>
         </div>
      </div>
   </div>
</div>

<!-- mengalihkan langsung pada halaman home website -->
<a href="../index.php" class="btn btn-primary" target="_blank">Go to website...</a>
<!-- baris untuk dashboard admin  -->