<?php include 'koneksi.php'; ?>

<h2>Tambah Data Siswa</h2>
<form method="post" action="tambah_aksi.php">
    Nama Lengkap: <br>
    <input type="text" name="nama_lengkap" required><br><br>

    NIS: <br>
    <input type="text" name="nis" required><br><br>

    Kelas: <br>
    <input type="text" name="kelas" required><br><br>

    Jurusan: <br>
    <input type="text" name="jurusan" required><br><br>

    <button type="submit">Save</button>
</form>
