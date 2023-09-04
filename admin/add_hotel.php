<<<<<<< HEAD
<?php include_once "../inc/header.php" ?>

<div class="container">
    <h1>Contact form</h1>
    <form action="../model/db_hotel.php" method="post">

        <div class="form-group">
            <label>name :</label>
            <input type="text" class="form-control" name="hotel_name">
        </div>
        <div class="form-group">
            <label>localisation :</label>
            <input type="text" class="form-control" name="location_hotel">
        </div>

        <div class="form-group">
            <label>capacity :</label>
            <input type="number" class="form-control" name="capacity_hotel">
        </div>



        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_hotel" value="submit">Submit</button>
    </form>
</div>

<?php include_once "../inc/footer.php" ?>
=======
<?php include_once "../inc/header.php"?>

<?php include_once "../inc/footer.php"?>
>>>>>>> main
