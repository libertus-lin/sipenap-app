<?php
/* script hapus data pada php dan msqyli */
$koneksi->query("DELETE FROM narkotika WHERE id_narkotika='$_GET[id]'");

echo "<script>alert('Data berhasil dihapus');</script>";
echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=narkotika'>";
