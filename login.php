<?php
session_start();
include('./db_conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars(trim($_POST['username']));
    $password = trim($_POST['password']);

    // proses verifikasi dan validasi username dan password
    // cek apakah username ada di database
    if (!empty($username) && !empty($password)) {
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['users'] = $user['username'];
                header("Location: dashboard.php");
                exit;
            } else {
                $error = "Password salah!";
            }
        } else {
            $error = "Username tidak ditemukan!";
        }
    } else {
        $error = "Semua field harus diisi!";
    }
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
        <?php if (isset($error)) {
            echo "<p style='color:red;'>$error</p>";
        } ?>
        <form class="form" action="" method="POST">
            <input type="text" class="input" name="username" placeholder="Username" required>
            <input type="password" class="input" name="password" placeholder="Password" required>
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