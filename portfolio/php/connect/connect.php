<?php
    $host = "localhost";
    $user = "pasahu13";
    $pw = "thdtkfl!2";
    $dbName = "pasahu13";
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
        //echo "database connect true";
    }
?>