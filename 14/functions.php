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
        
        $gambar = upload();
        if (!$gambar) {
            return false;
        }

        $query = "INSERT INTO employees
                    VALUES
                    ('','$nama','$nip','$alamat','$nomor','$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }

    function upload() {

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        //Cek apakah tidak ada gambar yang diupload

        if ($error === 4){
            echo "<script> 
                    alert ('Pilih Gmabar Terlebih Dahulu !');
                  </script>";
            return false;
        }

        //Cek Apakah yang diupload adalah Gambar

        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar= explode('.', $namaFile);
        $ekstensiGambar= strtolower(end($ekstensiGambar));
        if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script> 
                    alert ('Yang Anda Upload Bukan Gambar!');
                  </script>";
            return false;
        }

        //Cek jika ukurannya terlalu besar
        if( $ukuranFile > 3000000){
            echo "<script> 
                    alert ('Ukuran gambar Terlalu Besar');
                  </script>";
            return false;
        }

        //lolos pengecekan gambar maka siap diupload
        //membuat random name file

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;

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
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        // cek apakah user pilih gambar baru atau tidak
        if ($_FILES['gambar']['error'] === 4){
            $gambar = $gambarLama;
        }else{
            $gambar = upload();
        }

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

    function cari($keyword){
        $query = "SELECT * FROM employees WHERE
                    nama LIKE '%$keyword%' OR
                    nip LIKE '%$keyword%' OR
                    alamat LIKE '%$keyword%'
        ";
        return query($query);
    }

?>