<?php

    require("bdd.php");

    if (isset($_POST["continuer"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (empty($username)or empty($password)) {
            $erreur = "veuillez remplir tous les champs";
        }else {
            $selection = $bdd->prepare("SELECT * FROM utilisateurs WHERE username=? and motdepasse=?");
            $selection->execute(array($username,$password));
            $compte = $selection->rowCount();
            if ($compte == 1) {
                header("location:commande_agent.php");
            }
        }
    }


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