<?php

// Prepared statement in PDO

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=lwhh_php_db07;charse=UTF8;",'root','');

// default fetch mode attribute set
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

if($pdo){
    $stmt = $pdo->prepare("SELECT * FROM students WHERE class =? AND section =? ");

    // without bind params [Direct values]. it works
//    $stmt->execute([1,'A']);
//    print_r($stmt->fetchAll());

    // we can bind with direct value (without variables). it works
//    $stmt->bindValue(1,1,PDO::PARAM_INT);
//    $stmt->bindValue(2,'A',PDO::PARAM_STR);

    // Recommended : now we will do bind with variables
    $class = 5;
    $section = "A";

    $stmt->bindParam(1,$class,PDO::PARAM_INT);
    $stmt->bindParam(2,$section,PDO::PARAM_STR);

    $stmt->execute();
    $result = $stmt->fetchAll();
    print_r($result);

    // we can get/fetch more data by binding variables like this
    $class = 1;
    $section = "B";

    $stmt->execute();
    $result = $stmt->fetchAll();
    print_r($result);

}
