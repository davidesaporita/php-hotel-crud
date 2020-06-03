<?php 

include __DIR__ . '/../data/database.php';
include __DIR__ . '/../../partials/functions.php';

var_dump($_POST);

if (!empty($_POST['id'])) { 

    $room_data = [];
    $room_data['id'] = $_POST['id'];
    $room_data['beds'] = $_POST['beds'];
    $room_data['floor'] = $_POST['floor'];
    $room_data['room_number'] = $_POST['room_number'];
    
    updateRoomById($conn, 'stanze', $room_data, $base_path);

} else {
    echo "Nessun ID in POST!";
}