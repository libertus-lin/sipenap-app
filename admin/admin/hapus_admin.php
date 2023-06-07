<?php
	/* script hapus data pada php dan msqyli */
	$koneksi->query("DELETE FROM admin WHERE id_admin='$_GET[id]'");

	echo "<script>alert('Data berhasil dihapus');</script>";
	echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=administrator'>";
?>