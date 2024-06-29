<?php
    include "db-connect.php";

    $clicked_button = $_POST['clicked-button'];

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $kota = $_POST['kota'];
    $jenis_kelamin = $_POST['jenis-kelamin'];

    $query = "UPDATE karyawan 
              SET nama = '$nama', alamat = '$alamat', usia = '$usia', kota = '$kota', jenis_kelamin = '$jenis_kelamin' 
              WHERE id=$id";

    if($clicked_button == 'batal'){
        echo '<script>window.location.replace("index.php");</script>';
    }
    
    else{
        if($conn->query($query)){
            echo "Berhasil mengubah data karyawan <br> <a href='index.php'>Kembali ke halaman awal</a>";
        }
        else{
            echo "Error updating record: " . $conn->error;
        }
    }
    
    
?>