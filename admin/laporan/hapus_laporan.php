<?php
	/* script hapus data pada php dan msqyli */
	$koneksi->query("DELETE FROM golongan WHERE laporan='$_GET[id]'");
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=laporan'>";
?>