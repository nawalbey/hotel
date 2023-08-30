<?php
require_once "inc/database.php";
if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    //etablir la connexion avec la bd 
    $dv = dbConnexion();
    //preparer la requete
    $request = $db->prepare("SELECT * FROM users WHERE email = ?");
    //executer la requete
    try {
        $request->execute(array($email));
        //recuperer le resultat de la requete
        $userInfo = $request->fetch();
        (PDO::FETCH_ASSOC);
        if (empty($userInfo)) {
            echo "utulisateur inconnue";
        } else {
            //verifier si le mot de passe est correct
            if (password_verify($password, $userInfo['password'])) {
                //si l'utulisateur est un admin
                if ($userInfo['role'] == "admin") {
                    header("location: admin/admin.php");

                } else {
                    header("location: user_home.php");

                }

            } else {
                echo "ahhh tu fais le malin";
            }
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }
}