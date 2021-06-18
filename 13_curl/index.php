<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.

$resource =curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($resource);
curl_close($resource);
$code = curl_getinfo($resource);
echo   "<pre>";
var_dump($code);
echo  "</pre>";


echo  $result;
// Get response status code

// set_opt_array

// Post request
