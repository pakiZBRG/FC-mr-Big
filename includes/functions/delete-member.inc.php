<?php

    include "db.inc.php";

    if(isset($_GET["delete"])) {
        if(isset($_SESSION['email'])){
            $id = $_GET["delete"];
    
            $sql = "DELETE FROM members WHERE id=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            if($stmt) {
                header("Location: /mrbig/admin.php?page=clanovi");
                exit();
            } else {
                echo ("Mysqli failed: ".mysqli_error($stmt));
            }
        }
    }

?>