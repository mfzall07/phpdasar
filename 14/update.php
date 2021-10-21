<?php
    
    require 'functions.php';
    $id = $_GET["id"];

    $employee = query("SELECT * FROM employees WHERE id=$id")[0];

    if( isset($_POST["submit"]) ){
        
       if( update($_POST) > 0 ){
           echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'index.php';
                </script>
           ";
       }else {
           echo "<script>
                    alert('Data Gagal Diubah');
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
    <style>
    .image {
            width:50px;
            height:50px;
            border-radius:50%;
        }
    </style>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">

    <ul>
            <input type="hidden" name="id" value="<?= $employee["id"];?>">\
            <input type="hidden" name="gambarLama" value="<?= $employee["gambar"];?>">
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?= $employee["nama"];?>">
        </li>
        <li>
            <label for="nip">NIP : </label>
            <input type="text" name="nip" id="nip" value="<?= $employee["nip"];?>">
        </li>
        <li>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" value="<?= $employee["alamat"];?>" required>
        </li>
        <li>
            <label for="nomor">Nomor : </label>
            <input type="text" name="nomor" id="nomor" value="<?= $employee["nomor"];?>">
        </li>
        <li>
            <label for="gambar">Gambar : </label><br>
            <img src="img/<?= $employee["gambar"]; ?>" class="image"><br>
            <input type="file" name="gambar" id="gambar">
        </li>
        <li>
            <button type="submit" name="submit">Update</button>
        </li>
    </ul>

    </form>

</body>
</html>