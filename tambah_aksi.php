<?php
include 'koneksi.php';

$nama   = $_POST['nama_lengkap'];
$nis    = $_POST['nis'];
$kelas  = $_POST['kelas'];
$jurusan= $_POST['jurusan'];

mysqli_query($koneksi, "INSERT INTO siswa VALUES('', '$nama', '$nis', '$kelas', '$jurusan')");

header("location:index.php");
?>
