<?php
session_start();
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
	   $_SESSION['message'] = "L'élément a été déja existe !";
	   $_SESSION['msg_type'] = "danger";
	   header("location:compte.php");
} else {
	// Insère un nouvel utilisateur dans la base de données
	$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
	if ($conn->query($sql) === TRUE) {
		$_SESSION['message'] = "L'élément a ajouteé avec succès !";
		$_SESSION['msg_type'] = "success";
        header("location:compte.php");
	} else {
		echo "Erreur: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>
