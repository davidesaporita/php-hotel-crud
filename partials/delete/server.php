<?php 

include __DIR__ . '/../data/database.php';

if(!empty($_POST['id'])) {
    $room_id = $_POST['id'];
    
    $sql = "DELETE FROM `stanze`
            WHERE `id` = $room_id";
}