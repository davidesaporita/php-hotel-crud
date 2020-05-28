<?php 

// Query per lettura stanza specifica via GET

include __DIR__ . '/../data/database.php';

$id_stanza = $_GET['id'];

$sql = "SELECT * FROM `stanze` WHERE id = '$id_stanza'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

    // Assegna il risultato della query come array in $room (diamo per scontato che sia un solo risultato)
    $room = $result->fetch_assoc();

} elseif ($result) {
    echo "Nessun risultato";
} else {
    echo "Errore nella query";
}