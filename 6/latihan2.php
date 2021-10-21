<?php

    // $mahasiswa = [
    //     ["Muh Faizal", "17102015", "17101015@ittelkom-pwt.ac.id", "Teknik Informatika"],
    //     ["Rias Gauri Nurhasanah", "19102212", "19102212@ittelkom-pwt.ac.id", "Teknik Informatika"]
    // ];
        $mahasiswa = [
            ["nama" => "Muh Faizal", "nim" => "17102015", "email" => "17102015@ittelkom-pwt.ac.id", "jurusan" => "Teknik Informatika"],
            ["nama" => "Rias Gauri Nurhasanah", "nim" => "19102212", "email" => "19102212@ittelkom-pwt.ac.id", "jurusan" => "Teknik Informatika"]
        ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
            <ul>
                <li>Nama :<?= $mhs["nama"]; ?></li>
                <li>Nim :<?= $mhs["nim"]; ?></li>
                <li>Email :<?= $mhs["email"]; ?></li>
                <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
            </ul>
    <?php endforeach; ?>
</body>
</html>