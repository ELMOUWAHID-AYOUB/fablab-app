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
      <a class="navbar-brand" href="accueil.php">Accueil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="../../acces/entrer/page.php">SE CONNECTER</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../creatcompte/compte.php">CREER COMPTE</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php">A PROPOS</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contacternous.php">CONTACT</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <section class="jumbotron text-center">
      <div class="container">
        <h1>Bienvenue sur Inventaire Web</h1>
        <p class="lead"> </p>
        <a href="about.php" class="btn btn-primary my-2">En Savoir Plus</a>
        <a href="contacternous.php" class="btn btn-secondary my-2">Contacter Nous</a>
      </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Se Connecter</h2>

          <a href="../../acces/entrer/page.php" class="btn btn-success">Connecter</a>
        </div>
        <div class="col-md-4">
          <h2>Créer Compte</h2>

          <a href="../creatcompte/compte.php" class="btn btn-primary">Ajouter</a>
        </div>
        <div class="col-md-4">
          <h2>Récupérer Compte</h2>

          <a href="../recuprecompte/test.php" class="btn btn-warning">Récupérer</a>
        </div>
      </div>
    </div>
  </main>
  <!-- Intégrer Bootstrap JS et jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>