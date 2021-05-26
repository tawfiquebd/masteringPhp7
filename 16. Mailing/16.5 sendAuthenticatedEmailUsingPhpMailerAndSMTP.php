<?php
require_once "16.4 phpmailer/PHPMailer.php";
require_once "16.4 phpmailer/Exception.php";
require_once "16.4 phpmailer/SMTP.php";

// Send authenticated mail with attachment by php mailer and SMTP

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try{
    // configuring stmp mail service
    $pm->SMTPDebug = 2;
    $pm->isSMTP(true);
    $pm->Host = "mail.gmail.com";
    $pm->SMTPAuth = true;
    $pm->Username = "tawfique@gmail.com";
    $pm->Password = "123456";
    $pm->SMTPSecure = "tls";
    $pm->Port = 587;

    $pm->setFrom("me@example.com");
    $pm->addAddress("md.tawfiquehossain@gmail.com");
    $pm->Subject = "Here is your invoice!";
    $pm->Body = "Hi, Here is the <strong>invoice</strong> from your last purchase";
    $pm->AltBody = "Here is the invoice from your last purchase";
    $pm->isHTML(true);
    $pm->addAttachment("G:\\PhpStorm Programming Works\\php7MasteringCourse\\16. Mailing\\slick-poem.pdf");
    $pm->send();

    echo "Mail Sent!";
}
catch (Exception $e){
    echo "Failed to send mail - ".$pm->ErrorInfo;
}



