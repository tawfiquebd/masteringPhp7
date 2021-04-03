<?php

//    trim() Function Remove characters from both sides of a string
//    The trim() function removes whitespace and other predefined characters from both sides of a string.

//    ltrim() - Removes whitespace or other predefined characters from the left side of a string
//    rtrim() - Removes whitespace or other predefined characters from the right side of a string

    $word = " Hello \n";
    $word2 = "World ";

    $trim = trim($word," \n"); // space and \n chara bakigula remove korbe
//    $trim = trim($word, " \n"); // space and \n chara bakigula remove korbe

    echo $trim;

    echo rtrim($word2); // world er right space baad dibe . rtrim()

