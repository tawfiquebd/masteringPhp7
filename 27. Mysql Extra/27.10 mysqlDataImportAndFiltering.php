<?php
// mysql data import and filtering by php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','lwhh_php_db07');

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$stmt = $mysqli->prepare("INSERT into newstudents(name, sex, class, section, roll) 
                                values(?, ?, ?, ?, ?);");
$name = $sex = $class = $section = $roll = '';
$stmt->bind_param('ssisi', $name, $sex, $class, $section, $roll);
// open csv file and read
$csv_file = array_map('str_getcsv', file('name-list.csv'));
shuffle($csv_file);
//print_r($file[1]);
$sections = ['A', 'B', 'C', 'D'];
$_section = [];
$i = 1;
for($i = 0; $i < 1000; $i++){
    $name = $csv_file[$i][0];
    $sex = $csv_file[$i][1] == 'boy' ? 'M' : 'F' ;
    $class = rand(1, 10);
    $section = $sections[array_rand($sections)];// array_rand() shuffles array
    // each class has 4 section . so 1-10 class has class 10 x 4 sections = 40 .
    // here total 40 array
    // $_students[1][A] = 1; $_students[1][B] = 1; $_students[1][C] = 1; $_students[1][D] = 1
    $_students["{$class}{$section}"][] = 1;
    $roll = count($_students["{$class}{$section}"]);
    printf("Name %s : Sex %s : Class %s : Section %s : Roll %s \n", $name, $sex, $class, $section, $roll);
    $stmt->execute();
}

