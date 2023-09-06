<?php
session_start();
include_once "inc/header.php";
require_once "./model/functions.php";

$listRoom = roomList();
?>
<div class="container d-flex flex-wrap">
    <?php foreach ($listRoom as $room) { ?>
        <div class="card" style="width: 18rem;">
            <div class="img_room"><img src="assets/img/<?= $room['room_imgs'] ?>" class="card-img-top" alt="image"> </div>
            <div class="card-body">
                <p class="card-text">
                    <?= $room['price']; ?>£/ nuit
                </p>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <?= $room['category']; ?>
                </p>
                <p class="card-text">
                    <?= $room['persons']; ?> Persons
                </p>
                <a class="btn-info"
                    href="booking.php?room=<?= $room['id_room']; ?>&price=<?= $room['price'] ?>">book this room</a>

            </div>
        </div>
    <?php } ?>

</div>

<?php include_once "inc/footer.php"; ?>



<?php include_once "inc/footer.php"; ?>