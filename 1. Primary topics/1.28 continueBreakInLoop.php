<?php

// break;
for($i = 20; $i < 50; $i++){

    if($i % 13 == 0) {
        echo $i . " ";
        break;
    }
}

echo "\n_____________\n";


// continue example

$j = 1;
while($j < 20){
    $j++;

    if($j < 10){
        continue;
    }

    echo $j . " ";

}

echo "\n_____________\n";

// goto example

$i = 0;
a : $i++;
echo $i ." ";
if($i < 10) {
    goto a;
}
