<?php
    include "db-connect.php";

    $clicked_button = $_POST['clicked-button'];

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $email = $_POST['email'];

    $query = "UPDATE user_regist
              SET nama = '$nama', alamat = '$alamat', usia = '$usia', email = '$email'
              WHERE id=$id";

    if($clicked_button == 'batal'){
        echo '<script>window.location.replace("user-list.php");</script>';
    }
    
    else{
        if($conn->query($query)){
            // echo "Berhasil mengubah data pengguna <br> <a href='user-list.php'>Kembali ke halaman sebelumnya</a>";
            echo '
            <script>
                alert("Berhasil mengubah data pengguna!"); 
                window.location.replace("user-list.php");
            </script>
            ';
        }
        else{
            // echo "Error updating record: " . $conn->error;
            $error_message = $conn->error;
            echo '
            <script>
                alert("Gagal mengubah data! '.$error_message.'"); 
                window.location.replace("user-list.php");
            </script>';
        }
    }
    
    
?>