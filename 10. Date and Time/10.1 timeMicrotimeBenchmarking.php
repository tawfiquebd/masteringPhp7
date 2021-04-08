<?php
// time()  // unix timestamp

// This is unix epoch . January 1, 1970, 00:00 theke ajker time porjonto
// joto second per hoyeche seta hocche time() unix timestamp

// unix timestamp

echo time();    //unix epoch theke koto second porjonto right now par hoyeche
echo "\n";

echo date('d/m/y');
echo "\n";

echo microtime(true); // micro seconds
echo "\n";

$microSecond = microtime(true);
printf("%10.12f", $microSecond);
echo "\n\n";

// factorial program time execution test
function factorial($n){
    $result = 1;
    for($i = $n; $i >= 1; $i--){
        $result *= $i;
    }
    return $result;
}

$startTime = microtime(true);
echo "Factorial of 20 is: ".factorial(20) ."\n" ;
//sleep(2); // sleep() function works to freeze program for given seconds
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("Total time of execution: %.4f", $executionTime);