<?php 

include __DIR__ . '/partials/home/server.php';
include __DIR__ . '/partials/templates/head.php';

?>

<?php 
    if (!empty($_GET['action']) && !empty($_GET['id'])) { ?>
        <div class="container-fluid notifications text-center">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success" role="alert">
                        <?php
                        switch($_GET['action']) {
                            case ('deleted'): echo "Record <strong>{$_GET['id']}</strong> eliminato con successo"; break;
                            case ('updated'): echo "Record <strong>{$_GET['id']}</strong> aggiornato con successo"; break;
                            case ('created'): echo "Record <strong>{$_GET['id']}</strong> creato con successo"; break;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php 
    }
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
                    if (!empty($rooms)){
                        foreach ($rooms as $key => $room) { ?>
                            <tr>
                                <td><?php echo $room['room_number']; ?></td>
                                <td><?php echo $room['floor']; ?></td>
                                <td><?php echo $room['beds']; ?></td>
                                <td><a class="btn btn-success" href="<?php echo "$base_path/show.php?id={$room['id']}"; ?>">Visualizza</a></td>
                                <td><a class="btn btn-warning" href="<?php echo "$base_path/edit.php?id={$room['id']}"; ?>">Modifica</a></td>
                                <td>
                                    <form action="<?php echo "$base_path/partials/delete/server.php"?>"
                                          method="POST">
                                          <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                                          <input class="btn btn-danger" type="submit" value="Elimina">
                                    </form>
                                </td>
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