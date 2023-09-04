<?php
include_once "../inc/database.php";
if (isset($_POST['add_room'])) {
    $hotel = htmlspecialchars($_POST["hotel"]);
    $roomNumber = htmlspecialchars($_POST['room_number']);
    $roomPrice = htmlspecialchars($_POST['room_price']);
    $person = htmlspecialchars($_POST['person']);
    $category = htmlspecialchars($_POST['category']);

    //traitement de l'image
    $imgName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];

    $destination = $_SERVER["DOCUMENT_ROOT"] . '/hotel/assets/img/' . $imgName;

    if (move_uploaded_file($tmpName, $destination)) {
        //se connecter a la bd
        $db = dbConnexion();
        //preparer la requete
        $request = $db->prepare("INSERT INTO rooms (room_number, price, room_imgs, persons, category, hotel_id) VALUES (?,?,?,?,?,?)");
        //executer la requete
        try {
            $request->execute(array($roomNumber, $roomPrice, $imgName, $person, $category, $hotel));
            //redirection vers list
            header("location:http://localhost/hotel/admin/list_room.php")
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}