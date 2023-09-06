<?php
function dbConnexion()
{
    $connexion = null;
    try {
        $connexion = new PDO("mysql:localhost;dbname=id21228701_db_hotel", "id21228701_admin", "admiN123?");
    } catch (PDOException $e) {
        $connexion = $e->getMessage();
    }
    return $connexion;
}