<?php 

function getAll($conn, $table) {
    
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $rows = [];
    
        while($row = $result -> fetch_assoc()) {
            $rows[] = $row;
        }
    } elseif ($result) {
        $rows = [];
    } else {
        $rows = false;
    }

    $conn -> close();
    
    return $rows;
}

function getById($conn, $table, $room_id) {
    
    $sql = "SELECT * FROM $table WHERE id = $room_id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } elseif ($result) {
        $row = [];
    } else {
        $row = false;
    }

    $conn -> close();
    
    return $row;
}

function deleteById($conn, $table, $room_id, $base_path) {
    
    $sql = "DELETE FROM `stanze`
            WHERE `id` = ?";

    $stmt = $conn -> prepare($sql);
    $stmt -> bind_param("i", $room_id);
    $stmt -> execute();

    if ($stmt && $stmt -> affected_rows > 0) {
        header("Location: $base_path?id=$room_id&action=deleted");
    } elseif ($stmt) {
        die("Query OK<br>Nessun record eliminato"); 
    } else {
        echo "Problema nella query";
    }

}

function updateRoomById($conn, $table, $room_data, $base_path) {
    
    $stmt = $conn -> prepare("UPDATE `stanze`
                              SET `room_number` = ?, `beds` = ?, `floor` = ?
                              WHERE `id` = ?");
    $stmt -> bind_param("iiii", $room_data['room_number'], $room_data['beds'], $room_data['floor'], $room_data['id']);
    $stmt -> execute();

    if ($stmt && $stmt -> affected_rows > 0) {
        header("Location: $base_path?id={$room_data['id']}&action=updated");
        //header("Location: $base_path/edit.php?id=$room_id&action=updated");
        //header("Location: $base_path/show.php?id=$room_id&action=updated");
    } elseif ($stmt) {
        echo "La query non ha modificato alcun record";
    } else {
        echo "Errore nella query";
    }

    $stmt -> close();
    $conn -> close();
}

?>