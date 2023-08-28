<?php
include('../../../acces/base_de_donnes/mysqli.php');
// Vérification de l'ID de la demande de réservation
if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $ordre = $_GET["ordre"];
  // Suppression de la demande de réservation de la base de données
  if ($ordre == "REFUSER") {
    $requete = $connexion->prepare("UPDATE reservations SET statut='Refuse' WHERE id=?");
  } else {
    $requete = $connexion->prepare("UPDATE reservations SET statut='Validée' WHERE id=?");
  }
  $requete->bind_param("i", $id);
  if ($requete->execute()) {
    echo "Demande de réservation $ordre avec succès.";
    header("location:demande.php");
  } else {
    echo "Erreur lors de la réponse.";
  }
}
