<?php

    $db = mysqli_connect("localhost", "root", "", "phpdasar");
    $tb = mysqli_query($db, "SELECT * FROM employees");


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
    <?php while( $row = mysqli_fetch_assoc($tb)) :?>

    <tr>
        <td><?= $i;?></td>
        <td>
            <a href="">Update</a> |
            <a href="">Hapus</a>
        </td>
        <td><img src="../tugas/img/<?= $row["gambar"]; ?>" class="image"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nip"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["nomor"]; ?></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile; ?>

    </table>

</body>
</html>