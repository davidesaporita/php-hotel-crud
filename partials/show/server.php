<?php 

include_once __DIR__ . '/../data/database.php';
include_once __DIR__ . '/../../partials/functions.php';

if(empty($_GET['id'])) {
    die("Parametro ID mancante in querystring");
} else {
    $room_id = $_GET['id'];
    $room = getById($conn, 'stanze', $room_id);
}



