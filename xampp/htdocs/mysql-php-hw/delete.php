<?php   

    include "db-connect.php";

    $id = $_GET['id'];
    $query = "DELETE FROM user_regist WHERE id=$id";

    if ($conn->query($query) === TRUE) {
        // echo "<p style='color:red;'>Data pengguna telah terhapus!</p><a href='user-list.php'>Kembali ke halaman sebelumnya</a>";
        echo '
            <script>
                alert("Data pengguna terhapus!"); 
                window.location.replace("user-list.php");
            </script>
            ';
      } else {
        // echo "Error deleting record: " . $conn->error;
        $error_message = $conn->error;
        echo '
        <script>
            alert("Gagal menghapus data! '.$error_message.'"); 
            window.location.replace("user-list.php");
        </script>';
      }

    


?>