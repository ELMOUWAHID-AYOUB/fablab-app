<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="../../../sanscode/bootstrap-5.3.0-alpha3-dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include_once('../../composent/nav/navsite0.php'); ?>
<div class="container">
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
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
    $url="http://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/mot.php?code=$code";
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
?>

<div class="container" style="font-family:Cursive">
	<div class="row">
		 <div class="col-md-7 form-wrapper" style="margin-left: 20.8333333333%">
			<div class="login-panel panel panel-default">
			    <div class="panel-heading">
				     <h3 class="text-center form-title">Problèmes de connexion ?</h3>
             <p>Entrez votre adresse e-mail et nous vous enverrons un lien pour récupérer votre compte</p>
         </div>
				<div class="panel-body">
				 <form action="" method="post">
				  <fieldset>
                <div class="form-group">
                 <label for="email">Email:</label>
                 <input type="email" id="email" name="email" placeholder="enter email" required>
                </div>
				         <div class="form-group">
                  <button type="submit">Submit</button>
                 </div>
				  </fieldset>
				 </form>
        </div>
      </div>
      </div>
	</div>
</div>
</div>
</body>
</html>