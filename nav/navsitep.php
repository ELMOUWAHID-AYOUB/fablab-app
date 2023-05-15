<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>NAV</title>
  <!-- Intégrer Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="stylee.css">
</head>

<body>
  <?php
  session_start();
  $_SESSION['last_page'] = $_SERVER['REQUEST_URI'];
  ?>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="indexp.php">ACCUEIL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="indexp8.php?genre=pc">PC</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="indexp8.php?genre=routeur">ROUTEUR</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="indexp8.php?genre=switch">SWITCH</a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link" href="indexp8.php?genre=serveur">SERVEUR</a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link" href="indexp8.php?genre=pare-feu">PARE-FEU</a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link" href="indexp8.php?genre=voip">VOIP</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="indexp8.php?genre=interface">INTERFACE</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="indexp8.php?genre=connecteur">CONNECTIQUE</a>
          </li>
          <li class="nav-item active">
            <!-- style="BODY TEXT=#ff0000" -->
            <a class="nav-link" href="demande.php">DEMANDE</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="deconnecter.php">SE DECONNECTER</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</body>