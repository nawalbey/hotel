<?php
require_once "../inc/database.php";

function HotelList()
{
    // se connecter a la db (date base) ou bd (base de donnees)
    $db = dbConnexion();
    //preparer la requete
    $request = $db->prepare("SELECT * FROM hotels");
    //executer la requete
    try{
        $request->execute();
        //recuperer le resultat dans un tableau 
        $listHotel = $request->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    return $listHotel;


}