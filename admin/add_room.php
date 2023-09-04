<?php include_once "../inc/header.php";
include_once "../model/functions.php";
$listhotel = HotelList();
?>



<div class="container">
    <h1>hotel de l'horreur</h1>
    <form action="../model/db_room.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>hotel :</label>
            <select name="hotel" class="form-control">
                <option value="">choose hotel</option>
                <?php foreach ($listhotel as $hotel) { ?>
                    <option value="<?= $hotel["id_hotel"] ?>"><?= $hotel["hotel_name"] ?></option>
                <?php } ?>
            </select>

        </div>

        <div class="form-group">
            <label for="firstname">Room number :</label>
            <input type="text" class="form-control" name="room_number">
        </div>

        <div class="form-group">
            <label for="lastname">room Price :</label>
            <input type="text" class="form-control" name="room_price">
        </div>
        <div class="form-group">
            <label for="lastname">person :</label>
            <input type="number" class="form-control" name="person">
        </div>

        <div class="form-group">
            <label>category :</label>
            <select name="category">
                <option value="">choose category</option>
                <option value="classic">classic</option>
                <option value="vip">vip</option>
            </select>

        </div>

        <div class="form-group">
            <label>photo :</label>
            <input type="file" class="form-control" name="image">
        </div>

        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_room" value="submit">Submit</button>
    </form>
</div>
</form>
</div>




<?php include_once "../inc/footer.php"; ?>