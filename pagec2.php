<!DOCTYPE html>
<html>
  <head>
    <title>Inscription professeur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  </head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h2>Inscription professeur</h2>
      <form action="inscription.php" method="POST">
        <div class="form-group">
          <label for="nom">Nom :</label>
          <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom :</label>
          <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
          <label for="email">Adresse e-mail :</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe :</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="matiere">Matière enseignée :</label>
          <input type="text" class="form-control" id="matiere" name="matiere" required>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
      </form>
    </div>
  </div>
</div>
  </body>
</html>