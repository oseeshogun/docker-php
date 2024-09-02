
<?php
    require("header_admin.php");
    require("parametres/insert_agent.php");
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
            <div class="row justify-content-center">
               
                <div class="col-md-5">
                    <div class="card mt-4 bg-secondary">
                        <div class="container">
                            <form  action="" method="post">
                                <h2 class="text-center text-dark mt-2 mt-3">creer un agent</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nomag" class="labelcom">nom de l'agent</label>
                                        <input type="text" name="nomag" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="prenomag" class="labelcom">prenom de l'agent</label>
                                        <input type="text" name="prenomag" id="nom" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">numero telephone</label>
                                        <input type="number" name="numag" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">Adresse mail</label>
                                        <input type="email" name="mailag" id="nom" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">MATRICULE</label>
                                        <input type="text" name="matriculeag" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="typeres" class="labelcom">fonction</label>
                                       <select name="fonctionag" id="typeres" class="form-check ">
                                         <option value="standard">standard</option>
                                         <option value="Vip">vip</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="nom" class="labelcom">Autres informations</label>
                                      <textarea name="autresag" id="" cols="4" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12 text-center mt-3 mb-3">
                                        <input type="submit" value="creer l'agent" class="btn btn-danger" name="btnag">
                                    </div>
                                </div>
                                   
                                <div class="row">
                                    <div class="col-md-12 text-center mt-3 mb-3">
                                    <h3 class="text-light">
                                        <?php
                                        if (isset($erreur)) {
                                            echo $erreur;
                                        }
                                       
                                        ?>
                                    </h3>  
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