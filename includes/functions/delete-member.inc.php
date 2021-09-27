<?php

    if(isset($_GET["delete"])) {
        // search
        $search = isset($_GET['input']) ? $_GET['input'] : '';
        $id = $_GET["delete"];

        $sql = "DELETE FROM members WHERE id=? OR name LIKE ? OR id LIKE ? OR surname LIKE ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "isss", $id, $search, $search, $search);
        mysqli_stmt_execute($stmt);
    }

?>