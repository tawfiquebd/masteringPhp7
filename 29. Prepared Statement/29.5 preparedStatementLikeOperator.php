<?php

// prepared statement like operator

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','lwhh_php_db07');

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// Like operator use in prepared statement
$stmt = $mysqli->prepare("SELECT name FROM students WHERE name LIKE ?");

$name = "%don%";
$stmt->bind_param('s',$name);
$stmt->execute();

$result = $stmt->get_result()->fetch_all(MYSQLI_BOTH);
print_r($result);
