<?php

    include 'db.inc.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require "vendor/autoload.php";
    $status = false;

    if(isset($_POST["send"])) {
        if($_POST["email"] == '' || $_POST["subject"] == '' || $_POST["message"] == '') {
            echo "<p class='error'>Popunite polja.</p>";
        } else {
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
            $message = mysqli_real_escape_string($conn, $_POST["message"]);

            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                // $mail->SMTPDebug = 4;
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls';
                $mail->Username = 'nasa.nase72@gmail.com';
                $mail->Password = 'Nikola-990';
        
                $mail->setFrom($email, "");
                $mail->addAddress('nasa.nase72@gmail.com');
                $mail->addReplyTo('no-reply@gmail.com', 'No reply');
        
                $mail->isHTML(true);
                $mail->CharSet = "UTF-8";
                $mail->Subject = "FC Mr Big";
                $mail->Body = "<p>$message</p>";
        
                $mail->send();
            }
            catch(Exception $e){
                $result = $mail->ErrorInfo;
                echo "<p class='error'>$result</p>";
            }
            $status = true;
            echo "<p class='error'><i class='fa fa-check-circle'></i> Mejl uspesno poslat.</p>";
        }
    }

?>