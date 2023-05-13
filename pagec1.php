<!DOCTYPE html>
<html>
<head>
	<title>Créer un compte</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		body {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h2>Créer un compte</h2>
				<form  method="post">
					<div class="form-group">
						<label for="username">Nom d'utilisateur:</label>
						<input type="text" class="form-control" id="username" name="username" required>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="password">Mot de passe:</label>
						<input type="password" class="form-control" id="password" name="password" required>
					</div>
					<button type="submit" class="btn btn-primary">Créer un compte</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "equipement";
// Crée une connexion
$conn = new mysqli($servername, $username, $password, $dbname);
// Vérifie la connexion
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Récupère les données du formulaire
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Vérifie si le nom d'utilisateur ou l'email existe déjà dans la base de données
$sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "Le nom d'utilisateur ou l'email existe déjà.";
} else {
	// Insère un nouvel utilisateur dans la base de données
	$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
	if ($conn->query($sql) === TRUE) {
		echo "Nouvel utilisateur créé avec succès.";
	} else {
		echo "Erreur: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>
