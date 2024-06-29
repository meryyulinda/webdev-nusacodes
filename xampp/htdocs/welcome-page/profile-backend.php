<?php
    
    $fullname = $_POST['fullname'];

    $birthdate = date_create($_POST['birthdate']);

    $curr_date = date_create(date("Y-m-d"));

    // print_r($birthdate);
    // print_r($curr_date);

    $age = date_diff($curr_date, $birthdate)->format("%y");
    echo "Hi, $fullname! You are currently $age years old.";


    // Solution from https://stackoverflow.com/questions/3776682/php-calculate-age :

    // $birthDate = explode("/", $birthDate);
    // //get age from date or birthdate
    // $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    //     ? ((date("Y") - $birthDate[2]) - 1)
    //     : (date("Y") - $birthDate[2]));
    // echo "Age is:" . $age;    


    // PHP Tutorials: 
    // w3schools , tutorialspoint ,  tutorialrepublic

?>