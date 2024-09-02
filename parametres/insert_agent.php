<?php
require("bdd.php");
    if (isset($_POST["btnag"])) {
        $matag = $_POST["matriculeag"];
        $nomag = $_POST["nomag"];
        //$autresag = $_POST["autresag"];
        $prenomag = $_POST["prenomag"];
        $telephoneag = $_POST["numag"];
        $mailag = $_POST["mailag"];
        $fonctionag = $_POST["fonctionag"];

        if (empty($matag) or empty($nomag) or empty($prenomag) or empty($telephoneag)or empty($mailag) or ($fonctionag)) {
            $erreur = "veuillez remplir tous les champs svp";
        }else {
            $insert= $bdd->prepare("INSERT INTO agent(nom_agent,prenom_agent,telephone,email,fonction)values(?,?,?,?,?,?)");
            $insert->execute(array($nomag,$prenomag,$telephoneag,$mailag,$fonctionag));
        }

    
    }


?>