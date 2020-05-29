<?php 

include __DIR__ . '/partials/home/server.php';
include __DIR__ . '/partials/templates/head.php';

?>

<main class="container">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
        
            <header>
                <h1>Hotel Rooms List</h1>
            </header>

            <table class="table">
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Piano</th>
                        <th>N° Letti</th>
                        <th colspan="3">Operazioni</th>
                    </tr>
                </thead>        

                <tbody>

                    <?php 
                    if(!empty($rooms)){
                        foreach ($rooms as $key => $room) { ?>
                            <tr>
                                <td><?php echo $room['room_number']; ?></td>
                                <td><?php echo $room['floor']; ?></td>
                                <td><?php echo $room['beds']; ?></td>
                                <td><a class="text-success" href="<?php echo "show.php?id={$room['id']}"; ?>">Visualizza</a></td>
                                <td><a class="text-warning" href="#">Modifica</a></td>
                                <td><a class="text-danger" href="#">Elimina</a></td>
                            </tr>
                    <?php
                        }
                    } 
                    ?>
                    
                </tbody>

            </table>
        </div>
    </div>
</main>    

<?php 

include __DIR__ . '/partials/data/close-db.php';
include __DIR__ . '/partials/templates/footer.php';

?>