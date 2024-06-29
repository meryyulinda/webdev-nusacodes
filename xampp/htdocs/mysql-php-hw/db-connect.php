<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nusacodes";

    $conn = mysqli_connect($host, $username, $password, $dbname); 

    // var_dump($conn); // for checking output of $conn variable

    if( !$conn ){
        die('<br>Failed connecting to DB!<br>');
    }

?>