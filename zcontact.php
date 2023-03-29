<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// require "vendor/autoload.php";
require dirname(__FILE__).'/vendor/autoload.php';    



$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "sandbox.smtp.mailtrap.io";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 2525;

$mail->Username = "18d06fbf57c127";
$mail->Password = "cb5eee35fc2112";

$mail->setFrom($email, $name);
$mail->addAddress($email, $name);

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");






// $phpmailer = new PHPMailer();
// $phpmailer->isSMTP();
// $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
// $phpmailer->SMTPAuth = true;
// $phpmailer->Port = 2525;
// $phpmailer->Username = '18d06fbf57c127';
// $phpmailer->Password = 'cb5eee35fc2112';






?>