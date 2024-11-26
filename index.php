<?php
require 'functions.php';

$ieu = query("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Data Siswa</h1>

<a href="tambahdata.php">Tambah Data Siswa</a>
<br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $ieu as $row ) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
            <td><?= htmlspecialchars($row["nama"]); ?></td>
            <td><?= htmlspecialchars($row["NIS"]); ?></td>
            <td><?= htmlspecialchars($row["jurusan"]); ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>