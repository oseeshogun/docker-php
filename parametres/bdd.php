<?php
    try {
        $bdd= new PDO("mysql:host=localhost;dbname=gestcom","root","");
    } catch (PDOException $e) {
        echo "pas de connexion a la bdd";
    }
    



?>