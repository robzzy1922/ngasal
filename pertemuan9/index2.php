<?php 
// koneksi ke database

$koneksi = new mysqli("localhost","root","","film");

// ambil data dari tabel film / query data film
$result = mysqli_query($koneksi, "SELECT * FROM list_film");


// mengambil data (fetch) film dari object result
// mysqli_fetch_row() / mengembalikan array numerik
// mysqli_fetch_assoc() / mengembalikan array assosiarive (recomended)
// mysqli_fetch_array() / mengembalikan array numerik dan juga assosiative/ kekurangannya data yang ditampilkan double atau makin berat
// mysqli_fetch_object() 

// while($film = mysqli_fetch_assoc($result)){
// var_dump($film);
// }

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
        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Edit</a> |
                <a href="">Delete</a>
            </td>
            <td><?= $row["judul"] ?></td>
            <td><?= $row["durasi"] ?></td>
            <td><?= $row["genre"] ?></td>
            <td><?= $row["sutradara"] ?></td>
            <td><?= $row["rilis"] ?></td>
            <td><img src="img/<?= $row["poster"]; ?>" alt="" width="100"></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile ?>
    </table>
</body>

</html>