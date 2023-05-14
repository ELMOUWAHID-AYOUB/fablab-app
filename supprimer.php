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

  // Suppression de la demande de réservation de la base de données
  $requete = $connexion->prepare("UPDATE reservations SET statut='Refuse' WHERE id=?");
  $requete->bind_param("i", $id);

  if ($requete->execute()) {
    
    echo "Demande de réservation supprimée avec succès.";
   header("location:demande.php");
  } else {
    echo "Erreur lors de la suppression de la demande de réservation.";
  }
}
?>
