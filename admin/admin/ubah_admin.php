<h2>Form Ubah Administator</h2><br>

<!-- script untuk ambil data dari tabel admin -->
<?php 
	$ambil = $koneksi->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
?>

<!-- form isi ubah data -->
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="nama">Nama Admin</label>
		<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $pecah['nama_admin']; ?>" placeholder="Masukkan nama" required>
	</div>
	<div class="form-group">
		<label for="satker">Satuan Kerja</label>
		<input type="text" class="form-control" name="satker" id="satker" value="<?php echo $pecah['satker_admin']; ?>" placeholder="Masukkan satuan kerja" required>
	</div>
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username" id="username" value="<?php echo $pecah['username_admin']; ?>" placeholder="Masukkan username" required>
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="text" class="form-control" name="password" id="password" value="<?php echo $pecah['password_admin']; ?>" placeholder="Masukkan password" required>
	</div>
	<div class="form-group">
		<button name="ubah" class="btn btn-primary"><i class="fa fa-edit"> Ubah Data</i></button>
		<a href="index.php?halaman=administrator" class="btn btn-success"><i class="fa fa-chevron-left"> Batal</i></a>
	</div>
</form>

<!-- script untuk ubah data -->
<?php 
	if (isset($_POST['ubah'])) 
	{
		$koneksi->query("UPDATE admin SET nama_admin='$_POST[nama]', 
			satker_admin='$_POST[satker]', username_admin='$_POST[username]', 
			password_admin='$_POST[password]' WHERE id_admin='$_GET[id]'");

		echo "<script>alert('Data berhasil diubah');</script>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=administrator'>";
	}
?>
<!-- akhir script ubah data tabel -->