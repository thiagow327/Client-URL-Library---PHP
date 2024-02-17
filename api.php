<?php

// method use to call this api
echo "Method:";
echo $_SERVER['REQUEST_METHOD'] . "\n";

// get all headers
echo "\nHeaders: \n";
$headers = getallheaders();
print_r($headers);

// get all post data
//echo "\nPost: \n";
//print_r($_POST);


// get all post data in json
echo "\nPost: \n";
$input = file_get_contents('php://input');
$array = json_decode($input, true);
$_POST = !empty($array) ? $array : $_POST;
print_r($_POST);



// response in json
// $array = [
//     'codigo' => 200,
//     'sucesso' => true,
// ];

// echo json_encode($array);
