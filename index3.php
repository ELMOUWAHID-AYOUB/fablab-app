<!DOCTYPE html>
<html>
<head>
	<title>Application d'inventaire</title>
	<link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include_once('navsite.php'); ?>
	<div class="container">
		<h1>Application d'inventaire</h1>
		<?php require_once 'process.php'; ?>
	<?php if (isset($_SESSION['message'])): ?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>
	<h2>Ajouter un élément à l'inventaire</h2>
	<form action="process.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="form-group">
			<label>nom:</label>
			<input list="browsers" name="nom"  class="form-control" value="<?php echo $nom; ?>" placeholder="Entrez le nom">
          <datalist id="browsers">
          <option value="switch">
             </datalist>
		</div>
		<div class="form-group">
			<label>module :</label>
			<input list="modules" name="module"  class="form-control" value="<?php echo $module; ?>" placeholder="Entrez le module">
          <datalist id="modules">
          <option value="Cisco2960">
          
             </datalist>
		</div>
		<div class="form-group">
			<label>Date :</label>
			<input type="date" name="date" class="form-control" value="<?php echo $date; ?>" placeholder="Entrez la date">
		</div>
		<div class="form-group col-md-6">
			<label>Salle :</label><br>
		     <input type="radio" id="" name="salle" value="A6"  checked>
             <label for="">A6</label><br>
             <input type="radio" id="" name="salle" value="A7" >
             <label for="">A7</label><br>
		</div>
		<div  class="form-group col-md-6">
		   <label>Etat :</label><br>
		     <input type="radio" id="" name="etat" value="En marche " checked>
             <label for="">En marche</label><br>
             <input type="radio" id="" name="etat" value="En pause" >
             <label for="">En pause</label><br>
		</div>
		<div class="form-group">
		<?php if ($update == true): ?>
			<button type="submit" class="btn btn-primary" name="update">Mettre à jour</button>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">Ajouter</button>
		<?php endif ?>
		</div>
	</form>

	<h2>Liste des éléments de l'inventaire</h2>
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
        if (true) {
            $result = $mysqli->query("SELECT * FROM equi where nom='switch' ") or die($mysqli->error);
    
            if ($result->num_rows) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['nom']."</td>";
                    echo "<td>".$row['module']."</td>";
					echo "<td>".$row['salle']."</td>";
					echo "<td>".$row['Date']."</td>";
					echo "<td>".$row['etat']."</td>";
                    echo "<td>
                            <a href='index.php?edit=".$row['id']."' class='btn btn-info'>Modifier</a>
                            <a href='process.php?delete=".$row['id']."' class='btn btn-danger'>Supprimer</a>
                        </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Aucun résultat trouvé.</td></tr>";
            }
        }
    ?>
    <?php //endwhile; ?>
		</tbody>
	</table>
</div>
</body>
</html>