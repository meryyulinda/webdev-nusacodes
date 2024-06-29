<?php
    include "db-connect.php";

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $email = $_POST['email'];

    if(empty($nama) and empty($alamat) and empty($usia) and empty($kota) and empty($jenis_kelamin)){
        echo '
        <script>
            alert("Data tidak boleh kosong!"); 
            window.location.replace("index.php");
        </script>';
    }

    else{
        $query = "INSERT INTO user_regist (nama, alamat, usia, email) VALUES ('$nama', '$alamat', '$usia', '$email')";

        if($conn->query($query)){
            echo '
            <script>
                alert("Berhasil menambahkan data pengguna!"); 
                window.location.replace("user-list.php");
            </script>
            ';
        }
        else{
            $error_message = $conn->error;
            echo '
            <script>
                alert("Gagal registrasi! '.$error_message.'"); 
                window.location.replace("index.php");
            </script>';
        };

    }

    



?>