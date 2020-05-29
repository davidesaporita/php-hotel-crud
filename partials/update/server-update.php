<?php 

include __DIR__ . '/../data/database.php';

if (!empty($_POST['id'])) { 

    $room_id = $_POST['id'];
    $room_number = $_POST['room_number'];
    $beds = $_POST['beds'];
    $floor = $_POST['floor'];
    
    $sql = "UPDATE `stanze`
            SET `room_number` = $room_number, `beds` = $beds, `floor` = $floor
            WHERE `id` = $room_id";

    $result = $conn -> query($sql);

    if ($result && $conn -> affected_rows > 0) {
        header("Location: $base_path?id=$room_id&action=updated");
        //header("Location: $base_path/edit.php?id=$room_id&action=updated");
        //header("Location: $base_path/show.php?id=$room_id&action=updated");
    } elseif ($result) {
        echo "La query non ha modificato alcun record";
    } else {
        echo "Errore nella query";
    }

} else {
    echo "Nessun ID in POST";
}