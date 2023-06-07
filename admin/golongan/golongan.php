<h2>Data Kasus dan Golongan</h2><br>
<a href="index.php?halaman=tambah_golongan" class="btn btn-primary"><i class="fa fa-plus">  Tambah Golongan</i></a><br><br>

<table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">No</th>
      <!-- <th class='text-center'>Id Berita</th> -->
      <th>Judul Artikel</th>
      <th>Animasi</th>
      <th>Kategori</th>
      <th>Keterangan</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php $ambil = $koneksi->query("SELECT * FROM golongan") ?>
    <?php while( $pecah = $ambil->fetch_assoc()) { ?>
    <tr>
      <td class='text-center'><?php echo $nomor; ?></td>
      <!-- <td class='text-center'><?php echo $pecah["id_berita"]; ?></td> -->
      <td><?php echo $pecah["judul"]; ?></td>
      <td><?php echo $pecah["video_animasi"]; ?></td>
      <td><?php echo $pecah["kategori"]; ?></td>
      <td><?php echo $pecah["keterangan"]; ?></td>
      <td class="text-center">
        <a href="index.php?halaman=hapus_golongan&id=<?php echo $pecah['id_golongan']; ?>" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data ini?')" ><i class="fa fa-trash-o"> Hapus</i></a>
        <a href="index.php?halaman=ubah_golongan&id=<?php echo $pecah['id_golongan']; ?>" class="btn btn-warning"><i class="fa fa-edit"> Ubah</i></a>
      </td>
    </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>