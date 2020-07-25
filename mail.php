<?php 
require 'PHPMailerAutoload.php';

date_default_timezone_set('Europe/Madrid');
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = 'ssl';
$mail->Port = 465; //SMTP – puerto 25 / 2525 / 587 / 465 (SSL necesario)
$mail->SMTPAuth = true;
$mail->Username = "sibwmail@gmail.com";
$mail->Password = "sibw1516";
$mail->setFrom('sibwmail@gmail.com', 'Hotel Plaza Nueva');
$mail->addAddress($_POST["email"]);
$mail->Subject = 'Hotel Plaza Nueva';
$mail->Body = $_POST["message"];
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje enviado';
}