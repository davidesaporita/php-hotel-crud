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

?>