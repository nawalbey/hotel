<?php
session_start();
//si $_SESSION['role'] est definie mais que sa valeur est differente de "ademin" ou encore que $_SESSION ['role'] n'est pas definie
if (isset($_SESSION['role']) || $_SESSION['role'] != "ademin") {
    header("location: http:/locallost/login.php");
}
include_once "../inc/header.php";
?>
<div class="d-flex justify-content-around container flex-wrap">


    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-plus text-center"></i>
        <div class="card-body">
            <h5 class="card-title">ajout hotel </h5>
            <p class="card-text">cliquez ici pour ajouter un hotel
            </p>
            <a href="add_hotel.php" class="btn btn-primary">ajouter un hotel</a>
        </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-plus text-center"></i>
        <div class="card-body">
            <h5 class="card-title">ajout hotel </h5>

            <p class="card-text">cliquez ici pour ajouter une chambre</p>
            <a href="add_room.php" class="btn btn-primary">ajouter une chambre</a>
        </div>
    </div>



    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-list text-center"></i>
        <div class="card-body">
            <h5 class="card-title">liste reservations </h5>
            <p class="card-text">cliquez ici pour ajouter pour voir la liste des reservations
            </p>
            <a href="#" class="btn btn-primary">liste reservation</a>
        </div>
    </div>

    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-list text-center"></i>
        <div class="card-body">
            <h5 class="card-title">liste hotel</h5>
            <p class="card-text">cliquez ici pour voir la liste hotel
            </p>
            <a href="hotel_list.php" class="btn btn-primary">liste reservation</a>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <i class="fa-solid fa-list text-center"></i>
        <div class="card-body">
            <h5 class="card-title">liste chambre</h5>
            <p class="card-text">cliquez ici pour voir la liste des chambres
            </p>
            <a href="room_list.php" class="btn btn-primary">liste chambre</a>
        </div>
    </div>


</div>
<?php include_once "../inc/footer.php"; ?>