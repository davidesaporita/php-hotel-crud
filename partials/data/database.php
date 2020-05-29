<?php 

require __DIR__ . '/../../env.php';

// DB Connection
$conn = new mysqli( $server_name, $username, $password, $db_name );

if( $conn && $conn -> connect_error ) {
    die('Errore nella connessione al Database');
}





