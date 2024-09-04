<?php
try {
    $bdd = new PDO("mysql:host=db;dbname=gestcom", "nadege", "12345678");
    // Définit le mode d'erreur PDO pour afficher les exceptions
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données!";
} catch (PDOException $e) {
    // Affiche un message d'erreur plus détaillé
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
