<?php

    // string ke bhenge bhenge tokenization

    $string1 = "Hello World, I am From Bangladesh";

//   The explode() function breaks a string into an array.
//   explode(separator,string,limit)
//   Note: The "separator" parameter cannot be an empty string.

    $str1 = explode(' ', $string1);

    print_r($str1);

//    The implode() function returns a string from the elements of an array.
//    implode() join array elements with a string: //implode(separator,array)
//    The join() function returns a string from the elements of an array.
//    The join() function is an alias of the implode() function.

//    $strOne = implode(' ', $str1);
    $strOne = join(' ', $str1);
    echo $strOne;


//    The str_split() function splits a string into an array.
//      str_split(string,length) length means character length in 1 element/index

    $string2 = "Hello World, I am From Bangladesh";

    $str2 = str_split($string2);

    print_r($str2);
    echo PHP_EOL;

//The strpos() function finds the position of the first occurrence of a string
// inside another string.   strpos(string,find,start)  // start is optional
//Note: The strpos() function is case-sensitive.


//The strtok() function splits a string into smaller strings (tokens).
//strtok(string,split)  Return Value: 	Returns a string token
//it is only the first call to strtok() that uses the string argument.
// After the first call, this function only needs the split argument,
// as it keeps track of where it is in the current string.
// To tokenize a new string, call strtok() with the string argument again:
$string3 = strtok($string1, ' ,');
while($string3 !== false){
    echo $string3."\n";     // iterator
    $string3 = strtok(' ,');
}

//print_r($string3);    // its not countable . will not work
    echo PHP_EOL;

// regular expression .
// The preg_split() function breaks a string into an array,
// using matches of a regular expression as separators.

$string4 = preg_split('/ |, /', $string1);   // space and comma removed

print_r($string4);
