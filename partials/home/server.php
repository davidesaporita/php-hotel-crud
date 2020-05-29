<?php 

// Query per lettura tabella stanze

include __DIR__ . '/../data/database.php';

$sql = "SELECT * FROM `stanze`";
$result = $conn -> query($sql);

if ($result && $result -> num_rows > 0) {

    // Init and populate array $rooms
    $rooms = [];
    
    while($row = $result -> fetch_assoc()) {
        $rooms[] = $row;
    }

} elseif ($result) {
    echo "Nessun risultato";
} else {
    echo "Errore nella query";
}