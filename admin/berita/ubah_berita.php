<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<?php 
	$ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
?>
<h2>Form Ubah Berita</h2><br>
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
		<label for="isi_berita" class="form-label">Isi Artikel</label>
		<textarea name="isi_berita" class="form-control" rows="25" id="isi_berita"><?php echo $pecah['isi_berita']; ?></textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-primary" name="ubah"><i class="fa fa-edit"> Simpan</i></button>
		<a href="index.php?halaman=berita" class="btn btn-success"><i class="fa fa-chevron-left"> Kembali</i></a>
	</div>
</form>

<script src="../ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('isi_berita');
</script>

<?php 

	if (isset($_POST["ubah"]))
	{
		$namafoto = $_FILES['foto']['name'];
		$lokasifoto = $_FILES['foto']['tmp_name'];
		if(!empty($lokasifoto))
		{
			move_uploaded_file($lokasifoto, "../images/".$namafoto);
			$judul = stripslashes(htmlspecialchars($_POST['judul']));
			$isi = htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['isi_berita'])));

			$koneksi->query("UPDATE berita SET judul='$judul', gambar='$namafoto', isi_berita='$isi' WHERE id_berita='$_GET[id]'");
		}
		else 
		{
			$judul = stripslashes(htmlspecialchars($_POST['judul']));
			$isi = htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['isi_berita'])));

			$koneksi->query("UPDATE berita SET judul='$judul',isi_berita='$isi' WHERE id_berita='$_GET[id]'");
		}
		echo "<div class='alert alert-info'>Data berita telah diubah</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=berita'>";	
	}
?>