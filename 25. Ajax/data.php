<?php
//echo "Hello";
//echo json_encode( $_GET, JSON_PRETTY_PRINT );


//$data = $_GET;
$data = $_POST;
$data['result'] = 'success';
echo json_encode( $data, JSON_PRETTY_PRINT );