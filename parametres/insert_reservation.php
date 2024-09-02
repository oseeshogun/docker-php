<?php
require("bdd.php");
    if (isset($_POST["res"])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $num = $_POST["numero"];
        $mail = $_POST["mail"];
        $nbr = $_POST["nbr"];
        $type = $_POST["typeres"];
        $heure = $_POST["heure"];
        $date= $_POST["date"];

        if (empty($nom) or empty($prenom) or empty($num) or empty($mail) or empty($nbr) or empty($type) or empty($heure) or empty($date)) {
           $erreur = "veuillez remplir tous les champs";
        }else {
            # code...
            $insert= $bdd->prepare("INSERT INTO client_reservation (nom_client,prenom_client,telephone,email,nombre,type_reservation,heure_reservation,date_reservation)values(?,?,?,?,?,?,?,?)");
        $insert->execute(array($nom,$prenom,$num,$mail,$nbr,$type,$heure,$date));
        $erreur = "reservation envoyé";
    
        }
        
    }


?>