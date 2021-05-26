<?php

// MTA = Mail Transfer Agent

// Php send text mail.

// Need to configure mail(): Failed to connect to mail-server at "localhost" port 25,
// verify your "SMTP" and "smtp_port" setting in php.ini

$to = "md.tawfiquehossain@gmail.com";
$from = "me@example.com";
//$cc = "hawks@mailbox.to, eagles@mailbox.to";  // cc = address mail sent
$subject = "How is life";
$body = "Hello, \nHow are you?";
$headers = "From: {$from}\r\n"; // “\r” represents a “carriage return”. The two characters when entered into a computer program will be replaced by a single character with the ASCII code of 13.
//$headers .= "CC: {$cc}\r\n";    // to send cc mail
echo mail($to, $subject, $body, $headers);