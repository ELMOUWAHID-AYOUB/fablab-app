<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>NAV</title>
  <!-- Intégrer Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  session_start();
  $_SESSION['last_page'] = $_SERVER['REQUEST_URI'];
  ?>
  <style>
    header {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    header>nav {
      background-color: #d2d7ea;
      width: 100vw;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .nav {
      color: #092147 !important;
    }
    li>a>.nav {
      background-color: #1A488E !important;

      
    }
    nav>a>.acc {
      background-color: #d2d7ea !important;
    }
    .nul,
    .acc {
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
  </style>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand nul acc" href="index.php">ACCUEIL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nul" id="navbarNav">
        <ul class="navbar-nav nul">
          <li class="nav-item active">
            <a class="nav-link nav" href="index8.php?genre=pc">PC</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nav" href="index8.php?genre=routeur">ROUTEUR</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nav" href="index8.php?genre=switch">SWITCH</a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link nav" href="index8.php?genre=serveur">SERVEUR</a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link nav" href="index8.php?genre=pare-feu">PARE-FEU</a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link nav" href="index8.php?genre=voip">VOIP</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nav" href="index8.php?genre=interface">INTERFACE</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nav" href="index8.php?genre=connecteur">CONNECTIQUE</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link nav" href="deconnecter.php">SE DECONNECTER</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</body>