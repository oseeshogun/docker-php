<?php
require("header.php");
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

<body>
  <div class="bg">
    <div class="vitre">
      <section class="align-items-center flex-column d-flex w-100 h-70 justify-content-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="">
                <div class="photologo">
                  <img src="style/144.png" alt="" width="150px" class="logos">
                </div>
                <h2 class="text-light stext" id="stext1">BON PLATS & BONNE SANTÉ</h2>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="text-light stext mb-5">Plongez dans une ambiance intimiste aux couleurs mordorées,
                qui permet aux gourmets d’observer le chef et sa brigade dans la réalisation d’une cuisine-minute et d’excellence.</p>
            </div>
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-3 col-sm-6">
                <div class="button2">
                  <a href="commande.php" class="btn btn-danger comm uppercase">commander maintenant</a>

                </div>

              </div>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>

  <div class="container">
    <div class="card mt-5">
      <div class="row mt-5">
        <div class="col-md-5">
          <div class="container">
            <img src="https://res.cloudinary.com/dwypfj38x/image/upload/v1725339290/e85gvr8ixbec8sich9qa.jpg" alt="" class="menu_img" width="450px">
          </div>

        </div>
        <div class="col-md-7">
          <div class="container">
            <h3>Cheeseburger</h3>
            Le burger légendaire avec du fromage fondu, de la viande de bœuf bien juteuse, des oignons, des cornichons, du ketchup et de la moutarde, dans un petit pain.
            Un steak haché, une tranche de cheddar fondu, une rondelle de cornichon, des oignons, du ketchup et de la moutarde douce.
            <br>
            <div class="btn-group mt-5">
              <a href="/commande.php" class="btn btn-danger uppercase">commander</a>
              <a href="/menu.php" class="btn btn-warning uppercase" style="margin-left: 7px;">voir plus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="card mt-5">
      <div class="row mt-5">
        <div class="col-md-7">
          <div class="container">
            <h3>Le Boeuf Grille</h3>
            Au Bœuf sur le Grill, nous nous engageons à vous offrir les meilleurs plats de viandes, servis dans une atmosphère chaleureuse, conviviale et invitante. Notre équipe est passionnée par la création d’expériences mémorables pour tous nos invités.
            <br> <br>
            <div class="btn-group mt-5">
              <a href="/commande.php" class="btn btn-danger uppercase">commander</a>
              <a href="/menu.php" class="btn btn-warning uppercase" style="margin-left: 7px;">voir plus</a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="container">
            <img src="https://res.cloudinary.com/dwypfj38x/image/upload/v1725339735/g6nyvrxsejlw6mzunf4g.jpg" alt="" class="menu_img" width="450px">
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  require("footer.php");
  ?>

  <script src="js/bootstrap.js">

  </script>
</body>

</html>