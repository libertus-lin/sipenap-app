<?php 
	$ambil = $koneksi->query("SELECT * FROM golongan WHERE id_golongan='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
?>
<h2>Halaman form tambah golongan</h2><br>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="judul" class="form-label">Judul Arikel</label>
    <input type="text" class="form-control" name="judul" placeholder="Masukkan judul" value="<?php echo $pecah['judul']; ?>">
  </div>
  <div class="form-group">
    <label for="kategori" class="form-label">Kategori</label>
    <select name="kategori" class="form-control">
      <option value="">== Pilih Kategori ==</option>
      <option value="Narkotika">Narkotika</option>
      <option value="Psikotropika">Psikotropika</option>
      <option value="Zat Adiktif">Zat Adiktif</option>
    </select>
  </div>
  <div class="form-group">
    <label for="golongan" class="form-label">Golongan</label>
    <select name="golongan" class="form-control">
      <option value="">== Pilih Golongan ==</option>
      <option value="Golongan I">Golongan I</option>
      <option value="Golongan II">Golongan II</option>
      <option value="Golongan III">Golongan III</option>
      <option value="Golongan IV">Golongan IV</option>
    </select>
  </div>
  <div class="form-group">
		<video src="../video/<?php echo $pecah['animasi']; ?>" width="200s"></video>
	</div>
  <div class="form-group">
    <label for="animasi" class="form-label">Animasi</label>
    <input type="file" name="animasi" class="form-control">
  </div>
  <div class="form-group">
    <label for="keterangan">Keterangan</label>
    <textarea rows="5" name="keterangan" class="form-control" placeholder="Masukkan keterangan"><?php echo $pecah['keterangan']; ?></textarea>
  </div>
	<div class="form-group">
		<button class="btn btn-primary" name="simpan"><i class="fa fa-save"> Simpan</i></button>
		<a href="index.php?halaman=golongan" class="btn btn-success"><i class="fa fa-chevron-left"> Kembali</i></a>
	</div>
</form>

<?php
  include 'config/koneksi.php';
	if (isset($_POST["simpan"]))
	{
		$name=$_FILES['animasi']['name'];
    $type=$_FILES['animasi']['type'];
    $tmp_name=$_FILES['animasi']['tmp_name'];
    $size=$_FILES['animasi']['size'];
    $file_destination = "../video/".$name;
    $kategori = $_POST['kategori'];
    $golongan = $_POST['golongan'];
    $keterangan = $_POST['keterangan'];
    $judul = $_POST['judul'];
    if(move_uploaded_file($tmp_name, $file_destination))
    {
      $sql = "UPDATE golongan SET kategori='$kategori', golongan='$golongan', animasi='$name', keterangan='$keterangan', judul='$judul' WHERE id_golongan='$_GET[id]'";
      $result = mysqli_query($koneksi, $sql);
    }
    else 
    {
      $sql = "UPDATE golongan SET kategori='$kategori', golongan='$golongan', keterangan='$keterangan', judul='$judul' WHERE id_golongan='$_GET[id]'";
      $result = mysqli_query($koneksi, $sql);
    }
    echo "<div class='alert alert-info'>Data berhasil disimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=golongan'>";
	}
?>