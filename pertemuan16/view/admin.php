<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("location: ../view/index.php");
    exit;
}


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    .card {
        width: 10rem;
        /* atur lebar card sesuai kebutuhan Anda */
        margin-bottom: 20px;
        /* jarak antar card */
    }

    .card-text {
        margin-bottom: auto;
    }

    .nav-item {
        margin-left: 25px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Robz Film</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-end" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-primary" href="../view/logout.php" role="button">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 style="text-align:center;">List Film</h1>

        <a class="btn btn-primary" href="../logic/tambah.php">Tambah Film</a>
        <br><br>
        <form action="" method="post">
            <input type="text" name="keyword" placeholder="cari data film" autocomplete="off">
            <button type="submit" name="cari"> Cari </button>
        </form>
        <br>
        <table class="table table-success table-striped table-bordered">
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
    </div>
</body>

</html>