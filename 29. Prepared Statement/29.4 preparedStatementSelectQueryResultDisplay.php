<?php

// prepared statement select query result display

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','lwhh_php_db07');

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// make prepared statement
$stmt = $mysqli->prepare("SELECT * FROM students WHERE class =? AND section =?");

$class = 2;
$section = 'A';

$stmt->bind_param('is',$class, $section);
$stmt->execute();

$result = $stmt->get_result();  // it returns an object
//print_r($result);
$data = $result->fetch_all(MYSQLI_BOTH);
print_r($data);
//while($data = $result->fetch_assoc()){
//    print_r($data);
//}