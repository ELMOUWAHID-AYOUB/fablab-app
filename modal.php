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
  $sqll = "SELECT * FROM equi WHERE id=$id";
  $resultt = $mysqli->query($sqll);
  $roww = $resultt->fetch_assoc();
  $content =$roww["descriptive"];
  
  // Afficher le bouton pour ouvrir le modal
  echo '<button onclick="openModal('.$id.')">OPEN</button>';
  // Afficher le contenu du modal
  $file_path = "fichier/$content";
  // read the contents of the file
  $file_contents = file_get_contents($file_path);
// output the contents of the file
  echo '<div id="myModal'.$id.'" class="modal">';
  echo '<div class="modal-content">';
  echo '<span class="close" onclick="closeModal('.$id.')">&times;</span>';
  echo '<p>'
    .$file_contents;
  '</p>';
  echo '</div>';
  echo '</div>';
  ?>
</body>

</html>