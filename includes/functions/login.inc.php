<?php

    include "db.inc.php";

    if(isset($_GET["login"])) {
        $email = mysqli_real_escape_string($conn, $_GET["email"]);
        $password = mysqli_real_escape_string($conn, $_GET["password"]);

        if(empty($email) || empty($password)) {
            echo "<p class='error'>Popunite polja.</p>";
        } else {
            $sql = "SELECT * FROM admin WHERE email=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $email_exist = mysqli_num_rows($result);
            if(!$email_exist){
                echo "<p class='error'>Pogresan email ili lozinka.</p>";
            } else {
                if($row = mysqli_fetch_assoc($result)) {
                    $pwdCheck = password_verify($password, $row['password']);
                    if($pwdCheck == 0){
                        echo "<p class='error'>Pogresan email ili lozinka.</p>";
                    } else {
                        session_start();
                        $_SESSION["id"] = $row["id"];
                        $_SESSION["email"] = $row["email"];
                        exit();
                    }
                }
            }
        }
    }

?>