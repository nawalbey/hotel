<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/hotel/inc/database.php";
if (isset($_POST['room'])) {
    //recuperer les infos
    $id_room = htmlspecialchars($_POST['id_room']);
    $start_date = htmlspecialchars($_POST['start_date']);
    $end_date = htmlspecialchars($_POST['end_date']);
    $price = htmlspecialchars($_POST["price"]);

    $startDate = strtotime($startDate);
    $endDate = strtotime($endDate);

    $duration = $end_date - $start_date;

    $nbDay = $duration / 86400;
    //se connecter a la bd
    $db = dbConnexion();
    //preparer la requete pour verifier si la chambre est dispo entre la date de depart et la date de fin
    $request = $db->prepare("SELECT * FROM  bookings WHERE room_id = ? AND booking_start_date > ? AND booking_end_date < ?");
    //executer la requete
    try {
        $request->execute(array($id_room, $startdate, $endDate));
        //recuperer le resultat
        $book = $request->fetch();
        if (empty($book)) {
            if ($startDate < $endDate) {
                //preparer le requete pour reserver la chambre
                $request = $db->prepare("INSERT INTO 'bookings'('booking_start_date', 'booking_end_date', 'user_id', 'room_id', 'booking_price', 'booking_state') VALUES (?,?,?,?,?,?");

            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}