<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Page avec une image et un texte</title>
  <!-- Liaison du CSS de Bootstrap -->
   <link rel="stylesheet" href="../../../sanscode/bootstrap-5.3.0-alpha3-dist\css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include_once('../../composent/nav/navsite0.php'); ?>
  <div class="container mt-5">
  <h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNotre site</h1>
    <div class="row">
      <div class="col-md-6">
        <!-- Affichage de l'image -->
        <img src="../../../sanscode/image/inventaire.webp" class="rounded-circle" alt="Image" width=500px; height=300px;>
      </div>
      <div class="col-md-6">
        <!-- Affichage du texte -->
        <p>Notre site offre la possibilité de gérer l'inventaire des équipements de réseau situés dans les salles A6 et A7 de l'établissement Lensaj. Grâce à cette fonctionnalité, les utilisateurs autorisés peuvent ajouter, supprimer et modifier les équipements présents dans ces salles en temps réel. Cela permet de s'assurer que les informations sur les équipements sont toujours à jour et exactes, ce qui est essentiel pour une gestion efficace des ressources.

         De plus, notre site permet aux étudiants et aux invités de l'établissement de consulter les équipements disponibles dans les salles A6 et A7, et de faire une demande d'acquisition auprès des professeurs responsables. Les professeurs peuvent alors examiner les demandes et décider d'autoriser ou de refuser l'acquisition de nouveaux équipements.

        Cette fonctionnalité offre une grande flexibilité et une meilleure utilisation des ressources de l'établissement, tout en permettant de répondre aux besoins de l'ensemble de la communauté éducative.</p>
      </div>
    </div>
  </div>
  <!-- Liaison du script de Bootstrap -->
</body>
</html>
