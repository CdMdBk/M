<?php

session_start();
include 'connect-database.php';

$array_response = json_decode(file_get_contents('php://input'), true);
$email = $array_response['email'];
$password = $array_response['password'];
$array_json = array(
    $email,
    $password
);

$select_data = "SELECT id, email, password FROM `users`";
$array_response = $connect->query($select_data);

$coincidence = '';
if ($array_response->num_rows > 0) {
    while ($row = $array_response->fetch_assoc()) {
        if ($row['email'] === $email && $row['password'] === $password) {
            $coincidence = $row['id'];
        }
        if ($coincidence) {
            $array_json['data_user']['id_user'] = $coincidence;
            $array_json['data_user']['email_user'] = $row['email'];
            $array_json['data_user']['password_user'] = $row['password'];

            $_SESSION['id_user'] = $coincidence;
        }
    }
}

if (empty($coincidence)) {
    $error = array('Ошибка');
    echo json_encode($error);
    session_abort();
    exit();
}

echo json_encode($array_json);