<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_lengkap'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi, "UPDATE siswa SET 
    nama_lengkap='$nama',
    nis='$nis',
    kelas='$kelas',
    jurusan='$jurusan'
WHERE id='$id'");

header("location:index.php");
?>
