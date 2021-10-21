<?php

    require 'functions.php';
    $employees = query("SELECT * FROM employees");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NIP</th>
        <th>Alamat</th>
        <th>Nomor</th>
    </tr>

    <?php $i=1 ?>
    <?php foreach ($employees as $employee) :?>

    <tr>
        <td><?= $i;?></td>
        <td>
            <a href="update.php?id=<?= $employee["id"]; ?>">Update</a> |
            <a href="hapus.php?id=<?= $employee["id"]; ?>" onclick="return confirm('yakin');">Hapus</a>
        </td>
        <td><img src="../tugas/img/<?= $employee["gambar"]; ?>" class="image"></td>
        <td><?= $employee["nama"]; ?></td>
        <td><?= $employee["nip"]; ?></td>
        <td><?= $employee["alamat"]; ?></td>
        <td><?= $employee["nomor"]; ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>

    </table>

</body>
</html>