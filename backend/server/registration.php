<?php

include('connect-database.php');
$array_response = json_decode(file_get_contents('php://input'), true);

$name = $array_response['name'];
$email = $array_response['email'];
$password = $array_response['password'];

$array_json = array(
    $name,
    $email,
    $password
);

$add_data = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";

$connect->query($add_data);

echo json_encode($array_json);