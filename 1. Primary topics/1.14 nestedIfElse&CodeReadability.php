<?php

$condition1 = false;
$condition2 = true;
$condition3 = true;


if($condition1){
    if($condition2){
        if($condition3){
            echo "Hello\n";
        }
        else{
            echo "Condition 1\n";
        }
    }
    else{
        echo "Condition 2\n";
    }
}
else{
    echo "Condition 3\n";
}


// Code is Readable and Maintainable  :

if($condition1 && $condition2 && $condition3){
    echo "Hello\n";
}
else if($condition1 && $condition2){
    echo "Condition 1\n";
}
else if($condition1){
    echo "Condition 2\n";
}
else{
    echo "Condition 3\n";
}