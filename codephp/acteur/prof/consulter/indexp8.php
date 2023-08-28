<!DOCTYPE html>
<html>
<head>
	<title>Application d'inventaire</title>
	<link rel="stylesheet" href="../../../../sanscode/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../../sansphp/style/style.css">
</head>
<body style="background-color: #CCCCCC">
<?php
 include("../../../acces/entrer/session.php"); 
// include("../session.php");
 include_once('../../../composent/nav/navsitep.php'); ?>
	<div class="container">
		<?php require_once '../../inventaire/gerer_equipement/process.php'; ?>
		<?php $genre=$_GET['genre'];?>
	<?php if (isset($_SESSION['message'])): ?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>
	<div style=""><img src="../..../../../../../sanscode/image/<?php echo$genre ?>.jpG" alt="<?php echo $genre ?>" width=300px  height=250px></div>
        </div>
    </div>
	<div class="container">
	<table class="table">
		<thead>
			<tr>
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
            $result = $mysqli->query("SELECT * FROM equi where nom='$genre' ") or die($mysqli->error);
            if ($result->num_rows) {
                while ($row = $result->fetch_assoc()) {
					$id=$row['id'];
                    echo "<tr>";
                    echo "<td>".$row['module']."</td>";
					echo "<td>".$row['salle']."</td>";
					echo "<td>".$row['Date']."</td>";
					echo "<td>".$row['etat']."</td>";
					echo "<td>";
					include('../../../composent/modal/modal.php');
					echo "</td>";
                }
            } else {
                echo "<tr><td colspan='5'>Aucun résultat trouvé.</td></tr>";
            }
        }
    ?>
    <?php //endwhile; ?>
	</div>
		</tbody>
	</table>
</div>
</body>
</html>