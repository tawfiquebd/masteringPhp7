<?php

// send html format mail

$to = "tawfique@gmail.com";
$from = "John Doe <myemail@test.com>";
$subject = "How is life - Html";
$body = "<strong>Hello</strong><br/>কি খবর কেমন আছো?<br/>";
$body .= "https://avatars.githubusercontent.com/u/31182903?v=4";    // sending image as attachment
$header = "MIME-Version: 1.0\r\n";  // MIME version
$header .= "Content-type:text/html;charset=UTF-8\r\n";  // for html encode and character encode to utf-8 means unicode text format
$header .= "From: {$from}\r\n";
echo mail($to, $subject, $body, $header);
