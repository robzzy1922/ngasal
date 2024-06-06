<?php
require '../function/functions.php'; 
?>
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

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="../view/login.php" role="button">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>