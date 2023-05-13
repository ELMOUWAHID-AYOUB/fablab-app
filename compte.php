<!DOCTYPE html>
<html>
<head>
	<title>Créer un compte</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
	<?php include_once('navsite0.php'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h2>Créer un compte</h2>
				<form action="" method="post">
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
error_reporting(0);
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
	   echo '<script> alert("utilisateur existe deja"); </script>';
	   $_SESSION['message'] = "L'élément a été déja existe !";
	   $_SESSION['msg_type'] = "danger";
} else {
	// Insère un nouvel utilisateur dans la base de données
	$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
	if ($conn->query($sql) === TRUE) {
		echo '<script> alert("Nouvel utilisateur créé avec succès."); </script>';
		$_SESSION['message'] = "L'élément a ajouteé avec succès !";
		$_SESSION['msg_type'] = "success";
	} else {
		echo "Erreur: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();

?>

<?php if (isset($_SESSION['message'])): ?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>
