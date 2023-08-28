<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
session_start();
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "equipement";
// Crée une connexion
$conn = new mysqli($servername, $username, $password, $dbname);
// Vérifie la connexion
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// Récupère les données du formulaire
$username = $_POST['username'];
$email = $_POST['email'];
$password = 123456790;
// Vérifie si le nom d'utilisateur ou l'email existe déjà dans la base de données
$sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	   $_SESSION['message'] = "L'élément a été déja existe !";
	   $_SESSION['msg_type'] = "danger";
	   header("location:compte.php");
} else {
	// Insère un nouvel utilisateur dans la base de données
	$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
	if ($conn->query($sql) === TRUE) {
		$_SESSION['message'] = "verifier email !";
		$_SESSION['msg_type'] = "success";
	
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require '../../../sanscode/PHPMailer/src/Exception.php';
require '../../../sanscode/PHPMailer/src/PHPMailer.php';
require '../../../sanscode/PHPMailer/src/SMTP.php';
// Se connecter à la base de données MySQL T: require 'config.php';
$mysqli = new mysqli('localhost', 'root','','equipement') or die(mysqli_error($mysqli));
//Create an instance; passing `true` enables exceptions
if(isset($_POST['email'])){
    $emailTo=$_POST["email"];
    
    $code=uniqid(true);
    $query=mysqli_query($mysqli,"INSERT INTO `mot`(`code`, `email`) VALUES ('$code','$emailTo')");
    if(!$query){
      exit("error");
    }
    $mail = new PHPMailer(true);
     try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'appweb2023ensaj@gmail.com';                     //SMTP username
    $mail->Password   = 'snoynkmhzsawprcd';                               //SMTP password
    $mail->SMTPSecure ='ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('appweb2023ensaj@gmail.com', 'inventaire appweb');
    $mail->addAddress($emailTo);     //Add a recipient

    //Content
    $url="http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/../recuprecompte/mot.php?code=$code";
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'requipèrer le mot de passe';
    $mail->Body    = "clik to link<a href='$url'>restpassword</a>";
    $mail->AltBody = 'clik to link';
    $mail->send();
    echo '<script>
    alert("Cheek your email on a enoyer un lien pour récupérer votre compte");
    </script>';
          }       
    catch (Exception $e) {
      echo '<script>
    alert("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
    </script>';
                         }
                      
}
        header("location:compte.php");
	} else {
		echo "Erreur: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>
