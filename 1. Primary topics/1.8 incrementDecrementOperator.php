<?php

$num1 = $num2 = $num3 = 10; // multiple variable assigning value 10 at a time

 echo $num1, " ", $num2, " ", $num3, "\n";   // multiple variable print
 echo $num1 . $num2 . $num3 . "\n";   // multiple variable print

// printf("%d",$num1);

/**
 * $n = 1;
 * $n++ means is: post increment
 * $m = $n++ means
 * the compiler work like this at first $n++ is assigned in $m . so $m is now 1 .
 * $m = $n; so $m value is now 1 . because $n was = 1 . then it goes like this . after that it work like this
 * $n = $n + 1; so $n is now 2
 * compiler works like this
 */

$n = 1; // assigned $n = 1
echo "value of \$n is : " . $n++ . "\n";  // it will be show us 1 .

echo "value of \$n is now : " . $n ."\n";   // 2 now.. // now $n value is 2

echo "value of \$m is now : " . $m = $n + 1 . "\n";  // $m is 3 now .

echo "value of \$m is now : " . $m = $n++. "\n";  // $m is 2 now. because $n was 2 last time.

echo "value of \$m is now : " . $m = $n++. "\n\n";  // $m is 3 now .


$n = 2;
echo $n;           // now it will now show 2 .

echo "\n\n";

//  $m = $n = n + 1 . $m is 2 now . because $n is just assigned in $m
echo "now -> \$m value is : " . $m = $n++ ."\n";

// $m is also 2 now .
echo "now -> \$m value is : " . $m  ."\n";

// but $n is 3 now, because of previous $n++ , which means $n = $n + 1 .
echo "now -> \$n value is : " . $n . "\n\n";



$b = 50;

echo $c = $b + 1 . " "; // this one is same as ++$b  // pre increment

echo $c = ++$b. " ";  // this one is same as $c = $b = $b + 1
echo $c . "\n"; 



echo $m ." ". $n ."\n" ;    // it will show us 1 

$number = 5;
echo $number = $number + 1; // it will show 6 

echo "\n";

echo $number . "\n\n";


//Another example of post increment

$x = 100;

$y = $x++;  // $y = $x = $x + 1

echo $y ."  ";    // $y is 1

echo $x ."\n\n";    // $x is 2



// pre increment

/**
 * It works like
 * 
 * $x = ++y so it means 
 * $y = $y + 1  then 
 * $x = $y 
 */

$x = 20;

echo $y = $x - 1 . " ";   // this one is same as --$x     pre increment;
echo $y = --$x . " ";   // this one is same as $y = $x - 1;
echo "\n";


$numb1 = 6;
$numb2 = $numb1++;
echo $numb2 ." ".$numb1; 
echo "\n";
/**
 * $numb1 = 6
 * $numb2 = $numb1++;
 *                      it works like this
 * $numb2 = $numb1; // $numb2 is 6 now because $numb1 was 6 . then
 * $numb1 = $numb1 + 1;
 * echo $numb2 ." ".$numb1;  // so it will show 6 for $numb2  and then 7 for $numb1;
 */


$numb3 = 100;
$numb4 = ++$numb3;
echo $numb4 ." ".$numb3; 

/**
 * $numb3 = 100
 * $numb4 = ++$numb3;
 *                      it works like this
 * $numb3 = $numb3 + 1; // $numb2 is 6 now because $numb1 was 6 . then
 * $numb4 = $numb3; * 
 * echo $numb4 ." ".$numb3;  // so it will show 6 for $numb2  and then 7 for $numb1;
 */



