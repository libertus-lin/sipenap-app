<h2>Form Tambah Narkotika</h2><br>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="judul" class="form-label">Judul Berita</label>
		<input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul berita" required="true">
	</div>
	<div class="form-group">
		<label for="foto" class="form-label">Gambar</label>
		<input type="file" name="foto" class="form-control" required="true">
	</div>
	<div class="form-group">
		<label for="isi_berita" class="form-label">Isi Berita</label><br>
		<textarea name="isi_berita" class="form-control" rows="25" id="isi_berita" placeholder="Masukkan isi berita" required="true"></textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-primary" name="simpan"><i class="fa fa-save"> Simpan</i></button>
		<a href="index.php?halaman=berita" class="btn btn-success"><i class="fa fa-chevron-left"> Kembali</i></a>
	</div>
</form>

<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script src="../ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('isi_berita');
</script>

<?php 
	if (isset($_POST["simpan"]))
	{
		$nama = $_FILES['foto']['name'];
		$lokasi = $_FILES['foto']['tmp_name'];
		move_uploaded_file($lokasi, "../images/".$nama);

		$judul = stripslashes(htmlspecialchars($_POST['judul']));
		// $isi = stripslashes(htmlspecialchars($_POST['isi']));
		$isi = htmlspecialchars_decode(htmlspecialchars_decode(stripslashes($_POST['isi_berita'])));

		$koneksi->query("INSERT INTO berita (id_berita, judul, gambar, isi_berita) 
			VALUES (NULL, '$judul', '$nama', '$isi')");

		echo "<div class='alert alert-info'>Data berhasil disimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=berita'>";
	}
?>