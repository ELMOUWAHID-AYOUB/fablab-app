<?PHP 
$mysqli = new mysqli('localhost', 'root','','equipement') or die(mysqli_error($mysqli));
	$id = 0;
	$update = false;
	$nom= '';
	$module= '';
	$salle= 'vide';
	$etat= '';
	$date='';
	$index='index';
	$id = $_GET['delete'];
	$genre= $_GET['genre'];
	$mysqli->query("DELETE FROM equi WHERE id=$id") or die($mysqli->error);
	$_SESSION['message'] = "L'élément a été supprimé avec succès !";
	$_SESSION['msg_type'] = "danger";
	echo "bien";
	 header("Location:index8.php?genre=$genre");
	?>