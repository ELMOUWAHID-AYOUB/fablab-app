<!DOCTYPE html>
<html>
<head>
	<title>Application d'inventaire</title>
	<link rel="stylesheet" href="../../../../sanscode/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../../sansphp/style/style.css">
</head>

<body style="background-color:#97B2DE">
	<?php
	include_once('../../../composent/nav/navsitei.php'); ?>
	<div class="container">
		<?php require_once '../gerer_equipement/process.php'; ?>
		<?php $genre = $_GET['genre']; ?>
		<?php if (isset($_SESSION['message'])) : ?>
			<div class="alert alert-<?= $_SESSION['msg_type'] ?>">
				<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				?>
			</div>
		<?php endif ?>
		<form action="../gerer_equipement/process.php" method="POST">
			<div id="image" class="row">
				<div class="form-group col-md-6">
					<br>
					<div><img src="../../../../sanscode/image/<?php echo $genre; ?>.jpg" alt="<?php echo $genre; ?>" class="genre-image">
					</div>
				</div>
				<div class="form-group col-md-6">
					<br><br><br><br><br><br>
					<input type="file" name="nomDuFichier" accept=".csv, .txt, .xlsx" value="vide" class="margin">
				</div>
			</div>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<input list="browsers" type="hidden" name="nom" class="form-control" placeholder="Entrez le nom" value="<?php echo $genre ?>">
				<datalist id="browsers">
					<option value="connectiques">
				</datalist>
			</div>
			<div class="form-group">
				<input type="hidden" name="index" value="index8">

			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>module :</label>
						<input list="modules" name="module" class="form-control" value="<?php echo $module; ?>" placeholder="Entrez le module" required>
						<datalist id="modules">
							<option value="RJ45">
							<option value="SERIAL">
							<option value="HP">
							<option value="CISCO3560">
							<option value="CISCO2456">
							<option value="Serveur dell">
							<option value="LENOVO">
							<option value="ETHERNET">
							<option value="ISDN">
							<option value="SERIAL">
						</datalist>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Date :</label>
						<input type="date" name="date" class="form-control" value="<?php echo $date; ?>" placeholder="Entrez la date" required>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label>Salle :</label><br>
						<input type="radio" id="" name="salle" value="A6" <?php if ($salle == "A6") echo "checked"; ?>>
						<label for="">A6</label><br>
						<input type="radio" id="" name="salle" value="A7" <?php if ($salle == "A7") echo "checked"; ?>>
						<label for="">A7</label><br>
					</div>
					<div class="form-group col-md-4">
						<label>Etat :</label><br>
						<input type="radio" id="" name="etat" value="En marche" <?php if ($etat == "En marche") echo "checked"; ?>>
						<label for="">En marche</label><br>
						<input type="radio" id="" name="etat" value="En pane" <?php if ($etat == "En pane") echo "checked"; ?>>
						<label for="">En pane</label><br>
					</div>
					<div class="form-group col-md-4">
						<?php if ($update == true) : ?>
							<button type="submit" class="btn btn-primary" name="update">Mettre à jour</button>
						<?php else : ?>
							<button type="submit" class="btn btn-primary" name="save">Ajouter</button>
						<?php endif ?>
					</div>
		</form>
	</div>
	</div>
	<h2>Table des <?php echo $genre ?>s: </h2>
	<table class="table">
		<thead>
			<tr>
				<th>NOM</th>
				<th>MODULE</th>
				<th>SALLE</th>
				<th>DATE</th>
				<th>ETAT</th>
				<th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspACTION</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$index = 'index8';
			// echo $index;
			if (true) {
				$result = $mysqli->query("SELECT * FROM equi where nom='$genre' ") or die($mysqli->error);

				if ($result->num_rows) {
					while ($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row['nom'] . "</td>";
						echo "<td>" . $row['module'] . "</td>";
						echo "<td>" . $row['salle'] . "</td>";
						echo "<td>" . $row['Date'] . "</td>";
						echo "<td>" . $row['etat'] . "</td>";
						echo "<td>
                            <a href='index8.php?genre=$genre&edit=" . $row['id'] . "&index=" . $index . "' class='btn btn-info'>Modifier</a>
                            <a href='../gerer_equipement/process.php?genre=$genre&zdelete=" . $row['id'] . "' class='btn btn-danger'>Supprimer</a>
                        </td>";
						echo "</tr>";
						echo "<td>";
						include('../../../composent/modal/modal.php');
						echo "</td>";
					}
				} else {
					echo "<tr><td colspan='5'>Aucun résultat trouvé.</td></tr>";
				}
			}
			// $idd = $_GET['d'];
			if (!empty($idd)) {

				echo '<script>
				window.onload = function() {
			// notre code JavaScript
		  let message = "Attention! Est ce que vraiment voulez-vous supprimer cette equipement?";
		 if (window.confirm(message)) {
		window.location.href = "suppequip.php?genre=' . $genre . '&delete=' . $id . '";
		 }
		 else{
			window.location.href = "index8.php?genre=' . $genre . '";
		 }
		};
		 </script>';
			}
			?>
			<?php //endwhile; 
			?>
		</tbody>
	</table>
	</div>
</body>

</html>