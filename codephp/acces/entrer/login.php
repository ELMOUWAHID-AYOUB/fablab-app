<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="container">
<?php
include("session.php");
$username = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'equipement');
if (isset($_POST['login-btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	// faire quelque chose avec la session
    $_SESSION['username']=$username	; 
		if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
	if (count($errors) == 0) {
		$password = $password;
		$query = "SELECT * FROM users WHERE email='$username' AND password='$password'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['username'] = $username;
			if($username=="appweb2023ensaj@gmail.com"){
				header('location:../../acteur/inventaire/consulter/index.php');
			}
			else if($username=="prof@gmail.com"){
				header('location:../../acteur/prof/consulter/indexp.php');
			}
			else{
				header('location:../../acteur/student/consulter/indexs.php');

			}
		} else {
			array_push($errors, "Wrong username/password combination");
                   echo '<script>
          alert("your passwor or email is incorrect");
          let message = "Cliquez sur OK pour revenir a la page pricipale";
           if (window.confirm(message)) {
          window.location.href ="page.php";
           }
           </script>';
		}
        
	}
}
?>
</div>