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
               
                <div class="col-md-5">
                    <div class="card mt-4 bg-secondary">
                        <div class="container">
                            <form action="" method="post">
                                <h2 class="text-center text-dark mt-2 mt-3">faire un rapport</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">libelle du rapport</label>
                                        <input type="text" name="nom" id="nom" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nom" class="labelcom">date</label>
                                        <input type="date" name="nom" id="nom" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="nom" class="labelcom">votre rapport</label>
                                      <textarea name="adresse" id="" cols="4" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12 text-center mt-3 mb-3">
                                        <input type="submit" value="enregistrement" class="btn btn-danger">
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