<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees List</title>
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
    <?php 
        $employees = [
            [
                "nama" => "Muh Faizal",
                "nip" => "17102015",
                "alamat" => "Beringin",
                "nomor" => "08124552764",
                "foto" => "1.jpg"
            ],
            [
                "nama" => "Faizal",
                "nip" => "17102001",
                "alamat" => "Berkoh",
                "nomor" => "08124550001",
                "foto" => "2.jpg"
            ],
            [
                "nama" => "Zall",
                "nip" => "17102002",
                "alamat" => "Rajawali",
                "nomor" => "08124550002",
                "foto" => "3.jpg"
            ],
            [
                "nama" => "Ichal",
                "nip" => "17102003",
                "alamat" => "Hosnoto Suwiryo",
                "nomor" => "08124550003",
                "foto" => "4.jpg"
            ],
            [
                "nama" => "Rias",
                "nip" => "17102004",
                "alamat" => "Riau",
                "nomor" => "08124550004",
                "foto" => "5.jpg"
            ],
            [
                "nama" => "Gauri",
                "nip" => "17102005",
                "alamat" => "Pramuka",
                "nomor" => "08124550005",
                "foto" => "6.jpg"
            ],
            [
                "nama" => "Nurhasanah",
                "nip" => "17102006",
                "alamat" => "Panjaitan",
                "nomor" => "08124550006",
                "foto" => "7.jpg"
            ],
            [
                "nama" => "Ias",
                "nip" => "17102007",
                "alamat" => "Sidodadi",
                "nomor" => "08124550007",
                "foto" => "8.jpg"
            ],
            [
                "nama" => "Rahma",
                "nip" => "17102008",
                "alamat" => "Enggang",
                "nomor" => "08124550008",
                "foto" => "9.jpg"
            ],
            [
                "nama" => "Khaidir",
                "nip" => "17102009",
                "alamat" => "Cendrawasih",
                "nomor" => "08124550009",
                "foto" => "10.jpg"
            ]
        ];
    ?>
    <h1>Employees List</h1>
    <ul>
    <?php foreach ($employees as $employee) :?>
            <li>Nama : 
                <a href="latihan2.php?foto=<?= $employee["foto"] ?>& 
                nama=<?= $employee["nama"] ?>& 
                nip=<?= $employee["nip"] ?>&
                alamat=<?= $employee["alamat"] ?>&
                nomor=<?= $employee["nomor"] ?>
                ">
                <?= $employee["nama"]; ?></a>
            </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>