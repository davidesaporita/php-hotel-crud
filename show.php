<?php 

include __DIR__ . '/partials/show/server.php';
include __DIR__ . '/partials/templates/head.php';

?>

<main class="container">
    <div class="card">
        <div class="card-body">
            <img src="https://room-matehotels.com/images/img/oscar/hotel/hotel09.jpg" alt="" class="card-img-top">
            <h3 class="card-title"><?php echo "Stanza N° {$room['room_number']}"; ?></h3>
            <p class="card-text">La stanza <?php echo $room['room_number']; ?> possiede un numero di letti pari a <?php echo $room['beds']; ?> e si trova al <?php echo $room['floor']; ?>° piano.</p>
            <a href="index.php" class="btn btn-primary">Torna all'elenco delle stanze</a>
        </div>
    </div>
</main>

<?php 

include __DIR__ . '/partials/data/close-db.php';
include __DIR__ . '/partials/templates/footer.php';

?>