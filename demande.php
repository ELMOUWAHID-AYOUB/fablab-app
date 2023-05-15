<!DOCTYPE html>
<?php
session_start();
error_reporting(0);
if (empty($_SESSION['username'])) {
    header('location: page.php');
} ?>
<html>
  <head>
  <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist\css\bootstrap.min.css">
    <title>Demandes de réservation</title>
    <style>
    </style>
  </head>
  <body>
  <?php include_once('./NAV/NAVSITEP.php'); ?>
    <h1  style="color:red;">Demandes de réservation:</h1>
    <table class="table">
      <tr>
        <th>Nom</th>
        <th>Message</th>
        <th>Date de réservation</th>
        <th>Équipement</th>
        <th>Statut</th>
        <th></th>
      </tr>
      <?php
      // Connexion à la base de données
      $serveur = "localhost";
      $utilisateur = "root";
      $motdepasse = "";
      $basededonnees = "equipement";

      $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);
      // Récupération des demandes de réservation
      $requete = "SELECT * FROM reservations";
      $resultat = $connexion->query($requete);

      // Affichage des demandes de réservation dans une table
      while ($reservation = $resultat->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $reservation["nom"] . "</td>";
        echo "<td>" . $reservation["message"] . "</td>";
        echo "<td>" . $reservation["date"] . "</td>";
        echo "<td>" . $reservation["equipement"] . "</td>";
        echo "<td>" . $reservation["statut"] . "</td>";
        if ( $reservation["statut"]=="en attente"):{
        echo "<td><a href='valider.php?id=" . $reservation["id"] . "' class='btn btn-success'>Valider</a>  <a href='supprimer.php?id=" . $reservation["id"] . "' class='btn btn-danger'>Refuse</a></td>";
        echo "</tr>";}
        endif;
      }
      
      ?>




		
		
    </table>
  </body>
</html>
