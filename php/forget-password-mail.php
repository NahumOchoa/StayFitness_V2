<?php
require_once 'vendor/autoload.php';
define("PROJECT_NAME", "http://localhost/");
$mail = new PHPMailer\PHPMailer\PHPMailer;
//Enable SMTP debug mode setting 2 and to disable set 0
$mail->SMTPDebug = 0;
//set PHPMailer to use SMTP
$mail->isSMTP();
//set host name
$mail->Host = "smtp.gmail.com";
// set this true if SMTP host requires authentication to send mail
$mail->SMTPAuth = true;
//Provide username & password
$mail->Username = "stay.fitnessv2@gmail.com";
$mail->Password = "rumoktvwyhcargbp";
$mail->SMTPSecure = "tls";
$mail->Port = 587;

$mail->SetFrom('test@gmail.com');
$mail->FromName = "StayFitness";
$mail->addAddress($_POST["user-email"]);
$mail->isHTML(true);

$mail->Subject = "Forget Password Recovery";
$mail->Body="<div>".$user[0]["nombre"]."<br><br><p>Click here to recover your password<br>
    <a href='".PROJECT_NAME."resetPassword.php?name=".$user[0]["nombre"]."'> ".PROJECT_NAME.
        "resetPassword.php?name=".$user[0]["nombre"]."</a><br><br></p>Regards<br> Admin.</div>";

        if(!$mail->send()) {
            //para verficar tipo de error habilitar siguiente linea
            //$error_message = "Mailer Error : ". $mail->ErrorInfo;
            $error_message = "Problema con el servidor intente mas tarde.";
        } else {
            $success_message = "El mensaje se ha enviado correctamente.";
        }
        


