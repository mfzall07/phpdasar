<?php

if (!isset($_GET["nama"]) || 
    !isset($_GET["nip"]) ||
    !isset($_GET["alamat"]) ||
    !isset($_GET["nomor"])
    ) {
    header("LOcation: latihan1.php");
    exit;
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        .image {
                width:100px;
                height:100px;
                border-radius:50%;
                margin-left:50px;
            }
    </style>
</head>
<body>
    
    <img src="../tugas/img/<?= $_GET["foto"]?>" class="image">
    <ul>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["nip"] ?></li>
        <li><?= $_GET["alamat"] ?></li>
        <li><?= $_GET["nomor"] ?></li>
    </ul>

    <a href="latihan1.php">Back To List</a>

</body>
</html>