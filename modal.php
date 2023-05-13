<!DOCTYPE html>
<html>

<head>
  <title>Mon Modal</title>

  <!-- Inclure le CSS pour le modal -->
  <link rel="stylesheet" href="stylee.css">

  <!-- Inclure le script JavaScript pour le modal -->
  <script src="script.js"></script>

</head>

<body>
  <?php
  // Connexion à la base de données
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }

  // Récupérer le contenu du modal à partir de la base de données
  $id = $row['id'];
  echo $row['id'];
  $sqll = "SELECT * FROM equi WHERE id=$id";
  $resultt = $mysqli->query($sqll);
  echo $row['id'];

  echo $row['id'];

  print_r($resultt);
  $roww = $resultt->fetch_assoc();
  echo "ee";
  print_r($roww);
  echo $roww["id"];
  $content = $roww["descriptive"];
  echo $content;
  // Afficher le bouton pour ouvrir le modal
  echo '<button onclick="openModal('.$id.')">OPEN</button>';
  // Afficher le contenu du modal
  echo '<div id="myModal'.$id.'" class="modal">';
  echo '<div class="modal-content">';
  echo '<span class="close" onclick="closeModal('.$id.')">&times;</span>';
  echo '<p>' . $content . '</p>';
  echo '</div>';
  echo '</div>';
 

  ?>

</body>

</html>