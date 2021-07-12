<?php

// pdo data group fetching

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=lwhh_php_db07;charse=UTF8;", 'root', '');

// default fetch mode attribute set
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if ($pdo) {
    $stmt = $pdo->prepare("SELECT sex, roll, name FROM students WHERE class =? AND section =? ");

    $stmt->execute([1, 'A']);
    // we are fetching data via grouping male and female data
    $data = $stmt->fetchAll(PDO::FETCH_GROUP);  // PDO::FETCH_GROUP to fetch by grouping data
    print_r($data);

    echo "Total Male data : ". count($data['M']) ." students";

}