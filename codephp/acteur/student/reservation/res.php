<?php
// Connexion à la base de données
include("../../../acces/base_de_donnes/mysqli.php");

// Vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupération des données du formulaire
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $date = $_POST["date"];
  $equipement = $_POST["equipement"];

  // Préparation de la requête SQL d'insertion 
  $requete = $connexion->prepare("INSERT INTO reservations (nom,message, date, equipement) VALUES (?,?,?,?)");
  $requete->bind_param("ssss", $nom, $email, $date, $equipement);

  // Exécution de la requête SQL
  if ($requete->execute()) {
    echo "Réservation effectuée avec succès.";
    header("location:reservation.php");
  } else {
    echo "Erreur lors de la réservation.";
  }
}
?>