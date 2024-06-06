<?php 
// koneksi ke database
require '../function/functions.php';
$films = query("SELECT * FROM list_film");
// bisa pakai ASC (urutan kecil ke besar) contoh 1 - seterusnya
// bisa pakai DESC (urutan besar ke kecil) contoh 100 - 1

if(isset($_POST["cari"])){
    $films = cari($_POST["keyword"]); 
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <h1 style="text-align:center;">List Film</h1>

    <a href="../logic/tambah.php">Tambah Film</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" placeholder="cari data film" autocomplete="off">
        <button type="submit" name="cari"> Cari </button>
    </form>
    <br>

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
                <a href="../logic/ubah.php?id=<?= $row["id"]; ?>">Edit</a> |
                <a href="../logic/hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Real kah?')">Delete</a>
            </td>
            <td><?= $row["judul"] ?></td>
            <td><?= $row["durasi"] ?></td>
            <td><?= $row["genre"] ?></td>
            <td><?= $row["sutradara"] ?></td>
            <td><?= $row["rilis"] ?></td>
            <td><img src="../img/<?= $row["poster"]; ?>" alt="" width="100"></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach ?>
    </table>

</body>

</html>