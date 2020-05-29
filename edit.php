<?php 

include __DIR__ . '/partials/update/server-edit.php';
include __DIR__ . '/partials/templates/head.php';

?>

<main class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?php echo "$base_path/partials/update/server-update.php"; ?>" method="POST">
                <div class="form-group">
                    <label for="room_number">Numero di stanza</label>
                    <input type="number" class="form-control" name="room_number" id="room_number" value="<?php echo $room['room_number']; ?>">
                </div>
                <div class="form-group">
                    <label for="beds">Numero di letti</label>
                    <input type="number" class="form-control" name="beds" id="beds" value="<?php echo $room['beds']; ?>">
                </div>
                <div class="form-group">
                    <label for="floor">Piano</label>
                    <input type="number" class="form-control" name="floor" id="floor" value="<?php echo $room['floor']; ?>">
                </div>
                <input type="hidden" name="id" id="id" value="<?php echo $room['id']; ?>">
                <button type="submit" class="btn btn-primary">Esegui Modifica</button>
            </form>
        </div>
    </div>
</main>


<?php 

include __DIR__ . '/partials/data/close-db.php';
include __DIR__ . '/partials/templates/footer.php';

?>