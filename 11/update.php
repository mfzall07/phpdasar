<?php
    
    include 'functions.php';
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
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">

    <ul>
            <input type="hidden" name="id" id="id" value="<?= $employee["id"];?>">
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
            <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar" value="<?= $employee["gambar"];?>">
        </li>
        <li>
            <button type="submit" name="submit">Update</button>
        </li>
    </ul>

    </form>

</body>
</html>