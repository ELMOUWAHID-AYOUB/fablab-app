<?php
include_once('navsitep.php'); 
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "equipement";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérification de l'ID de la demande de réservation
if (isset($_GET["id"])) {
  $id = $_GET["id"];

  // Mise à jour du statut de la demande de réservation
  $requete = $connexion->prepare("UPDATE reservations SET statut='Validée' WHERE id=?");
  $requete->bind_param("i", $id);

  if ($requete->execute()) {
    echo "Demande de réservation validée avec succès.";
    header("location:demande.php");
  } else {
    echo "Erreur lors de la validation de la demande de réservation.";
  }
}
?>
