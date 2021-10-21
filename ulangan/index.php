<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulangan</title>
    <style>
        .image {
            width:100px;
            height:100px;
            border-radius:50%;
            margin-left:50px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <h1>CRUD</h1>
    <br><br>
    <a href="tambah.php">Tambah Data</a>
    <br><br>

    <form action="" method="post">
    <input type="text" name="keyword" size="69" autofocus placeholder="Masukkan Keyword" autocomplete="off">
    <button type="submit" name=search> Cari Data</button>
    <br><br>
    </form>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>Nomor</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    
    <?php $i=1 ?>
    <?php foreach ($mahasiswa as $mhs) :?>

    <tr>
        <td><?= $i;?></td>
        <td><img src="../tugas/img/<?= $mhs["gambar"]; ?>" class="image"></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["nim"]; ?></td>
        <td><?= $mhs["kelas"]; ?></td>
        <td>
            <a href="">Update</a> |
            <a href="">Hapus</a>
        </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>

    </table>


</body>
</html>