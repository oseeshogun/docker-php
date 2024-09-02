


<?php
    require("header_admin.php");
    
?>
<?php
    require("parametres/bdd.php");

    $sel = $bdd->prepare("SELECT * FROM client_reservation");
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
                                <th colspan="10" class="text-center">LISTE DES RESERVATIONS</th>
                            </tr>
                            <tr class="bg-success">
                                <th>numero reservation</th>
                                <th>nom</th>
                                <th>Prenom</th>
                                <th>numero tel</th>
                                <th>Email</th>
                                <th>nombre de personnes</th>
                                <th>type de reservation</th>
                                <th>heure reservation</th>
                                <th>date reservation</th>
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
                                        <td class="text-center"><?=$mb["nombre"]?></td>
                                        <td class="text-center"><?=$mb["type_reservation"]?></td>
                                        <td class="text-center"><?=$mb["heure_reservation"]?></td>
                                        <td class="text-center"><?=$mb["date_reservation"]?></td>
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