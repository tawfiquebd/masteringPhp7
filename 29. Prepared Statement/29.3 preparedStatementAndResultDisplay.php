<?php

// prepared statement and result display

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','lwhh_php_db07');

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// make prepared statement
$stmt = $mysqli->prepare("SELECT * FROM students WHERE class =? AND section =?");
// class 2 . section A
$class = 2;
$section = 'A';

// make bind those two variables
$stmt->bind_param('is',$class, $section);
$stmt->execute();

echo $stmt->get_result()->num_rows ."\n";

// if we want to get more result from different class and section. just execute the statement
// class 4 . section B
$class = 4;
$section = 'B';

$stmt->execute();
echo $stmt->get_result()->num_rows ."\n";

// class 5 . section c
$class = 5;
$section = 'C';

$stmt->execute();
echo $stmt->get_result()->num_rows ."\n";

$stmt->close();
