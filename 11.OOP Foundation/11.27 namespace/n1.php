<?php
namespace Project;
use Project\Motorcycles\Bike as Hornet;     // alias of c2.php class
use Project\Bike as Pulsar;                 // alias of c1.php class

include "c1.php";
include "c2.php";

$b = new Bike;  // c1.php will evoke, because its namespace Project
//$b = new Motorcycles\Bike;  // c2.php will evoke, because its namespace Project\Motorcycles
$b->getName();
echo PHP_EOL;

$h = new Hornet;
$h->getName();
echo PHP_EOL;

$p = new Pulsar;    // alias of c1.php - Bike class
$p->getName();