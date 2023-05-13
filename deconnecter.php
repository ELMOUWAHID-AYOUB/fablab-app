<?php
session_start();//
echo $_SESSION['username'];
$_SESSION=array();
session_destroy(); // détruire la session
// rediriger vers la page de connexion
header("location:page.php");
?>