<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hotel/inc/database.php";

function HotelList()
{
    // se connecter a la db (date base) ou bd (base de donnees)
    $db = dbConnexion();
    //preparer la requete
    $request = $db->prepare("SELECT * FROM hotels");
    //executer la requete
    try {
        $request->execute();
        //recuperer le resultat dans un tableau 
        $listHotel = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $listHotel;


}
function roomList()
{
    // se connecter a la db (data base) ou bd (base de donnees)
    $db = dbConnexion();
    //preparer la requete
    $request = $db->prepare("SELECT * FROM rooms");
    //executer la requete
    $listroom = null;
    try {
        $request->execute();
        //recuperer le resultat dans un tableau 
        $listroom = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $listroom;


}


function userBookList($idUser)
{
    // se connecter a la db (data base) ou bd (base de donnees)
    $db = dbConnexion();
    //preparer la requete
    $request = $db->prepare("SELECT * FROM bookings WHERE user_id = ? AND booking_state = ?");
    //executer la requete
    $userBookList = null;
    try {
        $request->execute(array($idUser, 'in progress'));
        //recuperer le resultat dans un tableau 
        $userBookList= $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $userBookList;


}