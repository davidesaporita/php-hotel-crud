<?php 

include __DIR__ . '/partials/home/server.php';
include __DIR__ . '/partials/templates/head.php';

?>

<main class="container">
    <div class="row">
        <div class="col-12">
        
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
                                <td><a href="<?php echo __DIR__ . "/show.php?id={$room['id']}"; ?>">Visualizza</a></td>
                                <td><a href="<?php echo __DIR__ . "/update.php?id={$room['id']}"; ?>">Modifica</a></td>
                                <td><a href="<?php echo __DIR__ . "/delete.php?id={$room['id']}"; ?>">Elimina</a></td>
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

include __DIR__ . '/partials/templates/footer.php';

?>