<?php include 'koneksi.php'; 
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<h2>Edit Data Siswa</h2>
<form method="post" action="edit_aksi.php">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">

    Nama Lengkap:<br>
    <input type="text" name="nama_lengkap" value="<?= $d['nama_lengkap']; ?>"><br><br>

    NIS:<br>
    <input type="text" name="nis" value="<?= $d['nis']; ?>"><br><br>

    Kelas:<br>
    <input type="text" name="kelas" value="<?= $d['kelas']; ?>"><br><br>

    Jurusan:<br>
    <input type="text" name="jurusan" value="<?= $d['jurusan']; ?>"><br><br>

    <button type="submit">Update</button>
</form>
