<?php
// Set the response content type to JSON
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: http://13.127.230.199:3000');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');

require "/root/docker-repo/api/config.php";
require_once "./api/todos.php";

$todoModel = new Todo();
$response = $todoModel->getTodos(10);
// Create a response array

// Encode the response array as JSON
$jsonResponse = json_encode($response);

// Output the JSON response
echo $jsonResponse;
