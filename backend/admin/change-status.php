<?php

include '../connect-database.php';
$array_request = json_decode(file_get_contents('php://input'), true);

$get_statuses = "SELECT status FROM `records`";
$array_statuses = $connect->query($get_statuses);

$array_response = array();
if ($array_statuses->num_rows > 0) {
    $count = 0;
    while ($row = $array_statuses->fetch_assoc()) {
        $array_response[$count] = $row['status'];
        $count++;
    }
}

echo json_encode($array_response);