<h2>Form Ubah Kasus</h2><br>
<?php 
	$ambil = $koneksi->query("SELECT * FROM kasus WHERE id_kasus='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
?>

<form method="post">
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama tersangka" value="<?php echo $pecah['nama_tersangka']; ?>" autocomplete="off" autofocus>
	</div>
	<div class="form-group">
    <label>Jenis Kelamin</label>
		<select class="form-control" name="jk">
			<option value="">== Pilih ==</option>
			<option value="Laki-Laki">Laki-Laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
  </div>
	<div class="form-group">
		<label for="kasus">Kasus</label>
		<input type="text" name="kasus" class="form-control" id="kasus" value="<?php echo $pecah['kasus']; ?>" placeholder="Masukkan kasus" autocomplete="off">
	</div>
	<div class="form-group">
		<label for="status">status</label>
		<input type="status" name="status" class="form-control" id="status" value="<?php echo $pecah['status']; ?>" placeholder="Masukkan status" autocomplete="off">
	</div>
  <div class="form-group">
		<label for="tanggal" class="form-label">tanggal Kasus</label><br>
		<textarea name="tanggal" class="form-control" rows="5" id="tanggal" placeholder="Masukkan tanggal artikel"><?php echo $pecah['tanggal']; ?></textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-primary" name="ubah"><i class="fa fa-edit"> Ubah</i></button>
		<a href="index.php?halaman=kasus" class="btn btn-success"><i class="fa fa-chevron-left"> Kembali</i></a>
	</div>
</form>

<?php 

	if (isset($_POST["ubah"]))
	{
			$nama = $_POST['nama'];
			$jk = $_POST['jk'];
			$kasus = $_POST['kasus'];
			$status = $_POST['status'];
			$tanggal = $_POST['tanggal'];

			$koneksi->query("UPDATE kasus SET nama_tersangka='$_POST[nama]', 
			jk='$_POST[jk]', kasus='$_POST[kasus]', status='$_POST[status]', 
			tanggal='$_POST[tanggal]' WHERE id_kasus='$_GET[id]'");

		echo "<div class='alert alert-info'>Data kasus telah diubah</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kasus'>";	
	}
?>