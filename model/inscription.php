<?php
require_once("../inc/database.php");
if (isset($_POST['submit'])) {
    //recuperer les infos saisies par le user
    $lastName = htmlspecialchars($_POST['lastname']);
    $firstName = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $address = htmlspecialchars($_POST["address"]);
    $phoneNumber = htmlspecialchars($_POST["phone"]);
    $birthday = htmlspecialchars($_POST['birthday']);
    $gender = htmlspecialchars($_POST['gender']);
    //crypter le mot de passe
    $cryptedPassword = password_hash($password, PASSWORD_DEFAULT);

    //retablir la connexion avec la bd 
    $db = dbConnexion();
    //preparer la requete 
    $request = $db->prepare("INSERT INTO `users`(`last_name`, `firt_name`, `email`, `password`, `birthday`, `address`, `phone_number`, `gender`) VALUES (?,?,?,?,?,?,?,?)");
    //executer la requete 
    try {
        $request->execute(array($lastName, $firstName, $email, $cryptedPassword, $birthday, $address, $phoneNumber, $gender));
    } catch (PDOException $e) {
        echo $e->getMessage();

    }
}