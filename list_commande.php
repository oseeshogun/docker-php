


<?php
    require("header_admin.php");
    require("parametres/bdd.php");

    $sel = $bdd->prepare("SELECT * FROM client_commande");
    $sel->execute();
    $getsel= $sel->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>restaurant</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body class="corp">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <table class="table table-bordered border-dark mt-5" border="2">
                            <tr>
                                <th colspan="10" class="text-center">LISTE DES COMMANDES</th>
                            </tr>
                            <tr class="bg-success">
                                <th>numero</th>
                                <th>nom</th>
                                <th>prenom</th>
                                <th>numero tel</th>
                                <th>Email</th>
                                <th>libelle commande</th>
                                <th>date reception</th>
                                <th>heure reception</th>
                                <th>adresse completes</th>
                                <th>vaider</th>
                                <th>non valide</th>
                            </tr>
                            
                            <?php
                                foreach ($getsel as $mb) {
                                    ?>
                                    <tr>
                                        <td><?=$mb["id"]?></td>
                                        <td class="text-center"><?=$mb["nom_client"]?></td>
                                        <td class="text-center"><?=$mb["prenom_client"]?></td>
                                        <td class="text-center"><?=$mb["telephone"]?></td>
                                        <td class="text-center"><?=$mb["email"]?></td>
                                        <td class="text-center"><?=$mb["choix_plat"]?></td>
                                        <td class="text-center"><?=$mb["date_livraison"]?></td>
                                        <td class="text-center"><?=$mb["heure_livraison"]?></td>
                                        <td class="text-center"><?=$mb["adresse"]?></td>
                                        <td><a href="#" class="btn-success btn">valider</a></td>
                                        <td><a href="#" class="btn-danger btn">supprimer</a></td>
                                       
                                    </tr>
                                    <?php
                                     } 
                                ?>
            
                   
                   
                            
                        </table>
      
                    </div>
                </div>
            </div>

    <script src="js/bootstrap.js">

    </script>
</body>
</html>