<?php 
session_start();

if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}
require 'functions.php';

//ketika tombol login di tekan
if (isset($_POST['login'])){
   $login =  login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login    </title>
</head>
<body>
    <h3>Form login</h3>
    <?php if (isset($login['error'])) : ?>
        <p><?= $login['pesan']; ?></p>
        <?php endif ?>
    <form action="" method="POST">
    <ul>
        <li>
            <label>
                Username :
                <input type="text" name="username" autofocus autocomplete="off" required>
            </label>
        </li>
        <li>
            <label>
                Pasword :
                <input type="password" name="password" required>
            </label>
        </li>
        <li>
            <button type="submit" name="login">Login</button>
        </li>
        <li>
            <a href="registrasi.php">Tambah user</a>
        </li>
    </ul>

    </form>
</body>
</html>