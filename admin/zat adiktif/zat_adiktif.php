<h2>Data Zat Adiktif</h2><br>
<a href="index.php?halaman=tambah_zat_adiktif" class="btn btn-primary"><i class="fa fa-plus"> Tambah Zat
    Adiktif</i></a><br><br>
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
    <?php $ambil = $koneksi->query("SELECT * FROM zat_adiktif"); ?>
    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
      <tr>
        <td class="text-center"><?php echo $nomor; ?></td>
        <td><img src="../images/<?php echo $pecah["gambar"]; ?>" width="100"></td>
        <td><?php echo $pecah["judul"]; ?></td>
        <td><?php echo $pecah["keterangan"]; ?></td>
        <td class="text-center">
          <a onclick="return confirm('Yakin Hapus Data ini?')" href="index.php?halaman=hapus_zat_adiktif&id=<?php echo $pecah['id_zat_adiktif']; ?>" class="btn btn-danger"><i class="fa fa-tras"> Hapus</i></a>
          <a href="index.php?halaman=ubah_zat_adiktif&id=<?php echo $pecah['id_zat_adiktif']; ?>" class="btn btn-warning"><i class="fa fa-edit"> Ubah</i></a>
        </td>
      </tr>
      <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>