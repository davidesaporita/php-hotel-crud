<?php 

include __DIR__ . '/partials/templates/head.php';

?>

<main class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?php echo "$base_path/partials/create/server.php"; ?>" method="POST">
                <div class="form-group">
                    <label for="room_number">Numero di stanza</label>
                    <input type="number" class="form-control" name="room_number" id="room_number" value="">
                </div>
                <div class="form-group">
                    <label for="beds">Numero di letti</label>
                    <input type="number" class="form-control" name="beds" id="beds" value="">
                </div>
                <div class="form-group">
                    <label for="floor">Piano</label>
                    <input type="number" class="form-control" name="floor" id="floor" value="">
                </div>

                <input type="submit" class="btn btn-warning" value="Aggiungi nuova stanza">
                <a href="<?php echo $base_path; ?>" class="btn btn-primary">Torna alla lista</a>

            </form>
        </div>
    </div>
</main>


<?php 

include __DIR__ . '/partials/templates/footer.php';

?>