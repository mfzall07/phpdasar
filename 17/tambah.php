<?php
    session_start();
    if ( !isset($_SESSION["login"])) {
        header("location: login.php");
        exit;
    }
    include 'functions.php';

    if( isset($_POST["submit"]) ){
        
       if( tambah($_POST) > 0 ){
           echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'index.php';
                </script>
           ";
       }else {
           echo "<script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'index.php';
                </script>
       ";
       }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST" enctype= "multipart/form-data">

    <ul>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="nip">NIP : </label>
            <input type="text" name="nip" id="nip">
        </li>
        <li>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" required>
        </li>
        <li>
            <label for="nomor">Nomor : </label>
            <input type="text" name="nomor" id="nomor">
        </li>
        <li>
            <label for="gambar">Gambar : </label>
            <input type="file" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Kirim</button>
        </li>
    </ul>

    </form>

</body>
</html>