<!DOCTYPE html>
<html>

<head>
	<title>Application d'inventaire</title>
	<link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylVe.css">
</head>

<body>
	<?php
	include_once('navsite.php'); ?>
	<div class="container">
		<?php require_once 'process.php'; ?>
		<?php if (isset($_SESSION['message'])) : ?>
			<div class="alert alert-<?= $_SESSION['msg_type'] ?>">
				<?php
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				?>
			</div>
		<?php endif ?>
		<h2 class="text text-success">Ajouter un connecteur à l'inventaire:</h2>
		<div style=""><img src="image/connectiques.jpG" alt="connecteur" width=300px height=250px></div>
		<form action="process.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<input list="browsers" type="hidden" name="nom" class="form-control" placeholder="Entrez le nom" value="connecteur">
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
					<div class="row">
						<div class="form-group col-md-12">
							<input type="file" name="nomDuFichier" value="<?php echo $fiche; ?>" accept=".csv, .txt, .xlsx">
						</div>
					</div>
		</form>
	</div>
	</div>
	<h2>Liste des connecteur de l'inventaire</h2>
	<table class="table">
		<thead>
			<tr>
				<th>Nom</th>
				<th>module</th>
				<th>salle</th>
				<th>Date</th>
				<th>etat</th>

				<th>Action</th>

			</tr>
		</thead>
		<tbody>

			<?php
			$index = 'index8';
			if (true) {
				$result = $mysqli->query("SELECT * FROM equi where nom='connecteur' ") or die($mysqli->error);

				if ($result->num_rows) {
					while ($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>" . $row['nom'] . "</td>";
						echo "<td>" . $row['module'] . "</td>";
						echo "<td>" . $row['salle'] . "</td>";
						echo "<td>" . $row['Date'] . "</td>";
						echo "<td>" . $row['etat'] . "</td>";
						echo "<td>
                            <a href='index8.php?edit=" . $row['id'] . "&index=" . $index . "' class='btn btn-info'>Modifier</a>
                            <a href='process.php?delete=" . $row['id'] . "' class='btn btn-danger'>Supprimer</a>
                        </td>";
						
						echo "<td>";
						echo "==" . $row['id'];
						include('modal.php');
						echo "==" . $row['id'];
						echo "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='5'>Aucun résultat trouvé.</td></tr>";
				}
			}
			?>
			<?php //endwhile; 
			?>
		</tbody>
	</table>
	</div>
</body>

</html>