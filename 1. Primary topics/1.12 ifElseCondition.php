<?php 

// If else 

$age = 150;

// if else ladder use korle , uporer condition ta jodi mile o jay , taile she nicher condition check e korbe na . 

if($age > 13){          
    echo "You are a teenager\n";    //  wrong result will show here 
}
else if($age > 19){
    echo "You are an Adult!\n";
}
else{
    echo "You are not a teenager\n";
}


$food = "Fish";

// It will show mango here , because at first Mango will assign in $food variable. So, $food is true.
// Thats why Mango will show . To prevent this type mistake put static value left .
// Example below:
if($food = "Mango"){     // =   its assignment operator . By mistake we used here . It should be ==  
    echo "This food {$food} has Vitamin D\n";
}
else{
    echo "We dont know this food {$food} value\n";
}

// To prevent upper mistake use like this : 

$food = "Fish";

if("Fish" == $food){ // you can't assign now $food variable in a string "Fish". It will give warning
    echo "This food {$food} has Vitamin D\n";
}