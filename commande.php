<?php
// Create an array of plates with title, image, and description
$plates = [
    [
        "title" => "Bœuf Bourguignon",
        "image" => "/photo/plates/pexels-solliefoto-299347 (1).jpg",
        "description" => "Un ragoût traditionnel français de bœuf mijoté au vin rouge, avec des champignons, des oignons et du lard."
    ],
    [
        "title" => "Coq au Vin",
        "image" => "/photo/plates/39813371.webp",
        "description" => "Poulet braisé avec du vin rouge, des champignons, des oignons et du lard, un plat classique français."
    ],
    [
        "title" => "Ratatouille",
        "image" => "/photo/plates/AdobeStock_541273635-2-1024x683.jpeg",
        "description" => "Un ragoût provençal de légumes comprenant des courgettes, des aubergines et des poivrons."
    ],
    [
        "title" => "Quiche Lorraine",
        "image" => "/photo/plates/8257865a-ff7e-4806-bb56-dd1e23ef6621.avif",
        "description" => "Une tarte salée garnie de crème, d'œufs, de lardons et de fromage, spécialité de Lorraine."
    ],
    [
        "title" => "Bouillabaisse",
        "image" => "/photo/plates/i7912-bouillabaisse-traditionnelle.jpeg",
        "description" => "Une soupe de poisson provençale riche en saveurs, servie avec du pain et de la rouille."
    ],
    [
        "title" => "Cassoulet",
        "image" => "/photo/plates/Cassoulet.jpeg",
        "description" => "Un ragoût de haricots blancs, de saucisses, de canard et de porc, originaire du sud de la France."
    ],
    [
        "title" => "Tarte Tatin",
        "image" => "/photo/plates/117779_w1024h768c1cx1060cy707cxt0cyt0cxb2121cyb1414.webp",
        "description" => "Une tarte aux pommes renversée, caramélisée au beurre et au sucre, servie chaude."
    ],
    [
        "title" => "Croque-Monsieur",
        "image" => "/photo/plates/28965_w1024h768c1cx1500cy1000.webp",
        "description" => "Un sandwich grillé au jambon et au fromage, parfois garni de béchamel."
    ],
    [
        "title" => "Salade Niçoise",
        "image" => "/photo/plates/i34581-salade-nicoise-rapide.jpeg",
        "description" => "Une salade composée de thon, d'œufs durs, de haricots verts, d'olives et d'anchois."
    ],
    [
        "title" => "Soupe à l'Oignon",
        "image" => "/photo/plates/soupe-poignon.jpg",
        "description" => "Une soupe riche à base d'oignons caramélisés, garnie de croûtons et de fromage fondu."
    ]
];

?>
<?php
if (session_id() == '') {
    session_start(); // Start the session if it hasn't been started
}

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: connexion.php"); // Redirect to login if not logged in
    exit();
}
require("header.php");
require("parametres/insert_commande.php");

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
        <div class="row">
            <div class="col-md-6 mt-5">
                <h3 class="text-center text-primary">Bonjour <?php echo $_SESSION['username']; ?> 👋</h3>
                <img src="photo/Waiters-rafiki.png" alt="" width="520px" class="mt-5 photocommande">
            </div>
            <div class="col-md-5">
                <div class="card mt-4 form-command">
                    <div class="container text-black">
                        <?php if ($success): ?>
                            <div class="alert alert-success text-center mt-4">
                                <h4>Commande envoyée avec succès !</h4>
                                <p>Merci, votre commande a été reçue et est en cours de traitement.</p>
                            </div>
                        <?php else: ?>
                            <form action="" method="post">
                                <h2 class="text-center text-dark mt-2 mt-3">Passer une commande</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nom" class="">Votre nom</label>
                                        <input type="text" placeholder="Nom" name="nom" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nom" class="">Votre prénom</label>
                                        <input type="text" placeholder="Prénom" name="prenom" id="nom" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="nom" class="">Numéro téléphone</label>
                                        <input type="phone" placeholder="+243XXXXXXX" name="num" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nom" class="">Adresse mail</label>
                                        <input type="email" placeholder="xxxx@gmail.com" name="mail" id="nom" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="nom" class="">Quantité</label>
                                        <input type="number" placeholder="5" name="quantite" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="typeres" class="">Choix du plat</label>
                                            <select name="choix" id="choix" class="custom-select text-black">
                                                <?php
                                                foreach ($plates as $plat) {
                                                    echo "<option value='" . $plat['title'] . "'>" . $plat['title'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label for="nom" class="">Heure livraison</label>
                                        <input type="time" name="heure" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nom" class="">Date de livraison</label>
                                        <input type="date" name="date" id="nom" class="form-control">
                                    </div>
                                </div>
                                <input type="hidden" name="adresse" value="Pas d'adresse">
                                <div class="mt-4 text-danger text-center">
                                    <?php if (isset($erreur) && !empty($erreur)): ?>
                                        <?php echo htmlspecialchars($erreur); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center mt-3 mb-3 uppercase">
                                        <input type="submit" value="ENVOYER LA COMMANDE" class="btn btn-danger" name="com">
                                    </div>
                                </div>


                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js">

    </script>
</body>

</html>