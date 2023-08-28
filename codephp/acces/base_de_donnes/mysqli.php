<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "equipement";
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);
?>