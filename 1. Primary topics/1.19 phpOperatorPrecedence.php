<?php

//php operator precedence

$t = false || true; // true . higher precedence . false || true compare kore true ta assign hobe $t te
$f = false or true; // false . lower precedence . $f = false assign hoye jabe aga

var_dump($t, $f);

// but if we use parentheses value gives priority which will performs first

$e = (false or true);

// The constant false is assigned to $f before the "or" operation occurs
// Acts like: (($f = false) or true)
$f = false or true;

var_dump($e, $f);

$a = false && true;     // compare first . then assign
$b = true and false; // ($b = true) // assign left side first

var_dump($a, $b);
