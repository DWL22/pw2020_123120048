<?php 
require 'functions.php';

//jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

//ambil data id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE  id = $id");


//cek apa tombol ubah sudah di tekan
if(isset ($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo " <script>
        alert('data berhasil di ubah!');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "data gagal di ubah!";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data Mahasiswa</title>
</head>
<body>
    <h3>From Ubah Data Mahasiswa</h3>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
        <li>
            <label>
                Nama :
                <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
            </label>
        </li>
        <li>
            <label>
                NRP :
                <input type="text" name="nrp" required value="<?= $m['nrp']; ?>">
            </label>
        </li>
        <li>
            <label> Email :
                <input type="text" name="email" required value="<?= $m['email']; ?>">
            </label>
        </li>
        <li>
            <label>
                Jurusan :
                <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
            </label>
        </li>
        <li>
            <label>
                Gambar
                <input type="text" name="gambar" required value="<?= $m['gambar']; ?>">
            </label>
        </li>
        <li>
            <button type="submit" name="ubah">Ubah data</button>
        </li>
    </ul>

    </form>
</body>
</html>