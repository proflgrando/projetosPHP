<?php

    //host
    $host = "localhost";

    $dbname = "auth-sys";

    //user
    $user = "root";

    //pass
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

//    if($conn == true) {
//        echo "working fine";
//} else {
//        echo "connection is wrong: err";
//}

    

?>