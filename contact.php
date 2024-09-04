<?php
require("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactez-nous</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">

</head>

<body class="corp">
  </header>
  <section>
    <h3 class="text-primary mb-6" style="text-align: center; margin-top: 20px;font-size: 30px;">Contactez-nous</h3>
    <div class="container">
      <form action="">
        <div class="row justify-content-center mt-5">
          <div class="col-md-4">
            <label for="nom">Votre nom</label>
            <input type="text" class="form-control" name="nom" placeholder="votre nom">
          </div>
          <div class="col-md-4">
            <label for="prenom">Votre prenom</label>
            <input type="text" class="form-control" name="prenom" placeholder="votre prenom">
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-md-4">
            <label for="numero">numero mobile</label>
            <input type="number" name="numero" id="numero" class="form-control" placeholder="numero">
          </div>
          <div class="col-md-4">
            <label for="email">votre email</label>
            <input type="email" name="numero" id="numero" class="form-control" placeholder="email">
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-md-8">
            <label for="commentaire">Laissez nous votre commentaire</label>
            <textarea name="commentaire" id="commentaire" cols="30" rows="7" class="form-control"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="" style="text-align:center;">
              <input type="submit" value="ENVOYER" class="btn btn-danger mt-5 bou">
            </div>
          </div>
        </div>

      </form>
    </div>
  </section>


  <script src="js/bootstrap.js">

  </script>
</body>

</html>