<?php

    include 'db.inc.php';

    if(isset($_GET["update"])){
        $id = $_GET['update'];
        $name = mysqli_real_escape_string($conn, $_GET["name"]);
        $surname = mysqli_real_escape_string($conn, $_GET["surname"]);
        $from = mysqli_real_escape_string($conn, $_GET["from"]);
        $to = mysqli_real_escape_string($conn, $_GET["to"]);
        $today = date('Y-m-d');
        $today_format = substr(date_format(date_create($today), DATE_RFC1123), 4, 12);

        if($today < $from) {
            echo "Izabrati datum pre $today_format";
        } else {
            $sql = "UPDATE members SET name=?, surname=?, from_date=?, to_date=? WHERE id=?;";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssssi", $name, $surname, $from, $to, $id);
            mysqli_stmt_execute($stmt);
        }
    }

?>