<!DOCTYPE html>
<?php
session_start();
error_reporting(0);
if (empty($_SESSION['username'])) {
    header('location: page.php');
} ?>
<html>
  <head>
    <title>Réservation d'équipement réseau</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist\css\bootstrap.min.css">
  </head>
  <body>
  <?php include_once('./NAV/navsites.php'); ?>
  <h1 style="color:black">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRESERVATION</h1>
  <div class="container">
    <br>
    <form method="post" action="res.php">
    <div class="row">
            <div class="col-md-0">
            <div class="form-group">
      <label for="nom"></label>
      <input type="hidden" name="nom" value="<?php $user=$_SESSION['username']; echo $user ?>" ><br>
</div>
</div>
<div class="col-md-8">
<div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="email" rows="5" required></textarea>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
  <br><br><br>
      <label for="date">Date de réservation :</label>
      <input type="date" name="date" required><br>
</div>
</div>
</div>
<div class="row">
            <div class="col-md-6">
<div class="form-group">
      <label for="equipement">Équipement :</label>
      <select name="equipement" required>
        <option value="">Sélectionnez un équipement</option>
        <option value="routeur">Routeur</option>
        <option value="switch">Switch</option>
        <option value="modem">Parfeu</option>
        <option value="modem">Voiip</option>
        <option value="modem">interface</option>
        <option value="modem">serveur</option>
      </select>
      </div>
</div>
            <div class="col-md-6">
<div class="form-group">
      <input type="submit" ' class='btn btn-info' value="Réserver">
</div>
</div>
</div>
    </form>
    <h1>Mes Demandes</h1>
    <table class="table">
      <tr>
        <th>Nom</th>
        <th>Message</th>
        <th>Date de réservation</th>
        <th>Équipement</th>
        <th>Statut</th>
      </tr>
      <?php
      // Connexion à la base de données
      $serveur = "localhost";
      $utilisateur = "root";
      $motdepasse = "";
      $basededonnees = "equipement";
      $user=$_SESSION['username'];
      $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);
      $user=$_SESSION['username'];
      echo $user;
      // Récupération des demandes de réservation
      $requete = "SELECT * FROM reservations where nom='$user'";
      $resultat = $connexion->query($requete);

      // Affichage des demandes de réservation dans une table
      while ($reservation = $resultat->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $reservation["nom"] . "</td>";
        echo "<td>" . $reservation["message"] . "</td>";
        echo "<td>" . $reservation["date"] . "</td>";
        echo "<td>" . $reservation["equipement"] . "</td>";
        echo "<td>" . $reservation["statut"] . "</td>";
      }
      ?>
    </table>
  </body>
</html>


<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "equipement";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupération des données du formulaire
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $date = $_POST["date"];
  $equipement = $_POST["equipement"];

  // Préparation de la requête SQL d'insertion
  $requete = $connexion->prepare("INSERT INTO reservations (nom, email, date, equipement) VALUES (?,?,?,?)");
  $requete->bind_param("ssss", $nom, $email, $date, $equipement);

  // Exécution de la requête SQL
  if ($requete->execute()) {
    echo "Réservation effectuée avec succès.";
    
  } else {
    echo "Erreur lors de la réservation.";
  }
}
?>
