<h2>Form Tambah Admin</h2><br>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama" autocomplete="off" autofocus required>
	</div>
	<div class="form-group">
		<label for="sakter">Satuan Kerja</label>
		<input type="text" name="satker" class="form-control" id="satker" placeholder="Masukkan satker" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" name="username" class="form-control" id="username" placeholder="Masukkan username" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" autocomplete="off" required>
	</div>
	<div class="form-group">
		<button class="btn btn-primary" name="simpan"><i class="fa fa-save"> Simpan</i></button>
		<a href="index.php?halaman=administrator" class="btn btn-success"><i class="fa fa-chevron-left"> Kembali</i></a>
	</div>
</form>

<?php 
	if (isset($_POST["simpan"]))
	{
		$nama = stripslashes(htmlspecialchars($_POST['nama']));
		$satker = stripslashes(htmlspecialchars($_POST['satker']));
		$username = stripslashes(htmlspecialchars($_POST['username']));
		$password = stripslashes(htmlspecialchars($_POST['password']));

		$koneksi->query("INSERT INTO admin (id_admin, nama_admin, satker_admin, username_admin, password_admin) 
			VALUES (NULL, '$nama', '$satker', '$username', '$password')");

		echo "<div class='alert alert-info'>Data berhasil disimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=administrator'>";
	}
?>