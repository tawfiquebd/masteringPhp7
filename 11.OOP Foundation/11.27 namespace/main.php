<?php
namespace Astronomy;

include_once "planet.php";
include_once "earth.php";

$planet = new Planets\Earth;   // same namespace , that's why no need to add unqualified/qualified name
//$planet = new Planets\Planet;   // unqualified name
//$planet = new \Astronomy\Planets\Planet;    // qualified name
$planet->getName();
echo PHP_EOL;

//new DateTime();   // Uncaught Error: Class "Astronomy\DateTime" not found
new \DateTime();