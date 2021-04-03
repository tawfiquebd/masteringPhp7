<?php

// print 1 to 100 whom are divisible by 7

//for($i = 0; $i <= 100; $i++){
//    if($i % 7 == 0){
//        echo $i.PHP_EOL;
//    }
//}

// print 1 to 100 whom are divisible by 7 using ternary operator
//for($i = 0; $i <= 100; $i++){
//    echo $i % 7 == 0 ? $i."\n" : '';
//}

// print 1 to 100 whom are divisible by 7 and 11 using ternary operator

//for($i = 0, $j = 0; $i <= 100; $i++,$j++){
//    echo $i % 7 == 0 ? $i ."\n" : '';
//    echo $i % 11 == 0 ? $i ."\n" : '';
//}

// multiple stepping

for($i = 0, $j = 0; $i <= 100; $i+=7,$j+=11){
    echo $i ."\n";
    echo $j <= 100 ? $j ."\n" : '';
}



