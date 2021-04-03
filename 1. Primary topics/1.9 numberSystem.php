<?php

/**
 * Number system:
 * binary = 0 , 1   // base 2
 * decimal = 0, 1, 2, 3, 4, 5, 6, 7, 8, 9   // base 9
 * octal = 0, 1, 2, 3, 4, 5, 6, 7   // base 8
 * hexa-decimal = 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A, B, C, D, E, F    // base 16
 */

$n = 123;
$o = 012;
$h = 0x2A;

printf("The number of ocatal %o in binary %d", $o, $o);
echo "\n";

printf("The number of decimal %d in octal %o", $n, $o);
echo "\n";

printf("The number of hexa decimal %X in binary %d", $h, $h);
echo "\n";

printf("The number of decimal %d in hexa %X", $n, $h);
echo "\n";

// printf();