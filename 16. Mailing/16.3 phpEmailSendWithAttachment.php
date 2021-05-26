<?php

// Php email send with attachment

$to = "tawfiquebd@gmail.com";
$from = "John Kabila <john@kabila.com>";
$subject = "You got an email - Attachment";
$mainMessage = "Hi, there is a poem for you";
$fileName = "./slick-poem.pdf";
$fileNewName = "poem.pdf";

$fileData = file_get_contents($fileName);
$boundary = "HereIsABoundary";

$headers = "From: {$from}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: Multipart/mixed\r\n";
$headers .= "boundary=\"{$boundary}\";\r\n";

$message = "This is multipart message\r\n";
$message .= "--{$boundary}\r\n";
$message .= "Content-type: text/plain; charset='UTF-8'\r\n";
$message .= "Content-Transfer-Encoding: 7bit\r\n";
$message .= $mainMessage."\r\n";

$encodedFileData = chunk_split(base64_encode($fileData));

$message .= "--{$boundary}\r\n";
$message .= "Content-Type: application/pdf;\r\n";
$message .= "name={$fileNewName}\r\n";
$message .= "Content-Disposition: attachment;\r\n";
$message .= "filename={$fileNewName}\r\n";
$message .= "Content-Transfer-Encoding: base64\r\n";
$message .= $encodedFileData."\r\n";
$message .= "--{$boundary}--\r\n";

$mailSent = mail($to, $subject, $message, $headers);

if($mailSent){
    echo "Mail has been sent\n";
}
else{
    echo "Mail sending failed\n";
}
