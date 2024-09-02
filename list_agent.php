



<?php
    require("header_admin.php");
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
                                <th colspan="10" class="text-center">LISTE DE NOS AGENTS</th>
                            </tr>
                            <tr class="bg-success">
                                <th>MATRICULE</th>
                                <th>nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>numero de tel</th>
                                <th>Fonction</th>
                                <th>Modifier</th>
                                <th>supprimer</th>
                            </tr>
                            <tr>
                                <td>MAT001</td>
                                <td>nsabo</td>
                                <td>Masala</td>
                                <td>nsabomasaladorea8@gmail.com</td>
                                <td>0979453640</td>
                                <td>Facturier</td>
                                <td><a href="#" class="btn-success btn">Modifier</a></td>
                                <td><a href="#" class="btn-danger btn">supprimer</a></td>
                            </tr>
                   
                   
                            
                        </table>
      
                    </div>
                </div>
            </div>

    <script src="js/bootstrap.js">

    </script>
</body>
</html>