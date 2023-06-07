<?php 
// logout untuk sidar kiri
session_destroy();
// echo "<script>alert('Anda telah logout!')</script>";
echo "<script>location='../index.php';</script>";
?>