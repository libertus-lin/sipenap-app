<?php 
  include '../admin/config/koneksi.php';

  $id_berita = $_GET["id"];
  $ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita='$id_berita'");
  $singlePage = $ambil->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Berita Page</title>
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
          <li class="nav-item">
            <a class="nav-link" href="golongan-napza.php">Golongan Napza</a>
          </li>
          <div class="dropdown show">
            <a class="nav-link dropdown-toggle hover" href="#" role="button" id="dropdownMenuLink"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
              Kategori Napza
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="nav-link text-dark" href="../narkotika.php">Narkotika</a>
              <a class="nav-link text-dark" href="../psikotropika.php">Psikotropika</a>
              <a class="nav-link text-dark" href="../zat_adiktif.php">Zat Adiktif</a>
            </div>
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

  <section class="kontent">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8 mb-5">
          <article class="artikel-website mt-5">
            <div class="container artikel">
              <h2 class="mb-4 pt-4"><?php echo $singlePage['judul']; ?></h2>
              <img src="../images/<?php echo $singlePage['gambar']; ?>" width="700" class="image-responsive mb-4">
              <p class="text-justify"><?php echo $singlePage['isi_berita']; ?></p>
              <a href="../index.php" class="btn btn-outline-default m-0 p-0">Back to posts</a>
            </div>
          </article>
        </div>
      </div>
  </section>

  <!-- footer -->
  <?php include '../footer.php'; ?>
  <!-- footer -->
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>