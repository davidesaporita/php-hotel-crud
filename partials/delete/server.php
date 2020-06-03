<?php 

include __DIR__ . '/../data/database.php';
include __DIR__ . '/../../partials/functions.php';

if (!empty($_POST['id'])) {

    $room_id = $_POST['id'];
    deleteById($conn, 'stanze', $room_id, $base_path);

} else {
    echo "Nessun dato in POST";
}