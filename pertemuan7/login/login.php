<?php 
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])){
    // cek username dan pasword
    if ($_POST["user"]=="admin" && $_POST["pass"] == "2006"){
    // jika benar, redirect ke halaman admin
    header("Location: admin.php");
    exit;
}else {
        // jika salah, tampilkan kesalahan 
        $error = true;
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<body>

    <?php if(isset($error)):?>
    <p style="color: red; font-style:italic;">Terjadi kesalahan!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="user">Username: </label>
                <input type="text" name="user" id="user">
            </li>
            <br>
            <li>
                <label for="pass">Password: </label>
                <input type="password" name="pass" id="pass">
            </li>
            <br>
            <button type="submit" name="submit">Kirim</button>
        </form>
    </ul>
</body>

</html>