<?php

$i = 0;
while($i <= 5){
    echo $i."\n";
    $i++;
}

echo "-----".PHP_EOL;

$i = 0;
while($i++ <= 5){   // $i++  // $i = $i  // $i = $i + 1
    echo $i."\n";
}

echo "-----".PHP_EOL;


$i = 0;
while(++$i <= 5){   // $i++  // $i = $i  // $i = $i + 1
    echo $i."\n";
}