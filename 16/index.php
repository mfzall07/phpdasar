<?php
    session_start();
    if ( !isset($_SESSION["login"])) {
        header("location: login.php");
        exit;
    }

    require 'functions.php';
    $employees = query("SELECT * FROM employees");

    if( isset($_POST["search"]) ) {
        $employees = cari($_POST["keyword"]);
    }


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
    <a href="logout.php">logout</a>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">

    <input type="text" name="keyword" size="30" autofocus placeholder="Masukkan Keyword Pencarian ..." autocomplete="off">
    <button type="submit" name="search">Cari</button>
    <br><br>

    </form>

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
        <td><img src="img/<?= $employee["gambar"]; ?>" class="image"></td>
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