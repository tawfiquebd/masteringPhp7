<?php

$name = "Bangladesh";

echo $name[0];      // will show B
echo "\n";

echo $name[-1];     // will show  h
echo "\n";

// substr() substr — Return part of a string
// Returns the portion of string specified by the offset and length parameters.
// If string is less than offset characters long, false will be returned.

$string = substr($name, 0,5);  // will show Bangl
// substr() start jodi positive number diye hoy
// tahole left side theke count hobe right side porjonto value nibe

echo $string."\n";

$negString = substr($name, 0,-3);   // Will show Banglad

echo $negString;
echo "\n";

$revString = substr($name, -3,3);   // will show last 3 digit , esh
// start jodi negetive number diye suru hoy , tahole right theke left e string gula nibe.
echo $revString."\n";

$word = "Chittagong";
echo $word ."\n";

$len = strlen($word);

$anotherWay = substr($word, 0,$len-2); // will show Chittago
echo $anotherWay ."\n";

$anotherWay = substr($word, $len-4); // will show gong . from last 4 digit .
echo $anotherWay ."\n";

