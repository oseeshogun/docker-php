

<?php
    require("header.php");
    require("parametres/insert_reservation.php");
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
               
                <div class="col-md-5">
                    <div class="card mt-4 bg-secondary">
                        <div class="container">
                            <form action="" method="post">
                                <h2 class="text-center text-dark mt-2 mt-3">faire une reservation</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">votre nom</label>
                                        <input type="text" name="nom" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">votre prenom</label>
                                        <input type="text" name="prenom" id="nom" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">numero telephone</label>
                                        <input type="number" name="numero" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">Adresse mail</label>
                                        <input type="email" name="mail" id="nom" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">Nombres de personnes</label>
                                        <input type="number" name="nbr" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="typeres" class="labelcom">type de reservation</label>
                                       <select name="typeres" id="typeres" class="form-check ">
                                         <option value="standard">standard</option>
                                         <option value="Vip">vip</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">heure reservation</label>
                                        <input type="time" name="heure" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">date de reservation</label>
                                        <input type="date" name="date" id="nom" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="nom" class="labelcom">Autres precisions</label>
                                      <textarea name="adresse" id="" cols="4" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12 text-center mt-3 mb-3">
                                        <input type="submit" value="reserver maintenant" class="btn btn-danger" name="res">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center mt-3 mb-3">
                                    <h4 class="text-center text-light">
                                    <?php
                                        if (isset($erreur)) {
                                            echo $erreur;
                                        }
                                        ?> 
                                    </h4>
                             
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
   </div>

    <script src="js/bootstrap.js">

    </script>
</body>
</html>