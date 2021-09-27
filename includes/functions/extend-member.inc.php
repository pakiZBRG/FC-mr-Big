<?php

    $month = date('m');
    $day = date('d');
    $year = date('Y');
    $extend = $year . '-' . $month + 1 . '-' . $day;
    $today = $year . '-' . $month . '-' . $day;

    if(isset($_GET["extend"])) {
        // search
        $search = isset($_GET['input']) ? $_GET['input'] : '';
        $id = $_GET["extend"];

        $sql = "UPDATE members SET from_date=?, to_date=? WHERE id=? OR name LIKE ? OR id LIKE ? OR surname LIKE ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssisss", $today, $extend, $id, $search, $search, $search);
        mysqli_stmt_execute($stmt);
    }

?>