<?php

// init curl
$curl = curl_init();

// set headers
$headers = [
    'Authorization: Bearer 1234567890',
    'Content-Type: application/json'
];

// set post in array 
$post = [
    'name' => 'John Doe',
    'email' => 'john@example.com'
];

// set post in json
$json = json_encode($post);

// set url, method and return on array
curl_setopt_array($curl, [
    CURLOPT_URL             => "http://localhost/teste-tecnico-sintegra-parana/curl/api.php",
    CURLOPT_CUSTOMREQUEST   => "POST",
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_HTTPHEADER      => $headers,
    // CURLOPT_POSTFIELDS      => $post // set post in array
    CURLOPT_POSTFIELDS      => $json // or set post in json
]);

// exec curl
$response = curl_exec($curl);

// close curl
curl_close($curl);

// show response
$array = json_decode($response, true);
print_r($array);
