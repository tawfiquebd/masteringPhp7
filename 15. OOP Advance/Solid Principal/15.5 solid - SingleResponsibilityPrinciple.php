<?php

// Solid - S - Single Responsibility Principle
// Single Responsibility Principle - A class will only perform 1 task.
// A class has one responsibility to handle task. It means dont put all the codes/task under 1 class.

// Example
// Here Mailer class performing multiple task, Which is breaks of Single Responsibility Principle
class Mailer{
    function sendMail($to, $from, $subject, $message, $attachment){

    }

    function connectMTA($mtaType, $username, $password){

    }

    function prepareMail(){}

    function dispatch(){}
}

// Good Practice Example

class BetterMailer{
    function __construct(MailGatewayInterface $mg, MailInterface $mail, AttachmentInterface $attachment){
        $this->mg = $mg;
        $this->mail = $mail;
        $this->attachment = $attachment;
    }

    function sendMail($to, $from, $subject, $message, $attachment){
        $this->mail->addAttachment($attachment);
        $mailBody = $this->mail->prepare($to, $from, $subject, $message);
        $this->mg->connect();
        $this->mg->send($mailBody);
    }
}