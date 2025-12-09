<?php
$koneksi = mysqli_connect("localhost", "root", "", "ujian_aryadwis");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
