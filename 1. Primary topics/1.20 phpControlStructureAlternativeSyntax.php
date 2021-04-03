
<?php

$age = 12;

if(19 < $age){
    echo "You are adult\n";
}
else if(12 < $age){
    echo "You are teenage\n";
}
else{
    echo "You are kid\n";
}


// php if else alternative syntax .

if(19 < $age):
    echo "You are adult";
    echo PHP_EOL;   // php end of line . for new line
elseif(12 < $age):
    echo "You are teenage";
    echo PHP_EOL;   // for new line
else:
echo "You are kid";
    echo PHP_EOL;
endif;




// endif for if else
// endwhile for while loop
// endfor for for loop
// endforeach for foreach loop