<h2>Data Psikotropika</h2><br>
<a href="index.php?halaman=tambah_psikotropika" class="btn btn-primary"><i class="fa fa-plus"> Tambah Psikotropika</i></a><br><br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th class="text-center">No</th>
      <th>Gambar</th>
      <th>Judul Artikel</th>
      <th>Isi Artikel</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php $ambil = $koneksi->query("SELECT * FROM psikotropika"); ?>
    <?php while($pecah = $ambil->fetch_assoc()) { ?>
      <tr>
        <td class="text-center"><?php echo $nomor; ?></td>
        <td><img src="../images/<?php echo $pecah["gambar"]; ?>" width="100"></td>
        <td><?php echo $pecah["judul"]; ?></td>
        <td><?php echo $pecah["keterangan"]; ?></td>
        <td class="text-center">
          <a onclick="return confirm('Yakin Hapus Data ini?')" href="index.php?halaman=hapus_psikotropika&id=<?php echo $pecah['id_psikotropika']; ?>" class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></a>
          <a href="index.php?halaman=ubah_psikotropika&id=<?php echo $pecah['id_psikotropika']; ?>" class="btn btn-warning"><i class="fa fa-edit"> Ubah</i></a>
        </td>
      </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>