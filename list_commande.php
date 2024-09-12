<?php
if (session_id() == '') {
    session_start(); // Start the session if it hasn't been started
}

require("header.php");
require("parametres/bdd.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete'])) {
        try {
            $id = $_POST['id']; // Get the ID from the form submission

            // Prepare the DELETE statement
            $sql = "DELETE FROM client_commande WHERE id = :id";
            $stmt = $bdd->prepare($sql);

            // Bind the ID parameter
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            // Execute the statement
            if ($stmt->execute()) {
            } else {
            }
        } catch (PDOException $e) {
        }
    } else {
        try {
            // Assuming you have the ID of the item you want to update
            $id = $_POST['id']; // or however you are retrieving the ID
            $adresse = "validated"; // the new value for the adresse column

            // Prepare the SQL UPDATE statement
            $sql = "UPDATE client_commande SET adresse = :adresse WHERE id = :id";
            $stmt = $bdd->prepare($sql);

            // Bind parameters
            $stmt->bindParam(':adresse', $adresse);
            $stmt->bindParam(':id', $id);

            // Execute the statement
            $stmt->execute();
        } catch (PDOException $e) {
        }
    }
}


$sel = $bdd->prepare("SELECT * FROM client_commande");
$sel->execute();
$getsel = $sel->fetchAll();

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
                        <th colspan="12" class="text-center">LISTE DES COMMANDES</th>
                    </tr>
                    <tr class="bg-success text-light">
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Numéro de téléphone</th>
                        <th>E-mail</th>
                        <th>Plat</th>
                        <th>Quantité</th>
                        <th>Date réception</th>
                        <th>Heure réception</th>
                        <th>Adresse complet</th>
                        <th>Non valider</th>
                    </tr>

                    <?php
                    foreach ($getsel as $mb) {
                    ?>
                        <tr>
                            <td><?= $mb["id"] ?></td>
                            <td class="text-center"><?= $mb["nom_client"] ?></td>
                            <td class="text-center"><?= $mb["prenom_client"] ?></td>
                            <td class="text-center"><?= $mb["telephone"] ?></td>
                            <td class="text-center"><?= $mb["email"] ?></td>
                            <td class="text-center"><?= $mb["choix_plat"] ?></td>
                            <td class="text-center"><?= $mb["quantité_commande"] ?></td>
                            <td class="text-center"><?= $mb["date_livraison"] ?></td>
                            <td class="text-center"><?= $mb["heure_livraison"] ?></td>
                            <td>
                                <?php if ($mb["adresse"] === "validated"): ?>
                                    <span>Validé</span>
                                <?php else: ?>
                                    <form action="list_commande.php" method="post" style="margin: 0;">
                                        <input type="hidden" name="id" value="<?= $mb["id"] ?>">
                                        <button type="submit" class="btn-success btn uppercase" style="width: 100%;">valider</button>
                                    </form>
                                <?php endif; ?>
                            </td>
                            <td>
                                <form action="list_commande.php" method="post" style="margin: 0;">
                                    <input type="hidden" name="id" value="<?= $mb["id"] ?>">
                                    <input type="hidden" name="delete" value="<?= $mb["id"] ?>">
                                    <button type="submit" name="delete" class="btn btn-danger uppercase">supprimer</button>
                                </form>
                            </td>

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