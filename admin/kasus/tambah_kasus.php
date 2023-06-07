<h2>Form Tambah Data Tersangka</h2><br>

<form method="post">
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama tersangka" autocomplete="off" autofocus required>
	</div>
	<div class="form-group">
    <label>Jenis Kelamin</label>
    <select class="form-control" name="jk" required>
        <option value="">== Pilih ==</option>
        <option value="laki-laki">Laki - Laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
  </div>
	<div class="form-group">
		<label for="kasus">Kasus</label>
		<input type="text" name="kasus" class="form-control" id="kasus" placeholder="Masukkan kasus" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label for="status">status</label>
		<input type="status" name="status" class="form-control" id="status" placeholder="Masukkan status" autocomplete="off" required>
	</div>
	<div class="form-group">
		<button class="btn btn-primary" name="simpan"><i class="fa fa-save"> Simpan</i></button>
		<a href="index.php?halaman=kasus" class="btn btn-success"><i class="fa fa-chevron-left"> Kembali</i></a>
	</div>
</form>

<?php 
	if (isset($_POST["simpan"]))
	{
		$nama = stripslashes(htmlspecialchars($_POST['nama']));
		$jk = stripslashes(htmlspecialchars($_POST['jk']));
		$kasus = stripslashes(htmlspecialchars($_POST['kasus']));
		$status = stripslashes(htmlspecialchars($_POST['status']));
		$tanggal = date("Y-m-d H:i:s");
		// $keterangan = stripslashes(htmlspecialchars($_POST['keterangan']));

		$koneksi->query("INSERT INTO kasus (id_kasus, nama_tersangka, jk, kasus, status, tanggal) 
			VALUES (NULL, '$nama', '$jk', '$kasus', '$status', '$tanggal')");

		echo "<div class='alert alert-info'>Data berhasil disimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kasus'>";
	}
?>