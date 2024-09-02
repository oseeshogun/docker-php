


<?php
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
                    <img src="style/12.png" alt="" width="520px" class="mt-5 photocommande">
                </div>
                <div class="col-md-5">
                    <div class="card mt-4 bg-secondary">
                        <div class="container">
                            <form action="" method="post">
                                <h2 class="text-center text-dark mt-2 mt-3">Passer une commande</h2>
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
                                        <input type="number" name="num" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">Adresse mail</label>
                                        <input type="email" name="mail" id="nom" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">quantité</label>
                                        <input type="number" name="quantite" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="typeres" class="labelcom">choix du plat</label>
                                       <select name="choix" id="choix" class="form-check ">
                                         <option value="standard">fufu + fumbwa + poisson </option>
                                         <option value="standard">riz + haricot + poisson </option>
                                         <option value="standard">riz+ pondu+ likayabu </option>
                                         <option value="standard">fufu + haricot + poisson </option>
                                         <option value="standard">kwanga + haricot + cruisse</option>
                                         <option value="Vip">vip</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">heure livraison</label>
                                        <input type="time" name="heure" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">date de livraison</label>
                                        <input type="date" name="date" id="nom" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="nom" class="labelcom">Adresse complete</label>
                                      <textarea name="adresse" id="" cols="4" rows="2" class="form-control" placeholder="commune/quartier/avenue/N°"></textarea>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12 text-center mt-3 mb-3">
                                        <input type="submit" value="envoyer la commande" class="btn btn-danger" name="com">
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