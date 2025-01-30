<?php

include('./db_conn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = htmlspecialchars(trim())
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <!-- icon web -->
    <link rel="icon" href="./img/logo.jpg" type="image/jpg">
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <!-- From Uiverse.io by akshat-patel28 -->
    <div class="form-container">
        <p class="title">Silakan Login</p>
        <form class="form" action="" method="POST">
            <input type="email" class="input" placeholder="Email">
            <input type="password" class="input" placeholder="Password">
            <p class="page-link">
                <span class="page-link-label">Lupa Password?</span>
            </p>
            <button class="form-btn" type="submit">Log in</button>
        </form>
        <p class="sign-up-label">
            Kembali ke<a href="./index.php" class="sign-up-link">Beranda</a>
        </p>
    </div>

</body>

</html>