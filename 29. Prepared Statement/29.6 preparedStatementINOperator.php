<?php

// prepared statement IN operator

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','lwhh_php_db07');

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// IN operator use in prepared statement
$stmt = $mysqli->prepare("SELECT name FROM students WHERE class =? AND section IN (?,?)");

$class = 2;
$sectionA = 'A';
$sectionB = 'B';

$stmt->bind_param('iss',$class,$sectionA,$sectionB);
$stmt->execute();

//echo $stmt->get_result()->num_rows;
print_r($stmt->get_result()->fetch_all(MYSQLI_BOTH));

$stmt->close();