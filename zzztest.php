<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ma Page d'Accueil</title>
  <!-- Intégrer Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Mon Site Web</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">A Propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <section class="jumbotron text-center">
      <div class="container">
        <h1>Bienvenue sur Mon Site Web</h1>
        <p class="lead">Nous offrons les meilleurs services en ligne pour nos clients.</p>
        <a href="#" class="btn btn-primary my-2">En Savoir Plus</a>
        <a href="#" class="btn btn-secondary my-2">Contacter Nous</a>
      </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Service 1</h2>
          <p>Nous offrons le service 1 pour nos clients.</p>
          <a href="#" class="btn btn-primary">En Savoir Plus</a>
        </div>
        <div class="col-md-4">
          <h2>Service 2</h2>
          <p>Nous offrons le service 2 pour nos clients.</p>
          <a href="#" class="btn btn-primary">En Savoir Plus</a>
        </div>
        <div class="col-md-4">
          <h2>Service 3</h2>
          <p>Nous offrons le service 3 pour nos clients.</p>
          <a href="#" class="btn btn-primary">En Savoir Plus</a>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-6 mx-auto">
          <h2>Contactez-nous</h2>
          <form method="POST" action="contact.php">
            <div class="form-group">
             
