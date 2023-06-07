<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>SIPENAP - BNN Jogja | Platform yang meberikan dukungan dan pelayanan kepada masyarakat</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="admin/assets/css/bootsrap.min.css">
   <link rel="stylesheet" href="admin/assets/css/custom-css.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navScroll">
   <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
         <a class="navbar-brand logo-brand" href="index.php">SIPENAP</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="#section-berita">Berita</a>
               </li>
               <div class="dropdown show">
                  <a class="nav-link dropdown-toggle hover" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
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

   <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
      <ol class="carousel-indicators">
         <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
         <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
         <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img alt="First slide" class="d-block w-100" src="https://i.postimg.cc/gcR0tR4Z/1.jpg">
            <div class="carousel-caption d-none d-md-block">
               <h5>Narkotika</h5>
               <p>Adalah zat/obat dari tanaman atau bukan tanaman dapat menyebabkan<br> penurunan atau perubahan
                  kesadaran
                  dll.</p>
               <br><a href="#section-berita" class="btn btn-danger">Telusuri Sekarang..</a>
            </div>
         </div>
         <div class="carousel-item">
            <img alt="Second slide" class="d-block w-100" src="https://i.postimg.cc/pL0V5BVg/2.jpg">
            <div class="carousel-caption d-none d-md-block">
               <h5>Psikotropika</h5>
               <p>Adalah zat/obat dari tanaman atau bukan tanaman dapat menyebabkan<br> penurunan atau perubahan
                  kesadaran
                  dll.</p>
               <br><a href="#postingan" class="btn btn-danger">Telusuri Sekarang..</a>
            </div>
         </div>
         <div class="carousel-item">
            <img alt="Third slide" class="d-block w-100" src="https://i.postimg.cc/NF7Bs6PC/3.jpg">
            <div class="carousel-caption d-none d-md-block">
               <h5>Zat Adiktif</h5>
               <p>Adalah zat/obat dari tanaman atau bukan tanaman dapat menyebabkan<br> penurunan atau perubahan
                  kesadaran
                  dll.</p>
               <br><a href="#postingan" class="btn btn-danger">Telusuri Sekarang..</a>
            </div>
         </div>
      </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
   </div>

   <div class="container-xxl bg-light py-5 my-5">
      <div class="container py-5" id="section-berita">
         <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6" id="postingan">My Post</h1>
            <p class="text-primary fs-5 mb-5">Pelajari!!! Sebelum anda ikut-ikutan.</p>
         </div>
         <div class="row g-4 mb-4">
            <?php include 'admin/config/koneksi.php'; ?>
            <?php $ambil = $koneksi->query("SELECT * FROM berita"); ?>
            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
               <div class="col-lg-4 col-md-6 wow fadeInUp mb-4" data-wow-delay="0.1s">
                  <div class="card-body">
                     <img src="images/<?php echo $pecah['gambar']; ?>" class="image-responsive float-left mr-3 mb-4" width="300">
                     <h5 class="card-title mt-5"><?php echo $pecah['judul']; ?></h5>
                     <a href="single page/read-berita.php?id=<?php echo $pecah["id_berita"]; ?>" class="btn btn-outline-default m-0 p-0">Read more...</a>
                  </div>
               </div>
            <?php } ?>
         </div>
      </div>
   </div>

   <?php include 'footer.php'; ?>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
   <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
   <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js">
   </script>
   <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js">
   </script>
   <script src="./admin/assets/js/app.js"></script>

</body>

</html>