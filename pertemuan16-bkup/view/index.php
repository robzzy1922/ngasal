<?php 

require '../function/functions.php';
$films = query("SELECT * FROM list_film");



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flm | Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
                        <a class="nav-link active" aria-current="page" href="registrasi.php">Sign Up</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-primary" href="../view/login.php" role="button">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <h1 class="text-center mb-4">Film tersedia</h1>

        <div class="row justify-content-center">
            <?php foreach($films as $row) : ?>
            <div class="col-md-2">
                <div class="card">
                    <img src="../img/<?= $row["poster"]; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title"><?= $row["judul"]; ?></h6>
                        <hr>
                        <p class="card-text">Genre: <?= $row["genre"]; ?></p>
                        <p class="card-text">Durasi: <?= $row["durasi"]; ?></p>
                        <p class="card-text">Sutradara: <?= $row["sutradara"]; ?></p>
                        <p class="card-text">Rilis: <?= $row["rilis"]; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>