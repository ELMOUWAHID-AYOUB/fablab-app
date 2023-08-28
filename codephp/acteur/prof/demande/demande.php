<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../../../../sanscode/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
  <title>Demandes de réservation</title>
  <style>
  </style>
</head>

<body>
  <?php
  include("../../../acces/entrer/session.php"); 
  include_once('../../../composent/nav/navsitep.php'); ?>
  <h1 style="color:red;">Demandes de réservation:</h1>
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
    include("../../../acces/base_de_donnes/mysqli.php");
    // Récupération des demandes de réservation
    $requete = "SELECT * FROM reservations";
    $resultat = $connexion->query($requete);
    // Affichage des demandes de réservation dans une table
    while ($reservation = $resultat->fetch_assoc()) {
      $id = $reservation["id"];
      echo "<tr>";
      echo "<td>" . $reservation["nom"] . "</td>";
      echo "<td>" . $reservation["message"] . "</td>";
      echo "<td>" . $reservation["date"] . "</td>";
      echo "<td>" . $reservation["equipement"] . "</td>";
      echo "<td>" . $reservation["statut"] . "</td>";
      if ($reservation["statut"] == "en attente") : {
          echo "<td><a href='repondre.php?id=$id&ordre=accepter' class='btn btn-success'>Accepter</a>  <a href='repondre.php?id=$id&ordre=REFUSER' class='btn btn-danger'>Refuser</a></td>";
          echo "</tr>";
        }
      endif;
    }
    ?>
  </table>
</body>

</html>