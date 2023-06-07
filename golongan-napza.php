<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>SIPENAP - Penggolongan napza</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="admin/assets/css/bootsrap.min.css">
   <link rel="stylesheet" href="admin/assets/css/custom-css.css">
   <link rel="stylesheet" href="admin/assets/css/app.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container">
         <a class="navbar-brand" href="index.php">SIPENAP</a> <button aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
            data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span
               class="navbar-toggler-icon"></span></button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">Beranda</a>
               </li>
               <!-- <li class="nav-item">
            <a class="nav-link" href="golongan-napza.php">Golongan Napza</a>
          </li> -->
               <div class="dropdown show">
                  <a class="nav-link dropdown-toggle hover" href="#" role="button" id="dropdownMenuLink"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                     Golongan Napza
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <a class="nav-link text-dark" href="narkotika.php">Narkotika</a>
                     <a class="nav-link text-dark" href="psikotropika.php">Psikotropika</a>
                     <a class="nav-link text-dark" href="zat_adiktif.php">Zat Adiktif</a>
                  </div>
               </div>
               <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="admin/login.php">Login</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <div class="container mt-5" id="container-card">
      <div class="row d-flex justify-content-center">
         <div class="col-md-8">
            <h1 class="text-center">Penggolongan Napza</h1>
            <p class="text-center" style="font-weight:bold;">Jenis-jenis dari penggolongan Napza</p>
         </div>
      </div>
      <div class="row mt-5" id="row-card">
         <div class="col-md-4">
            <div class="card bg-info shadow-lg">
               <div class="card-body">
                  <?php include 'admin/config/koneksi.php'; ?>
                  <h4 class="card-title text-light">Narotika</h4>
                  <?php
									$ambil = $koneksi->query("SELECT * FROM Golongan WHERE kategori='Narkotika'");
									while($pecah = $ambil->fetch_assoc()) :
						?>
                  <ul>
                     <li><i class="ri-arrow-right-s-fill"></i><a
                           href="golongan/narkotika.php?id=<?php echo $pecah['id_golongan']; ?>">
                           <?php echo $pecah['golongan']; ?>
                        </a>
                     </li>
                  </ul>
                  <?php endwhile; ?>
               </div>
            </div>
         </div>
         <div class="col-md-4 ">
            <div class="card bg-info shadow-lg">
               <div class="card-body">
                  <?php include 'admin/config/koneksi.php'; ?>
                  <h4 class="card-title text-light text-center">Psikotropika</h4>
                  <?php
									$ambil = $koneksi->query("SELECT * FROM Golongan WHERE kategori='Psikotropika'");
									while($pecah = $ambil->fetch_assoc()) :
						?>
                  <ul>
                     <li><i class="ri-arrow-right-s-fill"></i><a
                           href="golongan/psikotropika.php?id=<?php echo $pecah['id_golongan']; ?>">
                           <?php echo $pecah['golongan']; ?>
                        </a>
                     </li>
                  </ul>
                  <?php endwhile; ?>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card bg-info shadow-lg">
               <div class="card-body">
                  <?php include 'admin/config/koneksi.php'; ?>
                  <h4 class="card-title text-light">Zat Adiktif</h4>
                  <?php
									$ambil = $koneksi->query("SELECT * FROM Golongan WHERE kategori='Zat Adiktif'");
									while($pecah = $ambil->fetch_assoc()) :
						?>
                  <ul>
                     <li><i class="ri-arrow-right-s-fill"></i><a
                           href="golongan/zat_adiktif.php?id=<?php echo $pecah['id_golongan']; ?>">
                           <?php echo $pecah['golongan']; ?>
                        </a>
                     </li>
                  </ul>
                  <?php endwhile; ?>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>