<!DOCTYPE html>
<html>
  <head>
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Création de compte</h1>
      <p>Veuillez choisir votre type de compte :</p>
      <div class="row">
        <div class="col-md-6">
          <a href="inscription_gestionnaire.php" class="btn btn-primary btn-lg btn-block">Gestionnaire d'inventaire</a>
        </div>
        <div class="col-md-6">
          <a href="inscription_prof.php" class="btn btn-primary btn-lg btn-block">Professeur</a>
        </div>
      </div>
    </div>
  </body>
</html>
HTML (formulaire d'inscription pour le gestionnaire d'inventaire) :

php
Copy code
<!DOCTYPE html>
<html>
  <head>
    <title>Inscription gestionnaire d'inventaire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Inscription gestionnaire d'inventaire</h1>
      <form action="traitement_gestionnaire.php" method="post">
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
        <button type="submit" class="btn btn-primary btn-lg btn-block">Créer un compte</button>
      </form>
    </div>
  </body>
</html>
HTML (formulaire d'inscription pour le professeur) :

php
Copy code
<!DOCTYPE html>
<html>
  <head>
    <title>Inscription professeur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Inscription professeur</h1>
      <form action="traitement_prof.php" method="post">
        <div class="form-group">
          <label for="nom">Nom :</label>
          <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom :</label>
          <input type="text" class="form-control" id="prenom" name


HTML (formulaire d'inscription pour le professeur) :

php
Copy code
<!DOCTYPE html>
<html>
  <head>
    <title>Inscription professeur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Inscription professeur</h1>
      <form action="traitement_prof.php" method="post">
        <div class="form-group">
          <label for="nom">Nom :</label>
          <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom :</label>
          <input type="text" class="form-control" id="prenom" name



HTML (formulaire d'inscription pour le professeur) :

php
Copy code
<!DOCTYPE html>
<html>
  <head>
    <title>Inscription professeur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Inscription professeur</h1>
      <form action="traitement_prof.php" method="post">
        <div class="form-group">
          <label for="nom">Nom :</label>
          <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom :</label>
          <input type="text" class="form-control" id="prenom" name
(poursuite de l'exemple) :

php
Copy code
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
    <button type="submit" class="btn btn-primary btn-lg btn-block">Créer un compte</button>
  </form>
</div>
  </body>
</html>
```
PHP (traitement des données pour le gestionnaire d'inventaire) :

php
Copy code
<?php
// connexion à la base de données
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);

// vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // récupération des données du formulaire
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // insertion des données dans la base de données
  $sql = "INSERT INTO gestionnaires (nom, prenom, email, password) VALUES ('$nom', '$prenom', '$email', '$password')";
  if ($conn->query($sql) === TRUE) {
    // envoi d'un e-mail de confirmation
    $to = $email;
    $subject = "Confirmation d'inscription";
    $message = "Bonjour $prenom,\n\nVotre inscription en tant que gestionnaire d'inventaire a été confirmée.";
    mail($to, $subject, $message);
    
    // redirection vers la page de confirmation
    header("Location: confirmation.php");
    exit();
  } else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
  }
}

// fermeture de la connexion à la base de données
$conn->close();
?>
PHP (traitement des données pour le professeur) :

php
Copy code
<?php
// connexion à la base de données
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);

// vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // récupération des données du formulaire
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $matiere = $_POST["matiere"];

  // insertion des données dans la base de données
  $sql = "INSERT INTO professeurs (nom, prenom, email, password, matiere) VALUES ('$nom', '$prenom', '$email', '$password', '$matiere')";
  if ($conn->query($sql) === TRUE) {
    // envoi d'un e-mail de confirmation
    $to = $email;
    $subject = "Confirmation d'inscription";
    $message =(suite de l'exemple)

swift
Copy code
"Bonjour $prenom,\n\nVotre inscription en tant que professeur a été confirmée.\n\nMatière enseignée : $matiere";
mail($to, $subject, $message);

// redirection vers la page de confirmation
header("Location: confirmation.php");
exit();
} else {
echo "Erreur : " . $sql . "<br>" . $conn->error;
}
}

// fermeture de la connexion à la base de données
$conn->close();
?>

vbnet
Copy code

Dans ces exemples, nous avons utilisé MySQL comme système de gestion de base de données. Il est important de noter que les requêtes SQL peuvent varier selon le système de gestion de base de données utilisé.

En outre, il est important de mettre en place des mesures de sécurité pour empêcher les attaques de type injection SQL et les autres vulnérabilités liées à la sécurité des formulaires Web. Cela peut être réalisé en utilisant des fonctions de validation de données telles que `htmlspecialchars()` et en utilisant des requêtes préparées pour l'insertion de données dans la base de données.

Enfin, il est recommandé de mettre en place un système de gestion des erreurs pour que les utilisateurs puissent être informés des problèmes éventuels lors de la soumission du formulaire et pour éviter la divulgation de données sensibles.

(suite de l'exemple)

Voici un exemple de formulaire d'inscription pour un gestionnaire d'inventaire en HTML et Bootstrap :

html
Copy code
<!-- Formulaire d'inscription pour un gestionnaire d'inventaire -->
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h2>Inscription gestionnaire d'inventaire</h2>
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
        <button type="submit" class="btn btn-primary">S'inscrire</button>
      </form>
    </div>
  </div>
</div>
Et voici un exemple de formulaire d'inscription pour un professeur :

html
Copy code
<!-- Formulaire d'inscription pour un professeur -->
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

