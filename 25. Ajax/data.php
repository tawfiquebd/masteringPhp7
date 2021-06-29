<?php
//echo "Hello";
//echo json_encode( $_GET, JSON_PRETTY_PRINT );

// FOR GET ;
//$data = $_GET;
// FOR POST ;
$data = $_POST;
// FOR DELETE/PUT ;
//$data = $_GET;

$data['result'] = 'success';
// get method type
$data['method'] = $_SERVER['REQUEST_METHOD'];
echo json_encode( $data, JSON_PRETTY_PRINT );