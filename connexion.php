

<?php
    require("header.php");
    require("parametres/select_connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="corp">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5">
                <div class="card  bg-secondary">
                    <form action="" method="post">
                        <h3 class="text-center text-light mt-3">Se connecter</h3>
                        <div class="text-center">
                            <img src="photo/1646845108739.png" alt="" width="100px">
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <label for="username" class="labelcom">Nom d'utilisateur</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>

                        </div>
                        <div class="row justify-content-center mt-2">
                            <div class="col-md-6">
                                <label for="password "class="labelcom">Votre mot de passe</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            
                        </div>
                        <div class="boutonc text-center mt-3">
                            <input type="submit" value="continuer" class="btn btn-danger btn-large mt-2 mb-5" name="continuer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>