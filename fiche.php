<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Page avec une image et un texte</title>
  <!-- Liaison du CSS de Bootstrap -->
  <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist\css\bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<?php include_once('navsite.php'); ?>
    <div class="container">
<div style=""><img src="image/connectiques.jpG" alt="connecteur" width=300px  height=250px></div>
<?php
        $id=$_GET['id'];
    $mysqli = new mysqli('localhost', 'root','','equipement') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM equi where id=$id ") or die($mysqli->error);
    $row = $result->fetch_assoc();
    echo "<table class=table >";
            echo "<tr>";
            echo "<td>".$row['nom']."</td>";
            echo "<td>".$row['module']."</td>";
            echo "<td>".$row['salle']."</td>";
            echo "<td>".$row['Date']."</td>";
            echo "<td>".$row['etat']."</td>";
            echo "</tr>";
            echo "</table>";
?>
    <p>
 Nom de l'équipement: <?php echo $row['nom']?><br>
Type de connecteur: <?php echo $row['module']?><br>
Salle: <?php echo $row['salle']?><br>
Date de dépôt: <?php echo $row['Date']?><br>
Etat: <?php echo $row['etat']?><br>
Le câble <?php echo $row['module']?> est un équipement de réseau standard utilisé pour connecter des équipements réseau tels que des ordinateurs, des switches et des routeurs. 
Le câble est installé dans la salle <?php echo $row['salle']?>, où il est utilisé pour connecter des ordinateurs et des périphériques réseau. 
Il a été déployé le <?php echo $row['Date']?> et est actuellement <?php echo $row['etat']?>.
    </p>
</div>
</body>
</html>