<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . "/hotel/inc/database.php";
if (isset($_POST['book'])) {
    //recuperer les infos
    $id_room = htmlspecialchars($_POST['id_room']);
    $startDate = htmlspecialchars($_POST['start_date']);
    $endDate = htmlspecialchars($_POST['end_date']);
    $price = htmlspecialchars($_POST["price"]);
    //convertir en date
    $dateStart = strtotime($startDate);
    $dateEnd = strtotime($endDate);

    $duration = $dateEnd - $dateStart;

    $nbDay = $duration / 86400;

    $today = date("j-m-y"); //la date d'aujurd'hui
    //si$today est supperieur a la date de debut de reservation  ou $today est supperieur a la date de fin de reservation
    if (strtotime($today) > strtotime($startDate) || strtotime($today) > strtotime($endDate)) {
        echo "<script>alert(votre date de debut ou de fin de reservation ne peut pas etre inferieur a la date d'aujourd'hui)</script>";
        echo "<script> window.location.href = http://hotel.com/booking.echo '<script>window.location.href = http://localhost/PHP/hotel/booking.php?room='.$idRoom.'&price='.$price.
        php</script>";

        die;
    } else {
        //se connecter a la bd
        $db = dbConnexion();
        //preparer la requete pour verifier si la chambre est dispo entre la date de depart et la date de fin
        $request = $db->prepare("SELECT * FROM bookings WHERE room_id = ? AND ((booking_start_date <= ? AND booking_end_date >= ?) OR (booking_start_date <= ? AND booking_end_date >= ?))");
        //executer la requete
        try {
            $request->execute(array($id_room, $startDate, $startDate, $endDate, $endDate));
            //recuperer le resultat
            $book = $request->fetch();
            if (empty($book)) {
                if ($startDate < $endDate) {
                    //preparer le requete pour reserver la chambre
                    $request = $db->prepare("INSERT INTO bookings(booking_start_date, booking_end_date, user_id, room_id, booking_price, booking_state) VALUES (?,?,?,?,?,?)");
                    //executer la requete
                    try {
                        $request->execute(array($startDate, $endDate, $_SESSION['id_user'], $id_room, $price * $nbDay, "in progess"));
                        //rediriger vers user_home.php
                        header("location: http://hotel.com/user_home.php");
                    } catch (PDOException $e) {
                        echo $e->getMessage();
                    }

                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


}

if(isset($_GET['id_book'])){
//se connecter a la bd
$db = dbConnexion();
//preparer la requete pour annuler la reservation
$request = $db->prepare("UPDATE bookings SET boikings SET bookings_state = ? WHERE id_booking = ?");
//executer la requete
try{
    $request->execute(array("cacenl", $_GET['id_book']));
    //redirection vers user_home.php
    header("location:http://hotel.comuser_home.php");
}catch(PDOException $e){
    echo $e->getMessage();
}
}