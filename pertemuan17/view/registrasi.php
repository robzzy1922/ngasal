<?php
session_start();
if(isset($_SESSION["login"])){
    header("location: ../view/admin.php");
    exit;
}

require '../function/functions.php';

if ( isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo "<script>
        alert('User baru berhasil ditambahkan');
        </script>";
    }else{
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Regist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
    label {
        display: block;
    }
    </style>
</head>

<body>
    <a class="btn btn-warning" href="../view/index.php" role="button">Back</a>
    <h1>DAFTAR</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username: </label>
                <input type="text" name="username" id="username" placeholder="masukkan username">
            </li>
            <br>
            <li>
                <label for="password">password: </label>
                <input type="password" name="password" id="password">
            </li>
            <br>
            <li>
                <label for="password2">verifikasi password: </label>
                <input type="password" name="password2" id="password2">
            </li>
            <br>
            <li>
                <button type="submit" name="register">Sign Up</button>
            </li>
        </ul>
    </form>
</body>

</html>