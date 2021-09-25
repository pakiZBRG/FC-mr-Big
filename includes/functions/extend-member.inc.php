<?php

    include "db.inc.php";

    $month = date('m');
    $day = date('d');
    $year = date('Y');
    $extend = $year . '-' . $month + 1 . '-' . $day;
    $today = $year . '-' . $month . '-' . $day;

    if(isset($_GET["id"])) {
        $id = $_GET["id"];

        $sql = "UPDATE members SET from_date=?, to_date=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssi", $today, $extend, $id);
        mysqli_stmt_execute($stmt);
        if($stmt){
            header("Location: /mrbig/admin.php?page=clanovi");
            exit();
        }
    }

?>