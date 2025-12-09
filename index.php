<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa</h2>
<a href="tambah.php">Tambah Data</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nama Lengkap</th>
        <th>NIS</th>
        <th>Kelas</th>
        <th>Jurusan</th>
    </tr>

    <?php
    $data = mysqli_query($koneksi, "SELECT * FROM siswa");
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?= $d['id']; ?></td>
        <td><?= $d['nama_lengkap']; ?></td>
        <td><?= $d['nis']; ?></td>
        <td><?= $d['kelas']; ?></td>
        <td><?= $d['jurusan']; ?></td>
        <td>
       <td>
    <a href="edit.php?id=<?= $d['id']; ?>">
        <button style="background:blue;color:white;padding:5px 10px;border:none;border-radius:4px;">Edit</button>
    </a>

    <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
        <button style="background:red;color:white;padding:5px 10px;border:none;border-radius:4px;">Delete</button>
    </a>
</td>

        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
