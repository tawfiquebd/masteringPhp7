<?php

//    String reverse

    $word = "Hello World";

    echo $word;

    echo "\n";

    for($i = strlen($word)-1 ; $i >=0; $i--){
        echo $word[$i];
    }
    echo "\n";
    $len = strlen($word);

    for($i = $len-1; $i >= 0; $i--){
        echo $word[$i];
    }
    echo "\n";

    for($j = 1; $j <= $len; $j++){
        echo $word[$j * -1];
    }
    echo "\n";

    echo strrev($word);