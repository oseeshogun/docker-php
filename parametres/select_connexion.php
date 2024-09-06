<?php
    session_start();
    require("bdd.php");

    ob_start();

    if (isset($_POST["continuer"])) {
        $erreur  = "";
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)or empty($password)) {
            $erreur = "veuillez remplir tous les champs";
        }else {
            $selection = $bdd->prepare("SELECT * FROM utilisateurs WHERE username=? and motdepasse=?");
            $selection->execute(array($username,$password));
            $compte = $selection->rowCount();
            $user = $selection->fetch(PDO::FETCH_ASSOC);
            if ($compte == 1) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: commande.php");
            } else {
                $erreur = "Veuillez verifier vos identifiants";
            }
        }
    }

    ob_end_flush(); 


   /* if (isset($_POST["continuer"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)or empty($password)) {
            $erreur = "veuillez remplir tous les champs";
        }else {
            $selection = $bdd->prepare("SELECT * FROM administrateur WHERE username=? and motdepasse=?");
            $selection->execute(array($username,$password));
            $compte = $selection->rowCount();
            if ($compte == 1) {
                header("location:agent.php");
            }
        }
    }
*/



?>