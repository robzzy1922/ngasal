<?php
session_start();
if(!isset($_SESSION["login"])){
    header("location: ../view/index.php");
    exit;
}
require '../function/functions.php';

if (isset($_POST["submit"])) {

    // cek apakah berhasil atau tidak
   if (tambah($_POST) > 0){
    
    echo "<script>alert('Data Berhasil ditambahkan');
    document.location.href = '../view/admin.php';</script>";
   }else{
    echo "<script>alert('Data Gagal ditambahkan');
    document.location.href = '../view/admin.php';</script>";
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Film</title>
</head>

<body>
    <h1>TAMBAH DATA FILM</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li style="list-style-type: none;">
                <label for="judul">Judul: </label>
                <input type="text" name="judul" id="judul" placeholder="Spiderman Apalah" required>
            </li>
            <li style="list-style-type: none;">
                <label for="durasi">Durasi: </label>
                <input type="text" name="durasi" id="durasi" placeholder="100 menit" required>
            </li>
            <li style="list-style-type: none;">
                <label for="genre">Gendre: </label>
                <input type="text" name="genre" id="genre" placeholder="Action" required>
            </li>
            <li style="list-style-type: none;">
                <label for="sutradara">Sutradara: </label>
                <input type="text" name="sutradara" id="sutradara" placeholder="Anita Max Wynn" required>
            </li>
            <li style="list-style-type: none;">
                <label for="rilis">Rilis: </label>
                <input type="text" name="rilis" id="rilis" placeholder="2023" required>
            </li>
            <li style="list-style-type: none;">
                <label for="poster">Poster: </label>
                <input type="file" name="poster" id="poster">
            </li>
            <button type="submit" name="submit">Tambah Data</button>
        </ul>
    </form>
</body>

</html>