<?php 
// koneksi ke database
require 'functions.php';
$films = query("SELECT * FROM list_film")


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1 style="text-align:center;">List Film</h1>

    <a href="tambah.php">Tambah Film</a>

    <table border="1" cellpadding="5" cellspacing="0" style="margin-left: 120px;">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Judul</th>
            <th>Durasi</th>
            <th>Genre</th>
            <th>Sutradara</th>
            <th>Rilis</th>
            <th>Poster</th>
        </tr>
        <?php $i=1 ?>
        <?php foreach( $films as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Edit</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Real kah?')">Delete</a>
            </td>
            <td><?= $row["judul"] ?></td>
            <td><?= $row["durasi"] ?></td>
            <td><?= $row["genre"] ?></td>
            <td><?= $row["sutradara"] ?></td>
            <td><?= $row["rilis"] ?></td>
            <td><img src="img/<?= $row["poster"]; ?>" alt="" width="100"></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>

</html>