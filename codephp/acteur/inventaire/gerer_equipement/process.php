<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	 session_start();
	$mysqli = new mysqli('localhost', 'root', '', 'equipement') or die(mysqli_error($mysqli));
	$id = 0;
	$update = false;
	$nom = '';
	$module = '';
	$salle = 'vide';
	$etat = '';
	$date = '';
	$index = 'index';
	if (isset($_POST['save'])) {
		$nom = $_POST['nom'];
		$module = $_POST['module'];
		$salle = $_POST['salle'];
		$date = $_POST['date'];
		$etat = $_POST['etat'];
		$fiche = $_POST['nomDuFichier'];
		$mysqli->query("INSERT INTO equi (nom,module,salle,date,etat,descriptive) VALUES ('$nom','$module','$salle','$date','$etat','$fiche')") or die($mysqli->error);
		$_SESSION['message'] = "L'élément a été ajouté avec succès !";
		$_SESSION['msg_type'] = "success";
		header("Location: " . $_SERVER['HTTP_REFERER']);
	}
	if (isset($_GET['delete'])) {
	$idd = $_GET['delete'];
		
		$ser = $_SERVER['HTTP_REFERER'];
		header("location:$ser&d=".$idd);
	}
	if (isset($_GET['edit'])) {
		$id=$_GET['edit'];
		$update = true;
		$result = $mysqli->query("SELECT * FROM equi WHERE id=$id") or die($mysqli->error);
		if ($result->num_rows) {
			$row = $result->fetch_array();
			$nom = $row['nom'];
			$module = $row['module'];
			$salle = $row['salle'];
			$date = $row['Date'];
			$etat = $row['etat'];
		}
	}
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$nom = $_POST['nom'];
		$module = $_POST['module'];
		$salle = $_POST['salle'];
		$date = $_POST['date'];
		$etat = $_POST['etat'];
		// $fiche = $_POST['nomDuFichier'];
		// $file_path = "fichier/$fiche";
		// read the contents of the file
		// $file_contents = file_get_contents($file_path);
		// if (!empty($file_contents)) {
		// 	$mysqli->query("UPDATE equi SET nom='$nom',module='$module', salle='$salle',date='$date' ,etat='$etat',descriptive='$fiche' WHERE id=$id ") or die($mysqli->error);
		// 	$_SESSION['message'] = "L'élément a été modifié avec succès !";
		// 	$_SESSION['msg_type'] = "warning";
		// 	header("location:index8.php?genre=" . $nom);
		// }
		$mysqli->query("UPDATE equi SET nom='$nom',module='$module', salle='$salle',date='$date' ,etat='$etat' WHERE id=$id ") or die($mysqli->error);
		$_SESSION['message'] = "L'élément a été modifié avec succès !";
		$_SESSION['msg_type'] = "warning";
		header("location:../consulter/index8.php?genre=".$nom);
	} 
	?>
</body>

</html>