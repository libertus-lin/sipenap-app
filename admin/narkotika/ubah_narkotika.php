<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<?php
$ambil = $koneksi->query("SELECT * FROM narkotika WHERE id_narkotika='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<h2>Form Ubah Narkotika</h2><br>
<form method="post" enctype="multipart/form-data">
   <div class="form-group">
      <label for="judul" class="form-label">Judul Artikel</label>
      <input type="text" name="judul" class="form-control" id="judul" value="<?php echo $pecah['judul']; ?>">
   </div>
   <div class="form-group">
      <img src="../images/<?php echo $pecah['gambar']; ?>" width="200">
   </div>
   <div class="form-group">
      <label for="foto" class="form-label">Gambar</label><br>
      <input type="file" class="form-control" name="foto" id="foto">
   </div>
   <div class="form-group">
      <label for="keterangan" class="form-label">Keterangan Artikel</label>
      <textarea name="keterangan" class="form-control" rows="25" id="keterangan"><?php echo $pecah['keterangan']; ?></textarea>
   </div>
   <div class="form-group">
      <button class="btn btn-primary" name="ubah"><i class="fa fa-edit"> Simpan</i></button>
      <a href="index.php?halaman=narkotika" class="btn btn-success"><i class="fa fa-chevron-left"> Kembali</i></a>
   </div>
</form>

<script src="../ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.replace('keterangan');
</script>

<?php

if (isset($_POST["ubah"])) {
   $namafoto = $_FILES['foto']['name'];
   $lokasifoto = $_FILES['foto']['tmp_name'];
   if (!empty($lokasifoto)) {
      move_uploaded_file($lokasifoto, "../images/" . $namafoto);
      $judul = stripslashes(htmlspecialchars($_POST['judul']));
      $keterangan = htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['keterangan'])));

      $koneksi->query("UPDATE narkotika SET judul='$judul', gambar='$namafoto', keterangan='$keterangan' WHERE id_narkotika='$_GET[id]'");
   } else {
      $judul = stripslashes(htmlspecialchars($_POST['judul']));
      $keterangan = htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['keterangan'])));

      $koneksi->query("UPDATE narkotika SET judul='$judul',keterangan='$keterangan' WHERE id_narkotika='$_GET[id]'");
   }
   echo "<div class='alert alert-info'>Data narkotika telah diubah</div>";
   echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=narkotika'>";
}
?>