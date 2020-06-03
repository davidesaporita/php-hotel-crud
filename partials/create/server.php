<?php 

include __DIR__ . '/../data/database.php';

if (empty($_POST['room_number']) || empty($_POST['beds']) || empty($_POST['floor'])) {
    die("Manca qualche dato");
} else {
    $stmt = $conn -> prepare("INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`)
                              VALUES (?, ?, ?, NOW(), NOW())");
    $stmt -> bind_param("iii", $_POST['room_number'], $_POST['beds'], $_POST['floor']);
    $stmt -> execute();

    if($stmt && $stmt -> insert_id) {
        $room_id = $stmt -> insert_id;
        header("Location: $base_path/show.php?id=$room_id");
    } else {
        die("Qualcosa è andato storto nella creazione della stanza");
    }

    $stmt -> close();
}