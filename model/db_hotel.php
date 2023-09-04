<?php
// require_once "../inc/database.php";
// if (isset($_POST['add_hotel'])) {
//     //recuperation des infos
//     $hotelName = htmlspecialchars($_POST['hotel_name']);
//     $location = htmlspecialchars($_POST['location_hotel']);
//     $capacityhotel = htmlspecialchars($_POST['capacity_hotel']);
//     //se connecter a la base de donnes
//     $db = dbConnexion();
//     //preparer la requete
//     $request = $db->prepare("INSERT INTO hotels (hotel_name, location, capacity) VALUES (?,?,?)");
//     //executer la requete 
//     try {
//         $request->execute(array($hotelName, $location, $capacityhotel));
//         header("location: http://localhost/admin/hotel_list.php");
//     } catch (PDOException $e) {
//         $e->getMessage();
//     }
// }

require_once "../inc/database.php";

if (isset($_POST['add_hotel'])) {
    // recuperation des info
    $hotelName = htmlspecialchars($_POST['hotel_name']);
    $location = htmlspecialchars($_POST['location_hotel']);
    $capacityHotel = htmlspecialchars($_POST['capacity_hotel']);
    // se connecter a la base de donnees
    $db = dbConnexion();
    // preparer la requete
    $request = $db->prepare("INSERT INTO hotels (hotel_name, location, capacity) VALUES (?, ?, ?)");
    // executer la requete
    try {
        $request->execute(array($hotelName, $location, $capacityHotel));
        // header("Location: http://localhost/PHP/hotel/admin/hotel_list.php");
    } catch (PDOException $e) {
        $e->getMessage();
    }
}