<?php

// Simple pdo data fetching

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=lwhh_php_db07;charset=UTF8;",'root','');
if($pdo){
    $stmt = $pdo->query("SELECT count(*) as total from students WHERE class=1 and section='A' ");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($result);
//    $total = $stmt->fetchColumn();
//    echo $total;
}