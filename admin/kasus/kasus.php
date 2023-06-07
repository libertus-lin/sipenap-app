<h2>Data Kasus dan Tersangka</h2><br>
<a href="index.php?halaman=tambah_kasus" class="btn btn-primary"><i class="fa fa-plus">  Tambah Tersangka</i></a>
<a href="../report/report_kasus.php" target="_blank" class="btn btn-success"><i class="fa fa-print"> Export Data</i></a><br><br>

<table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">No</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Kasus</th>
      <th>Status</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php $ambil = $koneksi->query("SELECT * FROM kasus") ?>
    <?php while( $pecah = $ambil->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $nomor; ?></td>
      <td><?php echo $pecah["nama_tersangka"]; ?></td>
      <td><?php echo $pecah["jk"]; ?></td>
      <td><?php echo $pecah["kasus"]; ?></td>
      <td><?php echo $pecah["status"]; ?></td>
      <td class="text-center">
        <a onclick="return confirm('Yakin akan menghapus data ini?')" href="index.php?halaman=hapus_kasus&id=<?php echo $pecah['id_kasus']; ?>" class="btn btn-danger"><i class="fa fa-edit"> Hapus</i></a>
        <a href="index.php?halaman=ubah_kasus&id=<?php echo $pecah['id_kasus']; ?>" class="btn btn-warning"><i class="fa fa-trash-o"> Ubah</i></a>
      </td>
    </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>