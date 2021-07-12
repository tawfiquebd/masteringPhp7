<?php

// PDO multiple column and row fetch. And default fetch mode setup
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=lwhh_php_db07;charset=UTF8;",'root','');

// set default pdo fetch mode attribute. So, we dont have to put parameter in fetchAll() method
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
if($pdo){
    $stmt = $pdo->query("SELECT * FROM students WHERE class=1 AND section='A' ");
    $result = $stmt->fetchAll();
    print_r($result);
}