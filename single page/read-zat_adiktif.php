<?php 
  include '../admin/config/koneksi.php';

  $id_zat_adiktif = $_GET["id"];
  $ambil = $koneksi->query("SELECT * FROM zat_adiktif WHERE id_zat_adiktif='$id_zat_adiktif'");
  $singlePage = $ambil->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>zat_adiktif Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../admin/assets/css/bootsrap.min.css">
  <link rel="stylesheet" href="../admin/assets/css/custom-css.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand text-light" href="../index.php">SIPENAP</a> <button aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
        data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-light" href="../index.php">Beranda</a>
          </li>
          <div class="dropdown show">
            <li><a class="nav-link" style="color: white;" href="../zat_adiktif.php">Zat Adiktif</a></li>
          </div>
          <li class="nav-item">
            <a class="nav-link text-light" href="../contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="../admin/login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" style="padding-top: 3rem;">
    <div class="row pt-5">
      <div class="col-sm-12 col-md-6 col-lg-8 mb-5">
        <div class="artikel pb-5">
          <h2 class="mb-4 pt-4"><?php echo $singlePage['judul']; ?></h2>
          <img src="../images/<?php echo $singlePage['gambar']; ?>" width="700" class="image-responsive mb-4">
          <p class="text-justify"><?php echo $singlePage['keterangan']; ?></p>
          <a href="../zat_adiktif.php" class="btn btn-outline-default p-0">Back to posts</a>
        </div>
        <!-- <a href="../golongan/zat_adiktif.php" class="btn btn-outline-default p-0 text-dark"> > Baca juga artikel terkait golongan zat_adiktif</a> -->
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 mt-5">
        <div class="card mb-3">
          <div class="card-body p-3">
            <div class="card-title mb-3">
              <h4>Post terbaru</h4>
            </div>
            <div class="card-labels mb-5">
              <?php $ambil = $koneksi->query("SELECT * FROM zat_adiktif WHERE judul=judul") ?>
              <?php while( $singlePage = $ambil->fetch_assoc()) { ?>
              <ul style="margin: 0; padding: 0">
                <li style="list-style: none; margin-bottom: .5rem">
                  <a class="text-dark" href="../single page/read-zat_adiktif.php?id=<?php echo $singlePage['id_zat_adiktif']; ?>"><?php echo $singlePage["judul"]; ?></a>
                  </li>
              </ul>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body"> 
            <div class="card-title mb-3">
              <h4>Telusuri Golongan</h4>
            </div>
						<div class="card-labels">
							<?php $ambil = $koneksi->query("SELECT * FROM golongan WHERE kategori='Zat Adiktif'") ?>
							<?php while( $singlePage = $ambil->fetch_assoc()) { ?>
							<ul style="margin: 0; padding: 0;">
								<li style="list-style: none; margin-bottom: .5rem">
									+ <a class="text-dark" href="../single page/gol-zat_adiktif.php?id=<?php echo $singlePage['id_golongan']; ?>"><?php echo $singlePage["Golngan"]; ?></a>
									</li>
							</ul> 
							<?php } ?>
						</div>
          </div>
        </div>
      </div>
    </div>
   </div> 

  <!-- footer -->
  <?php include '../footer.php'; ?>
  <!-- footer -->
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>