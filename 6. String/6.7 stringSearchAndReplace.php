<?php

    // string search and replace

    // The str_replace() function replaces some characters with some other
    // characters in a string. Its also a case-sensitive
    // Parameters are (search word, replace word, $string, $count)  total number founds
    // we can also search array() of words and replace array of replace words.

    $string = "A quick brown Fox jumps over the lazy dog";

    $rep = str_ireplace("fox","fox",$string, $count);
//    $rep = str_ireplace("fox","fox",$string);   // str_ireplace() for case-insensitive

    echo $rep;
    echo PHP_EOL;

    echo $count;
    echo PHP_EOL;


    $multipleStringRep = str_ireplace(array("brown","fox"), array("red","fox"),$string,$count);
    echo $multipleStringRep;
    echo PHP_EOL;
    echo "Total changed: ". $count;
    echo PHP_EOL;

