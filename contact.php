<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Contact Page</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
   <link rel="stylesheet" href="admin/assets/css/bootsrap.min.css">
   <link rel="stylesheet" href="admin/assets/css/custom-css.css">
</head>

<body>

   <?php include 'header.php'; ?>

   <div class="container badan">
      <div class="row pt-5 mt-5">
         <div class="col">
            <h1>Kontak Kami</h1>
            <p class="text-justify paragraf-satu">
               Silahkan tinggalkan pesan anda, pada kolom yang tersedia. Pesan anda berguna untuk melihat seberapa
               banyak dan baiknya anda terhadap keadaan yang ada dalam lingkungan anda maupun dilingkungan umum.
            </p>
         </div>

         <div class="col pb-5">
            <div class="card">
               <div class="card-header">
                  Hubungi kami (wajib *)
               </div>
               <div class="card-body">
                  <form method="post" action="#">
                     <div class="form-group">
                        <?php include './admin/config/koneksi.php'; ?>
                        <select name="id_admin" class="form-control" required>
                        <option selected="selected" id="0">Administrator</option>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM admin");
                        while ($pecah = mysqli_fetch_array($ambil)) { ?>
                        <option id="<?php echo $pecah['id_admin']; ?>"><?php echo $pecah['id_admin']; ?> </option>
                        <?php } ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan username" required autocomplete="off">
                     </div>
                     <div class="form-group">
                        <input type="number" class="form-control" name="telp" placeholder="Masukkan telp">
                     </div>
                     <div class="form-group">
                        <textarea name="isipesan" class="form-control" cols="30" rows="7" placeholder="Tulis laporan anda" required></textarea>
                     </div>

                     <button class="button-primary" id="buttonSubmit" name="laporkan">Kirim Laporan</button>
                     <a href="index.php" class="button-warning" id="buttonCancel">Batal</a>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

   <?php include 'footer.php'; ?>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>

<?php
include 'admin/config/koneksi.php';

if (isset($_POST["laporkan"])) {
   $admin = stripslashes(htmlspecialchars($_POST['id_admin']));
   $nama = stripslashes(htmlspecialchars($_POST['nama']));
   $telp = stripslashes(htmlspecialchars($_POST['telp']));
   $isipesan = stripslashes(htmlspecialchars($_POST['isipesan']));

   $koneksi->query("INSERT INTO laporan (id_laporan, id_admin, nama_pelapor, telp_pelapor, isi_laporan) 
			VALUES (NULL, '$admin', '$nama', '$telp', '$isipesan')");

   echo "<script>alert('Pesan telah terkirim');</script>";
   echo "<meta http-equiv='refresh' content='1;url=contact.php'>";
}
?>