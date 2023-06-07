<?php
	/* script hapus data pada php dan msqyli */
	$koneksi->query("DELETE FROM kasus WHERE id_kasus='$_GET[id]'");

	echo "<script>alert('Data berhasil dihapus');</script>";
	echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=kasus'>";
?>