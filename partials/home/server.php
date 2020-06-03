<?php 

// Query per lettura tabella stanze

include __DIR__ . '/../data/database.php';
include_once __DIR__ . '/../../partials/functions.php';

$rooms = getAll($conn, 'stanze');