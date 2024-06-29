<?php   

    include "db-connect.php";

    $id = $_GET['id'];
    $query = "DELETE FROM karyawan WHERE id=$id";

    if ($conn->query($query) === TRUE) {
        echo "Berhasil menghapus data karyawan <br> <a href='index.php'>Kembali ke halaman awal</a>";
      } else {
        echo "Error deleting record: " . $conn->error;
      }

    


?>