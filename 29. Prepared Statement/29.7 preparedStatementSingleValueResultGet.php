<?php

// prepared statement single value get

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','lwhh_php_db07');

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// single value get from table by prepared statement
$stmt = $mysqli->prepare("SELECT count(*) as total FROM students WHERE class =? AND section =?" );

$class = 5;
$section = 'A';

$stmt->bind_param('is',$class,$section);
$stmt->execute();

//$result = $stmt->get_result()->fetch_row();
//echo $result[0];

$result = $stmt->get_result()->fetch_assoc();
//print_r($result);
echo $result['total'];

$stmt->close();