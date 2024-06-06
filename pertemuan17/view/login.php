<?php
session_start();
require '../function/functions.php';

if (isset($_COOKIE['id']) && isset($_COOKIE['key']) ){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if ($key=== hash('sha256',$row['username'])){
        $_SESSION['login'] = true;
    }

    }



if(isset($_SESSION["login"])){
    header("location: ../view/admin.php");
    exit;
}

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $admin = "robi";

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $result_admin = mysqli_query($conn, "SELECT * FROM users WHERE username = '$admin'");
    
    // cek username
    if(mysqli_num_rows($result) === 1){

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            // set session
            $_SESSION["login"] = true;
            
            //cek remember me
        if (isset($_POST['remember'])){
            //buat cookie
            setcookie('id',$row['id'],time()+60);
            setcookie('key',hash('sha256',$row['username']));
        }


            header("location: ../view/index_log.php");
        }
        if (password_verify($admin, $row["password"])){
            // set session
            $_SESSION["login"] = true;
            
            header("location: ../view/admin.php");
        }
    } 
    $error = true;



}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <?php if(isset($error)) : ?>
    <p style="color: red;"><em>Username / Password salah!</em></p>
    <?php endif; ?>

    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>
        <br><br>
        <button type="submit" name="login">Login</button>
    </form>

</body>

</html>