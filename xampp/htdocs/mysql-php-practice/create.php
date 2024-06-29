<?php
    include "db-connect.php";

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $kota = $_POST['kota'];
    $jenis_kelamin = $_POST['jenis-kelamin'];

    if(empty($nama) and empty($alamat) and empty($usia) and empty($kota) and empty($jenis_kelamin)){
        echo '
        <script>
            alert("Data tidak boleh kosong!"); 
            window.location.replace("index.php");
        </script>';
    }

    else{
        $query = "INSERT INTO karyawan (nama, alamat, usia, kota, jenis_kelamin) VALUES ('$nama', '$alamat', '$usia', '$kota', '$jenis_kelamin')";

        if($conn->query($query)){
            echo '
            <script>
                alert("Berhasil menambahkan data karyawan!"); 
                window.location.replace("index.php");
            </script>
            ';
        }
        else{
            echo '
            <script>
                alert("Gagal menambahkan data!"); 
                window.location.replace("index.php");
            </script>';
        };

    }

    



?>