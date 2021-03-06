<?php

    if(isset($_GET["update"])){
        // search
        $search = isset($_GET['input']) ? $_GET['input'] : '';
        $id = $_GET['update'];
        $name = mysqli_real_escape_string($conn, $_GET["name"]);
        $surname = mysqli_real_escape_string($conn, $_GET["surname"]);
        $from = mysqli_real_escape_string($conn, $_GET["from"]);
        $to = mysqli_real_escape_string($conn, $_GET["to"]);

        // Validation done in ajax.js - client
        $sql = "UPDATE members SET name=?, surname=?, from_date=?, to_date=? WHERE id=? OR name LIKE ? OR id LIKE ? OR surname LIKE ?;";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssisss", $name, $surname, $from, $to, $id, $search, $search, $search);
        mysqli_stmt_execute($stmt);
    }

?>