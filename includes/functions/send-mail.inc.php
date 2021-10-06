<?php

    include 'db.inc.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    include realpath($_SERVER["DOCUMENT_ROOT"])."/vendor/autoload.php";

    $dotenv = Dotenv\Dotenv::createImmutable(realpath($_SERVER["DOCUMENT_ROOT"]))->load();
    $user_email = $_ENV["USER_EMAIL"];
    $user_pass = $_ENV["USER_PASS"];

    $status = false;

    if(isset($_GET["send"])) {
        if($_GET["email"] == '' || $_GET["subject"] == '' || $_GET["message"] == '') {
            echo "<p class='error'>Popunite polja.</p>";
        } else {
            $email = mysqli_real_escape_string($conn, $_GET["email"]);
            $subject = mysqli_real_escape_string($conn, $_GET["subject"]);
            $message = mysqli_real_escape_string($conn, $_GET["message"]);

            $mail = new PHPMailer(true);
            try {
                //Server settings
                // $mail->SMTPDebug = 4;
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = $user_email;
                $mail->Password   = $user_pass;
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;
        
                //Recipients
                $mail->setFrom($email, "");
                $mail->addAddress($user_email);
                $mail->addReplyTo('no-reply@gmail.com', 'No reply');
        
                $mail->isHTML(true);
                $mail->CharSet = "UTF-8";
                $mail->Subject = "FC Mr Big: $subject";
                $mail->Body = "<p>$message</p>";
        
                $mail->send();

                $status = true;
                echo "<p class='error'><i class='fa fa-check-circle'></i> Mejl uspesno poslat.</p>";
            }
            catch(Exception $e){
                $result = $mail->ErrorInfo;
                echo "<p class='error'>$result</p>";
            }
        }
    }

?>