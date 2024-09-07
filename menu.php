<?php
require("header.php");
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Nos Varietés</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <u>
                        <h3 class="text-dark mt-4 mb-4 uppercase" style="text-align: left;">Nos varietés</h3>
                    </u>
                </div>
            </div>
            <div class="d-flex discovery-list wrap">
                <?php
                foreach ($plates as $plate) {
                    echo '<div class="card" style="width: 27vw; margin-bottom: 20px;">
                        <img class="card-img-top" src="' . $plate['image'] . '" alt="' . $plate['title'] . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $plate['title'] . '</h5>
                            <p class="card-text">' . $plate['description'] . '</p>
                            <a href="/commande.php" class="btn btn-danger">Commander</a>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <?php
    require("footer.php");
    ?>


    <script src="js/bootstrap.js">

    </script>
</body>

</html>