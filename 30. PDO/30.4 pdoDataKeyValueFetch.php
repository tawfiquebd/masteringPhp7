<?php

// pdo data key value fetch

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=lwhh_php_db07;charse=UTF8;", 'root', '');

// default fetch mode attribute set
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if ($pdo) {
    $stmt = $pdo->prepare("SELECT roll, name FROM students WHERE class =? AND section =? ");

    $stmt->execute([1,'A']);
    $result = $stmt->fetchAll(PDO::FETCH_KEY_PAIR); // PDO::FETCH_KEY_PAIR to get data as key value

    print_r($result);
    // roll is key and name is value
}
