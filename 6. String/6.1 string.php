<?php


//    string

    echo "i love my
    country. And
    Also I love my family.
    This echo with double quote, can print multiple line\n\n";

    echo 'i love my
    country. And
    Also I love my family.
    This echo with single quote, can print multiple line but can not 
    parse any variable and new line \n\n';

    echo PHP_EOL .PHP_EOL;

    $name = 'tawfique';

    $address = "Chittagong";

    echo 'My name is $name \n';     // single quote dont parse variable \n \t

    echo PHP_EOL;

    echo "My name is {$name} \n";

    echo "I am from $address \t Bangladesh \n";

    $age = 24;

//    Heredoct is like double quote it takes multiple string and parse variable

    $heredoc = <<< EOD
\nbangla bhasa 
amader matribhasa
ami banglay kotha boli \n\n\n
EOD;

    echo $heredoc;


    // nowdoc is also works as like heredoc but its act as single quote.
    // It can't parse variable and new line

    $nowdoc = <<<'EOD'
    
    \nbangla bhasa 
amader matribhasa
ami banglay kotha boli $name \n
    
EOD;

    echo $nowdoc.PHP_EOL;



