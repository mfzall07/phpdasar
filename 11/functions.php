<?php

    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }
    function tambah($data){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $nip = htmlspecialchars($data["nip"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $nomor = htmlspecialchars($data["nomor"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO employees
                    VALUES
                    ('','$nama','$nip','$alamat','$nomor','$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }

    function hapus($id){
        global $conn;
        mysqli_query ($conn, "DELETE FROM employees WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function update($data){
        global $conn;

        $id = htmlspecialchars($data["id"]);
        $nama = htmlspecialchars($data["nama"]);
        $nip = htmlspecialchars($data["nip"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $nomor = htmlspecialchars($data["nomor"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE employees SET
                    nama = '$nama',
                    nip = '$nip',
                    alamat = '$alamat',
                    nomor = '$nomor',
                    gambar = '$gambar'
        WHERE id=$id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


?>