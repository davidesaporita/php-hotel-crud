<?php 

include __DIR__ . '/../data/database.php';
include __DIR__ . '/../../partials/functions.php';


if (!empty($_GET['id'])) {
    
    $room_id = $_GET['id'];
    $room = getById($conn, 'stanze', $room_id);

} else {
    echo "Nessun dato in POST";
}

