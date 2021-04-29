<?php

namespace CloudStorage;
//namespace CloudStorage\Mail;

use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\FileSystem\Files\Images\Jpeg;

//include "mail/mailer.php";
include "autoloader.php";

class Main{

    function __construct(){
//        (new Mail\Mailer())->sendMail();    // 1 way
        $mailer = new Mailer();        // another way
        $mailer->sendMail();

        $scanner = new Scanner();
        $scanner->scan();

        $jpeg = new Jpeg();
        echo $jpeg->getDimension();
    }
}

new Main();