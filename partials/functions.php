<?php 

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

?>