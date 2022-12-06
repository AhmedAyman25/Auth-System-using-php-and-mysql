<?php 


    //host
    $servername = "localhost";


    //dbname
    $dbname = "auth-system";

    //user
    $user = "root";

    //pass
    $pass = "";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $user, $pass);
    
    // if($conn == true) {
    //     echo "it's working fine";
    // } else {
    //     echo "connection is wrong: err";
    // }



?>