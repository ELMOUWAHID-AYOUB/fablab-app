<!DOCTYPE html>
<html>
<?php
session_start();
error_reporting(0);
if(empty($_SESSION['username'])){
    header('location: page.php');
} ?>
<head>
	<title>Application d'inventaire</title>
	<link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #CCCCCC">
<?php include_once('./NAV/navsites.php'); ?>
	<div class="container">
		<?php require_once 'process.php'; ?>
		<?php $genre=$_GET['genre']; ?>
	<?php if (isset($_SESSION['message'])): ?>
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
	<?php endif ?>
	<div style=""><img src="image/<?php echo $genre ?>.jpG" alt="<?php echo $genre ?>" width=300px  height=250px></div>

        </div>
    </div>
	<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Nom</th>
				<th>module</th>
				<th>salle</th>
				<th>Date</th>
				<th>etat</th>
				<th>Savoir</th>
			</tr>
		</thead>
		<tbody>
        <?php 
		
          $index='index8';
        if (true) {
            $result = $mysqli->query("SELECT * FROM equi where nom='$genre' ") or die($mysqli->error);
            if ($result->num_rows) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['nom']."</td>";
                    echo "<td>".$row['module']."</td>";
					echo "<td>".$row['salle']."</td>";
					echo "<td>".$row['Date']."</td>";
					echo "<td>".$row['etat']."</td>";
					echo "<td>";
					include('modal.php');
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