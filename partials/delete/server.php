<?php 

include __DIR__ . '/../data/database.php';

if (!empty($_POST['id'])) {
    $room_id = $_POST['id'];
    
    $sql = "DELETE FROM `stanze`
            WHERE `id` = $room_id";

    $result = $conn -> query($sql);

    if ($result && $conn -> affected_rows > 0) {
        header("Location: $base_path?action=deleted");
    } elseif ($result) {
        echo "Query OK<br>Nessun record eliminato";
    } else {
        echo "Problema nella query";
    }
} else {
    echo "Nessun dato in POST";
}

include __DIR__ . '/../data/close-db.php';