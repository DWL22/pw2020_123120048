<?php 
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

//ambil id dari URL
$id =  $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id" );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail mahasiswa</title>
</head>
<body>
  <h3>
    <ul>
        <li><img src="img/<?= $m['gambar']; ?>" width="250"></li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>jurusan : <?= $m['jurusan']; ?></li>
        <li><a href="ubah.php?id=<?= $m['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin hapus data ini ?');">hapus</a></li>
        <li><a href="index.php">kembali ke daftar mahasiswa</a></li>
    </ul>
  </h3>  
</body>
</html>