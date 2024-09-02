
<?php
require("bdd.php");
    if (isset($_POST["com"])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $num = $_POST["num"];
        $mail = $_POST["mail"];
        $quantite = $_POST["quantite"];
        $choix = $_POST["choix"];
        $heure = $_POST["heure"];
        $date= $_POST["date"];
        $adresse = $_POST["adresse"];

        if (empty($nom) or empty($prenom) or empty($num) or empty($mail) or empty($quantite) or empty($choix) or empty($heure) or empty($date) or empty($adresse)) {
           $erreur = "veuillez remplir tous les champs";
        }else {
            # code...
         $insert= $bdd->prepare("INSERT INTO client_commande (nom_client,prenom_client,telephone,email,quantité_commande,choix_plat,heure_livraison,date_livraison,adresse)values(?,?,?,?,?,?,?,?,?)");
        $insert->execute(array($nom,$prenom,$num,$mail,$quantite,$choix,$heure,$date,$adresse));
        $erreur = "commande envoyé";
    
        }
        
    }


?>