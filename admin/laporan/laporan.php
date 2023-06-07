<h2>Halaman Laporan</h2><br>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th class="text-center">No</th>
      <th>Nama Pelapor</th>
      <th>E-Mail</th>
      <th>Isi Laporan</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      include 'config/koneksi.php';
      $nomor = 1;
      $ambil = $koneksi->query("SELECT * FROM laporan");
      while($pecah = $ambil->fetch_assoc()) :
    ?>
    <tr>
      <td class="text-center"><?php echo $nomor; ?></td>
      <td style="width: 20%;"><?php echo $pecah['nama_pelapor']; ?></td>
      <td style="width: 20%;"><?php echo $pecah['telp_pelapor']; ?></td>
      <td><?php echo $pecah['isi_laporan']; ?></td>
    </tr>
    <?php 
      $nomor++;
      endwhile;
    ?>
  </tbody>
</table>