<?php
session_start();
include_once "inc/header.php";
?>


<div class="container">

    <form action="model/db_booking.php" method="post">
        <input type="text" name="id_room" value="<?= $_GET['room'] ?>" hidden>
        <input type="text" name="price" value="<?= $_GET['price'] ?>" hidden>
        <div class="form-group">
            <label for="email">start date:</label>
            <input type="date" class="form-control" name="start_date">
        </div>

        <div class="form-group">
            <label for="password">end date :</label>
            <input type="date" class="form-control" name="end_date">
        </div>
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="book" value="submit">Submit</button>
    </form>
</div>
</form>
</div>

<?php include_once "inc/footer.php"; ?>