<?php

//    Ascii code

    echo chr(65);
    echo "\n";
    echo chr(97);
    echo "\n";
    echo ord('A');
    echo "\n";
    echo ord('B');
    echo "\n\n";

    for($i = 65; $i <= 90; $i++){
        echo chr($i). " ";
    }

    echo "\n\n";

    for($i = 97; $i <= 122; $i++){
        echo chr($i). " ";
    }

    echo "\n\n";

    for($i = 48; $i <= 57; $i++){

        echo chr($i). " ";
    }

    echo "\n\n";


    for($i = 65; $i <= 90; $i++){

        printf("%c ", $i);
    }
    echo "\n\n";

    for($i = 97; $i <= 122; $i++){
        printf("%c ", $i);
    }

