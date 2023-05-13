<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NAV</title>
  <!-- Intégrer Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
session_start();
$_SESSION['last_page'] = $_SERVER['REQUEST_URI'];
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="indexp.php">Accueil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index1.php">Pc</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index2.php">Routeur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index3.php">Switch</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index4.php">Serveur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index5.php">Pare-feu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index6.php">voip</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index7.php">Interfaces</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index8.php">Connectiques</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index9.php">Tous</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aproprs0.php">A Propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacternous0.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="deconnecter.php">Se Deconnecter</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</body>