<html>

<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

     <div class="container">
          <?php
          // Se connecter à la base de données MySQL T: require 'config.php';
          $mysqli = mysqli_connect('localhost', 'root', '', 'equipement') or die(mysqli_error($mysqli));
          if (!isset($_GET["code"])) {
               exit("Can't find page");
          }
          $code = $_GET["code"];
          $getEmailQuery = mysqli_query($mysqli, "SELECT email FROM mot WHERE code='$code' ");
          if (mysqli_num_rows($getEmailQuery) == 0) {
               exit("Can't find page url fini");
          }
          if (isset($_POST["password"])) {
               $pw = $_POST["password"];
               $pwc = $_POST["cpassword"];
               $row = mysqli_fetch_array($getEmailQuery);
               $email = $row["email"];
               $query = mysqli_query($mysqli, "UPDATE `users` SET `password`='$pw' WHERE email='$email'");
               if ($query and $pwc == $pw) {
                    $query = mysqli_query($mysqli, "DELETE FROM `mot` WHERE code='$code' ");
                    echo '<script>
          alert("L mot de passe il est changé");
          let message = "Cliquez sur OK pour revenir a la page pricipale";
           if (window.confirm(message)) {
          window.location.href = "page.php";
           }
           </script>';
                    exit();
               } else {
                    echo '<script>
          alert("tu n as pas enter méme mot de passe or probleme de connexion");
          let message = "Cliquez sur OK pour revenir a la page precedent.";
           if (window.confirm(message)) {
          window.location.href = "";
           }
           </script>';
                    exit();
               }
          }
          ?>
          <div class="container" style="font-family:Cursive">
               <div class="row">
                    <div class="col-md-4 form-wrapper" style="margin-left: 30.33333333%">
                         <div class="login-panel panel panel-default">

                              <div class="panel-heading">
                                   <h3 class="text-center form-title">Nouveau mot de passe</h3>
                              </div>
                              <div class="panel-body">
                                   <form action="" method="post">
                                        <fieldset>
                                             <div class="form-group">
                                                  <div class="form-group">
                                                       <label>NEW PASSWORD:</label>
                                                       <input type="password" name="password" class="form-control form-control-lg" placeholder="entre Mot de passe">
                                                  </div>
                                                  <div class="form-group">
                                                       <label>Confirmer PASSWORD:</label>
                                                       <input type="password" name="cpassword" class="form-control form-control-lg" placeholder="confirmer Mot de passe">
                                                  </div>
                                                  <div class="form-group">
                                                       <input type="submit" name="subnit" value="Update password">
                                                  </div>
                                        </fieldset>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     </div>

     <body>

</html>