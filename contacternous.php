<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="bootstrap-5.3.0-alpha3-dist\css\bootstrap.min.css"  rel="stylesheet">
    <title>Contactez-nous</title>
</head>
<body>
    <?php include_once('navsite0.php'); ?>
<section class="container mt-5">
  <h2>Contactez-nous</h2>
<form action="" method="post">
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="subject">Sujet</label>
        <input type="text" class="form-control" id="subject" name="subject" required>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
</form>
</section>
<?php
// Inclure la bibliothèque PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit'])) {
    $to = "elmouwahid2001@gmail.com"; // Entrez votre adresse e-mail ici
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    $body = "<p><strong>Nom:</strong> " . $name . "</p>";
    $body .= "<p><strong>Email:</strong> " . $email . "</p>";
    $body .= "<p><strong>Sujet:</strong> " . $subject . "</p>";
    $body .= "<p><strong>Message:</strong> " . nl2br($message) . "</p>";
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

// Se connecter à la base de données MySQL T: require 'config.php';
//Create an instance; passing `true` enables exceptions
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Créer une nouvelle instance de PHPMailer
$mail = new PHPMailer;
//Server settings
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'appweb2023ensaj@gmail.com';                     //SMTP username
$mail->Password   = 'snoynkmhzsawprcd';                               //SMTP password
$mail->SMTPSecure ='ssl';            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

// Configurer les informations de l'expéditeur et du destinataire
$mail->setFrom('appweb2023ensaj@gmail.com', 'inventaire appweb');
$mail->addAddress($email);     //Add a recipient
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $subject;
$mail->Body    = "message:".$message;
$mail->AltBody = 'clik to link';
$mail->send();
// Envoyer l'e-mail
if(!$mail->send()) {
    echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
} else {
    echo 'E-mail envoyé avec succès !';
}
}
?>
</body>
</html>