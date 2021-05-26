<?php
require_once "16.4 phpmailer/PHPMailer.php";
require_once "16.4 phpmailer/Exception.php";

// Send mail with attachment by php mailer
// Mail is not sending currently! because we have to configure mail() in php.ini file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try{
    $pm->setFrom("john@doe.com");
    $pm->addAddress("tawfique@gmail.com");
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



