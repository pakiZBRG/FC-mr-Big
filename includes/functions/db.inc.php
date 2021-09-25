<?php

    $hostname = "localhost:3308";
    $username = "root";
    $password = "";
    $database = "mrbig";

    $conn = mysqli_connect($hostname, $username, $password, $database);
    if(!$conn){
        die("Connect failed: ".mysqli_connect_error());
    }

?>