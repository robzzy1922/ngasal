<?php
session_start();
if(!isset($_SESSION["login"])){
    header("location: ../view/index.php");
    exit;
}
require '../function/functions.php';

$id = $_GET["id"];

$flm = query("SELECT * FROM list_film WHERE id = $id")[0];


if (isset($_POST["submit"])) {
    // cek apakah berhasil atau tidak
   if (ubah($_POST) > 0){
    
    echo "<script>alert('Data Berhasil diubah');
    document.location.href = '../view/admin.php';</script>";
   }else{
    echo "<script>alert('Data Gagal diubah');
    document.location.href = '../view/admin.php';</script>";
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Film</title>
</head>

<body>
    <h1>EDIT DATA FILM</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $flm["id"]?>">
        <input type="hidden" name="posterLama" value="<?= $flm["poster"]?>">
        <ul>
            <li style="list-style-type: none;">
                <label for="judul">Judul: </label>
                <input type="text" name="judul" id="judul" required value="<?= $flm["judul"]?>">
            </li>
            <li style="list-style-type: none;">
                <label for="durasi">Durasi: </label>
                <input type="text" name="durasi" id="durasi" required value="<?= $flm["durasi"]?>">
            </li>
            <li style="list-style-type: none;">
                <label for="genre">Gendre: </label>
                <input type="text" name="genre" id="genre" required value="<?= $flm["genre"]?>">
            </li>
            <li style="list-style-type: none;">
                <label for="sutradara">Sutradara: </label>
                <input type="text" name="sutradara" id="sutradara" required value="<?= $flm["sutradara"]?>">
            </li>
            <li style="list-style-type: none;">
                <label for="rilis">Rilis: </label>
                <input type="text" name="rilis" id="rilis" required value="<?= $flm["rilis"]?>">
            </li>
            <li style="list-style-type: none;">
                <label for="poster">Poster: </label> <br>
                <img src="../img/<?= $flm['poster']; ?>" alt="" width="50"> <br>
                <input type="file" name="poster" id="poster">
            </li>
            <button type=" submit" name="submit">Edit Data</button>
        </ul>
    </form>
</body>

</html>