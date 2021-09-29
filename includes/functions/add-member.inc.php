<?php
    include "db.inc.php";

    $month = date('m') + 1;
    $day = date('d');
    $year = date('Y');
    $to = $year . '-' . $month . '-' . $day;
    $status = false;

    if(isset($_GET["create"])) {
        $name = mysqli_real_escape_string($conn, $_GET["name"]);
        $surname = mysqli_real_escape_string($conn, $_GET["surname"]);
        $from = mysqli_real_escape_string($conn, $_GET["from"]);
        $to = mysqli_real_escape_string($conn, $_GET["to"]);
        $today = date('Y-m-d');
        $today_format = substr(date_format(date_create($today), DATE_RFC1123), 4, 12);

        if(empty($name) || empty($surname) || empty($from) || empty($to)) {
            echo "<p class='error'>Popunite polja.</p>";
        } else if($today < $from){
            echo "<p class='error'>Izabrati datum <span style='color: crimson'>Od</span> pre <span style='color: crimson'>$today_format</span>.</p>";
        } else {
            $sql = "INSERT INTO members (name, surname, from_date, to_date) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $name, $surname, $from, $to);
            mysqli_stmt_execute($stmt);
            if($stmt) {
                $status = true;
                echo "<p class='error'><i class='fa fa-check-circle'></i> Nov clan dodat.</p>";
            }
        }
    }

?>