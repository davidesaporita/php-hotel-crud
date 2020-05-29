<?php 
include_once __DIR__ . '/../../env.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CRUD Hotel</title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>/dist/assets/css/main.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">CRUD Hotel 6 stelle</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a href="<?php echo $base_path; ?>" class="btn btn-primary" role="button">Rooms List</a>
            </div>
        </nav>
    </header>