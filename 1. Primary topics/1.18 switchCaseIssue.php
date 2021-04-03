<?php
// we can use type casting in switch case
$string = "9balls";

switch ($string){

    case (string) "9balls":
        echo "Nine balls\n";
        break;
    case (string) 8:
        echo "8";
        break;
    case (string) "8balls":
        echo "Eight balls\n";
        break;
}