<?php

//for loop

for ($i = 1; $i <= 10; $i++){
    echo $i;
    echo PHP_EOL;
}

echo PHP_EOL;

echo "While loop\n";

//while loop

$i = 1;

while($i <= 10){
    echo $i.PHP_EOL;
    $i++;
}

echo PHP_EOL;
echo "Do While loop\n";

//Do while loop

$i = 1;

do{
    echo $i."\n";
    $i++;
}
while($i <= 10);


echo PHP_EOL;
echo "Goto\n";

//Go to

$i = 0;
a: $i++;    // $i = $i + 1;
echo $i. PHP_EOL;
if($i <= 5) goto a;


echo PHP_EOL;
echo PHP_EOL;
// nested for loop

for($i = 1; $i <= 5; $i+=1){

    for($j = 1; $j <= $i; $j++){
        echo "*".$j;
    }
    echo PHP_EOL;
}